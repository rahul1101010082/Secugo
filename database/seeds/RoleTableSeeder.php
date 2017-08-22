
<?php

/**
 * RoleTableSeeder
 *
 * @class RoleTableSeeder
 *
 * @author Rahul Shukla <rahul.shukla@surmountsoft.com>
 *
 * @copyright 2017 SurmountSoft Pvt. Ltd. All rights reserved.
 */
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->truncate();
        \DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'created_by' => 1,
                'created_at' => new DateTime,
            ],
            [
                'name' => 'Member',
                'created_by' => 1,
                'created_at' => new DateTime,
            ]
        ]);
    }
}
