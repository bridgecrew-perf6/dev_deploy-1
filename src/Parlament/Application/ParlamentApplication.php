<?php

namespace Parlament\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Parlament\Data\ParlamentModelCollection;
use Parlament\Install\ParlamentInstall;
use Parlament\Install\ParlamentUninstall;
use Parlament\Site\ParlamentSite;

class ParlamentApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Parlament';
        $this->applicationId = '0a5503a7-af3e-4f7d-9352-8be89988d5f2';
        $this->modelCollectionClass = ParlamentModelCollection::class;
        $this->installClass = ParlamentInstall::class;
        $this->uninstallClass = ParlamentUninstall::class;
        $this->appSiteClass = ParlamentSite::class;
    }
}