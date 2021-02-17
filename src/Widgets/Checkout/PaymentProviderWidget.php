<?php

namespace Ceres\Widgets\Checkout;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

/**
 * Class PaymentProviderWidget
 *
 * Widget class to provide data and settings for the payment provider widget.
 *
 * @package Ceres\Widgets\Checkout
 */
class PaymentProviderWidget extends BaseWidget
{
    /** @inheritDoc */
    protected $template = "Ceres::Widgets.Checkout.PaymentProviderWidget";
    
    /**
     * @inheritDoc
     */
    public function getData()
    {
        return WidgetDataFactory::make("Ceres::PaymentProviderWidget")
            ->withLabel("Widget.paymentProviderLabel")
            ->withPreviewImageUrl("/images/widgets/payment-select.svg")
            ->withType(WidgetTypes::CHECKOUT)
            ->withCategory(WidgetCategories::CHECKOUT)
            ->withPosition(200)
            ->withMaxPerPage(1)
            ->toArray();
    }
    
    /**
     * @inheritDoc
     */
    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settings */
        $settings = pluginApp(WidgetSettingsFactory::class);

        $settings->createCustomClass();
        $settings->createAppearance();
        $settings->createSpacing();

        return $settings->toArray();
    }
}
