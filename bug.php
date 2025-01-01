In PHP, a common yet subtle error arises when dealing with array keys.  Consider this scenario:

```php
<?php
$myArray = [];
$myArray[1] = 'value1';
$myArray[3] = 'value3';

// Attempting to access a non-existent key
echo $myArray[2]; // Notice: Undefined offset: 2 in ...
?>
```

While seemingly straightforward, PHP's loose typing can lead to unexpected behavior.  If a key doesn't exist, accessing it doesn't automatically create it; instead, it results in a notice (or potentially a warning or error depending on error reporting levels). This behavior differs from languages that might create the key with a default value.

Another subtle issue involves comparing keys.  Using the `==` operator might lead to unintended type juggling.  Numeric strings ('1') and integers (1) might be considered equal, causing logic errors if not handled carefully.