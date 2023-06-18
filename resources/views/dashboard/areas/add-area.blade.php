@extends('layouts.dashboard', ['title' => 'Add Area'])

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
                {{__('Add Area')}}
            </h2>
        </div>
        <div class="col-sm-2">
            <a href="{{route('articles')}}" class="btn btn-success hover-btn hvr-icon-float w-100">
                Areas <i class="fa-solid fa-list hvr-icon"></i>
            </a>
        </div>
    </div>
    <form action="" method="POST" class="mt-3 mb-5 pb-5">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="area_name" class="form-label fw-bold">Area Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter area name" required>
                    @error('area_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="parent_area" class="form-label fw-bold">Parent Area <span class="text-danger">*</span></label>
                    <input type="parent_area" class="form-control" placeholder="Enter parent area name" required>
                    @error('parent_area')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="institute" class="form-label fw-bold">Institute <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter institute name" required>
                    @error('institute')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="location" class="form-label fw-bold">location</label>
                    <input type="location" name="location" id="location" class="form-control" placeholder="Enter location">
                    @error('location')
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