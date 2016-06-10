<?php
namespace tecnocen\disablesubmitbutton\assets;

use yii\web\AssetBundle;

/**
 * @author Angel (Guevara) López <angeldelcaos@gmail.com>
 */
class ActiveFormDisableSubmitButtonsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = "@vendor/tecnocen/yii2-disable-submit-buttons/js";

    /**
     * @inheritdoc
     */
    public $js = ['disable-submit-buttons.js',];

    /**
     * @inheritdoc
     */
    public $depends = ['yii\\web\\JqueryAsset'];
}
