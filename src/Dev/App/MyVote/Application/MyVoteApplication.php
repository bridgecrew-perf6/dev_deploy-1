<?php
namespace Dev\App\MyVote\Application;
use Dev\App\MyVote\Install\MyVoteInstall;
use Nemundo\App\Application\Type\AbstractApplication;
class MyVoteApplication extends AbstractApplication {
protected function loadApplication() {
$this->application = 'MyVote';
$this->applicationId = 'fbefe49c-37dd-4f56-bbb1-eed0029178a0';
$this->installClass=MyVoteInstall::class;
}
}