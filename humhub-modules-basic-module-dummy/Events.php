<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\dummy;

use Yii;

/**
 * Dummy module event handling.
 *
 * @author Sebastian Stumpf
 */
class Events extends \yii\base\Object
{

    /**
     * On build of the TopMenu, check if module is enabled
     * When enabled add a menu item
     *
     * @param type $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => Yii::t('DirectoryModule.base', 'Basic Dummy Module'),
            'id' => 'dummy',
            'icon' => '<i class="fa fa-thumbs-o-up"></i>',
            'url' => \yii\helpers\Url::to(['/dummy/dummy']),
            'sortOrder' => 400,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'dummy'),
        ));
    }
}
