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
	class Foundry_DB {
		public static $DBCON;
        private static $fDB;
        private function __construct()  {
        }

        public static function FSingle()  {
            if (!isset(self::$fDB)) {
                $className = __CLASS__;
                self::$fDB = new $className;
            }
            self::connect();
            return self::$fDB;
        }

		public function connect() {
            if(self::$DBCON) {
                echo "!CON";
                return self::$DBCON;
            }else {
                $dbconf = thisDB::$dbconfig;
			    self::$DBCON = mysql_connect($dbconf['host'] . ':' . $dbconf['port'], $dbconf['login'], $dbconf['password'], true);
			    mysql_select_db($dbconf['database'], self::$DBCON);
                return self::$DBCON;
            }

		}

		function close() {
			mysql_close(self::$DBCON);
		}

		public function insert($table,$fields,$values) {
			$fields = implode(',', $fields);
			$values = implode('","', $values);
			$values = '"'.$values.'"';
			mysql_query("INSERT INTO $table ($fields) VALUES ($values)",self::$DBCON);
			echo mysql_error();
		}

		public function delete($table,$where) {
			$inc=0;
			$wheres="";
			if(isset($where))
				$wheres="WHERE ".$where;
			mysql_query("DELETE FROM $table {$wheres}",self::$DBCON);
			echo mysql_error();
		}

		public function update($table,$fields,$values,$where) {
			$inc=0;
			$sets="SET ";
			foreach($fields as $field) {
			  $sets .= $field."=".$values[$inc]."";
			  if($inc < count($fields)-1)
			  $sets .= ',';
			  $inc++;
			}
			$inc=0;
			$wheres="";
			if(isset($where))
				$wheres="WHERE ".$where;


			mysql_query("UPDATE $table {$sets} {$wheres}",self::$DBCON);
			echo mysql_error();
		}



        public function sd() {
            echo "()()()()()";
        }
		public function query($query) {
			$query_handle = mysql_query($query,self::$DBCON);
			return $query_handle;
		}

        public function fetchAll($resource) {
            $mReturn=Array();
            while ($row = mysql_fetch_array($resource, MYSQL_ASSOC)) {
                $mReturn[]=$row;
            }
            return $mReturn;
        }

        public function fetch($resource) {
            $mReturn=Array();
            if ($row = mysql_fetch_array($resource, MYSQL_ASSOC)) {
                $mReturn=$row;
            }
            return $mReturn;
        }
	}
	//'$db->DBCON1="ss";
	
?>