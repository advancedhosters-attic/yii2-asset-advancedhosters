<?php

/*
 * AdvancedHosters asset files: images, configs and more
 *
 * @link      https://github.com/advancedhosters/yii2-asset-advancedhosters
 * @package   yii2-asset-advancedhosters
 * @license   proprietary
 * @copyright Copyright (c) 2015-2016, AdvancedHosters (https://advancedhosters.com/)
 */

$supportEmail = 'support@advancedhosters.com';

return [
    'favicon.ico'       => '@advancedhosters/assets/advancedhosters/assets/images/favicon.ico',

    'organization.name' => 'AdvancedHosters',
    'organization.url'  => 'https://advancedhosters.com/',

    'supportEmail'      => $supportEmail,
    'adminEmail'        => $supportEmail,
    'abuseEmail'        => 'abuse@advancedhosters.com',
    'salesEmail'        => 'contact.sales@advancedhosters.com',

    'copyright.year'    => 2002,

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/advancedhosters',
        'facebook'  => 'https://www.facebook.com/AdvancedHosters/',
    ],

    'legals.privacyPolicyUrl' => 'https://advancedhosting.com/en/documents/privacyPolicy',
];
