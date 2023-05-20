@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <img src="{{ asset('images/header_QR-code-generator_2x.png') }}" class="w-100 h-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
