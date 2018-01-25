<?php

use Illuminate\Database\Seeder;

class TestUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'firstName'=>'Win',
            'lastName'=>'Myint',
            'email'=>'win@mail.com',
            'password'=>'$2y$10$bjZhSBXaOVOWz1FJYjiSqO8/PxR9FSZkE8ITOoTCn8I1HlLmqdVuy',
            'phoneNumber'=>'12345678901',
            'address'=>'Yangon'
        ]);
    }
}
