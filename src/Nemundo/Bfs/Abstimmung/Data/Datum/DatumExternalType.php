<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
class DatumExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = DatumModel::class;
$this->externalTableName = "abstimmung_datum";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->datum = new \Nemundo\Model\Type\DateTime\DateType();
$this->datum->fieldName = "datum";
$this->datum->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->datum->externalTableName = $this->externalTableName;
$this->datum->aliasFieldName = $this->datum->tableName . "_" . $this->datum->fieldName;
$this->datum->label = "Datum";
$this->addType($this->datum);

$this->jahr = new \Nemundo\Model\Type\Number\NumberType();
$this->jahr->fieldName = "jahr";
$this->jahr->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->jahr->externalTableName = $this->externalTableName;
$this->jahr->aliasFieldName = $this->jahr->tableName . "_" . $this->jahr->fieldName;
$this->jahr->label = "Jahr";
$this->addType($this->jahr);

}
}