YiiComplete
===========

This is Yii autocomplete extension using Jquery Ui. It enables users to quickly find and select from a pre-populated list of values as they type, leveraging searching and filtering.

Usage
===========

### Requirements

- Tested with Yii 1.1.14
- Jquery 1.10.2
- Jquery Ui 1.10.4 or above

### Install

- Download the latest release package
- Unpack it in /protected/extensions/ folder

### Usage

- Paste the code into your view file
```php
<?php 
	$this->widget('ext.YiiComplete.YiiComplete', array(
    'jsonUrl' => '<url with json data(http://www.site.com/controller/JsonAction)>'
));
?>
```

- Json data should be in format:
```json
[
    {
        "id": 1,
        "label": "Car1",
        "value": "Saab"
    },
    {
        "id": 2,
        "label": "Car2",
        "value": "Audi"
    },
    {
        "id": 3,
        "label": "Car3",
        "value": "Honda"
    },
    ...
    etc
]
```

- [If you want to style input field and results, please check this link! ](http://jqueryui.com/autocomplete/#remote)

