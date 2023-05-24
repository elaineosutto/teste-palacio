<?php
namespace Vendor\CheckoutCustomField\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\App\RequestInterface;
use Magento\Checkout\Model\Session as CheckoutSession;
use Vendor\CheckoutCustomField\Model\CustomFieldFactory;

class SaveCustomFieldObserver implements ObserverInterface
{
    protected $request;
    protected $checkoutSession;
    protected $customFieldFactory;

    public function __construct(
        RequestInterface $request,
        CheckoutSession $checkoutSession,
        CustomFieldFactory $customFieldFactory
    ) {
        $this->request = $request;
        $this->checkoutSession = $checkoutSession;
        $this->customFieldFactory = $customFieldFactory;
    }

    public function execute(Observer $observer)
    {
        $quote = $this->checkoutSession->getQuote();
        $customFieldValue = $this->request->getParam('custom_field');

        if (!empty($customFieldValue)) {
            $customFieldModel = $this->customFieldFactory->create();
            $customFieldModel->setQuoteId($quote->getId());
            $customFieldModel->setCustomFieldValue($customFieldValue);
            $customFieldModel->save();
        }
    }
}
