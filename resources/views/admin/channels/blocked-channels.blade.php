@extends('theme.default')

@section('head')
    <link href="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('heading')
القنوات المحظورة
@endsection

@section('content')
<hr>
<div class="row">
    <div class="col-md-12">
        <table id="videos-table" class="table table-stribed text-right" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>اسم القناة</th>
                    <th>البريد الإلكتروني</th>
                    <th>تاريخ الإنشاء</th>
                    <th>فك الحظر</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($channels as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->diffForHumans()}}</td>
                        <td>
                            <form method="POST" action="{{ route('channels.open.block', $user)}}" style="display:inline-block">
                                @method('patch')
                                @csrf  

                                @if ($user->block)
                                    <button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('هل أنت متأكد أنك تريد فك حظر هذه القناة')"><i class="fa fa-lock-open"></i> فك الحظر</button>  
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
<!-- Page level plugins -->
<script src="{{ asset('theme/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#videos-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
            }
        });
    });
</script>
@endsection