<?php
namespace Dev\App\Wetzikon\Data\Poi;
class PoiModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $titel;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $text;

/**
* @var \Nemundo\Model\Type\Geo\GeoCoordinateType
*/
public $coordinate;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $strasse;

protected function loadModel() {
$this->tableName = "wetzikon_poi";
$this->aliasTableName = "wetzikon_poi";
$this->label = "Poi";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "wetzikon_poi";
$this->id->externalTableName = "wetzikon_poi";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "wetzikon_poi_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->titel = new \Nemundo\Model\Type\Text\TextType($this);
$this->titel->tableName = "wetzikon_poi";
$this->titel->externalTableName = "wetzikon_poi";
$this->titel->fieldName = "titel";
$this->titel->aliasFieldName = "wetzikon_poi_titel";
$this->titel->label = "Titel";
$this->titel->allowNullValue = false;
$this->titel->length = 255;

$this->text = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->text->tableName = "wetzikon_poi";
$this->text->externalTableName = "wetzikon_poi";
$this->text->fieldName = "text";
$this->text->aliasFieldName = "wetzikon_poi_text";
$this->text->label = "Text";
$this->text->allowNullValue = true;

$this->coordinate = new \Nemundo\Model\Type\Geo\GeoCoordinateType($this);
$this->coordinate->tableName = "wetzikon_poi";
$this->coordinate->externalTableName = "wetzikon_poi";
$this->coordinate->fieldName = "coordinate";
$this->coordinate->aliasFieldName = "wetzikon_poi_coordinate";
$this->coordinate->label = "Coordinate";
$this->coordinate->allowNullValue = false;

$this->strasse = new \Nemundo\Model\Type\Text\TextType($this);
$this->strasse->tableName = "wetzikon_poi";
$this->strasse->externalTableName = "wetzikon_poi";
$this->strasse->fieldName = "strasse";
$this->strasse->aliasFieldName = "wetzikon_poi_strasse";
$this->strasse->label = "Strasse";
$this->strasse->allowNullValue = false;
$this->strasse->length = 255;

}
}