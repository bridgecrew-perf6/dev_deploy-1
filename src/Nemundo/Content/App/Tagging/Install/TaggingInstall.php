<?php

namespace Nemundo\Content\App\Tagging\Install;


use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\App\WebService\Setup\ServiceRequestSetup;
use Nemundo\Content\App\Tagging\Data\TaggingModelCollection;
use Nemundo\Content\App\Tagging\Service\TaggingListService;
use Nemundo\Content\App\Tagging\Service\TaggingPostService;
use Nemundo\Model\Setup\ModelCollectionSetup;

class TaggingInstall extends AbstractInstall
{

    public function install()
    {

        (new ModelCollectionSetup())
            ->addCollection(new TaggingModelCollection());

        (new ServiceRequestSetup())
            ->addService(new TaggingListService())
            ->addService(new TaggingPostService());

    }

}