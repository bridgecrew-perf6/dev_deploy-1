<?php
namespace Dev\App\Wetzikon\Install;
use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Dev\App\Wetzikon\Data\WetzikonModelCollection;
use Dev\App\Wetzikon\Application\WetzikonApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class WetzikonInstall extends AbstractInstall {
public function install() {
(new ModelCollectionSetup())->addCollection(new WetzikonModelCollection());
}
}