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
    'organizationName'  => 'AdvancedHosters',
    'organizationUrl'   => 'https://advancedhosters.com/',
    'supportEmail'      => $supportEmail,
    'adminEmail'        => $supportEmail,
    'abuseEmail'        => 'abuse@advancedhosters.com',
    'salesEmail'        => 'contact.sales@advancedhosters.com',

    'copyrightYear'     => 2002,

    'favicon.ico'       => '@advancedhosters/assets/advancedhosters/assets/images/favicon.ico',

    'socialLinks'       => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/advancedhosters',
        'facebook'  => 'https://www.facebook.com/AdvancedHosters/',
    ],
];
