function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

function bar(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
}

$arr = ['a', 'b', 'a', 'c'];
bar($arr);
print_r($arr); // Output: Array ( [1] => b )
