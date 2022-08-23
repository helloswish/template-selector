<?php
/**
 * Template Selector plugin for Craft CMS 3.x
 *
 * A fieldtype that allows you to select a template from a dropdown.
 *
 * @link      https://swishdigital.co
 * @copyright Copyright (c) 2022 Swish Digital
 */

namespace swishdigital\templateselector\variables;

use swishdigital\templateselector\TemplateSelector;

use Craft;

/**
 * Template Selector Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.templateSelector }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Swish Digital
 * @package   TemplateSelector
 * @since     1.0.0
 */
class TemplateSelectorVariable
{

    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.templateSelector.subfolder('fieldHandle') }}
     *
     * @param null $fieldHandle
     * @return string
     */
    public function subfolder($fieldHandle = null)
    {
        if(!$fieldHandle) return '';
        return TemplateSelector::$plugin->templateSelectorService->getSubfolder($fieldHandle);
    }
}
