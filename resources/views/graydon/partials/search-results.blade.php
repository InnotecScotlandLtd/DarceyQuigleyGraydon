<?php
if (!empty($companies)) {
foreach ($companies as $company) {
?>
<tr>
    <td>{{$company->companyIdentification->graydonCompanyId}}</td>
    <td>{{$company->companyProfile->companyName}}</td>
    <td>{{$company->companyIdentification->graydonCompanyId}}</td>
    <td>{{$company->companyIdentification->registrationId}}</td>
    <td>{{$company->companyIdentification->vatNumber}}</td>
    <td>
        <a href="{{ route('company-detail',['id'=>$company->companyIdentification->graydonCompanyId]) }}">View</a>
    </td>
</tr>
<?php
}
}
?>