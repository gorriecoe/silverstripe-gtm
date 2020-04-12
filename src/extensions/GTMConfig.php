<?php

namespace gorriecoe\GTM\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\LiteralField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Core\Environment;

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
        // IF GTM is defined in .env don't allow editing here
        // This is usefull for uat environments etc.
        if ($gtm = Environment::getEnv('GTM_ID')) {
            $fields->addFieldsToTab(
                'Root.Main',
                [
                    LiteralField::create(
                        'GoogleTagManager',
                        _t(__CLASS__ . '.IDEQUALS', 'The current tag manager ID is {GTM_ID}', [
                            'GTM_ID' => $gtm
                        ])
                    )
                ]
            );
        } else {
            $fields->addFieldsToTab(
                'Root.Main',
                [
                    TextField::create(
                        'GoogleTagManager',
                        _t(__CLASS__ . '.ID', 'Tag manager ID')
                    )
                    ->setAttribute(
                        "placeholder",
                        "GTM-******"
                    )
                ]
            );
        }
        return $fields;
    }


}
