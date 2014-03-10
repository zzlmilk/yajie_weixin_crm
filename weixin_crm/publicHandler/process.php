<?php

include '../include.php';

header("Content-type:text/html;charset=utf-8");


if (isset($_GET['login'])) {
    session_unset();
    echo '<script type="text/javascript">window.location="../login.html";</script>';
}

if (isset($_POST['user'])) {
    $admin = new admin();
    $ad['admin_username'] = $_POST['user'];
    $ad['admin_password'] = $_POST['password'];
    $admin->initialize($ad);
    if (count($admin->vars) > 0) {
        $admin->vars['last_time'] = date('Y-m-d H:i:s');
        $admin->updateVars();
        $_SESSION['user_id'] = $admin->vars['admin_id'];
        $_SESSION['user_name'] = $admin->vars['admin_username'];
        $_SESSION['version'] = $_REQUEST['version'];
        echo '<script type="text/javascript">window.location="../index.php";</script>';
    } else {
        echo '<script type="text/javascript">alert("用户名或密码错误！");window.location="../login.html";</script>';
    }
}


?>
<?php

function imageSize($key) {
    $company_size['company_photo'] = '110,80';
    return $company_size[$key];
}

function deldir1() {  //删除图片
    $dh = opendir(NEWSIndustryCompanyIndustryPath);
    while ($file = readdir($dh)) {
        if ($file != "." && $file != "..") {
            $fullpath = NEWSIndustryCompanyIndustryPath . $file;
            if (!is_dir($fullpath)) {
                @unlink($fullpath);
            }
        }
    }
    @closedir($dh);
    return 1;
}

function deldir($dir) {  //删除空文件夹
    $dh = @opendir($dir);
    while ($file = @readdir($dh)) {
        if ($file != "." && $file != "..") {
            $fullpath = $dir . "/" . $file;
            if (!is_dir($fullpath)) {
                @unlink($fullpath);
            } else {
                @deldir($fullpath);
            }
        }
    }
    @closedir($dh);
    if (@rmdir($dir)) {
        return true;
    } else {
        return false;
    }
}

?>