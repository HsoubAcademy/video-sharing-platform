<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Video;
use App\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment1 = Comment::create([
            'user_id' => User::where('name', 'hsoub-academy')->first()->id,
            'video_id' => Video::where('title', 'دورة تطوير واجهات المستخدم - أكاديمية حسوب')->first()->id,
            'body' => 'شكرًا لكم عل هذه الدورة الرائعة',
        ]);

        $comment2 = Comment::create([
            'user_id' => User::where('name', 'Baeed')->first()->id,
            'video_id' => Video::where('title', 'دورة تطوير واجهات المستخدم - أكاديمية حسوب')->first()->id,
            'body' => 'أرجو لكم المزيد من النجاح، دورة رائعة واستفدت منها كثيرًا',
        ]);

        $comment3 = Comment::create([
            'user_id' => User::where('name', 'hsoub-academy')->first()->id,
            'video_id' => Video::where('title', 'دورة تطوير تطبيقات الهاتف باستخدام Cordova')->first()->id,
            'body' => 'شكرًا لكم عل هذه الدورة الرائعة',
        ]);

        $comment4 = Comment::create([
            'user_id' => User::where('name', 'Khamsat')->first()->id,
            'video_id' => Video::where('title', 'دورة تطوير تطبيقات الهاتف باستخدام Cordova')->first()->id,
            'body' => 'أرجو لكم المزيد من النجاح، دورة رائعة واستفدت منها كثيرًا',
        ]);

        $comment5 = Comment::create([
            'user_id' => User::where('name', 'Mostaql')->first()->id,
            'video_id' => Video::where('title', 'دورة تطوير الويب باستخدام لغة جافاسكريبت')->first()->id,
            'body' => 'شكرًا لكم عل هذه الدورة الرائعة',
        ]);

        $comment6 = Comment::create([
            'user_id' => User::where('name', 'Khamsat')->first()->id,
            'video_id' => Video::where('title', 'دورة تطوير الويب باستخدام لغة جافاسكريبت')->first()->id,
            'body' => 'أرجو لكم المزيد من النجاح، دورة رائعة واستفدت منها كثيرًا',
        ]);

        $comment7 = Comment::create([
            'user_id' => User::where('name', 'Mostaql')->first()->id,
            'video_id' => Video::where('title', 'دورة علوم الحاسوب - أكاديمية حسوب')->first()->id,
            'body' => 'شكرًا لكم عل هذه الدورة الرائعة',
        ]);

        $comment8 = Comment::create([
            'user_id' => User::where('name', 'Baeed')->first()->id,
            'video_id' => Video::where('title', 'دورة علوم الحاسوب - أكاديمية حسوب')->first()->id,
            'body' => 'أرجو لكم المزيد من النجاح، دورة رائعة واستفدت منها كثيرًا',
        ]);

        $comment9 = Comment::create([
            'user_id' => User::where('name', 'Khamsat')->first()->id,
            'video_id' => Video::where('title', 'خمسة نصائح لاختيار أفضل المستقلين للعمل على مشروعك')->first()->id,
            'body' => 'شكرًا لكم عل هذه الدورة الرائعة',
        ]);

        $comment10 = Comment::create([
            'user_id' => User::where('name', 'Baeed')->first()->id,
            'video_id' => Video::where('title', 'خمسة نصائح لاختيار أفضل المستقلين للعمل على مشروعك')->first()->id,
            'body' => 'أرجو لكم المزيد من النجاح، دورة رائعة واستفدت منها كثيرًا',
        ]);

        
        $comment11 = Comment::create([
            'user_id' => User::where('name', 'Khamsat')->first()->id,
            'video_id' => Video::where('title', 'اعرض خدماتك في أكبر سوق عربي لعرض وشراء الخدمات المصغرة')->first()->id,
            'body' => 'شكرًا لكم عل هذه الدورة الرائعة',
        ]);

        $comment12 = Comment::create([
            'user_id' => User::where('name', 'Baeed')->first()->id,
            'video_id' => Video::where('title', 'اعرض خدماتك في أكبر سوق عربي لعرض وشراء الخدمات المصغرة')->first()->id,
            'body' => 'أرجو لكم المزيد من النجاح، دورة رائعة واستفدت منها كثيرًا',
        ]);

        $comment13 = Comment::create([
            'user_id' => User::where('name', 'hsoub-academy')->first()->id,
            'video_id' => Video::where('title', 'اعرض خدماتك في أكبر سوق عربي لعرض وشراء الخدمات المصغرة')->first()->id,
            'body' => 'شكرًا لكم عل هذه الدورة الرائعة',
        ]);

        $comment14 = Comment::create([
            'user_id' => User::where('name', 'Baeed')->first()->id,
            'video_id' => Video::where('title', 'وظف أفضل المستقلين الموجودين في الوطن العربي عن بعد')->first()->id,
            'body' => 'أرجو لكم المزيد من النجاح، دورة رائعة واستفدت منها كثيرًا',
        ]);

        $comment15 = Comment::create([
            'user_id' => User::where('name', 'Khamsat')->first()->id,
            'video_id' => Video::where('title', 'وظف أفضل المستقلين الموجودين في الوطن العربي عن بعد')->first()->id,
            'body' => 'شكرًا لكم عل هذه الدورة الرائعة',
        ]);
    }
}
