<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $bezirk;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType
*/
public $kanton;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = BezirkModel::class;
$this->externalTableName = "gemeinde_bezirk";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->bezirk = new \Nemundo\Model\Type\Text\TextType();
$this->bezirk->fieldName = "bezirk";
$this->bezirk->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bezirk->externalTableName = $this->externalTableName;
$this->bezirk->aliasFieldName = $this->bezirk->tableName . "_" . $this->bezirk->fieldName;
$this->bezirk->label = "Bezirk";
$this->addType($this->bezirk);

$this->kantonId = new \Nemundo\Model\Type\Id\IdType();
$this->kantonId->fieldName = "kanton";
$this->kantonId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kantonId->aliasFieldName = $this->kantonId->tableName ."_".$this->kantonId->fieldName;
$this->kantonId->label = "Kanton";
$this->addType($this->kantonId);

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
}