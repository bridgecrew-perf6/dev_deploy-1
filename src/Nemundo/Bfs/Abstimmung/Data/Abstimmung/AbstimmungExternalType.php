<?php
namespace Nemundo\Bfs\Abstimmung\Data\Abstimmung;
class AbstimmungExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $abstimmungNumber;

/**
* @var \Nemundo\Model\Type\Id\IdType
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = AbstimmungModel::class;
$this->externalTableName = "abstimmung_abstimmung";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->abstimmungNumber = new \Nemundo\Model\Type\Number\NumberType();
$this->abstimmungNumber->fieldName = "abstimmung_number";
$this->abstimmungNumber->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abstimmungNumber->externalTableName = $this->externalTableName;
$this->abstimmungNumber->aliasFieldName = $this->abstimmungNumber->tableName . "_" . $this->abstimmungNumber->fieldName;
$this->abstimmungNumber->label = "Abstimmung Number";
$this->addType($this->abstimmungNumber);

$this->datumId = new \Nemundo\Model\Type\Id\IdType();
$this->datumId->fieldName = "datum";
$this->datumId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->datumId->aliasFieldName = $this->datumId->tableName ."_".$this->datumId->fieldName;
$this->datumId->label = "Datum";
$this->addType($this->datumId);

$this->abstimmung = new \Nemundo\Model\Type\Text\TextType();
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abstimmung->externalTableName = $this->externalTableName;
$this->abstimmung->aliasFieldName = $this->abstimmung->tableName . "_" . $this->abstimmung->fieldName;
$this->abstimmung->label = "Abstimmung";
$this->addType($this->abstimmung);

}
public function loadDatum() {
if ($this->datum == null) {
$this->datum = new \Nemundo\Bfs\Abstimmung\Data\Datum\DatumExternalType(null, $this->parentFieldName . "_datum");
$this->datum->fieldName = "datum";
$this->datum->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->datum->aliasFieldName = $this->datum->tableName ."_".$this->datum->fieldName;
$this->datum->label = "Datum";
$this->addType($this->datum);
}
return $this;
}
}