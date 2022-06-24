<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $poiId;

/**
* @var \Dev\App\Wetzikon\Data\Poi\PoiExternalType
*/
public $poi;

/**
* @var \Nemundo\Model\Type\File\ImageType
*/
public $bild;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = PoiBildModel::class;
$this->externalTableName = "wetzikon_poi_bild";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->poiId = new \Nemundo\Model\Type\Id\IdType();
$this->poiId->fieldName = "poi";
$this->poiId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->poiId->aliasFieldName = $this->poiId->tableName ."_".$this->poiId->fieldName;
$this->poiId->label = "Poi";
$this->addType($this->poiId);

$this->bild = new \Nemundo\Model\Type\File\ImageType();
$this->bild->fieldName = "bild";
$this->bild->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bild->externalTableName = $this->externalTableName;
$this->bild->aliasFieldName = $this->bild->tableName . "_" . $this->bild->fieldName;
$this->bild->label = "Bild";
$this->addType($this->bild);

}
public function loadPoi() {
if ($this->poi == null) {
$this->poi = new \Dev\App\Wetzikon\Data\Poi\PoiExternalType(null, $this->parentFieldName . "_poi");
$this->poi->fieldName = "poi";
$this->poi->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->poi->aliasFieldName = $this->poi->tableName ."_".$this->poi->fieldName;
$this->poi->label = "Poi";
$this->addType($this->poi);
}
return $this;
}
}