<?php
namespace Dev\App\Wetzikon\Data\Poi;
class PoiExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $coordinateText;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = PoiModel::class;
$this->externalTableName = "wetzikon_poi";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->titel = new \Nemundo\Model\Type\Text\TextType();
$this->titel->fieldName = "titel";
$this->titel->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->titel->externalTableName = $this->externalTableName;
$this->titel->aliasFieldName = $this->titel->tableName . "_" . $this->titel->fieldName;
$this->titel->label = "Titel";
$this->addType($this->titel);

$this->text = new \Nemundo\Model\Type\Text\LargeTextType();
$this->text->fieldName = "text";
$this->text->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->text->externalTableName = $this->externalTableName;
$this->text->aliasFieldName = $this->text->tableName . "_" . $this->text->fieldName;
$this->text->label = "Text";
$this->addType($this->text);

$this->coordinate = new \Nemundo\Model\Type\Geo\GeoCoordinateType();
$this->coordinate->fieldName = "coordinate";
$this->coordinate->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->coordinate->externalTableName = $this->externalTableName;
$this->coordinate->aliasFieldName = $this->coordinate->tableName . "_" . $this->coordinate->fieldName;
$this->coordinate->label = "Coordinate";
$this->coordinate->createObject();
$this->addType($this->coordinate);

$this->strasse = new \Nemundo\Model\Type\Text\TextType();
$this->strasse->fieldName = "strasse";
$this->strasse->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->strasse->externalTableName = $this->externalTableName;
$this->strasse->aliasFieldName = $this->strasse->tableName . "_" . $this->strasse->fieldName;
$this->strasse->label = "Strasse";
$this->addType($this->strasse);

$this->coordinateText = new \Nemundo\Model\Type\Text\TextType();
$this->coordinateText->fieldName = "coordinate_text";
$this->coordinateText->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->coordinateText->externalTableName = $this->externalTableName;
$this->coordinateText->aliasFieldName = $this->coordinateText->tableName . "_" . $this->coordinateText->fieldName;
$this->coordinateText->label = "Coordinate Text";
$this->addType($this->coordinateText);

}
}