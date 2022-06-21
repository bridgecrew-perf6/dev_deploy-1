<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class GemeindeExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $gemeinde;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType
*/
public $kanton;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $bezirkId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkExternalType
*/
public $bezirk;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GemeindeModel::class;
$this->externalTableName = "gemeinde_gemeinde";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->gemeinde = new \Nemundo\Model\Type\Text\TextType();
$this->gemeinde->fieldName = "gemeinde";
$this->gemeinde->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->gemeinde->externalTableName = $this->externalTableName;
$this->gemeinde->aliasFieldName = $this->gemeinde->tableName . "_" . $this->gemeinde->fieldName;
$this->gemeinde->label = "Gemeinde";
$this->addType($this->gemeinde);

$this->kantonId = new \Nemundo\Model\Type\Id\IdType();
$this->kantonId->fieldName = "kanton";
$this->kantonId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kantonId->aliasFieldName = $this->kantonId->tableName ."_".$this->kantonId->fieldName;
$this->kantonId->label = "Kanton";
$this->addType($this->kantonId);

$this->bezirkId = new \Nemundo\Model\Type\Id\IdType();
$this->bezirkId->fieldName = "bezirk";
$this->bezirkId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bezirkId->aliasFieldName = $this->bezirkId->tableName ."_".$this->bezirkId->fieldName;
$this->bezirkId->label = "Bezirk";
$this->addType($this->bezirkId);

}
public function loadKanton() {
if ($this->kanton == null) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType(null, $this->parentFieldName . "_kanton");
$this->kanton->fieldName = "kanton";
$this->kanton->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kanton->aliasFieldName = $this->kanton->tableName ."_".$this->kanton->fieldName;
$this->kanton->label = "Kanton";
$this->addType($this->kanton);
}
return $this;
}
public function loadBezirk() {
if ($this->bezirk == null) {
$this->bezirk = new \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkExternalType(null, $this->parentFieldName . "_bezirk");
$this->bezirk->fieldName = "bezirk";
$this->bezirk->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bezirk->aliasFieldName = $this->bezirk->tableName ."_".$this->bezirk->fieldName;
$this->bezirk->label = "Bezirk";
$this->addType($this->bezirk);
}
return $this;
}
}