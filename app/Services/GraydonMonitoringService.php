<?php

namespace App\Services;

Class GraydonMonitoringService
{
    protected $config = [];

    protected $curlService;

    public function __construct()
    {
        $this->curlService = new CurlService();
    }

    public function index(){

    }
    
}