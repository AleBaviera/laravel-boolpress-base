<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Tag::class, 100)
      -> create()
      -> each(function($tag) {

        $posts = Post::inRandomOrder()->take(rand(5,10))->get();
        $tag -> posts() -> attach($posts);
      });
    }
}
