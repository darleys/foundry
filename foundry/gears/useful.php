<?php
/**
 * Foundry
 *
 * LICENSE
 *
Copyright 2010 Stephen Darley

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
	class Foundry_Useful {
		function listCountries($id,$attributes,$selectedIndex) {
			$return_value = html::select($id,$attributes,"");
			$return_value.=html::option("0","Select Country","");
			$countries = Array("Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antarctica","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaidjan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia-Herzegovina","Botswana","Bouvet Island","Brazil","British Indian Ocean Territory","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central African Republic","Chad","Chile","China","Christmas Island","Cocos (Keeling) Islands","Colombia","Comoros","Congo","Cook Islands","Costa Rica","Croatia","Cyprus","Czech Republic","Democratic Republic of Congo","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","Former USSR","France","France (European Territory)","French Guyana","French Southern Territories","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe (French)","Guatemala","Guinea","Guinea Bissau","Guyana","Haiti","Heard and McDonald Islands","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iraq","Ireland","Israel","Italy","Ivory Coast","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Martinique (French)","Mauritania","Mauritius","Mayotte","Mexico","Micronesia","Moldavia","Monaco","Mongolia","Montserrat","Morocco","Mozambique","Myanmar, Union of (Burma)","Namibia","Nauru","Nepal","Netherlands","Netherlands Antilles","Neutral Zone","New Caledonia (French)","New Zealand","Nicaragua","Niger","Nigeria","Niue","Norfolk Island","Northern Mariana Islands","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Pitcairn Island","Poland","Polynesia (French)","Portugal","Qatar","Reunion (French)","Romania","Russian Federation","Rwanda","S. Georgia & S. Sandwich Islands","Saint Helena","Saint Kitts & Nevis Anguilla","Saint Lucia","Saint Pierre and Miquelon","Saint Tome and Principe","Saint Vincent & Grenadines","Samoa","San Marino","Saudi Arabia","Senegal","Serbia-Montenegro","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","Spain","Sri Lanka","Suriname","Svalbard and Jan Mayen Islands","Swaziland","Sweden","Switzerland","Tadjikistan","Taiwan","Tanzania","Thailand","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands","Tuvalu","Uganda","UK","Ukraine","United Arab Emirates","Uruguay","US","USA Minor Outlying Islands","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (British)","Virgin Islands (USA)","Wallis and Futuna Islands","Western Sahara","Yemen","Zambia","Zimbabwe");
			for($inc=1;$inc<=count($countries);$inc++) {
				if($inc == $selectedIndex)
				$return_value.=html::option($inc,$countries[$inc-1],array("selected"=>"selected"));
				else
				$return_value.=html::option($inc,$countries[$inc-1],"");
			}
			$return_value.= html::select_;
			return $return_value;
		}
		function showCountry($id) {
			$countries = Array("Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antarctica","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaidjan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia-Herzegovina","Botswana","Bouvet Island","Brazil","British Indian Ocean Territory","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central African Republic","Chad","Chile","China","Christmas Island","Cocos (Keeling) Islands","Colombia","Comoros","Congo","Cook Islands","Costa Rica","Croatia","Cyprus","Czech Republic","Democratic Republic of Congo","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","Former USSR","France","France (European Territory)","French Guyana","French Southern Territories","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe (French)","Guatemala","Guinea","Guinea Bissau","Guyana","Haiti","Heard and McDonald Islands","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iraq","Ireland","Israel","Italy","Ivory Coast","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Martinique (French)","Mauritania","Mauritius","Mayotte","Mexico","Micronesia","Moldavia","Monaco","Mongolia","Montserrat","Morocco","Mozambique","Myanmar, Union of (Burma)","Namibia","Nauru","Nepal","Netherlands","Netherlands Antilles","Neutral Zone","New Caledonia (French)","New Zealand","Nicaragua","Niger","Nigeria","Niue","Norfolk Island","Northern Mariana Islands","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Pitcairn Island","Poland","Polynesia (French)","Portugal","Qatar","Reunion (French)","Romania","Russian Federation","Rwanda","S. Georgia & S. Sandwich Islands","Saint Helena","Saint Kitts & Nevis Anguilla","Saint Lucia","Saint Pierre and Miquelon","Saint Tome and Principe","Saint Vincent & Grenadines","Samoa","San Marino","Saudi Arabia","Senegal","Serbia-Montenegro","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","Spain","Sri Lanka","Suriname","Svalbard and Jan Mayen Islands","Swaziland","Sweden","Switzerland","Tadjikistan","Taiwan","Tanzania","Thailand","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands","Tuvalu","Uganda","UK","Ukraine","United Arab Emirates","Uruguay","US","USA Minor Outlying Islands","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (British)","Virgin Islands (USA)","Wallis and Futuna Islands","Western Sahara","Yemen","Zambia","Zimbabwe");
			return $countries[$id];
		}

		function listYears($id,$attributes) {
			$return_value = html::select($id,$attributes,"");
			for($inc=date('Y');$inc>=1920;$inc--)
				$return_value.=html::option($inc,$inc,"");
			$return_value.= html::select_;
            return $return_value;
		}

		function listDates($id,$attributes) {
			$return_value = html::select($id,$attributes,"");
			for($inc=1;$inc<=31;$inc++)
				$return_value.=html::option($inc,$inc,"");
			$return_value.= html::select_;
            return $return_value;
		}

		function listMonths($id,$attributes,$dtype=0) {
			$lmonths = array("January","February","March","April","May","June","July","August","September","October","November","December");
			$smonths = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

			$return_value = html::select($id,$attributes,"");
			if($dtype==0)
				$wmonths=$lmonths;
			else
				$wmonths=$smonths;

			for($inc=0;$inc<count($wmonths);$inc++)
				$return_value.=html::option($inc,$wmonths[$inc],"");
			$return_value.= html::select_;
            return $return_value;
		}

        public  function safe_b64encode($string) {
            $data = base64_encode($string);
            $data = str_replace(array('+','/','='),array('-','_',''),$data);
            return $data;
        }

        public function safe_b64decode($string) {
            $data = str_replace(array('-','_'),array('+','/'),$string);
            $mod4 = strlen($data) % 4;
            if ($mod4) {
                $data .= substr('====', $mod4);
            }
            return base64_decode($data);
        }

		function sealit($evalue,$domd5=false) {
            $skey = ENC_KEY;
            if($domd5)
                $skey =md5(ENC_KEY);

            if(!$evalue){return false;}
            $text = $evalue;
            $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
            $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
            $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $skey, $evalue, MCRYPT_MODE_ECB, $iv);
            return trim(self::safe_b64encode($crypttext));
        }

		function unsealit($evalue,$domd5=false) {
            $skey = ENC_KEY;
            if($domd5)
                $skey =md5(ENC_KEY);
            if(!$evalue){return false;}
            $crypttext = self::safe_b64decode($evalue);
            $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
            $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
            $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $skey, $crypttext, MCRYPT_MODE_ECB, $iv);
            return trim($decrypttext);
		}

        function cseal($cvalue) {
            return self::safe_b64encode(serialize($cvalue));
            /*
            $len = strlen($cvalue);
            $bin = '';
            for($i = 0; $i < $len; $i++) {
                $bin .= strlen(decbin(ord($cvalue[$i]))) < 8 ? str_pad(decbin(ord($cvalue[$i])), 8, 0, STR_PAD_LEFT) : decbin(ord($cvalue[$i]));
            }
            return $bin;
            */
        }//END Function casual Seal

        function cunseal($cvalue) {
            return unserialize(self::safe_b64decode($cvalue));
            /*
            $text_str = '';
            $chars = explode("\n", chunk_split(str_replace("\n", '', $cvalue), 8));
            $_I = count($chars);
            for($i = 0; $i < $_I; $text_str .= chr(bindec($chars[$i])), $i++);
            return $text_str;
            */
        }//END Function casual UNSeal

		function junk() {
			return true;
		}



	}


?>