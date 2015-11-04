<?php

$counter = 0;
$random = mt_rand(1, 100);
fwrite(STDOUT, 'Guess? ' . PHP_EOL);

do {
	$guess = trim(fgets(STDIN));
	if($guess >= 1 && $guess <= 100) {
		$counter++;
	}
	if(!is_numeric($guess)) {
		fwrite(STDOUT, "Must guess a number between 1 and 100" . PHP_EOL . 'Guess? ' . PHP_EOL);
	} else if($guess <= 0 || $guess >= 101) {
		fwrite(STDOUT, "Must guess a number between 1 and 100" . PHP_EOL . 'Guess? ' . PHP_EOL);
	} else if($guess == $random) {
		fwrite(STDOUT, 'GOOD GUESS!' . PHP_EOL . "Number of guesses: {$counter}" . PHP_EOL);
	} else if($guess < $random) {
		fwrite(STDOUT, 'HIGHER' . PHP_EOL . 'Guess? ' . PHP_EOL);
	} else if($guess > $random) {
		fwrite(STDOUT, 'LOWER' . PHP_EOL . 'Guess? ' . PHP_EOL);
	} 

} while ($random != $guess);

?>