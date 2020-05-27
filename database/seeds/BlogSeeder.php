<?php

use App\Blogs;
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
        // INITIALISE FAKER LIB
        // require_once 'vendor/autoload.php';


        $faker = Faker\Factory::create();


        $blog = new Blogs();

        $blog->title = $faker->words($nb = 3, $asText = true);
        $blog->intro = $faker->realText($maxNbChars = 100, $indexSize = 2);
        $blog->content = $faker->realText($maxNbChars = 900, $indexSize = 2);
        $blog->tag = $faker->word;
        //$blog->image = $faker->imageUrl($width = 640, $height = 480);
        $blog->image = 'https://bit.ly/3ecPjVo';
        
        $blog->save();


    }
}