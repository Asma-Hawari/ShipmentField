<?php
/**
 *  * @author Eng.Asma Hawari
 *  * @package CodaTrip_ShippmentField
 */
namespace CodaTrip\ShippmentField\Observer;

use Magento\Framework\App\RequestInterface;

class SetOrderAttribute implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var RequestInterface
     */
    private $request;

    public function __construct(RequestInterface $request )
    {
        $this->request = $request;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /** @var \Magento\Sales\Model\Order $order */
        $order = $observer->getEvent()->getOrder();

        $order->setReason($this->request->getParam('reason'));
        return $this;
    }
}