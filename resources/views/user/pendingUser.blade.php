@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pending') }}</div>

                <div class="card-body">
                    <h6>Your registation is pending approval from and admin. <br>
                    Please be patient.We will notify you.
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
