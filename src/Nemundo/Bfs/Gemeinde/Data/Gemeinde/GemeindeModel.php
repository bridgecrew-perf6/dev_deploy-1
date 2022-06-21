<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class GemeindeModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $gemeinde;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType
*/
public $kanton;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $bezirkId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkExternalType
*/
public $bezirk;

protected function loadModel() {
$this->tableName = "gemeinde_gemeinde";
$this->aliasTableName = "gemeinde_gemeinde";
$this->label = "Gemeinde";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "gemeinde_gemeinde";
$this->id->externalTableName = "gemeinde_gemeinde";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "gemeinde_gemeinde_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->gemeinde = new \Nemundo\Model\Type\Text\TextType($this);
$this->gemeinde->tableName = "gemeinde_gemeinde";
$this->gemeinde->externalTableName = "gemeinde_gemeinde";
$this->gemeinde->fieldName = "gemeinde";
$this->gemeinde->aliasFieldName = "gemeinde_gemeinde_gemeinde";
$this->gemeinde->label = "Gemeinde";
$this->gemeinde->allowNullValue = false;
$this->gemeinde->length = 255;

$this->kantonId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->kantonId->tableName = "gemeinde_gemeinde";
$this->kantonId->fieldName = "kanton";
$this->kantonId->aliasFieldName = "gemeinde_gemeinde_kanton";
$this->kantonId->label = "Kanton";
$this->kantonId->allowNullValue = false;

$this->bezirkId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->bezirkId->tableName = "gemeinde_gemeinde";
$this->bezirkId->fieldName = "bezirk";
$this->bezirkId->aliasFieldName = "gemeinde_gemeinde_bezirk";
$this->bezirkId->label = "Bezirk";
$this->bezirkId->allowNullValue = false;

}
public function loadKanton() {
if ($this->kanton == null) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType($this, "gemeinde_gemeinde_kanton");
$this->kanton->tableName = "gemeinde_gemeinde";
$this->kanton->fieldName = "kanton";
$this->kanton->aliasFieldName = "gemeinde_gemeinde_kanton";
$this->kanton->label = "Kanton";
}
return $this;
}
public function loadBezirk() {
if ($this->bezirk == null) {
$this->bezirk = new \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkExternalType($this, "gemeinde_gemeinde_bezirk");
$this->bezirk->tableName = "gemeinde_gemeinde";
$this->bezirk->fieldName = "bezirk";
$this->bezirk->aliasFieldName = "gemeinde_gemeinde_bezirk";
$this->bezirk->label = "Bezirk";
}
return $this;
}
}