<html>
<head>
    <title>Лабораторна робота 01</title>
</head>
<body>
<h2>Lab_01</h2>
<h3>Task 5</h3>
<?php
function average($array) {
    $sum = 0;
    $count = count($array);

    // Обчислюємо суму всіх елементів масиву
    foreach ($array as $num) {
        $sum += $num;
    }

    // Обчислюємо середнє арифметичне
    $average = $sum / $count;

    return $average;
}

// Приклад використання функції
$array = [5, 10, 15, 20, 25];
$avg = average($array);
echo "Середнє арифметичне чисел у масиві: $avg";
?>
</body>
</html>