# Piramide-for-5be18825

<?php
$number = readline("hoeveel wil je ");

for ($i = 1; $i < $number ; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}
?>