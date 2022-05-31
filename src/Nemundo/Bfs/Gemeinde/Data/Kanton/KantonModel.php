<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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

protected function loadModel() {
$this->tableName = "gemeinde_kanton";
$this->aliasTableName = "gemeinde_kanton";
$this->label = "Kanton";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "gemeinde_kanton";
$this->id->externalTableName = "gemeinde_kanton";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "gemeinde_kanton_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->kantonAbk = new \Nemundo\Model\Type\Text\TextType($this);
$this->kantonAbk->tableName = "gemeinde_kanton";
$this->kantonAbk->externalTableName = "gemeinde_kanton";
$this->kantonAbk->fieldName = "kanton_abk";
$this->kantonAbk->aliasFieldName = "gemeinde_kanton_kanton_abk";
$this->kantonAbk->label = "Kanton Abk";
$this->kantonAbk->allowNullValue = false;
$this->kantonAbk->length = 2;

$this->kanton = new \Nemundo\Model\Type\Text\TextType($this);
$this->kanton->tableName = "gemeinde_kanton";
$this->kanton->externalTableName = "gemeinde_kanton";
$this->kanton->fieldName = "kanton";
$this->kanton->aliasFieldName = "gemeinde_kanton_kanton";
$this->kanton->label = "Kanton";
$this->kanton->allowNullValue = false;
$this->kanton->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "kanton_abk";
$index->addType($this->kantonAbk);

}
}