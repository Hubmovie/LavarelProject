<?php

namespace Botble\Ecommerce\Http\Controllers;

use Assets;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Ecommerce\Enums\ShippingCodStatusEnum;
use Botble\Ecommerce\Enums\ShippingStatusEnum;
use Botble\Ecommerce\Repositories\Interfaces\OrderHistoryInterface;
use Botble\Ecommerce\Repositories\Interfaces\OrderInterface;
use Botble\Ecommerce\Repositories\Interfaces\ShipmentHistoryInterface;
use Botble\Ecommerce\Repositories\Interfaces\ShipmentInterface;
use Botble\Ecommerce\Tables\ShipmentTable;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OrderHelper;
use Throwable;

class ShipmentController extends BaseController
{
    protected OrderInterface $orderRepository;

    protected ShipmentInterface $shipmentRepository;

    protected OrderHistoryInterface $orderHistoryRepository;

    protected ShipmentHistoryInterface $shipmentHistoryRepository;

    public function __construct(
        OrderInterface $orderRepository,
        ShipmentInterface $shipmentRepository,
        OrderHistoryInterface $orderHistoryRepository,
        ShipmentHistoryInterface $shipmentHistoryRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->shipmentRepository = $shipmentRepository;
        $this->orderHistoryRepository = $orderHistoryRepository;
        $this->shipmentHistoryRepository = $shipmentHistoryRepository;
    }

    /**
     * @param ShipmentTable $dataTable
     * @return View|JsonResponse
     *
     * @throws Throwable
     */
    public function index(ShipmentTable $dataTable)
    {
        page_title()->setTitle(trans('plugins/ecommerce::shipping.shipments'));

        return $dataTable->renderTable();
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function edit($id)
    {
        Assets::addStylesDirectly('vendor/core/plugins/ecommerce/css/ecommerce.css')
            ->addScriptsDirectly('vendor/core/plugins/ecommerce/js/shipment.js');

        $shipment = $this->shipmentRepository->findOrFail($id);
        page_title()->setTitle(trans('plugins/ecommerce::shipping.edit_shipping', ['code' => get_shipment_code($id)]));

        return view('plugins/ecommerce::shipments.edit', compact('shipment'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function postUpdateStatus($id, Request $request, BaseHttpResponse $response)
    {
        $shipment = $this->shipmentRepository->findOrFail($id);
        $this->shipmentRepository->createOrUpdate(['status' => $request->input('status')], compact('id'));

        $this->shipmentHistoryRepository->createOrUpdate([
            'action' => 'update_status',
            'description' => trans('plugins/ecommerce::shipping.changed_shipping_status', [
                'status' => ShippingStatusEnum::getLabel($request->input('status')),
            ]),
            'shipment_id' => $id,
            'order_id' => $shipment->order_id,
            'user_id' => Auth::id() ?? 0,
        ]);

        switch ($request->input('status')) {
            case ShippingStatusEnum::DELIVERED:
                $shipment->date_shipped = Carbon::now();
                $shipment->save();

                OrderHelper::shippingStatusDelivered($shipment, $request, Auth::id() ?? 0);

                break;

            case ShippingStatusEnum::CANCELED:
                $this->orderHistoryRepository->createOrUpdate([
                    'action' => 'cancel_shipment',
                    'description' => trans('plugins/ecommerce::shipping.shipping_canceled_by'),
                    'order_id' => $shipment->order_id,
                    'user_id' => Auth::id(),
                ]);

                break;
        }

        return $response->setMessage(trans('plugins/ecommerce::shipping.update_shipping_status_success'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function postUpdateCodStatus($id, Request $request, BaseHttpResponse $response)
    {
        $shipment = $this->shipmentRepository->findOrFail($id);

        $this->shipmentRepository->createOrUpdate(['cod_status' => $request->input('status')], compact('id'));

        if ($request->input('status') == ShippingCodStatusEnum::COMPLETED) {
            OrderHelper::confirmPayment($shipment->order);
        }

        $this->shipmentHistoryRepository->createOrUpdate([
            'action' => 'update_cod_status',
            'description' => trans('plugins/ecommerce::shipping.updated_cod_status_by', [
                'status' => ShippingCodStatusEnum::getLabel($request->input('status')),
            ]),
            'shipment_id' => $id,
            'order_id' => $shipment->order_id,
            'user_id' => Auth::id() ?? 0,
        ]);

        return $response->setMessage(trans('plugins/ecommerce::shipping.update_cod_status_success'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, Request $request, BaseHttpResponse $response)
    {
        $shipment = $this->shipmentRepository->findOrFail($id);

        $shipment->fill(
            $request->only([
                'tracking_id',
                'shipping_company_name',
                'tracking_link',
                'estimate_date_shipped',
                'note',
            ])
        );

        $this->shipmentRepository->createOrUpdate($shipment);

        return $response
            ->setPreviousUrl(route('ecommerce.shipments.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy($id, BaseHttpResponse $response)
    {
        try {
            $review = $this->shipmentRepository->findOrFail($id);
            $this->shipmentRepository->delete($review);

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $review = $this->shipmentRepository->findOrFail($id);
            $this->shipmentRepository->delete($review);
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
