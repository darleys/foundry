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
 * @copyright  Copyright (c) 2013 Virtuous Consulting Services.  (http://www.virtuouscs.com)
 * @Owner     Darley Stephen (http://www.darleys.org)
 * @Author     Darley Stephen (http://www.darleys.org)
 */
class Foundry_Local_Broker extends Foundry_Local_Service {
    protected $oSmarty;

    public function __construct() {
        $this->oSmarty =  Foundry_RObjects::get("smarty");
    }

    protected function assign($theKey,$theValue){
        $this->oSmarty->assign($theKey,$theValue);
    }

    protected function display($theTemplate){
        $this->oSmarty->display($theTemplate);
    }
}
