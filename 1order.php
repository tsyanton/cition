  $access_token = '<1793592089:AAF4e0vwMyjkkRQ8ah6cZk0pHIXiiT1OSmo>';
$api = 'https://api.telegram.org/bot' . $access_token;


$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];
switch($message) {
case '/start':
sendMessage($chat_id, "Ваш cID" . $chat_id);
break;
}
//function sendMessage($chat_id, $message) {
  //file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
//}