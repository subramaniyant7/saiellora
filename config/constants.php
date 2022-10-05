<?php
    $protocol = 'http';
    define('FRONTEND','frontend');
    define('FRONTENDJS','frontend/js');
    define('ADMIN','admin');
    define('ADMINFONTS','admin/fonts');
    define('ADMINCSS','admin/css');
    define('ADMINJS','admin/js');
    define('ADMINIMAGE','admin/img');
    define('ADMINUPLOAD','admin/uploads');
    if(isset($_SERVER["SERVER_PROTOCOL"])){
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
        define('SITEURL',$protocol.'://'.$_SERVER['HTTP_HOST'].'/');
    }
    $siteUrl = $protocol.'://www.saielloravilakkukadai.com/';
    define('FRONTENDURL',$siteUrl);
    define('ADMINURL','/cpanel_admin');
?>
