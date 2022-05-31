<?php

namespace Parlament\Install;

use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Parlament\Data\ParlamentModelCollection;

class ParlamentUninstall extends AbstractUninstall
{
    public function uninstall()
    {
        (new ModelCollectionSetup())->removeCollection(new ParlamentModelCollection());
    }
}