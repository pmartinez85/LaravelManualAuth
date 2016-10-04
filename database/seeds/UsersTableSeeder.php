<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //podem ficar aquí qualsevol tipus de codi per omplir BD...
        //la que usarem durant el curs seran les factories. Són fàbriques de coses
        //en aquest cas fabricarem usuaris
        factory(\App\User::class,100)->create();
    }
}
