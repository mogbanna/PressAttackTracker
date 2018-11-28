<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "user";
        $role->description = "a common user who can comment";
        $role->save();

        $role = new Role();
        $role->name = "administrator";
        $role->description = "a user who can create other users and manage site";
        $role->save();

        $role = new Role();
        $role->name = "journalist";
        $role->description = "a user who can add blog posts";
        $role->save();

        $role = new Role();
        $role->name = "reporter";
        $role->description = "a user who can file reports of abuse";
        $role->save();

    }
}
