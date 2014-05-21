<?php

class topController {

    // 用户列表 界面

    public function top() {

        
       
      
        $name = getWeek();


        

     


        $_ENV['smarty']->setDirTemplates('');


        $_ENV['smarty']->assign('week',$name);

        $_ENV['smarty']->display('top');
    }

}

?>