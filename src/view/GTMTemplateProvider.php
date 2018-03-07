<?php

namespace gorriecoe\GTM\View;

use SilverStripe\View\TemplateGlobalProvider;
use SilverStripe\View\ArrayData;
use SilverStripe\SiteConfig\SiteConfig;

/**
 * Adds tag methods to templates
 *
 * @package silverstripe-gtm
 */
class GTMTemplateProvider implements TemplateGlobalProvider
{
    /**
     * @return array|void
     */
    public static function get_template_global_variables()
    {
        return [
            'GTMscript' => 'GTMscript',
            'GTMnoscript' => 'GTMnoscript'
        ];
    }

    /**
     * @return HTML|null
     */
    public static function GTMscript()
    {
        if ($gtm = SiteConfig::current_site_config()->GoogleTagManager) {
            return ArrayData::create([
                'GTM' => $gtm
            ])->renderWith('GTMscript');
        }
    }

    /**
     * @return HTML|null
     */
    public static function GTMnoscript()
    {
        if ($gtm = SiteConfig::current_site_config()->GoogleTagManager) {
            return ArrayData::create([
                'GTM' => $gtm
            ])->renderWith('GTMnoscript');
        }
    }
}
