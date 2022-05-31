<?php
namespace Parlament\Web;
use Nemundo\Web\Base\AbstractWeb;
use Nemundo\User\Login\CookieLogin;
use Nemundo\Web\ResponseConfig;
use Nemundo\Admin\AdminConfig;
class ParlamentWeb extends AbstractWeb {
public function loadWeb() {
(new CookieLogin())->checkLogin();
ResponseConfig::$title = '';
ResponseConfig::$description = '';
ResponseConfig::$imageUrl = null;


AdminConfig::$defaultTemplateClassName = DefaultContentTemplate::class;
AdminConfig::$webController = new ...Controller();
(new ...Controller())->render();

}
}