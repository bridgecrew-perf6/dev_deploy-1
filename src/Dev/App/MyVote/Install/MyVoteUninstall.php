<?php
namespace Dev\App\MyVote\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Dev\App\MyVote\Data\MyVoteModelCollection;
use Dev\App\MyVote\Application\MyVoteApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class MyVoteUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new MyVoteModelCollection());
}
}