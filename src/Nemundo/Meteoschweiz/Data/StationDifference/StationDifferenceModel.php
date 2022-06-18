<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifferenceModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $station1Id;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType
*/
public $station1;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $station2Id;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType
*/
public $station2;

protected function loadModel() {
$this->tableName = "meteoschweiz_station_difference";
$this->aliasTableName = "meteoschweiz_station_difference";
$this->label = "Station Difference";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "meteoschweiz_station_difference";
$this->id->externalTableName = "meteoschweiz_station_difference";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "meteoschweiz_station_difference_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->station1Id = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->station1Id->tableName = "meteoschweiz_station_difference";
$this->station1Id->fieldName = "station_1";
$this->station1Id->aliasFieldName = "meteoschweiz_station_difference_station_1";
$this->station1Id->label = "Station 1";
$this->station1Id->allowNullValue = true;

$this->station2Id = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->station2Id->tableName = "meteoschweiz_station_difference";
$this->station2Id->fieldName = "station_2";
$this->station2Id->aliasFieldName = "meteoschweiz_station_difference_station_2";
$this->station2Id->label = "Station 2";
$this->station2Id->allowNullValue = true;

}
public function loadStation1() {
if ($this->station1 == null) {
$this->station1 = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType($this, "meteoschweiz_station_difference_station_1");
$this->station1->tableName = "meteoschweiz_station_difference";
$this->station1->fieldName = "station_1";
$this->station1->aliasFieldName = "meteoschweiz_station_difference_station_1";
$this->station1->label = "Station 1";
}
return $this;
}
public function loadStation2() {
if ($this->station2 == null) {
$this->station2 = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType($this, "meteoschweiz_station_difference_station_2");
$this->station2->tableName = "meteoschweiz_station_difference";
$this->station2->fieldName = "station_2";
$this->station2->aliasFieldName = "meteoschweiz_station_difference_station_2";
$this->station2->label = "Station 2";
}
return $this;
}
}