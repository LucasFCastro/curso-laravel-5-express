<?php

use Illuminate\Database\Seeder;
use MyBlog\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        factory(Post::class, 50)->create();
    }
}
