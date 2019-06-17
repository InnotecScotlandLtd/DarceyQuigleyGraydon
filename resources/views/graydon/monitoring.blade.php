@extends('layouts.master')

@section('content')
    <style>
        .btn-primary {
            margin-top: 5px !important;
        }
    </style>
    <h1 class="text-capitalize">Monitoring</h1>

    <div class="text-left pb-3 mb-2">

    </div>

    <div class="clearfix">&nbsp;</div>

    <div class="text-left mt-2">
        <?php
        pre($monitoring);
        ?>
    </div>
@endsection