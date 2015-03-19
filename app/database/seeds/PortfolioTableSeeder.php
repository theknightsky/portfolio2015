<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PortfolioTableSeeder extends Seeder {

    public function run()
    {
        // $faker = Faker::create();

        // foreach(range(1, 5) as $index)
        // {
        //     Portfolio::create([
        //         'title' => 'Passkeep',
        //         'images' => 'passkeep01.png,passkeep02.png',
        //         'thumbnail' => 'passkeep-thumbnail.png',
        //         'description' => 'description for Passkeep',
        //         'resources' => 'html,css,sass,js,angularjs',
        //         'accentColor' => 'green',
        //     ]);
        // }

            Portfolio::create([
                'title' => 'Passkeep',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'passkeep-thumbnail.png',
                'description' => 'description for Passkeep',
                'resources' => 'html,css,sass,js,angularjs',
                'accentColor' => 'green',
            ]);

    }

}