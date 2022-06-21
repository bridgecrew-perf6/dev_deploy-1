<?php
namespace Parlament\Data\AbstimmungDatum;
class AbstimmungDatumModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $datum;

protected function loadModel() {
$this->tableName = "parlament_abstimmung_datum";
$this->aliasTableName = "parlament_abstimmung_datum";
$this->label = "Abstimmung Datum";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_abstimmung_datum";
$this->id->externalTableName = "parlament_abstimmung_datum";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_abstimmung_datum_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->datum = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->datum->tableName = "parlament_abstimmung_datum";
$this->datum->externalTableName = "parlament_abstimmung_datum";
$this->datum->fieldName = "datum";
$this->datum->aliasFieldName = "parlament_abstimmung_datum_datum";
$this->datum->label = "Datum";
$this->datum->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "datum";
$index->addType($this->datum);

}
}