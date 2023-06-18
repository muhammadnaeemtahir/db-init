@extends('layouts.dashboard', ['title' => 'Publish Article'])

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
                {{__('Publish Article')}}
            </h2>
        </div>
        <div class="col-sm-2">
            <a href="{{route('articles')}}" class="btn btn-success hover-btn hvr-icon-float w-100">
                Articles <i class="fa-solid fa-list hvr-icon"></i>
            </a>
        </div>
    </div>
    <form action="" method="POST" class="mt-3 mb-5 pb-5">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <label for="article_type" class="form-label fw-bold">Article Type <span
                        class="text-danger">*</span></label>
                <select name="article_type" id="article_type" class="bg-light w-100 mb-3" required>
                    <option selected disabled>-- Select Article Type --</option>
                    <option value="static">Static</option>
                    <option value="dynamic">Dynamic</option>
                    <option value="news">News</option>
                    <option value="tender">Tender</option>
                    <option value="event">Event</option>

                </select>
                @error('article_type')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-6">
                <label for="article_layout" class="form-label fw-bold">Article Layout <span
                        class="text-danger">*</span></label>
                <select name="article_layout" id="article_layout" class="bg-light w-100 mb-3" required>
                    <option selected disabled>-- Select Article Layout --</option>
                </select>
                @error('article_layout')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="article_name" class="form-label fw-bold">Article Layout <span
                            class="text-danger">*</span></label>
                    <textarea name="article_name" class="form-control" id="article_name" cols="30" rows="5"
                        placeholder="Enter article name" required></textarea>
                    @error('article_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="article_id" class="form-label fw-bold">Article Unique ID <span
                            class="text-danger">*</span></label>
                    <textarea name="article_id" class="form-control" id="article_id" cols="30" rows="5"
                        placeholder="Enter article ID" required></textarea>
                    @error('article_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="article_expiry" class="form-label fw-bold">Expiry Date/Time <span
                            class="text-danger">*</span></label>
                    <input type="datetime-local" name="article_expiry" id="article_expiry" class="form-control"
                        value="{{old('article_expiry')}}" required>
                    @error('article_expiry')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="event_start_date" class="form-label fw-bold">Event Start Date <span
                            class="text-danger">*</span></label>
                    <input type="datetime-local" name="event_start_date" id="event_start_date" class="form-control"
                        value="{{old('event_start_date')}}" required>
                    @error('event_start_date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="event_end_date" class="form-label fw-bold">Expiry Date/Time <span
                            class="text-danger">*</span></label>
                    <input type="datetime-local" name="event_end_date" id="event_end_date" class="form-control"
                        value="{{old('')}}" required>
                    @error('event_end_date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="article_desc" class="form-label fw-bold">Short Description <span
                            class="text-danger">*</span></label>
                    <textarea name="article_desc" class="form-control" id="article_desc" cols="30" rows="5"
                        placeholder="Enter article description" required></textarea>
                    @error('article_desc')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="article_remarks" class="form-label fw-bold">Short Remarks <span
                            class="text-danger">*</span></label>
                    <textarea name="article_remarks" class="form-control" id="article_remarks" cols="30" rows="5"
                        placeholder="Enter article remarks" required></textarea>
                    @error('article_remarks')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <label for="article_status" class="form-label fw-bold">Status <span class="text-danger">*</span></label>
                <select name="article_status" id="article_status" class="bg-light w-100 mb-3" required>
                    <option selected disabled>-- Select Article Type --</option>
                    <option value="pending">Pending</option>
                    <option value="active">Active</option>

                </select>
                @error('article_status')
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
                                        <button type="reset" class="btn btn-danger hover-btn hvr-icon-spin w-100">
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