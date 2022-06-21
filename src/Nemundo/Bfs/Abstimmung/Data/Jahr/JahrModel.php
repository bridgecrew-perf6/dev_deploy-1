<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
class JahrModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

protected function loadModel() {
$this->tableName = "abstimmung_jahr";
$this->aliasTableName = "abstimmung_jahr";
$this->label = "Jahr";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "abstimmung_jahr";
$this->id->externalTableName = "abstimmung_jahr";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "abstimmung_jahr_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

}
}