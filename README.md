yii2-fancybox
=============

fancyBox is a tool that offers a nice and elegant way to add zooming 
functionality for images, html content and multi-media on your webpages.  http://fancyapps.com/fancybox/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar global require "fxp/composer-asset-plugin:^1.2.0"
php composer.phar require --prefer-dist newerton/yii2-fancybox "dev-master"
```

or add

```
"newerton/yii2-fancybox": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 7000,
        'padding' => 0,
        'fitToView' => false,
        'width' => '70%',
        'height' => '70%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [
            'title' => ['type' => 'float'],
            'buttons' => [],
            'thumbs' => ['width' => 68, 'height' => 50],
            'overlay' => [
                'css' => [
                    'background' => 'rgba(0, 0, 0, 0.8)'
                ]
            ]
        ],
    ]
]);

echo Html::a(Html::img('/folder/thumb.jpg'), '/folder/imagem.jpg', ['rel' => 'fancybox']);
?>
```

Hint: Do not forget to declare the Html class at the top of the file.

```
use yii\helpers\Html;
```
