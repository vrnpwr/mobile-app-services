
<?php
use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
    	'id' =>1,	
		'name' => Str::random(10),
        'description' => Str::random(10).'@afterdoor.com',
        'order_no' => 69,
        'title' => 'lorem ipsum',
        'seo_keyword' => Str::random(50),
        'image' =>'a.jpg',
    	]);
    }
}
