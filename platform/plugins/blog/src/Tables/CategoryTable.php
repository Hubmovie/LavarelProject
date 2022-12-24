<?php

namespace Botble\Blog\Tables;

use BaseHelper;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Blog\Repositories\Interfaces\CategoryInterface;
use Botble\Table\Abstracts\TableAbstract;
use Html;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class CategoryTable extends TableAbstract
{
    protected $hasActions = true;

    protected $useDefaultSorting = false;

    protected $hasFilter = true;

    public function __construct(DataTables $table, UrlGenerator $urlGenerator, CategoryInterface $categoryRepository)
    {
        parent::__construct($table, $urlGenerator);

        $this->repository = $categoryRepository;

        if (! Auth::user()->hasAnyPermission(['categories.edit', 'categories.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    public function ajax(): JsonResponse
    {
        $data = $this->table
            ->of($this->query())
            ->editColumn('name', function ($item) {
                if (! Auth::user()->hasPermission('categories.edit')) {
                    return BaseHelper::clean($item->name);
                }

                return Html::link(route('categories.edit', $item->id), $item->indent_text . ' ' . BaseHelper::clean($item->name));
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->editColumn('updated_at', function ($item) {
                return BaseHelper::formatDate($item->updated_at);
            })
            ->editColumn('status', function ($item) {
                if ($this->request()->input('action') === 'excel') {
                    return $item->status->getValue();
                }

                return BaseHelper::clean($item->status->toHtml());
            })
            ->addColumn('operations', function ($item) {
                return view('plugins/blog::categories.actions', compact('item'))->render();
            });

        return $this->toJson($data);
    }

    public function query()
    {
        return collect(get_categories(['indent' => '↳']));
    }

    public function columns(): array
    {
        return [
            'id' => [
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'title' => trans('core/base::tables.name'),
                'class' => 'text-start',
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'updated_at' => [
                'title' => trans('core/base::tables.updated_at'),
                'width' => '100px',
            ],
            'status' => [
                'title' => trans('core/base::tables.status'),
                'width' => '100px',
            ],
        ];
    }

    public function buttons(): array
    {
        return $this->addCreateButton(route('categories.create'), 'categories.create');
    }

    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('categories.deletes'), 'categories.destroy', parent::bulkActions());
    }

    public function getBulkChanges(): array
    {
        return [
            'name' => [
                'title' => trans('core/base::tables.name'),
                'type' => 'text',
                'validate' => 'required|max:120',
            ],
            'status' => [
                'title' => trans('core/base::tables.status'),
                'type' => 'customSelect',
                'choices' => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type' => 'date',
            ],
        ];
    }
}
