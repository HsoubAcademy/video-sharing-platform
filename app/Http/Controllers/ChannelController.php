<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChannelController extends Controller
{
    public function index() {
        $channels = User::all()->sortByDesc('created_at');
        $title = 'أحدث القنوات';
        return view('channels', compact('channels', 'title'));
    }

    public function search(Request $request)
    {
        $channels = User::where('name', 'like', "%{$request->term}%")->paginate(12);
        $title = ' عرض نتائج البحث عن: ' . $request->term;
        return view('channels', compact('channels', 'title'));
    }

    public function adminIndex()
    {
        $users = User::all();
        return view('admin.channels.index', compact('users'));
    }

    public function adminUpdate(Request $request, User $user)
    {
        $user->administration_level = $request->administration_level;
        $user->save();
        
        session()->flash('flash_message', 'تم تعديل صلاحيات القناة بنجاح');

        return redirect(route('channels.index'));
    }

    public function adminDestroy(User $user)
    {
        $user->delete();

        session()->flash('flash_message', 'تم حذف القناة بنجاح');

        return redirect(route('channels.index'));
    }

    public function adminBlock(Request $request, User $user)
    {
        $user->block = 1;
        $user->save();
        
        session()->flash('flash_message', 'تم حظر القناة بنجاح');

        return redirect(route('channels.index'));
    }

    public function blockedChannels()
    {
        $channels = User::where('block', 1)->get();
        return view('admin.channels.blocked-channels', compact('channels'));
    }

    public function openBlock(Request $request, User $user)
    {
        $user->block = 0;
        $user->save();
        
        session()->flash('flash_message', 'تم فك حظر القناة بنجاح');

        return redirect(route('channels.blocked'));
    }

    public function allChannels() {
        $channels = User::all()->sortByDesc('created_at');
        return view('admin.channels.all', compact('channels'));
    }
}
