<?php

$min = 1;
$max = 100;

if ($argc == 3) {
	if (is_numeric($argv[1]) && is_numeric($argv[2])) {
		if($argv[1] > $argv[2]) {
			$min = $argv[2];
			$max = $argv[1];
		} else {
			$min = $argv[1];
			$max = $argv[2];
		}
	} else {
		die("Please enter a valid argument" .PHP_EOL);
	}

}

$counter = 0;
$random = mt_rand($min, $max);
fwrite(STDOUT, 'Guess? ' . PHP_EOL);

do {
	$guess = trim(fgets(STDIN));
	if($guess >= $min && $guess <= $max) {
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