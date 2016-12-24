<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
use yii\helpers\Url;
use yii\helpers\Html;

$bundle = \humhub\modules\contentmoduledummy\Assets::register($this);
$this->registerJsVar('dummyJsVar', 42);

?>
<div class="content-dummy-module-container">
    <div class="panel panel-default">
    
        <div class="panel-heading">
            <h1>
                <strong><?php echo $headline; ?></strong>
            </h1>
        </div>
    
        <div class="panel-body">
            <?php echo $data_1; ?><br />
            <?php echo $data_2; ?><br />
            <?php echo Yii::t('DummyModule.base', 'Dummy text 2...')?>
        </div>
    
    </div>
</div>
