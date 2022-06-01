<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HistoryController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth'); 
    }

    public function index() {
        $user = User::find(auth()->id());
        $videos = $user->videoInHistory()->get();
        $title = 'سجل المشاهدة';
        return view('history.history-index', compact('videos', 'title'));
    }

    public function destroy($id)
    {      
        auth()->user()->videoInHistory()->wherePivot('id', $id)->detach();

        return back()->with('success', 'تم حذف مقطع الفيديو بنجاح من سجل المشاهدة');
    }

    public function destroyAll() {
        auth()->user()->videoInHistory()->detach();

        return redirect()->back()->with('success', 'تم حذف جميع محتويات السجل');
    }
}
