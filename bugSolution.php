The solution is to use strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison checks for both value and type equality.  Since `strpos()` returns `false` (boolean) and `0` (integer) are of different types, the strict comparison will correctly evaluate to `false` when the needle is not found.

```php
<?php
$haystack = "This is a test string";
$needle = "missing";

if (strpos($haystack, $needle) === false) {
    echo "Needle not found";
} else {
    echo "Needle found at position: " . strpos($haystack, $needle);
}
?>
```