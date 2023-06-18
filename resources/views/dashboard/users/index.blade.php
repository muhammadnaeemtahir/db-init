@extends('layouts.dashboard', ['title' => 'Users'])

@section('content')
<div class="container-fluid">
    <div class="row py-3 pb-2 border-bottom">
        <div class="col-md-10">
            <h2 class="h2">
                {{__('Users')}}
            </h2>
        </div>
        <div class="col-md-2">
            <a href="{{route('user.add')}}" class="btn btn-success hover-btn hvr-icon-grow w-100">
                New User <i class="fa-solid fa-plus hvr-icon"></i>
            </a>
        </div>
    </div>
    <div class="table-responsive my-3">
        <table id="users" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-nowrap">Sr #</th>
                    <th class="text-nowrap">Name</th>
                    <th class="text-nowrap">Email</th>
                    <th class="text-nowrap">Roles</th>
                    <th class="text-nowrap">Mobile</th>
                    <th class="text-nowrap">Phone</th>
                    <th class="text-nowrap">Department</th>
                    <th class="text-nowrap">Expiry Date</th>
                    <th class="text-nowrap" style="min-width: 90px">Status</th>
                    <th class="text-nowrap">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">1</td>
                    <td class="text-nowrap">Jhon Doe</td>
                    <td class="">jhonedoe@email.com</td>
                    <td class="text-wrap">
                        <span class="badge text-bg-danger mx-1">Super Administrator</span>
                        <span class="badge text-bg-warning mx-1">Administrator</span>
                        <span class="badge text-bg-info mx-1">Webmaster</span>
                    </td>
                    <td class="">+0123456789</td>
                    <td class="">+0123456789</td>
                    <td class="text-wrap">BU / HO / IT</td>
                    <td class="">3rd Jan 2022 09:00 (09:00 AM)</td>
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