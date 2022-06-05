<?php

namespace Dev\Web;

use Dev\Controller\DevController;
use Dev\Template\DevTemplate;
use Nemundo\Admin\AdminConfig;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\User\Login\CookieLogin;
use Nemundo\Web\Base\AbstractWeb;
use Nemundo\Web\ResponseConfig;

class DevWeb extends AbstractWeb
{
    public function loadWeb()
    {
        (new CookieLogin())->checkLogin();
        //ResponseConfig::$title = '';
        ResponseConfig::$description = '';
        ResponseConfig::$imageUrl = null;


        AdminConfig::$defaultTemplateClassName = DevTemplate::class;  // AdminTemplate::class;
        AdminConfig::$webController = new DevController();
        (new DevController())->render();

    }
}