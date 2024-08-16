<?php

foreach ($_POST as $key => $value) {
    if (strpos($key, 'marks') === 0) {
        // Do something with the value
        echo "Marks for subject $key: $value<br>";
    }
}

$totalSubjects = count($_POST) - 1; // assuming 'name' is the first input element
for ($i = 1; $i <= $totalSubjects - 1; $i++) {
    $marks[$i] = $_POST["marks$i"];
}

$totalMarks = array_sum($marks);
$percentage = ($totalMarks / ($totalSubjects * 100)) * 100;

echo "Total Marks: $totalMarks<br>";
echo "Percentage: $percentage%<br>";

if ($percentage >= 80) {
    echo "Grade: A+";
} elseif ($percentage >= 60) {
    echo "Grade: A";    
} elseif ($percentage >= 50) {
    echo "Grade: B";
} elseif ($percentage >= 40) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}

?>