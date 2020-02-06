<?php

use Illuminate\Database\Seeder;
use App\Message;
class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
        	'from_id'=>1,
        	'to_id'=>2,
        	'content'=>'Hola me amor 2',

        ]);
        Message::create([
        	'from_id'=>2,
        	'to_id'=>1,
        	'content'=>'Hola mi guapo  1 pruebas de observer',

        ]);
        Message::create([
            'from_id'=>1,
            'to_id'=>3,
            'content'=>'Hola me amor 3',

        ]);
        Message::create([
            'from_id'=>3,
            'to_id'=>1,
            'content'=>'Hola mi guapo 1',

        ]);
    }
}
