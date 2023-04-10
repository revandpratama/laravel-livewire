@extends('partials.main')

@section('container')
    <div class="container my-5">
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-lg-7 bg-body-tertiary" style="min-height: 30vh">

            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7 bg-body-tertiary" style="min-height:50vh">
                <livewire:contact-index>

                </livewire:contact-index>
            </div>
        </div>
    </div>
@endsection