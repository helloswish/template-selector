<?php
/**
 * Template Selector plugin for Craft CMS 3.x
 *
 * A fieldtype that allows you to select a template from a dropdown.
 *
 * @link      https://swishdigital.co
 * @copyright Copyright (c) 2022 Swish Digital
 */

namespace swishdigital\templateselector\services;

use swishdigital\templateselector\TemplateSelector;

use Craft;
use craft\base\Component;
use craft\helpers\App;

/**
 * TemplateSelectorService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Swish Digital
 * @package   TemplateSelector
 * @since     1.0.0
 */
class TemplateSelectorService extends Component
{

    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     TemplateSelector::$plugin->templateSelectorService->getSubfolder($fieldHandle)
     *
     * @param null $fieldHandle
     * @return mixed
     */
    public function getSubfolder($fieldHandle = null)
    {
        if(!$fieldHandle) return null;

        $field = Craft::$app->getFields()->getFieldByHandle($fieldHandle) ?? null;
        if(!$field) return null;

        $fieldSettings = $field->getSettings();

        return App::parseEnv($fieldSettings['limitToSubfolder']);

    }
}
