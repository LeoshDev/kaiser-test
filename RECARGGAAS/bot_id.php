<?php
  $bottoken= "5079633538:AAGMmy3pyni92Vz7_m2jMP6NSpE0Xakrl50";
  $chatid ="1700058002";
  
  define('BOT_TOKEN', $bottoken);
  define('CHAT_ID', $chatid);
  define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');
  function enviar_telegram($enviar){
    $queryArray = [
      'chat_id' => CHAT_ID,
      'text' => $enviar,
    ];
    $url = 'https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'. http_build_query($queryArray)."&parse_mode=html";
    $result = file_get_contents($url);
  }
enviar_telegram($enviar);
?>
