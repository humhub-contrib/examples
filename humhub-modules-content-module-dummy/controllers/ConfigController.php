<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\contentmoduledummy\controllers;

use Yii;
use humhub\modules\dummy\models\ConfigureForm;
use humhub\models\Setting;

/**
 * ConfigController handles the configuration requests.
 *
 * @author Sebastian Stumpf
 */
class ConfigController extends \humhub\modules\admin\components\Controller
{

    /**
     * Configuration action for super admins.
     */
    public function actionIndex()
    {
        $form = new ConfigureForm();
        $manager = Yii::$app->getModule('contentmoduledummy')->settings;
        $form->dummyConfigCheckbox = $manager->get('dummyConfigCheckbox');
        
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $manager->set('dummyConfigCheckbox', $form->dummyConfigCheckbox);
        }
        
        return $this->render('index', array(
            'model' => $form
        ));
    }
}

?>
