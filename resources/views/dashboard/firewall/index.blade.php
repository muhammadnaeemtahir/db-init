@extends('layouts.dashboard', ['title' => 'Firewall'])

@push('css')
<style>
    .animate {
        animation: animate 1s;
    }

    @keyframes animate {
        0% {
            opacity: 0;
        }

        25% {
            opacity: .25;
        }

        50% {
            opacity: .5;
        }

        100% {
            opacity: 1;
        }
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row py-3 pb-2 border-bottom">
        <div class="col-12">
            <h2 class="h2">
                {{__('Firewall')}}
            </h2>
        </div>
    </div>
    <form class="mt-3 mb-5">
        <p class="h5">Whitelisted IP adresses</p>
        <div class="row" id="IP_addresses">
            <div class="col-12">
                <div class="input-group mb-3">
                    <input type="text" value="::1" id="ip_1" name="ip_2" class="form-control" placeholder="">
                    <button class="btn hover-btn hvr-icon-grow" type="button"> <i
                            class="fa-solid fa-trash text-danger hvr-icon"></i>
                </div>
            </div>
            <div class="col-12">
                <div class="input-group mb-3">
                    <input type="text" value="127.0.0.1" id="ip_1" name="ip_2" class="form-control" placeholder="">
                    <button class="btn hover-btn hvr-icon-grow" type="button"> <i
                            class="fa-solid fa-trash text-danger hvr-icon"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ms-auto">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary hover-btn hvr-icon-spin w-100" id="addIP">
                                Add New <i class="fa-solid fa-plus hvr-icon"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success hover-btn hvr-icon-float w-100">
                                Save <i class="fa-solid fa-check hvr-icon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('js')
<script>
    $(document).ready(function () {
        let number = 2;
        const IPaddesses = $('#IP_addresses');

        let temp = `<div class="col-12 animate">
                <div class="input-group mb-3">
                    <input type="text" value="" id="ip_${number}" name="ip_${number}" class="form-control" placeholder="Enter IP address">
                    <button class="btn hover-btn hvr-icon-grow" type="button"> <i class="fa-solid fa-trash text-danger hvr-icon"></i>
                </div>
            </div>`
        $('#addIP').click((e) => {
            e.preventDefault()
            $(IPaddesses).append(temp)
        });


        $(document).on('click', '.btn', function () {
            $(this).closest('.col-12').remove();
        });
    })
</script>
@endpush
@endsection