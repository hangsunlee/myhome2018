<?php

ob_start();
       $ch = curl_init();

       //$code=$_GET['busname'];//?�류?�id
//header("Content-Type: text/html; charset=UTF-8");
$url = 'http://opendata.busan.go.kr/openapi/service/RentBike/getRentBikeInfoDetail'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=P2KPDQ0%2BcuVn1H3h2jHnTdRaEy8u4Z7RHPBuN7sVvUYDhOSd5Y1%2FpEJl4jQXwOc9iXaJvRdK2vM182cIb5afXg%3D%3D';
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /*한 페이지 결과 수*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/
$queryParams .= '&' . urlencode('totalCount') . '=' . urlencode('12'); /*데이터 총 개수*/
curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE); 
curl_setopt($ch, CURLOPT_HEADER, FALSE); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); // 받는방식
$response = curl_exec($ch); 
curl_close($ch);

print $response;


?>