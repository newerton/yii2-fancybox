<?php
/**
 * Created by mulat.
 * User: mulat
 * Date: 07.05.2015
 * Time: 13:17
 */
namespace newerton\fancybox;

use yii\web\AssetBundle;

class MousewheelAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancybox';

    public $js = [];

    public $css = [];

    public $depends = [
        'yii\web\JqueryAsset',
        'newerton\fancybox\FancyBoxAsset',
    ];

    public function registerAssetFiles($view) {
        $this->js[] = 'lib/jquery.mousewheel' . (!YII_DEBUG ? '.min' : '') . '.js';
        parent::registerAssetFiles($view);
    }
}
