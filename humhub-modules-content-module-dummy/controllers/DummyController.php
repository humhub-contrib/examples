<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\contentmoduledummy\controllers;

use Yii;

/**
 * Description of a Base Controller for the files module.
 *
 * @author Sebastian Stumpf
 */
class DummyController extends \humhub\modules\content\components\ContentContainerController
{

    public $hideSidebar = false;

    public function actionIndex()
    {
        return $this->render('index', [
            'headline' => Yii::t('DummyModule.base', 'Dummy headline'),
            'data_1' => Yii::t('DummyModule.base', 'Dummy text.'),
            'data_2' => 42
        ]);
    }
}
