<?php

use Illuminate\Database\Seeder;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert([
            [
                'imePrezime'=>'Profesor 1',
                'email'=>'profesor1@gmail.com',
                'password'=>'$2y$10$LTJy41XPDv.LGgek1CW8genaSZCPxGci4chLvleMHBL/g/hpL8LL2'
            ],[
                'imePrezime'=>'Profesor 2',
                'email'=>'profesor2@gmail.com',
                'password'=>'$2y$10$LTJy41XPDv.LGgek1CW8genaSZCPxGci4chLvleMHBL/g/hpL8LL2'
            ],[
                'imePrezime'=>'Profesor 3',
                'email'=>'profesor3@gmail.com',
                'password'=>'$2y$10$LTJy41XPDv.LGgek1CW8genaSZCPxGci4chLvleMHBL/g/hpL8LL2'
            ]
        ]);
    }
}
