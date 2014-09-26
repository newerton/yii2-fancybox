<?php

/**
 * @copyright Copyright (c) 2014 Newerton Vargas de Araújo
 * @link http://newerton.com.br
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package yii2-fancybox
 * @version 1.0.0
 */

namespace newerton\fancybox;

use yii\base\Widget;
use yii\helpers\Json;
use yii\base\InvalidConfigException;

/**
 * fancyBox is a tool that offers a nice and elegant way to add zooming 
 * functionality for images, html content and multi-media on your webpages
 *
 * @author Newerton Vargas de Araújo <contato@newerton.com.br>
 * @since 1.0
 */
class FancyBox extends Widget {

    /**
     * @var type string target of the widget
     */
    public $target;

    /**
     * @var type boolean whether to enable the easing functions. You must set the eansing on $config
     */
    public $helpers = false;

    /**
     * @var type bollean whether to enable mouse interaction
     */
    public $mouse = true;
    // @ array of config settings for fancybox
    /**
     *
     * @var type array of config settings for fancybox
     */
    public $config = array();

    /**
     * @inheritdoc
     */
    public function init() {
        if (is_null($this->target)) {
            throw new InvalidConfigException('"FancyBox.target has not been defined.');
        }
        // publish the required assets
        $this->registerClientScript();
    }

    /**
     * @inheritdoc
     */
    public function run() {
        $view = $this->getView();

        FancyBoxAsset::register($view);

        $config = Json::encode($this->config);
        $view->registerJs("jQuery('{$this->target}').fancybox({$config});");
    }

    /**
     * Registers required script for the plugin to work as DatePicker
     */
    public function registerClientScript() {
        $view = $this->getView();

        $assets = FancyBoxAsset::register($view);

        if ($this->mouse) {
            $view->registerJsFile('@web/vendor/newerton/jquery-mousewheel/jquery.mousewheel' . (!YII_DEBUG ? '.min' : '') . '.js', ['depends' => \newerton\fancybox\FancyBoxAsset::className()]);
        }

        if ($this->helpers) {
            $view->registerCssFile($assets->baseUrl . '/helpers/jquery.fancybox-buttons.css', ['depends' => \newerton\fancybox\FancyBoxAsset::className()]);
            $view->registerCssFile($assets->baseUrl . '/helpers/jquery.fancybox-thumbs.css', ['depends' => \newerton\fancybox\FancyBoxAsset::className()]);

            $view->registerJsFile($assets->baseUrl . '/helpers/jquery.fancybox-buttons.js', ['depends' => \newerton\fancybox\FancyBoxAsset::className()]);
            $view->registerJsFile($assets->baseUrl . '/helpers/jquery.fancybox-media.js', ['depends' => \newerton\fancybox\FancyBoxAsset::className()]);
            $view->registerJsFile($assets->baseUrl . '/helpers/jquery.fancybox-thumbs.js', ['depends' => \newerton\fancybox\FancyBoxAsset::className()]);
        }
    }

}
