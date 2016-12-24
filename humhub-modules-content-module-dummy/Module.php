<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\contentmoduledummy;

use Yii;
use yii\helpers\Url;
use humhub\modules\content\components\ContentContainerModule;
use humhub\modules\content\components\ContentContainerActiveRecord;
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;

class Module extends ContentContainerModule
{

    public function getContentContainerTypes()
    {
        return [
            Space::className(),
            User::className()
        ];
    }

    /**
     * @inheritdoc
     */
    public function getPermissions($contentContainer = null)
    {
        // check permission management to customize access to this module
        return [];
    }
    
    public function disable()
    {
        return parent::disable();
        // what needs to be done if module is completely disabled?
    }

    public function enable()
    {
        return parent::enable();
        // what needs to be done if module is enabled?
    }

    public function disableContentContainer(ContentContainerActiveRecord $container)
    {
        return parent::disableContentContainer($container);
        // what needs to be done if module is disabled in the content container (Space / Profile)?
    }

    public function enableContentContainer(ContentContainerActiveRecord $container)
    {
        return parent::enableContentContainer($container);
        // what needs to be done if module is enabled in the content container (Space / Profile)?
    }

    /**
     * @inheritdoc
     */
    public function getContentContainerName(ContentContainerActiveRecord $container)
    {
        return Yii::t('DummyModule.base', 'Content Module Dummy');
    }

    /**
     * @inheritdoc
     */
    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        if ($container instanceof Space) {
            return Yii::t('GalleryModule.base', 'Adds dummy module to this space.');
        } elseif ($container instanceof User) {
            return Yii::t('GalleryModule.base', 'Adds dummy module to your profile.');
        }
    }

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
            '/contentmoduledummy/config'
        ]);
    }
}
