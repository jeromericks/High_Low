<?php

$counter = 0;
$random = mt_rand(1, 100);
fwrite(STDOUT, 'Guess? ' . PHP_EOL);

do {
	$guess = trim(fgets(STDIN));
	$counter++;
	if(!is_numeric($guess)) {
		fwrite(STDOUT, "Try again" . PHP_EOL . 'Guess? ' . PHP_EOL);
	} else if($guess == $random) {
		fwrite(STDOUT, 'GOOD GUESS!' . PHP_EOL . "Number of guesses: {$counter}" . PHP_EOL);
	} else if($guess < $random) {
		fwrite(STDOUT, 'HIGHER' . PHP_EOL . 'Guess? ' . PHP_EOL);
	} else if($guess > $random) {
		fwrite(STDOUT, 'LOWER' . PHP_EOL . 'Guess? ' . PHP_EOL);
	} 

} while ($random != $guess);



?>