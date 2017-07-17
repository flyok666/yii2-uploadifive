<?php

namespace flyok666\uploadifive;

use yii\web\AssetBundle;

class UploadifiveAsset extends AssetBundle {

    public $sourcePath = '@vendor/flyok666/yii2-uploadifive/assets';
    public $basePath = '@webroot/assets';
    public $css = ['uploadify.css'];
    public $js = ['jquery.uploadify.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
