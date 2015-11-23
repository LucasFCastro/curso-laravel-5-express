<?php

use Illuminate\Database\Seeder;
use MyBlog\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        factory(Tag::class, 20)->create();
    }
}
