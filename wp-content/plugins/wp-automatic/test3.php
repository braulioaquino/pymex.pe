<?php



$raw= file_get_contents('test.txt');

echo $raw;

echo '------------------';

echo stripslashes($raw);


$json_string = '["' . stripslashes($raw)  . '"]';

var_dump(json_decode($json_string));
exit;
$arr = array('fake');
print_r(json_encode($arr));
exit;

$test = "fake";


echo time();
exit;

echo strtotime ('2020-11-13 18:00:00 GMT+02');
exit;

$wrong_utc_timestamp = 1604865600;
$date= gmdate('Y-m-d H:i:s', $wrong_utc_timestamp);

echo $date;
echo  '<br>' . strtotime($date . ' EST');

exit;

$date_time = "November 9, 2020  3 AM ";

echo 'dte:'  . strtotime($date_time);
exit;

echo file_get_contents('test.txt');
exit;

//curl ini
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT,20);
curl_setopt($ch, CURLOPT_REFERER, 'http://www.bing.com/');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
curl_setopt($ch, CURLOPT_MAXREDIRS, 5); // Good leeway for redirections.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Many login forms redirect at least once.
curl_setopt($ch, CURLOPT_COOKIEJAR , "cookie.txt");

//curl post
$curlurl="https://m.facebook.com/groups/1432743533609453?&multi_permalinks";
$curlpost="m_sess=&fb_dtsg=AQGhmhDJyYTy%3AAQHsnhmXfBIk&__csr=&__req=d&__a="; // q=urlencode(data)
curl_setopt($ch, CURLOPT_URL, $curlurl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlpost); 
curl_setopt($ch,CURLOPT_COOKIE,'c_user=1475120237; xs=2%3A2CFvwwPh6OYlMw%3A2%3A1599946542%3A20445%3A6570%3A%3AAcViuOxQJJ1qFqIepSkoPZlkMHuPnc6lAtVqlPkzCqQ1;');

$x='error';
$exec=curl_exec($ch);
$x=curl_error($ch);

echo $exec.$x;
exit;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://m.facebook.com/groups/1432743533609453?&multi_permalinks",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "m_sess=&fb_dtsg=AQGhmhDJyYTy%3AAQHsnhmXfBIk&__csr=&__req=d&__a=",
  CURLOPT_HTTPHEADER => array(
   
  
    "user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.80 Safari/537.36",

   
  
   
 
    
   
    "referer: https://m.facebook.com/groups/",
  		"accept-language: en-US,en;q=0.9,ar;q=0.8",
  		"cookie:  c_user=1475120237; xs=2%3A2CFvwwPh6OYlMw%3A2%3A1599946542%3A20445%3A6570%3A%3AAcViuOxQJJ1qFqIepSkoPZlkMHuPnc6lAtVqlPkzCqQ1; "
  ),
));

$response = curl_exec($curl);

print_r( json_decode(str_replace( 'for (;;);' , '' , $response )) );

curl_close($curl);
echo $response;
