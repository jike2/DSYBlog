<?php
class LoginController extends \Yaf\Controller_Abstract{
    public function indexAction() {
        $this->getView()->assign("content", "Hello login");
        //读取配置文件
        $config = \Yaf\Application::app()->getConfig();
        //打印配置信息
        echo '<pre>';
        print_r($config);
        echo '</pre>';
        if ($this->getRequest()->isXmlHttpRequest()) {
            \Yaf\Dispatcher::getInstance()->disableView();
            \Yaf\Dispatcher::getInstance()->autoRender(false);
        }
        return TRUE;
    }

}
