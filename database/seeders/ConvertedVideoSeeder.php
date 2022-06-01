<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Convertedvideo;
use App\Models\Video;

class ConvertedVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $converted_video1 = Convertedvideo::create([
            'video_id' => Video::where('title', 'دورة علوم الحاسوب - أكاديمية حسوب')->first()->id,
            'mp4_Format_240' => 'test/computer-science/240p-computer-science.mp4',
            'mp4_Format_360' => 'test/computer-science/360p-computer-science.mp4',
            'mp4_Format_480' => 'test/computer-science/480p-computer-science.mp4',
            'mp4_Format_720' => 'test/computer-science/720p-computer-science.mp4',
            'mp4_Format_1080' => 'No Video',
            'webm_Format_240'=>'test/computer-science/240p-computer-science.webm',
            'webm_Format_360'=>'test/computer-science/360p-computer-science.webm',
            'webm_Format_480'=>'test/computer-science/480p-computer-science.webm',
            'webm_Format_720'=>'test/computer-science/720p-computer-science.webm',
            'webm_Format_1080'=>'No Video',
        ]);

        $converted_video2 = Convertedvideo::create([
            'video_id' => Video::where('title', 'دورة تطوير واجهات المستخدم - أكاديمية حسوب')->first()->id,
            'mp4_Format_240' => 'test/frontend/240p-frontend.mp4',
            'mp4_Format_360' => 'test/frontend/360p-frontend.mp4',
            'mp4_Format_480' => 'test/frontend/480p-frontend.mp4',
            'mp4_Format_720' => 'No Video',
            'mp4_Format_1080' => 'No Video',
            'webm_Format_240'=>'test/frontend/240p-frontend.webm',
            'webm_Format_360'=>'test/frontend/360p-frontend.webm',
            'webm_Format_480'=>'test/frontend/480p-frontend.webm',
            'webm_Format_720'=>'No Video',
            'webm_Format_1080'=>'No Video',
        ]);

        $converted_video3 = Convertedvideo::create([
            'video_id' => Video::where('title', 'دورة تطوير الويب باستخدام لغة جافاسكريبت')->first()->id,
            'mp4_Format_240' => 'test/javascript/240p-javascript.mp4',
            'mp4_Format_360' => 'test/javascript/360p-javascript.mp4',
            'mp4_Format_480' => 'No Video',
            'mp4_Format_720' => 'No Video',
            'mp4_Format_1080' => 'No Video',
            'webm_Format_240'=>'test/javascript/240p-javascript.webm',
            'webm_Format_360'=>'test/javascript/360p-javascript.webm',
            'webm_Format_480'=>'No Video',
            'webm_Format_720'=>'No Video',
            'webm_Format_1080'=>'No Video',
        ]);

        $converted_video4 = Convertedvideo::create([
            'video_id' => Video::where('title', 'دورة تطوير تطبيقات الهاتف باستخدام Cordova')->first()->id,
            'mp4_Format_240' => 'test/cordova/240p-cordova.mp4',
            'mp4_Format_360' => 'test/cordova/360p-cordova.mp4',
            'mp4_Format_480' => 'No Video',
            'mp4_Format_720' => 'No Video',
            'mp4_Format_1080' => 'No Video',
            'webm_Format_240'=>'test/cordova/240p-cordova.webm',
            'webm_Format_360'=>'test/cordova/360p-cordova.webm',
            'webm_Format_480'=>'No Video',
            'webm_Format_720'=>'No Video',
            'webm_Format_1080'=>'No Video',
        ]);

        $converted_video5 = Convertedvideo::create([
            'video_id' => Video::where('title', 'خمسة نصائح لاختيار أفضل المستقلين للعمل على مشروعك')->first()->id,
            'mp4_Format_240' => 'test/mostaql/240p-mostaql.mp4',
            'mp4_Format_360' => 'test/mostaql/360p-mostaql.mp4',
            'mp4_Format_480' => 'No Video',
            'mp4_Format_720' => 'No Video',
            'mp4_Format_1080' => 'No Video',
            'webm_Format_240'=>'test/mostaql/240p-mostaql.webm',
            'webm_Format_360'=>'test/mostaql/360p-mostaql.webm',
            'webm_Format_480'=>'No Video',
            'webm_Format_720'=>'No Video',
            'webm_Format_1080'=>'No Video',
        ]);
        
        $converted_video6 = Convertedvideo::create([
            'video_id' => Video::where('title', 'اعرض خدماتك في أكبر سوق عربي لعرض وشراء الخدمات المصغرة')->first()->id,
            'mp4_Format_240' => 'test/khamsat/240p-khamsat.mp4',
            'mp4_Format_360' => 'test/khamsat/360p-khamsat.mp4',
            'mp4_Format_480' => 'test/khamsat/480p-khamsat.mp4',
            'mp4_Format_720' => 'test/khamsat/720p-khamsat.mp4',
            'mp4_Format_1080' => 'No Video',
            'webm_Format_240'=>'test/khamsat/240p-khamsat.webm',
            'webm_Format_360'=>'test/khamsat/360p-khamsat.webm',
            'webm_Format_480'=>'test/khamsat/480p-khamsat.webm',
            'webm_Format_720'=>'test/khamsat/720p-khamsat.webm',
            'webm_Format_1080'=>'No Video',
        ]);

        $converted_video7 = Convertedvideo::create([
            'video_id' => Video::where('title', 'وظف أفضل المستقلين الموجودين في الوطن العربي عن بعد')->first()->id,
            'mp4_Format_240' => 'test/baeed/240p-baeed.mp4',
            'mp4_Format_360' => 'No Video',
            'mp4_Format_480' => 'No Video',
            'mp4_Format_720' => 'No Video',
            'mp4_Format_1080' => 'No Video',
            'webm_Format_240'=>'test/baeed/240p-baeed.webm',
            'webm_Format_360'=>'No Video',
            'webm_Format_480'=>'No Video',
            'webm_Format_720'=>'No Video',
            'webm_Format_1080'=>'No Video',
        ]);
    }
}
