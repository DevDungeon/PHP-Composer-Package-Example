<?php
/*
Dependencies are defined in the `composer.json` file.

To install the required dependencies, run:

```
composer install
```

The autoloader will load all classes.
*/

require_once __DIR__ . '/vendor/autoload.php';


$object1 = new \DevDungeon\MyClass();
echo $object1->something;

// Or

use \DevDungeon\MyClass;
$object2 = new MyClass();
$object2->say_hello();
