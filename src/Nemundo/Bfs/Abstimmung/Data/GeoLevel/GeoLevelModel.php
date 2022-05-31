<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geoLevel;

protected function loadModel() {
$this->tableName = "abstimmung_geo_level";
$this->aliasTableName = "abstimmung_geo_level";
$this->label = "Geo Level";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "abstimmung_geo_level";
$this->id->externalTableName = "abstimmung_geo_level";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "abstimmung_geo_level_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->geoLevel = new \Nemundo\Model\Type\Text\TextType($this);
$this->geoLevel->tableName = "abstimmung_geo_level";
$this->geoLevel->externalTableName = "abstimmung_geo_level";
$this->geoLevel->fieldName = "geo_level";
$this->geoLevel->aliasFieldName = "abstimmung_geo_level_geo_level";
$this->geoLevel->label = "Geo Level";
$this->geoLevel->allowNullValue = false;
$this->geoLevel->length = 255;

}
}