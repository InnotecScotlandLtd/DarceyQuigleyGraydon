<?php
return [
    'GRAYDON' => [
        'ACCOUNT_ID' => '5cc8ad1a-2f92-447f-9c4c-a48e6560cf4f',
        'CLIENT_ID' => 'cb575b5af51a44b9a26d8219361d0915',
        'CLIENT_SECRET' => '71Fc2036c0D44B608812B9f36633d8A1',
        'COUNTRY_CODE' => 'gb',
        'ACCEPT' => 'application/json',
        'SEARCH_TYPE' => 'GDM',
        'IS_MOCK' => true,
        'MOCK_SEARCH_END_POINT'=>'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/{account_id}/graydon-search-api-v1.0.0/1.0.2/m/{country_id}/companies',
        'MOCK_MONITORING_END_POINT'=>'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/{account_id}/monitoring-api-v1.0.0/1.0.1/m/{country_id}/companies/monitoring/profiles/{company_id}/events',
        'MOCK_COMPANY_END_POINT'=>'https://anypoint.mulesoft.com/mocking/api/v1/sources/exchange/assets/{account_id}/company-api-v1.0.0/1.0.9/m/{country_id}/companies',
        'SEARCH_END_POINT'=>'https://mocksvc.mulesoft.com/mocks/{account_id}/{country_id}/companies',
        'MONITORING_END_POINT'=>'',
        'COMPANY_END_POINT'=>'',
    ],
];