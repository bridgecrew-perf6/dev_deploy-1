<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
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

/**
* @var \Nemundo\Model\Type\ImageFormat\AutoSizeModelImageFormat
*/
public $bildAutoSize1200;

/**
* @var \Nemundo\Model\Type\ImageFormat\AutoSizeModelImageFormat
*/
public $bildAutoSize300;

protected function loadModel() {
$this->tableName = "wetzikon_poi_bild";
$this->aliasTableName = "wetzikon_poi_bild";
$this->label = "Poi Bild";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "wetzikon_poi_bild";
$this->id->externalTableName = "wetzikon_poi_bild";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "wetzikon_poi_bild_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->poiId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->poiId->tableName = "wetzikon_poi_bild";
$this->poiId->fieldName = "poi";
$this->poiId->aliasFieldName = "wetzikon_poi_bild_poi";
$this->poiId->label = "Poi";
$this->poiId->allowNullValue = false;

$this->bild = new \Nemundo\Model\Type\File\ImageType($this);
$this->bild->tableName = "wetzikon_poi_bild";
$this->bild->externalTableName = "wetzikon_poi_bild";
$this->bild->fieldName = "bild";
$this->bild->aliasFieldName = "wetzikon_poi_bild_bild";
$this->bild->label = "Bild";
$this->bild->allowNullValue = false;
$this->bildAutoSize1200 = new \Nemundo\Model\Type\ImageFormat\AutoSizeModelImageFormat($this->bild);
$this->bildAutoSize1200->size = 1200;
$this->bildAutoSize300 = new \Nemundo\Model\Type\ImageFormat\AutoSizeModelImageFormat($this->bild);
$this->bildAutoSize300->size = 300;

}
public function loadPoi() {
if ($this->poi == null) {
$this->poi = new \Dev\App\Wetzikon\Data\Poi\PoiExternalType($this, "wetzikon_poi_bild_poi");
$this->poi->tableName = "wetzikon_poi_bild";
$this->poi->fieldName = "poi";
$this->poi->aliasFieldName = "wetzikon_poi_bild_poi";
$this->poi->label = "Poi";
}
return $this;
}
}