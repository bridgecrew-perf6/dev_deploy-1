<?php

namespace Dev\Controller;


use Dev\Site\HomeSite;
use Dev\Site\TestSite;
use Nemundo\App\Application\Site\AdminSite;
use Nemundo\App\Application\Site\AppSite;
use Nemundo\App\Scheduler\Site\SchedulerSite;
use Nemundo\App\UserAction\Site\LoginSite;
use Nemundo\App\UserAction\Site\LogoutSite;
use Nemundo\App\UserAction\Site\UserActionSite;
use Nemundo\App\WebService\Site\ServiceRequestSite;
use Nemundo\Content\App\Feed\Site\FeedSite;
use Nemundo\Content\Site\ContentSite;
use Nemundo\Meteoschweiz\Site\MeteoschweizSite;
use Nemundo\Web\Controller\AbstractWebController;


class DevController extends AbstractWebController
{
    protected function loadController()
    {

        new HomeSite($this);

        new LoginSite($this);
        new TestSite($this);

        new MeteoschweizSite($this);
        new FeedSite($this);

        //new ContentSite($this);
        //new SchedulerSite($this);

        new AppSite($this);
        new AdminSite($this);
        //new SrfEpisodeSite($this);

        //new LogoutSite($this);

        new UserActionSite($this);
        new ServiceRequestSite($this);

    }
}