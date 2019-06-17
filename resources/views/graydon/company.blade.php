@extends('layouts.master')

@section('content')
    <style>
        .btn-primary{
            margin-top: 5px!important;
        }
    </style>
    <h1 class="text-capitalize">{{ $type }}</h1>

    <div class="text-left pb-3 mb-2">
        <a href="{{ route('company-detail',['id'=>$id,'type'=>'profile']) }}"
           class="btn-primary btn pr-2">Company profile</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'branch']) }}"
           class="btn-primary btn pr-2">Branches</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'credit-score']) }}"
           class="btn-primary btn pr-2">Credit score</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'opportunity-score']) }}"
           class="btn-primary btn pr-2">Opportunity score</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'financial']) }}"
           class="btn-primary btn pr-2">Financial summary</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'managers']) }}"
           class="btn-primary btn pr-2">Managers</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'shareholders']) }}"
           class="btn-primary btn pr-2">Shareholders</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'participation']) }}"
           class="btn-primary btn pr-2">Participation</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'groupStructure']) }}"
           class="btn-primary btn pr-2">Group Structure</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'declarationOfLiability']) }}"
           class="btn-primary btn pr-2">Declaration Of Liability</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'other']) }}"
           class="btn-primary btn pr-2">Other</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'events']) }}"
           class="btn-primary btn pr-2">Events</a>

        <a href="{{ route('company-detail',['id'=>$id,'type'=>'xseptions']) }}"
           class="btn-primary btn pr-2">Xseptions</a>

    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="text-left mt-2">
        <?php
        pre($company_detail);
        ?>
    </div>
@endsection