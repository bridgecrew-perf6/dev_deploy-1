<?php
namespace Dev\App\MyVote\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class MyVoteModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Dev\App\MyVote\Data\Vote\VoteModel());
$this->addModel(new \Dev\App\MyVote\Data\Voter\VoterModel());
}
}