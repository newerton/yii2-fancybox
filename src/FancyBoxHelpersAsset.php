<?php
/**
 * @copyright Copyright (c) 2014 Newerton Vargas de Araújo
 * @link https://newerton.com
 */

namespace newerton\fancybox;

use yii\web\AssetBundle;

/**
 * Class FancyBoxHelpersAsset
 * @package newerton\fancybox
 */
class FancyBoxHelpersAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/newerton/yii2-fancybox/src/assets/';

    /**
     * @var string[]
     */
    public $js = [
        'helpers/jquery.fancybox-buttons.js',
        'helpers/jquery.fancybox-media.js',
        'helpers/jquery.fancybox-thumbs.js'
    ];

    /**
     * @var string[]
     */
    public $css = [
        'helpers/jquery.fancybox-buttons.css',
        'helpers/jquery.fancybox-thumbs.css'
    ];

    /**
     * @var string[]
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'newerton\fancybox\FancyBoxAsset',
    ];

}
