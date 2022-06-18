<?php

namespace Dev\App\MyVote\Install;

use Dev\App\MyVote\Data\MyVoteModelCollection;
use Dev\App\MyVote\Service\PlenumPostService;
use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\App\WebService\Setup\ServiceRequestSetup;
use Nemundo\Model\Setup\ModelCollectionSetup;

class MyVoteInstall extends AbstractInstall
{
    public function install()
    {
        (new ModelCollectionSetup())->addCollection(new MyVoteModelCollection());

        (new ServiceRequestSetup())->addService(new PlenumPostService());

    }
}