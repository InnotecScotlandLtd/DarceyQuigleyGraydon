<?php
if (!empty($companies)) {
foreach ($companies as $company) {
?>
<tr>
    <td>{{$company->companyIdentification->graydonCompanyId}}</td>
    <td>{{$company->companyProfile->companyName}}</td>
    <td>{{$company->companyIdentification->registrationId}}</td>
    <td>{{$company->companyIdentification->vatNumber}}</td>
</tr>
<?php
}
}
?>