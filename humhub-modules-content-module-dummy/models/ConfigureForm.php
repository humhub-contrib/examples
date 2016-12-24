<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\contentmoduledummy\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 *
 * @author Sebastian Stumpf
 */
class ConfigureForm extends \yii\base\Model
{

    public $dummyConfigCheckbox;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            array(
                'dummyConfigCheckbox',
                'boolean'
            )
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'dummyConfigCheckbox' => Yii::t('DummyModule.base', 'Dummy configurable checkbox.')
        );
    }
}
