<?php
$s = "Hello World!";
$length = strlen($s);
$wordCount = str_word_count($s);
$upper = strtoupper($s);
$lower = strtolower($s);
$sub = substr($s, 6, 5);
echo "Length: $length<br>";
echo "Word Count: $wordCount<br>";
echo "Uppercase: $upper<br>";
echo "Lowercase: $lower<br>";
echo "Substring: $sub<br>";
echo "String Position: " . strpos($s, "World") . "<br>";
echo "String Replace: " . str_replace("World", "PHP", $s) . "<br>";
?>
<?= "<h1>Hello</h1>" ?>