<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Video;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notification1 = Notification::create([
            'user_id' => User::where('name', 'hsoub-academy')->first()->id,
            'notification' => Video::where('title', 'دورة علوم الحاسوب - أكاديمية حسوب')->first()->title,
            'success' => '1',
        ]);

        $notification2 = Notification::create([
            'user_id' => User::where('name', 'hsoub-academy')->first()->id,
            'notification' => Video::where('title', 'دورة تطوير واجهات المستخدم - أكاديمية حسوب')->first()->title,
            'success' => '0',
        ]);

        $notification3 = Notification::create([
            'user_id' => User::where('name', 'hsoub-academy')->first()->id,
            'notification' => Video::where('title', 'دورة تطوير واجهات المستخدم - أكاديمية حسوب')->first()->title,
            'success' => '1',
        ]);

        $notification4 = Notification::create([
            'user_id' => User::where('name', 'hsoub')->first()->id,
            'notification' => Video::where('title', 'دورة تطوير الويب باستخدام لغة جافاسكريبت')->first()->title,
            'success' => '1',
        ]);

        $notification5 = Notification::create([
            'user_id' => User::where('name', 'hsoub')->first()->id,
            'notification' => Video::where('title', 'دورة تطوير تطبيقات الهاتف باستخدام Cordova')->first()->title,
            'success' => '1',
        ]);

        $notification6 = Notification::create([
            'user_id' => User::where('name', 'Mostaql')->first()->id,
            'notification' => Video::where('title', 'خمسة نصائح لاختيار أفضل المستقلين للعمل على مشروعك')->first()->title,
            'success' => '1',
        ]);

        $notification7 = Notification::create([
            'user_id' => User::where('name', 'Khamsat')->first()->id,
            'notification' => Video::where('title', 'اعرض خدماتك في أكبر سوق عربي لعرض وشراء الخدمات المصغرة')->first()->title,
            'success' => '1',
        ]);

        $notification8 = Notification::create([
            'user_id' => User::where('name', 'Baeed')->first()->id,
            'notification' => Video::where('title', 'وظف أفضل المستقلين الموجودين في الوطن العربي عن بعد')->first()->title,
            'success' => '1',
        ]);
    }
}
