<?php

use Illuminate\Database\Seeder;
use App\TypeUser;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeUser::create([ 'type' => 'Administrator' ]);
        TypeUser::create([ 'type' => 'User' ]);
    }
}
