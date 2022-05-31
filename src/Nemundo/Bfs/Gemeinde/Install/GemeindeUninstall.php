<?php
namespace Nemundo\Bfs\Gemeinde\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Bfs\Gemeinde\Data\GemeindeModelCollection;
use Nemundo\Bfs\Gemeinde\Application\GemeindeApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class GemeindeUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new GemeindeModelCollection());
}
}