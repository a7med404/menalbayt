<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(CustomerTableSeeder::class);
        // $this->call(DepartmentTableSeeder::class);
        // $this->call(JobTableSeeder::class);
        // $this->call(OfferTableSeeder::class);
        // $this->call(ProviderTableSeeder::class);
        // $this->call(ProfileTableSeeder::class);
        // $this->call(ProjectTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
