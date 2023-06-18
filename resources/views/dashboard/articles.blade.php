@extends('layouts.dashboard', ['title' => 'Articles'])

@section('content')
<div class="container-fluid">
    <div class="row py-3 pb-2 border-bottom">
        <div class="col-md-10">
            <h2 class="h2">
                {{__('Articles')}}
            </h2>
        </div>
        <div class="col-md-2">
            <a href="{{route('article.publish')}}" class="btn btn-success hover-btn hvr-icon-grow w-100">
                Publish Article <i class="fa-solid fa-plus hvr-icon"></i>
            </a>
        </div>
    </div>
    <div class="table-responsive my-3">
        <table id="articles" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-nowrap">Sr #</th>
                    <th class="" style="min-width: 100px">Area Path</th>
                    <th class="" style="min-width: 150px">Article Name</th>
                    <th class="" style="min-width: 100px">Article Type</th>
                    <th class="" style="min-width: 150px">Article ID</th>
                    <th class="" style="min-width: 150px">Publised</th>
                    <th class="" style="min-width: 150px">Expiry</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 100; $i++)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>/</td>
                    <td>25th Convocation Ceremondy Schedule 5-BUIC</td>
                    <td>Static</td>
                    <td>25th Convocation</td>
                    <td>1st Jan 2022 00:00 (12:00 AM)</td>
                    <td>3rd Jan 2022 09:00 (09:00 AM)</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>

@push('js')
<script>
    $(document).ready(function () {
        $('#articles').DataTable();
    });
</script>
@endpush
@endsection