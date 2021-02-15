<?php
/**
 * @copyright Copyright (c) 2014 Newerton Vargas de Araújo
 * @link https://newerton.com
 */

namespace newerton\fancybox;

use yii\web\AssetBundle;

/**
 * Class MousewheelAsset
 * @package newerton\fancybox
 */
class MousewheelAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/newerton/yii2-fancybox/src/assets/jquery-mousewheel/';

    /**
     * @var string[]
     */
    public $js = [
        'jquery.mousewheel.min.js'
    ];

    /**
     * @var string[]
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'newerton\fancybox\FancyBoxAsset',
    ];
}
