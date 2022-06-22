<?php

namespace Dev\Web;

use Dev\Controller\DevController;
use Dev\Template\DevTemplate;
use Nemundo\Admin\AdminConfig;
use Nemundo\User\Login\CookieLogin;
use Nemundo\Web\Base\AbstractWeb;
use Nemundo\Web\ResponseConfig;
use Nemundo\WebLog\Builder\WebLogBuilder;

class DevWeb extends AbstractWeb
{
    public function loadWeb()
    {

        $log = new WebLogBuilder();

        (new CookieLogin())->checkLogin();


        ResponseConfig::$description = '';
        ResponseConfig::$imageUrl = null;

        //AdminConfig::$logoUrl = '/img/nemundo.svg';
        //AdminConfig::$logoUrl = '/img/aufrecht.svg';
        AdminConfig::$logoText = 'Nemundo';


        //AdminConfig::$defaultStylesheet=null;
        AdminConfig::$defaultStylesheet = '/css/dev/style.css';

        AdminConfig::$defaultTemplateClassName = DevTemplate::class;
        AdminConfig::$webController = new DevController();

        (new DevController())->render();

        $log->createWebLog();

    }
}