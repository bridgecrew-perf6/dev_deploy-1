<?php

namespace Dev\Web;

use Dev\App\MyVote\Cookie\MyVoteCookie;
use Dev\App\MyVote\Data\Voter\Voter;
use Dev\Controller\DevController;
use Dev\Template\DevTemplate;
use Nemundo\Admin\AdminConfig;
use Nemundo\Admin\Template\BootstrapAdminTemplate;
use Nemundo\Core\Random\UniqueId;
use Nemundo\User\Login\CookieLogin;
use Nemundo\Web\Base\AbstractWeb;
use Nemundo\Web\ResponseConfig;

class DevWeb extends AbstractWeb
{
    public function loadWeb()
    {
        (new CookieLogin())->checkLogin();


        $cookie = new MyVoteCookie();
        if (!$cookie->exists()) {

            $myvoteId=(new UniqueId())->getUniqueId();

            $cookie->setValue($myvoteId);

            $data=new Voter();
            $data->id= $myvoteId;
            $data->name='[Hinterwälder]';
            $data->save();

        }

        //ResponseConfig::$title = '';
        ResponseConfig::$description = '';
        ResponseConfig::$imageUrl = null;

        //AdminConfig::$defaultTemplateClassName = DevTemplate::class;  // AdminTemplate::class;
        AdminConfig::$defaultTemplateClassName =BootstrapAdminTemplate::class;

        AdminConfig::$webController = new DevController();
        (new DevController())->render();

    }
}