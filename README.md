# array_find function as a composer package
It's baffling that PHP in [current year] does not have a built-in `array_find` function, so here it is.

# Usage

```php
<?php

use function Freezemage\ArrayUtils\find as array_find;

$items = [1, 2, 3];

array_find($items, fn (int $item): bool => $item % 2 === 0); // prints 2
```

Also passes key associated with the value as a second parameter of a callback.
