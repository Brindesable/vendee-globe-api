<?php

require_once '../response.php';
require_once '../vg.php';

includeCORS();

if($_SERVER['REQUEST_METHOD'] === 'GET')
{
    $rank = getVGRanking();
    displaySuccess($rank);
}
else
{
    displayError('405 Method not allowed', 'You must use GET method');
}
