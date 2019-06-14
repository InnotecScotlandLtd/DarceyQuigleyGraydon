<?php

namespace App\Http\Controllers;

use App\Services\GraydonSearchService;
use Illuminate\Http\Request;

class GraydonController extends Controller
{
    protected $config;

    protected $searchService;

    public function __construct()
    {
        $this->config = config('constants.GRAYDON');
        $this->searchService = new GraydonSearchService();
    }

    public function connect()
    {

    }

    public function index()
    {
        return view('graydon.index');
    }

    public function search()
    {
        $response = $this->searchService->search($this->config);
        $response = json_decode($response);
        $count = $response->returnedHits;
        $companies = $response->companies;
        return view('graydon.search', compact('response', 'companies', 'count'));
    }

    public function postSearch(Request $request)
    {
        $data = $request->except('_token');
        $response = $this->searchService->search($this->config, $data);
        $response = json_decode($response);
        $count = $response->returnedHits;
        $companies = $response->companies;
        $view = view('graydon.partials.search-results', compact('companies'))->render();
        return json_encode(['html' => $view]);
    }

    public function company()
    {
        return view('graydon.company');
    }

    public function monitoring()
    {
        return view('graydon.monitoring');
    }
}
