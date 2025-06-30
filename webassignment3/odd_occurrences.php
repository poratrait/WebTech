<?php
// Step 1: Generate and write 100 integers into a text file
$file = fopen("numbers.txt", "w");
for ($i = 0; $i < 100; $i++) {
    fwrite($file, rand(1, 10) . " ");
}
fclose($file);

// Step 2: Read 10 numbers at a time and track occurrences
$handle = fopen("numbers.txt", "r");
$content = fread($handle, filesize("numbers.txt"));
fclose($handle);

$numbers = explode(" ", trim($content));
$countMap = [];

foreach ($numbers as $num) {
    if ($num === "") continue;
    if (!isset($countMap[$num])) {
        $countMap[$num] = 0;
    }
    $countMap[$num]++;
}

// Step 3: Display numbers with odd occurrences
echo "Numbers with odd occurrences:\n";
foreach ($countMap as $num => $count) {
    if ($count % 2 != 0) {
        echo $num . "\n";
    }
}
?>