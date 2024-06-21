<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_request($endpoint, $additional_points = null)
    {
        $endpoint = $endpoint . "?api_key=" . env("API_KEY") . $additional_points;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $request_data,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer " . env("API_KEY")
            ),
        ));

        $response = curl_exec($curl);
        return $response;
        die;

        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_URL, $endpoint);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($curl, CURLOPT_HEADER, array("Content-Type: application/json"));
        // $response = curl_exec($curl);
        // // $error_msg = "";
        // if (curl_errno($curl)) {
        //     $error_msg = curl_error($curl);
        // }
        // curl_close($curl);
    }

    // public function post_request($endpoint, $request_data = null)
    // {
    //     $curl = curl_init();
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => $endpoint,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => $request_data,
    //         CURLOPT_HTTPHEADER => array(
    //             "Authorization: Bearer " . env("API_KEY")
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     echo $response;

    //     // $ch = curl_init($url);
    //     // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //     //     'Content-Type: application/json',
    //     //     'Authorization: Bearer ' . env("API_KEY")
    //     // ));
    //     // $data = curl_exec($ch);
    //     // // $info = curl_getinfo($ch);
    //     // curl_close($ch);
    //     // return $data;
    // }
}
