<?php

namespace Dev\App\Wetzikon\Install;

use Dev\App\Wetzikon\Service\PoiSearchService;
use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\App\WebService\Setup\ServiceRequestSetup;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Dev\App\Wetzikon\Data\WetzikonModelCollection;
use Dev\App\Wetzikon\Application\WetzikonApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;

class WetzikonInstall extends AbstractInstall
{
    public function install()
    {
        (new ModelCollectionSetup())->addCollection(new WetzikonModelCollection());

        (new ServiceRequestSetup())->addService(new PoiSearchService());


    }
}