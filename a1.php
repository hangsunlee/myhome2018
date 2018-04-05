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

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);// ?�속 url ?�보 ?�정
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE); // Request ???�??결과값을 받아?�는지 체크 - exec ?�수�??�한 반환값을 ?�격지 ?�용??받는??

curl_setopt($ch, CURLOPT_HEADER, FALSE); // ?�더?�보�?가?�오?��????�??체크 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); // 받는방식
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");    
$response = curl_exec($ch); // ?�션???�행???�순??미리?�의???�션?�행
curl_close($ch);
//var_dump($response); // 값전??
 // 리소?��? 비우�? ?�러번호리턴, ?�들??�� 
print $response;


?>