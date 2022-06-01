@extends('theme.default')

@section('heading')
لوحة التحكم
@endsection

@section('content')
    <div class="row justify-content-center">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center text-right">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            عدد مقاطع الفيديو</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfVideos }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-video fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center text-right">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            عدد القنوات</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfChannels }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-film fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div>
        <canvas id="myChart" class="mt-4"></canvas>
    </div>
@endsection

@section('script')
<script>
    var names = <?php echo $names; ?>;
    var totalViews = <?php echo $totalViews; ?>;

    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: names,
            datasets: [{
                label: 'القنوات الأكثر مشاهدة',
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