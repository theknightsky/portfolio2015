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
                'description' => 'A web application that I created in order to stop forgetting my passwords, Passkeep stores all my passwords in one safe place.',
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Jquery,Github,Git',
                'accentColor' => 'green',
            ]);

            Portfolio::create([
                'title' => 'E?R',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'eqr-thumbnail.png',
                'description' => "I've been teaching English online for the past year now and I found that asking questions to students is a great way to help the improve their speaking skills. The problem was finding all of the questions. I decided to make an easy-to-use resource for English question topics and questions to solve this issue.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,AngularJs,Github,Git',
                'accentColor' => 'amber',
            ]);

            Portfolio::create([
                'title' => 'BMLM',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'bmlm-thumbnail.png',
                'description' => 'I watched the movie Big Hero 6 and got inspired by the idea of innovation and helping others. I came up with a fun personal project called Bay Max Life Manager, which is a cool and interactive way of keeping track of simple things like reminders, achievements, events and more.',
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,AngularJs,Github,Git',
                'accentColor' => 'red',
            ]);

            Portfolio::create([
                'title' => 'Learncast',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'learncast-thumbnail.png',
                'description' => "A mobile web application design I was asked to create for a partner of LearnKey; LearnCast.  The requirement was simply to design a mobile app, but I went all out and created a working prototype with HTML5, CSS3, and a little bit of Jquery for some basic functionality.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Jquery,Github,Git',
                'accentColor' => 'blue',
            ]);

            Portfolio::create([
                'title' => 'Social Ribbons',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'social-ribbons-thumbnail.png',
                'description' => "Some sleek yet very simple Social Ribbons I created on Cssdeck.com.  They recieved over 6,500+ views!",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Jquery,Github,Git',
                'accentColor' => 'red',
            ]);

            Portfolio::create([
                'title' => 'Flip Pane',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'passkeep-thumbnail.png',
                'description' => "Another masterpiece created in the online editor at Cssdeck.com.  This Social Link Flip Plane flips over to reveal links to social networking sites and features trendy flat design.  Over 3,300+ views!",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Jquery,Github,Git',
                'accentColor' => 'green',
            ]);

            Portfolio::create([
                'title' => 'CYOH',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'passkeep-thumbnail.png',
                'description' => "A few friends of mine started a movement called #CreateYourOwnHappiness.  The message of #CYOH is to live life individually and create a happy life in your own unique way.  They asked me to design some logos and I think they turned out pretty swift.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Jquery,Github,Git',
                'accentColor' => 'red',
            ]);

            Portfolio::create([
                'title' => 'PHS',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'passkeep-thumbnail.png',
                'description' => "The very first website I created was for my highschool, Parowan High School.  That was a long time ago and unfortunately they don\'t have anyone to keep the website up to date.  I thought I would help out and start working on a new and improved version.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Jquery,Github,Git',
                'accentColor' => 'red',
            ]);

            Portfolio::create([
                'title' => 'Seating App',
                'images' => 'passkeep01.png,passkeep02.png',
                'thumbnail' => 'passkeep-thumbnail.png',
                'description' => "One day I was looking to buy movie tickets online for my parents and the seat selection process was horrendous.  I thought I would take it upon myself to create a more simple and straight-forward approach.  This is the result.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Jquery,Github,Git',
                'accentColor' => 'green',
            ]);


    }

}