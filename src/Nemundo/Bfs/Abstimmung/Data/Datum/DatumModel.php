<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
class DatumModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $datum;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $jahr;

protected function loadModel() {
$this->tableName = "abstimmung_datum";
$this->aliasTableName = "abstimmung_datum";
$this->label = "Datum";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "abstimmung_datum";
$this->id->externalTableName = "abstimmung_datum";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "abstimmung_datum_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->datum = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->datum->tableName = "abstimmung_datum";
$this->datum->externalTableName = "abstimmung_datum";
$this->datum->fieldName = "datum";
$this->datum->aliasFieldName = "abstimmung_datum_datum";
$this->datum->label = "Datum";
$this->datum->allowNullValue = false;

$this->jahr = new \Nemundo\Model\Type\Number\NumberType($this);
$this->jahr->tableName = "abstimmung_datum";
$this->jahr->externalTableName = "abstimmung_datum";
$this->jahr->fieldName = "jahr";
$this->jahr->aliasFieldName = "abstimmung_datum_jahr";
$this->jahr->label = "Jahr";
$this->jahr->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "datum";
$index->addType($this->datum);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "jahr";
$index->addType($this->jahr);

}
}