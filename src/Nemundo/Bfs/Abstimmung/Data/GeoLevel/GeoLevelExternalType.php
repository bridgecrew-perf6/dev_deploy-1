<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geoLevel;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeoLevelModel::class;
$this->externalTableName = "abstimmung_geo_level";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->geoLevel = new \Nemundo\Model\Type\Text\TextType();
$this->geoLevel->fieldName = "geo_level";
$this->geoLevel->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geoLevel->externalTableName = $this->externalTableName;
$this->geoLevel->aliasFieldName = $this->geoLevel->tableName . "_" . $this->geoLevel->fieldName;
$this->geoLevel->label = "Geo Level";
$this->addType($this->geoLevel);

}
}