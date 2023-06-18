@extends('layouts.dashboard', ['title' => 'Areas'])

@section('content')
<div class="container-fluid">
    <div class="row py-3 pb-2 border-bottom">
        <div class="col-md-10">
            <h2 class="h2">
                {{__('Areas')}}
            </h2>
        </div>
        <div class="col-md-2">
            <a href="{{route('areas.add')}}" class="btn btn-success hover-btn hvr-icon-grow w-100">
                New Area <i class="fa-solid fa-plus hvr-icon"></i>
            </a>
        </div>
    </div>
    <div class="table-responsive my-3">
        <table id="users" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-nowrap">Sr #</th>
                    <th class="text-nowrap">Name</th>
                    <th class="text-nowrap">Parent Area</th>
                    <th class="text-nowrap">Institue</th>
                    <th class="text-nowrap">Location</th>
                    <th class="text-nowrap">Department</th>
                    <th class="text-nowrap">Expiry Date</th>
                    <th class="text-nowrap" style="min-width: 90px">Status</th>
                    <th class="text-nowrap">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">1</td>
                    <td class="text-nowrap">
                        <a href="#" class="d-block">nima</a>
                        <span class="text-secondary">/nima</span>
                    </td>
                    <td class="">/</td>
                    <td class="text-wrap">
                             NIMA
                    </td>
                    <td class=""></td>
                    <td class=""></td>
                    <td class="text-wrap">BU / HO / IT</td>
                    <td class="">
                        <select name="" id="" class="form-select">
                            <option value="pending">pending</option>
                            <option value="active">active</option>
                        </select>
                    </td>
                    <td class="text-nowrap">
                        <button class="btn hover-btn hvr-icon-grow"><i
                                class="fa-solid fa-pen text-secondary hvr-icon"></i>
                            <button class="btn hover-btn hvr-icon-grow"><i
                                    class="fa-solid fa-trash text-danger hvr-icon"></i>
                            </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('js')
<script>
    $(document).ready(function () {
        $('#users').DataTable();
    });
</script>
@endpush
@endsection