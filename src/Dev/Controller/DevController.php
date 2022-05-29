<?php

namespace Dev\Controller;


use Dev\Site\TestSite;
use Nemundo\App\Application\Site\AdminSite;
use Nemundo\App\Application\Site\AppSite;
use Nemundo\App\UserAction\Site\HomeSite;
use Nemundo\App\UserAction\Site\LoginSite;
use Nemundo\App\WebService\Site\ServiceRequestSite;
use Nemundo\Meteo\Isd\Site\IsdSite;
use Nemundo\Web\Controller\AbstractWebController;
use Parlament\Site\AbstimmungSite;
use Parlament\Site\GeschaeftSite;
use Parlament\Site\ParlamentSite;
use Parlament\Site\RatsmitgliedSite;

class DevController extends AbstractWebController
{
    protected function loadController()
    {


        new HomeSite($this);

        new TestSite($this);

        new AppSite($this);
        new AdminSite($this);

        new IsdSite($this);


        new ServiceRequestSite($this);

        //new LoginSite($this);



        //new ParlamentSite($this);
        /*new RatsmitgliedSite($this);
        new AbstimmungSite($this);
        new GeschaeftSite($this);*/

    }
}