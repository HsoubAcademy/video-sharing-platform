<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video1 = Video::create([
            'user_id' => User::where('name', 'hsoub-academy')->first()->id,
            'title' => 'دورة علوم الحاسوب - أكاديمية حسوب',
            'disk' => 'test',
            'video_path' => 'test',
            'image_path' => 'test/computer-science/computer-science.png',
            'hours' => '0',
            'minutes'=>'2',
            'seconds'=>'4',
            'quality'=>'720',
            'processed'=>'1',
        ]);

        $video2 = Video::create([
            'user_id' => User::where('name', 'hsoub-academy')->first()->id,
            'title' => 'دورة تطوير واجهات المستخدم - أكاديمية حسوب',
            'disk' => 'test',
            'video_path' => 'test',
            'image_path' => 'test/frontend/frontend.jpg',
            'hours' => '0',
            'minutes'=>'1',
            'seconds'=>'57',
            'quality'=>'480',
            'processed'=>'1',
        ]);

        $video3 = Video::create([
            'user_id' => User::where('name', 'hsoub')->first()->id,
            'title' => 'دورة تطوير الويب باستخدام لغة جافاسكريبت',
            'disk' => 'test',
            'video_path' => 'test',
            'image_path' => 'test/javascript/javascript.png',
            'hours' => '0',
            'minutes'=>'2',
            'seconds'=>'1',
            'quality'=>'360',
            'processed'=>'1',
        ]);

        $video4 = Video::create([
            'user_id' => User::where('name', 'hsoub')->first()->id,
            'title' => 'دورة تطوير تطبيقات الهاتف باستخدام Cordova',
            'disk' => 'test',
            'video_path' => 'test',
            'image_path' => 'test/cordova/cordova.jpg',
            'hours' => '0',
            'minutes'=>'2',
            'seconds'=>'14',
            'quality'=>'360',
            'processed'=>'1',
        ]);

        $video5 = Video::create([
            'user_id' => User::where('name', 'Mostaql')->first()->id,
            'title' => 'خمسة نصائح لاختيار أفضل المستقلين للعمل على مشروعك',
            'disk' => 'test',
            'video_path' => 'test',
            'image_path' => 'test/mostaql/mostaql.png',
            'hours' => '0',
            'minutes'=>'1',
            'seconds'=>'43',
            'quality'=>'360',
            'processed'=>'1',
        ]);

        $video6 = Video::create([
            'user_id' => User::where('name', 'Khamsat')->first()->id,
            'title' => 'اعرض خدماتك في أكبر سوق عربي لعرض وشراء الخدمات المصغرة',
            'disk' => 'test',
            'video_path' => 'test',
            'image_path' => 'test/khamsat/khamsat.png',
            'hours' => '0',
            'minutes'=>'1',
            'seconds'=>'37',
            'quality'=>'720',
            'processed'=>'1',
        ]);

        $video7 = Video::create([
            'user_id' => User::where('name', 'Baeed')->first()->id,
            'title' => 'وظف أفضل المستقلين الموجودين في الوطن العربي عن بعد',
            'disk' => 'test',
            'video_path' => 'test',
            'image_path' => 'test/baeed/baeed.png',
            'hours' => '0',
            'minutes'=>'0',
            'seconds'=>'10',
            'quality'=>'240',
            'processed'=>'1',
            'Longitudinal'=>'1',
        ]);
    }
}
