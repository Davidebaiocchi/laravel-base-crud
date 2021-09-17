<?php

use Illuminate\Database\Seeder;
use App\Fumetto;

class FumettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetto = new Fumetto();

        $fumetto->title = 'Batman';
        $fumetto->description = 'Batman contro il Joker';
        $fumetto->price = '12 Euro';

        $fumetto->save();
    }
}
