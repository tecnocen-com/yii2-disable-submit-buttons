Tecnocen.com Yii2 Disable Buttons
=========================



Yii2 asset to automatically disable submit buttons on Yii2 [ActiveForm](http://www.yiiframework.com/doc-2.0/yii-widgets-activeform.html).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist "tecnocen/yii2-disable-submit-buttons:*"
```

or add

```
"tecnocen/yii2-disable-submit-buttons": "*"
```

to the `require` section of your `composer.json` file.

## Register Asset

Register the `tecnocen\assets\ActiveFormDisableSubmitButonsAsset`, preferably on your `AppAsset` dependencies

```php
class AppAsset extends yii\web\AssetBundle
{
    public $depends = [
        'tecnocen\\disablesubmitbutton\\assets\\ActiveFormDisableSubmitButtonsAsset',
        // other dependencies
    ];
}
```

## Usage

Add css class `disable-submit-buttons` to your [ActiveForm]
(http://www.yiiframework.com/doc-2.0/yii-widgets-activeform.html) widget.

Optionally if you want to change the text on a button, add the attribute
`data-disabled-text` with the text to be changed.

```php
$form = ActiveForm::begin([
    'options' => ['class' => 'disable-submit-buttons'],
    // other configurations
]);

    // inputs

    Html::submitButton('Submit', [
        // optional, will show the value of `data-disabled-text` attribute
        // while handling the validation and submit
        'data' => ['disabled-text' => 'Please Wait']
    ])

$form->end();
```

With this the `:input[type="submit"]` buttons will be disabled and if the
validation fails the buttons will be enabled again

## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.
