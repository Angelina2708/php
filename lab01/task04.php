<html>
<head>
    <title>Лабораторна робота 01</title>
</head>
<body>
<h2>Lab_01</h2>
<h3>Task 4</h3>
<?php
function hasInversePair($array) {
    $size = count($array);
    // Перевіряємо кожну пару чисел у масиві
    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = $i + 1; $j < $size; $j++) {
            // Перевіряємо, чи числа утворюють взаємно-обернену пару
            if ($array[$i] == 1 / $array[$j] || $array[$j] == 1 / $array[$i]) {
                return true; // Якщо знайдено взаємно-обернену пару, повертаємо true
            }
        }
    }
    return false; // Якщо в масиві немає взаємно-обернених пар, повертаємо false
}

// Приклад використання функції
$array = [1, 0.1, 2, 0.4, 1];
if (hasInversePair($array)) {
    echo "У масиві знайдено взаємно-обернену пару чисел.";
} else {
    echo "У масиві немає взаємно-обернених пар чисел.";
}
?>
</body>
</html>