<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use InnotecScotlandLtd\Graydon\Services\GraydonCompanyService;
use InnotecScotlandLtd\Graydon\Services\GraydonMonitoringService;
use InnotecScotlandLtd\Graydon\Services\GraydonSearchService;

class GraydonController extends Controller
{
    protected $searchService;
    protected $companyService;
    protected $monitoringService;

    public function __construct()
    {
        $this->searchService = new GraydonSearchService();
        $this->companyService = new GraydonCompanyService();
        $this->monitoringService = new GraydonMonitoringService();
    }

    public function index()
    {
        return view('graydon.index');
    }

    public function search(Request $request)
    {
        $data = $request->except('_token');
        $response = $this->searchService->search($data);
        $response = json_decode($response);
        $count = $response->returnedHits;
        $companies = $response->companies;
        return view('graydon.search', compact('response', 'companies', 'count'));
    }

    public function companyDetail($id, $type = 'companyProfile')
    {
        $company_detail = $this->companyService->get($id,$type);
        $company_detail = json_decode($company_detail);
        return view('graydon.company', compact('company_detail','id','type'));
    }

    public function monitoring()
    {
        $monitoring = $this->monitoringService->get();
        $monitoring = json_decode($monitoring);
        return view('graydon.monitoring',compact('monitoring'));
    }
}
