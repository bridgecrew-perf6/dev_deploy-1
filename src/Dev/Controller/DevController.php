<?php

namespace Dev\Controller;


use Dev\Site\HomeSite;
use Dev\Site\TestSite;
use Nemundo\App\Application\Site\AdminSite;
use Nemundo\App\Application\Site\AppSite;

use Nemundo\App\UserAction\Site\LoginSite;
use Nemundo\App\UserAction\Site\LogoutSite;
use Nemundo\App\WebService\Site\ServiceRequestSite;
use Nemundo\Meteo\Emagramm\Site\EmagrammSite;
use Nemundo\Meteo\Isd\Site\IsdSite;
use Nemundo\Web\Controller\AbstractWebController;
use Parlament\Site\Abstimmung\AbstimmungSite;
use Parlament\Site\CrawlerLogSite;
use Parlament\Site\ParlamentSite;
use Parlament\Site\Ratsmitglied\RatsmitgliedSite;
use Parlament\Site\Stream\StreamSite;


class DevController extends AbstractWebController
{
    protected function loadController()
    {

        new HomeSite($this);

        //new HomeSite($this);

        /*new LoginSite($this);
        new TestSite($this);

        new AppSite($this);
        new AdminSite($this);*/

        //new IsdSite($this);


        new ParlamentSite($this);
        //new StreamSite($this);
        new RatsmitgliedSite($this);


/*
        new \Nemundo\Bfs\Abstimmung\Site\AbstimmungSite($this);
        new EmagrammSite($this);*/

        //new CrawlerLogSite($this);

        //new LogoutSite($this);


        new ServiceRequestSite($this);





        //new ParlamentSite($this);
        /*new RatsmitgliedSite($this);
        new AbstimmungSite($this);
        new GeschaeftSite($this);*/

    }
}