<?php declare(strict_types=1);

namespace Freezemage\ArrayUtils;

/**
 * @param array $array
 * @param callable(mixed $value, array-key $key): bool $constraint
 *
 * @return mixed
 */
function find(array $array, callable $constraint): mixed {
    foreach ($array as $key => $value) {
        if ($constraint($value, $key) === true) {
            return $value;
        }
    }

    return null;
}
