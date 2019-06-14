@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label class="">Company Name</label>
                <input name="companyName" value="" class="form-control"/>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Address</label>
                <input name="address" value="" class="form-control"/>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Keyword</label>
                <input name="keyword" value="" class="form-control"/>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="">&nbsp;</label>
                <button class="btn-primary btn search-company">Search</button>
            </div>
        </div>

    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Registration Id</th>
            <th>Vat Number</th>
        </tr>
        </thead>
        <tbody class="search-results-container">
        @include('graydon.partials.search-results',['companies'=>$companies])
        </tbody>
    </table>
@endsection