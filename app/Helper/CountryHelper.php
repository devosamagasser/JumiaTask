<?php

/**
 * @return array[]
 */
function getCountriesData()
{
    return [
        ['country' => 'Cameroon',  'code' => '237', 'regex' => '/237\ ?[2368]\d{7,8}$/'],
        ['country' => 'Ethiopia',  'code' => '251', 'regex' => '/251\ ?[1-59]\d{8}$/'],
        ['country' => 'Morocco',   'code' => '212', 'regex' => '/212\ ?[5-9]\d{8}$/'],
        ['country' => 'Mozambique','code' => '258', 'regex' => '/258\ ?[28]\d{7,8}$/'],
        ['country' => 'Uganda',    'code' => '256', 'regex' => '/256\ ?\d{9}$/'],
    ];
}

/**
 * @param $code
 * @return mixed|null
 */
function getCountryName($code)
{
    $countries = getCountriesData();
    foreach ($countries as $country) {
        if ($country['code'] == $code) {
            return $country['country'];
        }
    }
    return null; // Return null if the country code is not found
}

/**
 * @param $number
 * @return string
 */
function isValidNumber($number)
{
    $countries = getCountriesData();
    foreach ($countries as $country) {
        if (preg_match($country['regex'], $number)) {
            return 'ok';
        }
    }
    return 'Nok'; // Return 'Nok' if no regex pattern matches
}

?>
