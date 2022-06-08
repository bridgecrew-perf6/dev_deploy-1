<?php
namespace Dev\App\MyVote\Data\Voter;
class VoterModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $name;

protected function loadModel() {
$this->tableName = "myvote_voter";
$this->aliasTableName = "myvote_voter";
$this->label = "Voter";

$this->primaryIndex = new \Nemundo\Db\Index\TextIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "myvote_voter";
$this->id->externalTableName = "myvote_voter";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "myvote_voter_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->name = new \Nemundo\Model\Type\Text\TextType($this);
$this->name->tableName = "myvote_voter";
$this->name->externalTableName = "myvote_voter";
$this->name->fieldName = "name";
$this->name->aliasFieldName = "myvote_voter_name";
$this->name->label = "Name";
$this->name->allowNullValue = false;
$this->name->length = 255;

}
}