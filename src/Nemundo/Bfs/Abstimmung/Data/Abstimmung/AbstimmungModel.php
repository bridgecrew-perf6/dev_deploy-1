<?php
namespace Nemundo\Bfs\Abstimmung\Data\Abstimmung;
class AbstimmungModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $abstimmungNumber;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $datumId;

/**
* @var \Nemundo\Bfs\Abstimmung\Data\Datum\DatumExternalType
*/
public $datum;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $abstimmung;

protected function loadModel() {
$this->tableName = "abstimmung_abstimmung";
$this->aliasTableName = "abstimmung_abstimmung";
$this->label = "Abstimmung";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "abstimmung_abstimmung";
$this->id->externalTableName = "abstimmung_abstimmung";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "abstimmung_abstimmung_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->abstimmungNumber = new \Nemundo\Model\Type\Number\NumberType($this);
$this->abstimmungNumber->tableName = "abstimmung_abstimmung";
$this->abstimmungNumber->externalTableName = "abstimmung_abstimmung";
$this->abstimmungNumber->fieldName = "abstimmung_number";
$this->abstimmungNumber->aliasFieldName = "abstimmung_abstimmung_abstimmung_number";
$this->abstimmungNumber->label = "Abstimmung Number";
$this->abstimmungNumber->allowNullValue = false;

$this->datumId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->datumId->tableName = "abstimmung_abstimmung";
$this->datumId->fieldName = "datum";
$this->datumId->aliasFieldName = "abstimmung_abstimmung_datum";
$this->datumId->label = "Datum";
$this->datumId->allowNullValue = false;

$this->abstimmung = new \Nemundo\Model\Type\Text\TextType($this);
$this->abstimmung->tableName = "abstimmung_abstimmung";
$this->abstimmung->externalTableName = "abstimmung_abstimmung";
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->aliasFieldName = "abstimmung_abstimmung_abstimmung";
$this->abstimmung->label = "Abstimmung";
$this->abstimmung->allowNullValue = false;
$this->abstimmung->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "abstimmung_number";
$index->addType($this->abstimmungNumber);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "datum";
$index->addType($this->datumId);

$index = new \Nemundo\Model\Definition\Index\ModelSearchIndex($this);
$index->indexName = "abstimmung";
$index->addType($this->abstimmung);

}
public function loadDatum() {
if ($this->datum == null) {
$this->datum = new \Nemundo\Bfs\Abstimmung\Data\Datum\DatumExternalType($this, "abstimmung_abstimmung_datum");
$this->datum->tableName = "abstimmung_abstimmung";
$this->datum->fieldName = "datum";
$this->datum->aliasFieldName = "abstimmung_abstimmung_datum";
$this->datum->label = "Datum";
}
return $this;
}
}