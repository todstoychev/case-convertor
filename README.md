This a simple camel to snake case and snake to camel case string convertor. 

# Instalation
Use the common composer methods. The composer 'require command': 

```composer require todstoychev/case-convertor```

or add to ypur composer.json in the 'require' section:

```json
"require": {
    "todstoychev/case-convertor": "dev-master"
}
```

and then run: 

```composer update```

# Usage
The module contains only one class with 2 static methods. To convert from snake to camel case use: 

```php
    $result = \Todstoychev\CaseConvertor\Convertor::snakeToCamelCase('my_snake_case_string');

    echo $result; // Will produce 'mySnakeCaseString'
```

For camel to snake case you can use: 

```php
    $result = \Todstoychev\CaseConvertor\Convertor::camelToSnakeCase('myCamelCaseString');

    echo $result; // Will produce 'my_camel_case_string'
```

Keep in mind that numbers are not affected by the convertion. For more information take a look at the unit tests in the 'tests' folder.