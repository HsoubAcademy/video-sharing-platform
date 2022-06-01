@extends('layouts.main')

@section('content')
<div class="row latest-download">
    <div class="container">
        <div class="row justify-content-center">
            <form class="form-inline col-md-6 justify-content-center" action="{{ route('channel.search') }}" method="GET">
                <input type="text" class="form-control mx-sm-3 mb-2" name="term">
                <button type="submit" class="btn btn-secondary mb-2">ابحث</button>
            </form>
        </div>
        <hr>
        <br>
        <p class="my-4">{{$title}}</p>
        <div class="row">
            @forelse($channels as $channel)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="m-4">    
                        <img class="rounded-full mx-auto" width="120px" src="{{ $channel->profile_photo_url}}">
   
                        <div class="card-body p-0">
                            <p class="text-center mt-4">{{$channel->name}}</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('main.channels.videos', $channel->id) }}" class="btn btn-secondary btn-lg">تصفح القناة</a>
                        </div>
                    </div>
                </div>             
            @empty
                <div class="mx-auto">
                    <p>لا يوجد قنوات</p>
                </div> 
            @endforelse
        </div>
    </div>
</div>
@endsection