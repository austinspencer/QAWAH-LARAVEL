

<?php 



function ganerate_verication_code()
{
    $otp = rand(1000, 9999);
    return $otp;   
}