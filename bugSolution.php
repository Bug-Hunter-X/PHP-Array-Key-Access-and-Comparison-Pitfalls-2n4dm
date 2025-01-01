The solution involves stricter type checking and more robust array handling:

```php
<?php
$myArray = [];
$myArray[1] = 'value1';
$myArray[3] = 'value3';

// Check if the key exists before accessing it
if (isset($myArray[2])) {
  echo $myArray[2];
} else {
  echo 'Key does not exist';
}

//Use the identical comparison operator (===) for strict comparison
if (2 === '2'){
    echo 'Identical';
} else {
    echo 'Not identical';
}

// Or use array_key_exists function
if (array_key_exists(2, $myArray)){
    echo $myArray[2];
} else {
    echo 'Key does not exist';
}
?>
```
By explicitly checking for the existence of a key before accessing it and employing the strict comparison operator (`===`) for key comparisons, we avoid the undefined offset notice and ensure accurate comparisons, irrespective of type juggling.