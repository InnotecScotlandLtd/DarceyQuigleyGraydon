@extends('layouts.master')

@section('content')

    <div class="text-left">
        {!! Form::open(['route' => 'post-search', 'id' => 'search-form', 'class' => 'form-horizontal']) !!}
        <div class="row">
            <div class="col-md-2 float-left">
                <div class="form-group">
                    <label class="">graydonCompanyId</label>
                    <input name="graydonCompanyId" value="" class="form-control"/>
                </div>
            </div>
            <div class="col-md-2 float-left">
                <div class="form-group">
                    <label class="">registrationId</label>
                    <input name="registrationId" value="" class="form-control"/>
                </div>
            </div>
            <div class="col-md-2 float-left">
                <div class="form-group">
                    <label class="">Company Name</label>
                    <input name="companyName" value="" class="form-control"/>
                </div>
            </div>
            <div class="col-md-2 float-left">
                <div class="form-group">
                    <label>Address</label>
                    <input name="address" value="" class="form-control"/>
                </div>
            </div>
            <div class="col-md-2 float-left">
                <div class="form-group">
                    <label>Keyword</label>
                    <input name="keyword" value="" class="form-control"/>
                </div>
            </div>
            <div class="col-md-2 float-left">
                <div class="form-group">
                    <label class="clearfix">&nbsp;</label>
                    <button type="submit" class="btn-primary btn mt-4">Search</button>
                </div>
            </div>
        </div>
        {{ Form::close() }}

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Index</th>
                <th>Name</th>
                <th>Graydon Company Id</th>
                <th>Registration Id</th>
                <th>Vat Number</th>
                <th></th>
            </tr>
            </thead>
            <tbody class="search-results-container">
            @include('graydon.partials.search-results',['companies'=>$companies])
            </tbody>
        </table>
    </div>
@endsection