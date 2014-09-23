<?php

Yii::app()->moduleManager->register(array(
    'id' => 'ex_topnav',
    'class' => 'application.modules.ex_topnav.ExTopNavModule',
    'import' => array(
        'application.modules.ex_topnav.*',
    ),
    'events' => array(
        array('class' => 'TopMenuWidget', 'event' => 'onInit', 'callback' => array('ExTopNavEvents', 'onTopMenuInit')),
    ),
));
?>