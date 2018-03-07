<?php

namespace gorriecoe\GTM\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

/**
 * Adds a google tag manager tab to object
 *
 * @package silverstripe-gtm
 */
class GTMConfig extends DataExtension
{
    /**
     * Database fields
     * @var array
     */
    private static $db = array(
        'GoogleTagManager' => 'Varchar(20)'
    );

    /**
     * Update Fields
     * @return FieldList
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab(
            'Root.Main',
            array(
                TextField::create(
                    'GoogleTagManager',
                    _t(__CLASS__ . '.ID', 'Tag manager ID')
                )
                ->setAttribute(
                    "placeholder",
                    "GTM-******"
                ),
            )
        );
        return $fields;
    }
}
