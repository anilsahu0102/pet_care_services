// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Admin',
        'username' => 'admin',
        'email'    => 'admin@admin.com',
        'password' => Hash::make('admin'),
    ));
}

}