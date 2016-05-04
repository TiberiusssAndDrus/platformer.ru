<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\News;

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
		$this->call(NewsSeeder::class);
    }
}

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Posts')->delete();
		Post::create([
			'title' => 'First Post',
			'slug' => 'first-post',
			'excerpt' => '<b>First Post body<b>',
			'content' => '<b>Content First Post body</b>',
			'published' => true,
			'published_at' => DB::raw('CURRENT_TIMESTAMP')
		]);
		Post::create([
			'title' => 'Second Post',
			'slug' => 'second-post',
			'excerpt' => '<b>Second Post body<b>',
			'content' => '<b>Content Second Post body</b>',
			'published' => false,
			'published_at' => DB::raw('CURRENT_TIMESTAMP')
		]);
		Post::create([
			'title' => 'Third Post',
			'slug' => 'third-post',
			'excerpt' => '<b>Third Post body<b>',
			'content' => '<b>Content Third Post body</b>',
			'published' => false,
			'published_at' => DB::raw('CURRENT_TIMESTAMP')
		]);
    }
}

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('News')->delete();
		News::create([
			'title' => 'First News',
			'slug' => 'first-news',
			'excerpt' => 'First News body',
			'content' => 'Content First News body',
			'published' => true,
			'published_at' => DB::raw('CURRENT_TIMESTAMP')
		]);
		News::create([
			'title' => 'Second News',
			'slug' => 'second-news',
			'excerpt' => 'Second News body',
			'content' => 'Content Second News body',
			'published' => false,
			'published_at' => DB::raw('CURRENT_TIMESTAMP')
		]);
		News::create([
			'title' => 'Third News',
			'slug' => 'third-news',
			'excerpt' => 'Third News body',
			'content' => 'Content Third News body',
			'published' => false,
			'published_at' => DB::raw('CURRENT_TIMESTAMP')
		]);
    }
}
