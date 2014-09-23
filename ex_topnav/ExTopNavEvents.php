<?php

/**
 * ExTopNavEvents is responsible to handle events defined by autostart.php
 *
 * @author luke
 */
class ExTopNavEvents
{

    /**
     * On build of the TopMenu
     *
     * @param CEvent $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => Yii::t('ExTopNavModule.base', 'Top Navigation Item'),
            'url' => Yii::app()->createUrl('/ex_topnav/main/index', array()),
            'icon' => '<i class="fa fa-sun-o"></i>',
            'isActive' => (Yii::app()->controller->module && Yii::app()->controller->module->id == 'ex_topnav'),
        ));
    }

}
