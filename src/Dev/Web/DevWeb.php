<?php

namespace Dev\Web;

use Dev\Controller\DevController;
use Dev\Template\DevTemplate;
use Nemundo\Admin\AdminConfig;
use Nemundo\User\Login\CookieLogin;
use Nemundo\Web\Base\AbstractWeb;
use Nemundo\Web\ResponseConfig;

class DevWeb extends AbstractWeb
{
    public function loadWeb()
    {

        (new CookieLogin())->checkLogin();

        ResponseConfig::$description = '';
        //ResponseConfig::$imageUrl = '/img/_wetzikon.png';  // null;

        //AdminConfig::$logoUrl = '/img/nemundo.svg';
        //AdminConfig::$logoUrl = '/img/aufrecht.svg';

        AdminConfig::$logoUrl = '/img/dev/wetzikon.png';  // null;
        //AdminConfig::$logoText = 'Dev';

        //AdminConfig::$defaultStylesheet=null;
        AdminConfig::$defaultStylesheet = '/css/dev/style.css';

        AdminConfig::$defaultTemplateClassName = DevTemplate::class;
        AdminConfig::$webController = new DevController();

        (new DevController())->render();

    }
}