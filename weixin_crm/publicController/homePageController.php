<?php

class homePageController {

    // 用户列表 界面

    public function homepage() {



        $_ENV['smarty']->setDirTemplates('');

        $_ENV['smarty']->display('index');
    }

}

?>