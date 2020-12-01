<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');



function loadTextInput($filename) {

	return array_filter(explode(PHP_EOL, file_get_contents(public_path($filename))));

}

Artisan::command('day1', function() {
	$input = loadTextInput('day1.txt');

	foreach ($input as $key => $value1) {
		foreach($input as $key => $value2) {
			foreach($input as $key => $value3) {
				if($value1 + $value2 + $value3 == 2020) {
					echo $value1 * $value2 * $value3;
					return "exit!";
				}
			}
		}
	}
});