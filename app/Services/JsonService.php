<?php
namespace App\Services;
/**
 * Class JsonService
 * @package App\Services
 */
class JsonService
{
    /**
     * @param $resultCode
     * @param $resultContents
     */
    public static function reJsonResponse($resultCode, $resultContents)
    {
        $response = array();
        $response = array_merge($response, array('resultCode' => $resultCode));
        $response = array_merge($response, array('resultContents' => $resultContents));
        $json = json_encode($response);
        http_response_code(200);
        header(config('const.responseHeader1'));
        header(config('const.responseHeader2'));
        header(config('const.responseHeader3'));
        header(config('const.responseHeader4'));
        header(config('const.responseHeader5').strlen($json));
        echo $json;
        exit();
    }
}
