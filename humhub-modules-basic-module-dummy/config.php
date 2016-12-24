<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
use humhub\widgets\TopMenu;

return [
    'id' => 'dummy',
    'class' => 'humhub\modules\dummy\Module',
    'namespace' => 'humhub\modules\dummy',
    'events' => array(
        array(
            'class' => TopMenu::className(),
            'event' => TopMenu::EVENT_INIT,
            'callback' => array(
                'humhub\modules\dummy\Events',
                'onTopMenuInit'
            )
        )
    )
];
?>