<?php
error_reporting(0);

class Neos {

    // Nasa API Key
    // https://api.nasa.gov/planetary/apod?api_key=S16E1fKgpZ4B4qNEaUulY5SCQG6KCDgTae8WIzDE

    public function neos(){

            $today = date("Y-m-d");
            $tomorrow = date("Y-m-d", strtotime("+1 day"));

            // REQUEST CURL TO NSA START
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nasa.gov/neo/rest/v1/feed?api_key=S16E1fKgpZ4B4qNEaUulY5SCQG6KCDgTae8WIzDE&start_date=".$today."&end_date=".$tomorrow."",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "code: DEMO_KEY"
            ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            // REQUEST CURL TO NSA END

            // JSON DECODE FILE TO OBJECT TREAT
            $response = json_decode($response, NULL);

            return $response;

    }
}
