<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
class CmsMesswertStationModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $stationId;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType
*/
public $station;

protected function loadModel() {
$this->tableName = "meteoschweiz_cms_messwert_station";
$this->aliasTableName = "meteoschweiz_cms_messwert_station";
$this->label = "Cms Messwert Station";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "meteoschweiz_cms_messwert_station";
$this->id->externalTableName = "meteoschweiz_cms_messwert_station";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "meteoschweiz_cms_messwert_station_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->stationId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->stationId->tableName = "meteoschweiz_cms_messwert_station";
$this->stationId->fieldName = "station";
$this->stationId->aliasFieldName = "meteoschweiz_cms_messwert_station_station";
$this->stationId->label = "Station";
$this->stationId->allowNullValue = false;

}
public function loadStation() {
if ($this->station == null) {
$this->station = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType($this, "meteoschweiz_cms_messwert_station_station");
$this->station->tableName = "meteoschweiz_cms_messwert_station";
$this->station->fieldName = "station";
$this->station->aliasFieldName = "meteoschweiz_cms_messwert_station_station";
$this->station->label = "Station";
}
return $this;
}
}