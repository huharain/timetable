<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('days')->delete();
        $this->call(DaysTableSeed::class);

        DB::table('subjects')->delete();
        $this->call(SubjectsTableSeed::class);

        Model::reguard();
    }
}
