<?php
class LoginController extends \Yaf\Controller_Abstract{
    public function indexAction(){
        $this->getView()->assign('content',"In App Login");
        return true;
    }
}
