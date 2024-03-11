/*
Реализуйте функцию fib(), находящую положительные числа Фибоначчи. Аргументом функции является порядковый номер числа.
*/
function fib(int $n){
  $fib = [0, 1];
  for($i = 2; $i <= $n; $i++){
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
  }
  return $fib[$n];
}
print_r(fib(3));