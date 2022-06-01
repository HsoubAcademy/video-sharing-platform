<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function LikeVideo(Request $request)
    {
        $videoId = $request->videoId;
        $isLike = $request->isLike === 'true';
        $update = false;


        $video = Video::find($videoId);
        if (!$video) {
            return null;
        }

        $user = Auth::user();
        $like = $user->likes()->where('video_id', $videoId)->first();

        if ($like) {
            $alreadyLike = $like->like;
            $update = true;
            if ($alreadyLike == $isLike) {
                $like->delete();
            }
        } else {
            $like = new Like();
        }

        $like->like = $isLike;
        $like->user_id = $user->id;
        $like->video_id = $video->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }

        $countLike = Like::where('video_id', $video->id)->where('like', '1')->count();
        $countDislike = Like::where('video_id', $video->id)->where('like', '0')->count();

        return response()->json(['countLike' => $countLike, 'countDislike' => $countDislike,]);
    }
}
