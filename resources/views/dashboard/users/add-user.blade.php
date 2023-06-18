@extends('layouts.dashboard', ['title' => 'Add User'])

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
<div class="container-fluid">
    <div class="row py-3 pb-2 border-bottom">
        <div class="col-sm-10">
            <h2 class="h2">
                {{__('Add User')}}
            </h2>
        </div>
        <div class="col-sm-2">
            <a href="{{route('users')}}" class="btn btn-success hover-btn hvr-icon-float w-100">
                Users <i class="fa-solid fa-list hvr-icon"></i>
            </a>
        </div>
    </div>
    <form action="" method="POST" class="mt-3 mb-5 pb-5">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="user_name" class="form-label fw-bold">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter user name" required>
                    @error('user_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" placeholder="name@email.com" required>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="mobile" class="form-label fw-bold">Mobile <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" placeholder="Enter mobile number" required>
                    @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="phone" class="form-label fw-bold">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter phone number"
                        value="{{old('phone')}}">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <label for="department" class="form-label fw-bold">Department <span class="text-danger">*</span></label>
                <select name="department" id="department" class="bg-light w-100 mb-3" required>
                    <option selected disabled>-- Select User Department --</option>
                    <option value="pending">IT</option>
                    <option value="active">BUHO</option>
                    <option value="active">Management</option>

                </select>
                @error('department')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-4">
                <label for="user_status" class="form-label fw-bold">Status <span class="text-danger">*</span></label>
                <select name="user_status" id="user_status" class="bg-light w-100 mb-3" required>
                    <option selected disabled>-- Select User Status --</option>
                    <option value="pending">Pending</option>
                    <option value="active">Active</option>

                </select>
                @error('user_status')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-4">
                <label for="user_status" class="form-label fw-bold">Expiry <span class="text-danger">*</span></label>
                <input type="date" name="expiry_date" id="expiry_date" class="form-control">
                @error('user_status')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="roles" class="form-label fw-bold">Roles <span class="text-danger">*</span></label>
                    <br>
                    <div class="btn-group me-1">
                        <input type="checkbox" class="btn-check" id="super-admin" autocomplete="off">
                        <label class="btn btn-sm btn-outline-secondary" for="super-admin">Super Admin</label>
                    </div>
                    <div class="btn-group me-1">
                        <input type="checkbox" class="btn-check" id="admin" autocomplete="off">
                        <label class="btn btn-sm btn-outline-secondary" for="admin">Admin</label>
                    </div>
                    <div class="btn-group me-1">
                        <input type="checkbox" class="btn-check" id="webmaster" autocomplete="off">
                        <label class="btn btn-sm btn-outline-secondary" for="webmaster">Webmaster</label>
                    </div>
                    <div class="btn-group me-1">
                        <input type="checkbox" class="btn-check" id="developer" autocomplete="off">
                        <label class="btn btn-sm btn-outline-secondary" for="developer">Developer</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="col-sm-4 ms-auto">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-md-0 mb-3">
                                        <button type="submit" class="btn btn-primary hover-btn hvr-icon-float w-100">
                                            Save <i class="fa-solid fa-check hvr-icon"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-md-0 mb-3">
                                        <button type="button" onclick="history.back()"
                                            class="btn btn-danger hover-btn hvr-icon-spin w-100">
                                            Cancel <i class="fa-solid fa-ban hvr-icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('js')
{{-- nice select scripts --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
    integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function () {
        $('select').niceSelect();
    });
</script>
@endpush
@endsection