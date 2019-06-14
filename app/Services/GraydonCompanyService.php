<?php

namespace App\Services;

Class GraydonCompanyService
{
    protected $config = [];

    protected $curlService;

    public function __construct()
    {
        $this->curlService = new CurlService();
    }

}