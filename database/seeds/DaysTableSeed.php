<?php

use Illuminate\Database\Seeder;
use App\Days;

class DaysTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Days::create([
        	'id' => '1',
        	'day' => 'Sunday',
        	'description' => 'days of the week'
    	]);

    	Days::create([
    		'id' => '2',
        	'day' => 'Monday',
        	'description' => 'days of the week'
    	]);

    	Days::create([
    		'id' => '3',
        	'day' => 'Teusday',
        	'description' => 'days of the week'
    	]);

    	Days::create([
    		'id' => '4',
        	'day' => 'Wednesday',
        	'description' => 'days of the week'
    	]);

    	Days::create([
    		'id' => '5',
        	'day' => 'Thursday',
        	'description' => 'days of the week'
    	]);

       
    }
}
