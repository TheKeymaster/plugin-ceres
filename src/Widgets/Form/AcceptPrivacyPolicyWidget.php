<?php

namespace Ceres\Widgets\Form;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

/**
 * Class AcceptPrivacyPolicyWidget
 *
 * Widget class to provide data and settings for the accept privacy policy widget.
 *
 * @package Ceres\Widgets\Form
 */
class AcceptPrivacyPolicyWidget extends BaseWidget
{
    /** @inheritDoc */
    protected $template = "Ceres::Widgets.Form.AcceptPrivacyPolicyWidget";
    
    /**
     * @inheritDoc
     */
    public function getData()
    {
        return WidgetDataFactory::make("Ceres::AcceptPrivacyPolicyWidget")
            ->withLabel("Widget.acceptPrivacyPolicyLabel")
            ->withPreviewImageUrl("/images/widgets/accept-privacy-policy.svg")
            ->withType(WidgetTypes::FORM)
            ->withCategory(WidgetCategories::FORM)
            ->withPosition(600)
            ->toArray();
    }
    
    /**
     * @inheritDoc
     */
    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settingsFactory */
        $settingsFactory = pluginApp(WidgetSettingsFactory::class);

        $settingsFactory->createCustomClass();
        $settingsFactory->createSpacing();

        return $settingsFactory->toArray();
    }
}
