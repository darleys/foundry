<?php
/**
 * Foundry
 *
 * LICENSE
 *
Copyright 2013 Virtuous Consulting Services

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
 
 * @Owner     Stephen Darley (http://www.darleys.org)
 * @Author     Stephen Darley (http://www.darleys.org)
 */
class Foundry_Curl {
    public function doCurl($url,$curlPostData=false) {
        if (!function_exists('curl_init')){
            die('Sorry cURL is not installed!');
        }
        $tcurl = curl_init();
        $curlPostOut="";
        foreach($curlPostData as $key=>$value) {$curlPostOut .= $key.'='.$value.'&';}
        rtrim($curlPostOut,'&');
        curl_setopt($tcurl,CURLOPT_URL,$url);
        curl_setopt($tcurl,CURLOPT_RETURNTRANSFER ,true);
        curl_setopt($tcurl,CURLOPT_POST,count($curlPostData));
        curl_setopt($tcurl,CURLOPT_POSTFIELDS,$curlPostOut);
        $rData = curl_exec($tcurl);
        curl_close($tcurl);
        return $rData;
    }//END Function do Curl

    public function doCurlCSO($url,$curlPostData=false,$cSetOpt=false) {
        if (!function_exists('curl_init')){
            die('Sorry cURL is not installed!');
        }
        $tcurl = curl_init();
        $curlPostOut="";
        foreach($curlPostData as $key=>$value) {$curlPostOut .= $key.'='.$value.'&';}
        rtrim($curlPostOut,'&');
        foreach($cSetOpt as $key=>$value) {
            if(key!="CURLOPT_URL")
                curl_setopt($tcurl,$key,$value);
        }
        curl_setopt($tcurl,CURLOPT_URL,$url);
        curl_setopt($tcurl,CURLOPT_POST,count($curlPostData));
        curl_setopt($tcurl,CURLOPT_POSTFIELDS,$curlPostOut);
        $rData = curl_exec($tcurl);
        curl_close($tcurl);
        return $rData;
    }//END Function do Curl with custom Set Opts

}//END Class Curl Management
