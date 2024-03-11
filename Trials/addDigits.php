/*
Реализуйте функцию addDigits(), которая принимает на вход неотрицательное целое число и возвращает другое число, полученное из первого следующим преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока, не останется одна цифра.

Для числа 38 процесс будет выглядеть так:

// 38 состоит из двух цифр, складываем их
3 + 8 = 11 // результат сложения тоже состоит из двух цифр, поэтому складываем их
1 + 1 = 2 // результат это одна цифра, возвращаем ее
Для числа 919 процесс будет выглядеть так:

9 + 1 + 9 = 19
1 + 9 = 10
1 + 0 = 1
Результат: 1
*/

function addDigits(int $num){
    while($num >= 10) {
        $sum = 0;
        foreach(str_split((string)$num) as $digit) {
            $sum += (int)$digit;
        }
        $num = $sum;
    }
    return $num;
}
print_r(addDigits(9));