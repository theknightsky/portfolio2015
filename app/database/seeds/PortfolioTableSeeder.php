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
                'title' => "Passkeep",
                'images' => "passkeep01.png,passkeep02.png,passkeep03.png,passkeep04.png,passkeep05.png,passkeep06.png",
                'thumbnail' => "passkeep-thumbnail.png",
                'description' => "A web application that I created in order to stop forgetting my passwords, Passkeep stores all my passwords in one safe place. The app is built with Backbone and contains features such as password strength detection, view/hide options, and password search.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Underscore,RequireJS,Jquery,Github,Git',
                'accentColor' => 'green',
            ]);

            Portfolio::create([
                'title' => 'E?R',
                'images' => 'eqr01.png,eqr02.png,eqr03.png,eqr04.png,eqr05.png',
                'thumbnail' => 'eqr-thumbnail.png',
                'description' => "I've been teaching English online for the past year now and I found that asking questions to students is a great way to help the improve their speaking skills. The problem was finding all of the questions to ask. I decided to make an easy-to-use resource for English topics and questions to help other teachers and students with the same issue.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,AngularJs,Github,Git,Illustrator',
                'accentColor' => 'amber',
            ]);

            Portfolio::create([
                'title' => 'BMLM',
                'images' => 'bmlm01.png,bmlm02.png,bmlm03.png,bmlm04.png,bmlm05.png',
                'thumbnail' => 'bmlm-thumbnail.png',
                'description' => "I watched the movie Big Hero 6 and got inspired by the idea of innovation and helping others. I came up with a fun personal project called Bay Max Life Manager, which is a cool and interactive way of keeping track of simple things like reminders, achievements, events and more.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,AngularJs,Github,Git,Illustrator',
                'accentColor' => 'red',
            ]);

            Portfolio::create([
                'title' => 'Learncast',
                'images' => 'learncast01.png,learncast02.png',
                'thumbnail' => 'learncast-thumbnail.png',
                'description' => "A mobile web application design I was asked to create for a partner of LearnKey; LearnCast. The requirement was simply to design a mobile app, but I went all out and created a working prototype with HTML5, CSS3, and a little bit of Jquery for some basic functionality.",
                'resources' => 'HTML5,CSS3,Compass/SASS,Susy 2,Backbone,Jquery,Github,Git,Photoshop',
                'accentColor' => 'blue',
            ]);

            Portfolio::create([
                'title' => 'Social Ribbons',
                'images' => 'social-ribbons01.png,social-ribbons02.png',
                'thumbnail' => 'social-ribbons-thumbnail.png',
                'description' => "Some sleek, yet simple Social Ribbons I created on Cssdeck.com. They recieved over 1,400+ views!",
                'resources' => 'HTML5,CSS3,Compass,SCSS',
                'accentColor' => 'red',
            ]);

            Portfolio::create([
                'title' => 'Flip Pane',
                'images' => 'flip-pane01.png,flip-pane02.png',
                'thumbnail' => 'flip-pane-thumbnail.png',
                'description' => "Another masterpiece created in the online editor at Cssdeck.com. This Social Link Flip Pane uses CSS3 transforms to flip over and reveal links to social networking sites. This piece features a simple, flat design which was trendy at the time. Over 5,700+ views!",
                'resources' => 'HTML5,CSS3',
                'accentColor' => 'amber',
            ]);

            Portfolio::create([
                'title' => 'CYOH',
                'images' => 'cyoh01.png,cyoh02.png,cyoh03.png',
                'thumbnail' => 'cyoh-thumbnail.png',
                'description' => "A few friends of mine started a movement called #CreateYourOwnHappiness. The message of #CYOH is to live life individually, happily, and in your own unique way. They asked me to design some logos and I think they turned out pretty swift.",
                'resources' => 'Pen,Paper,Friends,Adobe Illustrator',
                'accentColor' => 'red',
            ]);

            Portfolio::create([
                'title' => 'PHS',
                'images' => 'phs01.png,phs02.png,phs03.png',
                'thumbnail' => 'phs-thumbnail.png',
                'description' => "The very first website I created was for my highschool, Parowan High School. That was a long time ago and unfortunately they don't have anyone to keep the website up to date. I thought I would try to help out and started working on a new and improved version.",
                'resources' => 'HTML5,CSS3,Compass/SCSS,Susy,Jquery,Bootstrap',
                'accentColor' => 'blue',
            ]);

            Portfolio::create([
                'title' => 'Seating App',
                'images' => 'movie-seating01.png,movie-seating02.png,movie-seating03.png',
                'thumbnail' => 'movie-seating-thumbnail.png',
                'description' => "One day I was looking to buy movie tickets online for my parents and the seat selection process was horrendous. I thought I would take it upon myself to create a more simple and straight forward approach to choosing movie seats online. This is the result. The app is built on Backbone and allows users to choose the number and location of there seats.",
                'resources' => 'HTML5,CSS3,Compass/SCSS,Susy,Backbone,Underscore,RequireJsJquery,Bootstrap,Git',
                'accentColor' => 'green',
            ]);


    }

}