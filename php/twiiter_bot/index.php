<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

 // Lembrar de colocar dentro de $settings suas chaves de acccess token, token secret, consumer key, consumer secret, 
 // caso você não tenha estas chaves veja como criar em https://dev.twitter.com/apps/

function sendTweet($mensaje){
        ini_set('display_errors', 1);
        require_once('TwitterAPIExchange.php');

        // As Chaves reais estao no meu Drive salvas como bot twitter
        $settings = array(
            'oauth_access_token' => "868769558530-P1B2FKQc7awP6diNgICCrJIr3RpDmt-pqwib",
            'oauth_access_token_secret' => "Aidh4CD26Q6QyNEwp88fGkELCu4wjXgCed-wppq",
            'consumer_key' => "1vzwzq7M4mNeTw91X-asydyqu",
            'consumer_secret' => "2Cr1B0mGkyJsyG9MEQa55Kv947cihN4DOyU-oqwo"
        );
       
        $url = 'https://api.twitter.com/1.1/statuses/update.json';
        $requestMethod = 'POST';
        /** POST fields required by the URL above. See relevant docs as above **/
        $postfields = array( 'status' => $mensaje, );
        /** Perform a POST request and echo the response **/
        $twitter = new TwitterAPIExchange($settings);

        return $twitter->buildOauth($url, $requestMethod)->setPostfields($postfields)->performRequest();

}

$today = date("Y-m-d");
$now = date("h-m-s");

$mensaje = "#TEST BOT - ".$today. " - " .$now;
$respuesta = sendTweet($mensaje);
$json = json_decode($respuesta);

echo '<meta charset="utf-8">';
echo "Tweet Enviado por: ".$json->user->name." (@".$json->user->screen_name.")";
echo "<br>";
echo "Tweet: ".$json->text;
echo "<br>";
echo "Tweet ID: ".$json->id_str;
echo "<br>";
echo "Fecha Envio: ".$json->created_at;
?>