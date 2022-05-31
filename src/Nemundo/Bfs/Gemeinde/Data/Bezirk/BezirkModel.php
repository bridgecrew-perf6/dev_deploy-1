<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $bezirk;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType
*/
public $kanton;

protected function loadModel() {
$this->tableName = "gemeinde_bezirk";
$this->aliasTableName = "gemeinde_bezirk";
$this->label = "Bezirk";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "gemeinde_bezirk";
$this->id->externalTableName = "gemeinde_bezirk";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "gemeinde_bezirk_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->bezirk = new \Nemundo\Model\Type\Text\TextType($this);
$this->bezirk->tableName = "gemeinde_bezirk";
$this->bezirk->externalTableName = "gemeinde_bezirk";
$this->bezirk->fieldName = "bezirk";
$this->bezirk->aliasFieldName = "gemeinde_bezirk_bezirk";
$this->bezirk->label = "Bezirk";
$this->bezirk->allowNullValue = false;
$this->bezirk->length = 255;

$this->kantonId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->kantonId->tableName = "gemeinde_bezirk";
$this->kantonId->fieldName = "kanton";
$this->kantonId->aliasFieldName = "gemeinde_bezirk_kanton";
$this->kantonId->label = "Kanton";
$this->kantonId->allowNullValue = false;

}
public function loadKanton() {
if ($this->kanton == null) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType($this, "gemeinde_bezirk_kanton");
$this->kanton->tableName = "gemeinde_bezirk";
$this->kanton->fieldName = "kanton";
$this->kanton->aliasFieldName = "gemeinde_bezirk_kanton";
$this->kanton->label = "Kanton";
}
return $this;
}
}