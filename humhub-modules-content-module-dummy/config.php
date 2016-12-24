<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
use humhub\modules\space\widgets\Menu;
use humhub\modules\user\widgets\ProfileMenu;

return [
    'id' => 'contentmoduledummy',
    'class' => 'humhub\modules\contentmoduledummy\Module',
    'namespace' => 'humhub\modules\contentmoduledummy',
    'events' => array(
        array(
            'class' => Menu::className(),
            'event' => Menu::EVENT_INIT,
            'callback' => array(
                'humhub\modules\contentmoduledummy\Events',
                'onSpaceMenuInit'
            )
        ),
        array(
            'class' => ProfileMenu::className(),
            'event' => ProfileMenu::EVENT_INIT,
            'callback' => array(
                'humhub\modules\contentmoduledummy\Events',
                'onProfileMenuInit'
            )
        )
    )
];
?>