<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\dummy\controllers;

use Yii;

/**
 * Description of a Base Controller for the files module.
 *
 * @author Sebastian Stumpf
 */
class DummyController extends \humhub\components\Controller
{
    
    // the sublayout that should be used
    public $subLayout = "@humhub/modules/dummy/views/_layout";

    public function init()
    {
        // the pagetitle that will show up
        $this->appendPageTitle(\Yii::t('DummyModule.base', 'Dummy'));
        return parent::init();
    }

    public function actionIndex()
    {
        return $this->render('index', [
            'headline' => Yii::t('DummyModule.base', 'Dummy headline'),
            'data_1' => Yii::t('DummyModule.base', 'Dummy text.'),
            'data_2' => 42
        ]);
    }
}
