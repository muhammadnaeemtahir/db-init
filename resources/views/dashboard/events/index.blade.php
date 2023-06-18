@extends('layouts.dashboard', ['title' => 'Events Log'])

@section('content')
<div class="container-fluid">
    <div class="row py-3 pb-2 border-bottom">
        <div class="col-12">
            <h2 class="h2">
                {{__('Events Log')}}
            </h2>
        </div>
    </div>
    <div class="table-responsive my-3">
        <table id="articles" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-nowrap">ID</th>
                    <th class="" style="min-width: 100px">Event Date</th>
                    <th class="" style="min-width: 150px">Application</th>
                    <th class="" style="min-width: 100px">Level</th>
                    <th class="" style="min-width: 150px">Message</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 100; $i++)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>1st Jan 2022 00:00 (12:00 AM)</td>
                    <td>Admin</td>
                    <td>Error</td>
                    <td>25th Convocation Ceremondy Schedule 5-BUIC</td>
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