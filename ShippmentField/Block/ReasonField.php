<?php
/**
 *  * @author Eng.Asma Hawari
 *  * @package CodaTrip_ShippmentField
 */

namespace CodaTrip\ShippmentField\Block;


class ReasonField extends \Magento\Framework\View\Element\Template
{

    protected $orderRepository;

    /**
     * ReasonField constructor.
     * @param \Magento\Sales\Model\OrderRepository $orderRepository
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Sales\Model\OrderRepository $orderRepository)
    {
        parent::__construct($context);
        $this->orderRepository = $orderRepository;
    }

    /**
     * @return mixed
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getReason()
    {
        $order_id = $this->getRequest()->getParam('order_id');
        $order = $this->orderRepository->get($order_id);
        $reason = $order->getReason();

        return $order->getReason(); // your reward point
    }
}