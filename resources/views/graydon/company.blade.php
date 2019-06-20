@extends('layouts.master')

@section('content')
    <style>
        .btn-primary {
            margin-top: 5px !important;
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

    <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link  active" id="nav-summary-tab" data-toggle="tab" href="#nav-summary" role="tab"
               aria-controls="nav-summary" aria-selected="true">Summary</a>

            <a class="nav-item nav-link" id="nav-company-profile-tab" data-toggle="tab" href="#nav-company-profile" role="tab"
               aria-controls="nav-company-profile" aria-selected="true">Company Profile</a>


            <a class="nav-item nav-link" id="nav-rating-tab" data-toggle="tab" href="#nav-rating" role="tab"
               aria-controls="nav-rating" aria-selected="true">Rating</a>


            <a class="nav-item nav-link" id="nav-financials-tab" data-toggle="tab" href="#nav-financials" role="tab"
               aria-controls="nav-financials" aria-selected="true">Financials</a>


            <a class="nav-item nav-link" id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab"
               aria-controls="nav-payment" aria-selected="true">Payment Behaviour</a>


            <a class="nav-item nav-link" id="nav-company-structure-tab" data-toggle="tab" href="#nav-company-structure" role="tab"
               aria-controls="nav-company-structure" aria-selected="true">Company Structure</a>


            <a class="nav-item nav-link" id="nav-exceptional-tab" data-toggle="tab" href="#nav-exceptional" role="tab"
               aria-controls="nav-exceptional" aria-selected="true">Exceptional Events</a>

        </div>
    </nav>

    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-summary" role="tabpanel" aria-labelledby="nav-summary-tab">
            Test
        </div>

        <div class="tab-pane fade" id="nav-company-profile" role="tabpanel" aria-labelledby="nav-company-profile-tab">
            Test1
        </div>

        <div class="tab-pane fade" id="nav-rating" role="tabpanel" aria-labelledby="nav-rating-tab">
            Test2
        </div>

        <div class="tab-pane fade" id="nav-financials" role="tabpanel" aria-labelledby="nav-financials-tab">
            Test3
        </div>

        <div class="tab-pane fade" id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">
            Test4
        </div>

        <div class="tab-pane fade" id="nav-company-structure" role="tabpanel" aria-labelledby="nav-company-structure-tab">
            Test5
        </div>

        <div class="tab-pane fade" id="nav-exceptional" role="tabpanel" aria-labelledby="nav-exceptional-tab">
            Test6
        </div>
    </div>

    <div class="clearfix">&nbsp;</div>


    <div class="text-left mt-2">
        <?php
        pre($company_detail);
        ?>
    </div>
@endsection