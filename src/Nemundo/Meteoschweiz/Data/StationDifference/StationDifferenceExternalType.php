<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifferenceExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $station1Id;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType
*/
public $station1;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $station2Id;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType
*/
public $station2;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = StationDifferenceModel::class;
$this->externalTableName = "meteoschweiz_station_difference";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->station1Id = new \Nemundo\Model\Type\Id\IdType();
$this->station1Id->fieldName = "station_1";
$this->station1Id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->station1Id->aliasFieldName = $this->station1Id->tableName ."_".$this->station1Id->fieldName;
$this->station1Id->label = "Station 1";
$this->addType($this->station1Id);

$this->station2Id = new \Nemundo\Model\Type\Id\IdType();
$this->station2Id->fieldName = "station_2";
$this->station2Id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->station2Id->aliasFieldName = $this->station2Id->tableName ."_".$this->station2Id->fieldName;
$this->station2Id->label = "Station 2";
$this->addType($this->station2Id);

}
public function loadStation1() {
if ($this->station1 == null) {
$this->station1 = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType(null, $this->parentFieldName . "_station_1");
$this->station1->fieldName = "station_1";
$this->station1->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->station1->aliasFieldName = $this->station1->tableName ."_".$this->station1->fieldName;
$this->station1->label = "Station 1";
$this->addType($this->station1);
}
return $this;
}
public function loadStation2() {
if ($this->station2 == null) {
$this->station2 = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType(null, $this->parentFieldName . "_station_2");
$this->station2->fieldName = "station_2";
$this->station2->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->station2->aliasFieldName = $this->station2->tableName ."_".$this->station2->fieldName;
$this->station2->label = "Station 2";
$this->addType($this->station2);
}
return $this;
}
}