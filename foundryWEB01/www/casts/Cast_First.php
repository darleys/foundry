<?php
class Cast_First extends Foundry_Local_Broker{
    function getImages() {
        $imageRES = json_decode(rawurldecode(base64_decode(Foundry_Curl::doCurl(PROCESS_IMAGES_LINK."/fetchImages@molds_images"))),true);

        $this->assign("imageRES",$imageRES);
        include_once CORE_PATH.DS.'casts/index.php';
        $this->display (TEMPLATES_DIR.DS.'first.tpl');
        //include_once CORE_PATH.DS.'casts/footer.php';
    }//END Function getImages


}//END Cast_First