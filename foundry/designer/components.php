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
	class form {
		const me_="</form>";
		public function me($name,$action,$method,$target,$attributes) {
			$return_value = "<form id='".$name."' name='".$name."' action='".$action."' method='".
							$method."' target='".$target."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}

		public function closeme() {
			$return_value ="</form>";
			return $return_value;
		}
		public function inputText($name,$attributes) {
			$return_value = "<input type='text' id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}
		
		public function inputPassword($name,$attributes) {
			$return_value = "<input type='password' id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}		

		public function inputFile($name,$attributes) {
			$return_value = "<input type='file' id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}

		public function inputHidden($name,$attributes) {
			$return_value = "<input type='hidden' id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}

		public function inputSubmit($name,$attributes) {
			$return_value = "<input type='submit' id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}
		public function inputButton($name,$attributes) {
			$return_value = "<input type='button' id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}
		public function inputCheckbox($name,$attributes) {
			$return_value = "<input type='checkbox' id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}


	}

	class html {
		const br="<br>";
		const span_="</span>";
		const div_="</div>";
		const select_="</select>";
		const nbsp="&nbsp";
		function hr() {
			$return_value = "<hr ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}
		function img($name,$src,$alt,$attributes) {
			$return_value = "<img id='".$name."' name='".$name."' src='".$src."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}

		function a($name,$href,$attributes,$link) {
			$return_value = "<a id='".$name."' name='".$name."' href='".$href."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			$return_value .= $link . "</a>";
			return $return_value;
		}

		function iframe($name,$src,$attributes,$inline) {
			$return_value = "<iframe id='".$name."' name='".$name."' src='".$src."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			$return_value .= $inline . "</iframe>";
			return $return_value;
		}
		function div($name,$attributes,$content) {
			$return_value = "<div id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			$return_value .= $content. "</div>";;
			return $return_value;
		}



		function span($name,$attributes,$content) {
			$return_value = "<span id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			$return_value .= $content. "</span>";;
			return $return_value;
		}

		function textarea($name,$attributes,$content) {
			$return_value = "<textarea id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			$return_value .= $content . "</textarea>";
			return $return_value;
		}

		function select($name,$attributes) {
			$return_value = "<select id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			return $return_value;
		}

		function option($value,$title,$attributes) {
			$return_value = "<option value='".$value."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			$return_value .= $title."</option>";
			return $return_value;
		}


		function button($name,$attributes,$content) {
			$return_value = "<button id='".$name."' name='".$name."' ";
			if(!$attributes==null)
			foreach($attributes as $attribute_name => $attribute_value) {
				$return_value .= $attribute_name ."=\"".$attribute_value."\" ";
			}
			$return_value .= " >";
			$return_value .= $content . "</button>";
			return $return_value;
		}

	}
	
?>