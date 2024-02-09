<html>
<head>
    <title>Лабораторна робота 01</title>
</head>
<body>
<h2>Lab_01</h2>
<h3>Task 3</h3>
<?php
function reverseDigits($n) {
    $reversed = 0;

    // Проходимо через кожну цифру числа n, видаляючи її та додаючи до reversed з правого боку
    while ($n > 0) {
        $lastDigit = $n % 10; // Остання цифра числа
        $reversed = $reversed * 10 + $lastDigit; // Додаємо останню цифру до reversed
        $n = (int)($n / 10); // Видаляємо останню цифру числа
    }

    return $reversed;
}

// Приклад використання функції
$n = 123456789;
$reversed = reverseDigits($n);
echo "Число $n з оберненими цифрами: $reversed";
?>
</body>
</html>