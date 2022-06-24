<?php
namespace Dev\App\Wetzikon\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Dev\App\Wetzikon\Data\WetzikonModelCollection;
use Dev\App\Wetzikon\Application\WetzikonApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class WetzikonUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new WetzikonModelCollection());
}
}