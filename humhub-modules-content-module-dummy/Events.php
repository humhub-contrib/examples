<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\contentmoduledummy;

use Yii;

/**
 * Dummy module event handling.
 *
 * @author Sebastian Stumpf
 */
class Events extends \yii\base\Object
{

    public static function onSpaceMenuInit($event)
    {
        if ($event->sender->space !== null && $event->sender->space->isModuleEnabled('contentmoduledummy') && $event->sender->space->isMember()) {
            $event->sender->addItem(array(
                'label' => Yii::t('CfilesModule.base', 'Content Module Dummy'),
                'group' => 'modules',
                'url' => $event->sender->space->createUrl('/contentmoduledummy/dummy/index'),
                'icon' => '<i class="fa fa-thumbs-o-up"></i>',
                'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'contentmoduledummy')
            ));
        }
    }

    public static function onProfileMenuInit($event)
    {
        if ($event->sender->user !== null && $event->sender->user->isModuleEnabled('contentmoduledummy')) {
            
            $event->sender->addItem(array(
                'label' => Yii::t('CfilesModule.base', 'Content Module Dummy'),
                'url' => $event->sender->user->createUrl('/contentmoduledummy/dummy/index'),
                'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'contentmoduledummy')
            ));
        }
    }
}
