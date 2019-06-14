<?php

namespace App\Services;

Class GraydonSearchService
{
    protected $config = [];

    protected $curlService;

    public function __construct()
    {
        $this->curlService = new CurlService();
    }

    /**
     * @param $config
     * @param array $data
     */
    public function search($config = [], $data = [])
    {
        if (empty($config)) {
            $config = config('constants.GRAYDON');
        }
        $url = $config['SEARCH_END_POINT'];
        if ($config['IS_MOCK']) {
            $url = $config['MOCK_SEARCH_END_POINT'];
        }
        $url = $url . '?client_id=' . $config['CLIENT_ID'] . '&client_secret=' . $config['CLIENT_SECRET'];
        if (!empty($data)) {
            $url .= '&' . implode('&', $data);
        }
        $data = [];
        $headers = [
            'searchType: ' . $config['SEARCH_TYPE'],
            'Accept: ' . $config['ACCEPT'],
            'mockRequest: ' . ($config['IS_MOCK']) ? 'true' : 'false',
        ];
        $curl = $this->curlService->initiateCurl($url, $data, $headers);
        return $response = $this->curlService->executeCurl($curl);
    }
}