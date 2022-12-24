<table class="table table-striped mt-2 table-shipping-rule-{{ $rule->id }}">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{ trans('plugins/ecommerce::shipping.rule.item.tables.state') }}</th>
            <th scope="col">{{ trans('plugins/ecommerce::shipping.rule.item.tables.city') }}</th>
            <th scope="col">{{ trans('plugins/ecommerce::shipping.rule.item.tables.zip_code') }}</th>
            <th scope="col">{{ trans('plugins/ecommerce::shipping.rule.item.tables.adjustment_price') }}</th>
            <th scope="col">{{ trans('plugins/ecommerce::shipping.rule.item.tables.is_enabled') }}</th>
            <th scope="col">{{ trans('core/base::tables.created_at') }}</th>
            @if (Auth::user()->hasAnyPermission(['ecommerce.shipping-rule-items.edit', 'ecommerce.shipping-rule-items.destroy']))
                <th scope="col" class="text-center">{{ trans('core/base::tables.operations') }}</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($rule->items as $item)
            @include('plugins/ecommerce::shipping.items.table-item')
        @endforeach
    </tbody>
</table>
