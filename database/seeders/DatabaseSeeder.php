<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Shane Barron',
            'email'=>'cshanebarron@gmail.com',
            'password'=>\Hash::make('Rat9chet!')
        ]);



        $packages = [
            'votes' => [
                'id'=>1,
                'title' => 'Votes Package',
                'description' => view('packages.votes'),
                'url' => 'https://github.com/laraveldesign/votes',
                'image' => 'votes'
            ],
            'likes' => [
                'id'=>2,
                'title' => 'Likes Button',
                'description' => view('packages.likes'),
                'url' => 'https://github.com/laraveldesign/like-button',
                'image' => 'likes'
            ],
            'comments' => [
                'id'=>3,
                'title' => 'Comments Package',
                'description' => view('packages.comments'),
                'url' => 'https://github.com/laraveldesign/comments',
                'image' => 'comments'
            ],
            'contact' => [
                'id'=>4,
                'title' => 'Contact Form',
                'description' => view('packages.contact-form'),
                'url' => 'https://github.com/laraveldesign/contact-form',
                'image' => 'contact-form'
            ]
        ];

        foreach($packages as $key=>$package) {
            Package::create([
                'title'=>$package['title'],
                'description'=>$package['description'],
                'url'=>$package['url'],
                'image'=>$package['image']
            ]);
        }



    }
}
