<html>
<head>
    <title>Лабораторна робота 01</title>
</head>
<body>
<h2>Lab_01</h2>
<h3>Task 6</h3>

<?php
// Створення масиву з цілими числами від 2 до 20
$array = range(2, 20);

// Обчислення середнього арифметичного
$sum = array_sum($array); // Знаходимо суму всіх елементів масиву
$count = count($array); // Знаходимо кількість елементів у масиві
$average = $sum / $count; // Обчислюємо середнє арифметичне

// Виведення результату
echo "Середнє арифметичне елементів масиву L(2,20) становить: $average";
?>
</body>
</html>