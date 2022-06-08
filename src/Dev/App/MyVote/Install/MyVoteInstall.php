<?php
namespace Dev\App\MyVote\Install;
use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Dev\App\MyVote\Data\MyVoteModelCollection;
use Dev\App\MyVote\Application\MyVoteApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class MyVoteInstall extends AbstractInstall {
public function install() {
(new ModelCollectionSetup())->addCollection(new MyVoteModelCollection());
}
}