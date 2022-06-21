<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $kantonAbk;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $kanton;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = KantonModel::class;
$this->externalTableName = "gemeinde_kanton";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->kantonAbk = new \Nemundo\Model\Type\Text\TextType();
$this->kantonAbk->fieldName = "kanton_abk";
$this->kantonAbk->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kantonAbk->externalTableName = $this->externalTableName;
$this->kantonAbk->aliasFieldName = $this->kantonAbk->tableName . "_" . $this->kantonAbk->fieldName;
$this->kantonAbk->label = "Kanton Abk";
$this->addType($this->kantonAbk);

$this->kanton = new \Nemundo\Model\Type\Text\TextType();
$this->kanton->fieldName = "kanton";
$this->kanton->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kanton->externalTableName = $this->externalTableName;
$this->kanton->aliasFieldName = $this->kanton->tableName . "_" . $this->kanton->fieldName;
$this->kanton->label = "Kanton";
$this->addType($this->kanton);

}
}