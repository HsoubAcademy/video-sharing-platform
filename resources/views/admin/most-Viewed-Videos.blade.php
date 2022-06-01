@extends('theme.default')

@section('heading')
الفيديوهات الأكثر مشاهدة
@endsection

@section('content')
<hr>
<div class="row">
    <div class="col-md-12">
        <table id="videos-table" class="table table-stribed text-right" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>اسم الفيديو</th>
                    <th>اسم القناة</th>
                    <th>عدد المشاهدات</th>
                    <th>تاريخ النشر</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($mostViewedVideos as $view)
                    <tr>
                        <td><a href="/videos/{{$view->video->id}}">{{ $view->video->title }}</a></td>
                        <td>{{ $view->user->name}}</td>
                        <td>{{ $view->views_number }}</td>
                        <td>
                            <p>{{ $view->video->created_at }}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div>
    <canvas id="myChart" class="mt-4"></canvas>
</div>
@endsection

@section('script')
<script>
    var names = <?php echo $videoNames; ?>;
    var totalViews = <?php echo $videoViews; ?>;

    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: names,
            datasets: [{
                label: 'الفيديوهات الأكثر مشاهدة',
                backgroundColor: 'rgb(0, 33, 47)',
                borderColor: 'rgb(255, 99, 132)',
                data: totalViews
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>
@endsection