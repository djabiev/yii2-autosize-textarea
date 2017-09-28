# Yii2 Autosize Textarea extetion
Js library to autosize textareas on your page
Based on [stand-alone script to adjust textarea height](http://www.jacklmoore.com/autosize/).


## Installation


### Composer

Preferred way - [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require djabiev/yii2-autosize-textarea "dev-master"
```

or add

```
"djabiev/yii2-autosize-textarea": "dev-master"
```

to the require section of your ```composer.json```


## Usage

add as dependensy in you ```AssetBundle.php``` for example:

```php

namespace frontend\assets;

class YourAppAsset extends \yii\web\AssetBundle
{
    ...
    public $depends = [
        'djabiev\yii\assets\AutosizeTextareaAsset',
        ...
    ];
}
```


## Author

[Vladimir Djabiev](https://github.com/djabiev/)
