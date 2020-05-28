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

        $blog->title_nl = 'NL ' . $faker->words($nb = 2, $asText = true);
        $blog->intro_nl = 'NL ' . $faker->realText($maxNbChars = 100, $indexSize = 2);
        $blog->content_nl = 'NL ' . $faker->realText($maxNbChars = 900, $indexSize = 2);
        $blog->tag_nl = 'NL';

        $blog->title_en = 'ENG ' . $faker->words($nb = 2, $asText = true);
        $blog->intro_en = 'ENG ' . $faker->realText($maxNbChars = 100, $indexSize = 2);
        $blog->content_en = 'ENG ' . $faker->realText($maxNbChars = 900, $indexSize = 2);
        $blog->tag_en = 'ENG';



        $blog->image = 'https://bit.ly/3ecPjVo';
        
        $blog->save();


    }
}