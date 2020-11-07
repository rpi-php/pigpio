PHP bindings to the [pigpio](http://abyz.me.uk/rpi/pigpio/) C library.


Requirements
--------

* PHP >= 8.0
* PHP FFI extension available
* pigpio

Installation
------------
```
    composer require rpi/pigpio
```

**Example:**

```php
require __DIR__ . '/vendor/autoload.php';

use Serafim\FFILoader\Loader;
use Rpi\Pigpio\Library;

$loader = new Loader();
$ffi = $loader->load(new Library())->ffi;

$ffi->gpioInitialise();

$ffi->gpioWrite(14, 1);

$ffi->gpioTerminate();

```