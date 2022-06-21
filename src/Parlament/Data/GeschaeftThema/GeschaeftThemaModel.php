<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThemaModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $geschaeftId;

/**
* @var \Parlament\Data\Geschaeft\GeschaeftExternalType
*/
public $geschaeft;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $themaId;

/**
* @var \Parlament\Data\Thema\ThemaExternalType
*/
public $thema;

protected function loadModel() {
$this->tableName = "parlament_geschaeft_thema";
$this->aliasTableName = "parlament_geschaeft_thema";
$this->label = "Geschäft Thema";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_geschaeft_thema";
$this->id->externalTableName = "parlament_geschaeft_thema";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_geschaeft_thema_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->geschaeftId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->geschaeftId->tableName = "parlament_geschaeft_thema";
$this->geschaeftId->fieldName = "geschaeft";
$this->geschaeftId->aliasFieldName = "parlament_geschaeft_thema_geschaeft";
$this->geschaeftId->label = "Geschäft";
$this->geschaeftId->allowNullValue = false;

$this->themaId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->themaId->tableName = "parlament_geschaeft_thema";
$this->themaId->fieldName = "thema";
$this->themaId->aliasFieldName = "parlament_geschaeft_thema_thema";
$this->themaId->label = "Thema";
$this->themaId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "geschaeft_thema";
$index->addType($this->geschaeftId);
$index->addType($this->themaId);

}
public function loadGeschaeft() {
if ($this->geschaeft == null) {
$this->geschaeft = new \Parlament\Data\Geschaeft\GeschaeftExternalType($this, "parlament_geschaeft_thema_geschaeft");
$this->geschaeft->tableName = "parlament_geschaeft_thema";
$this->geschaeft->fieldName = "geschaeft";
$this->geschaeft->aliasFieldName = "parlament_geschaeft_thema_geschaeft";
$this->geschaeft->label = "Geschäft";
}
return $this;
}
public function loadThema() {
if ($this->thema == null) {
$this->thema = new \Parlament\Data\Thema\ThemaExternalType($this, "parlament_geschaeft_thema_thema");
$this->thema->tableName = "parlament_geschaeft_thema";
$this->thema->fieldName = "thema";
$this->thema->aliasFieldName = "parlament_geschaeft_thema_thema";
$this->thema->label = "Thema";
}
return $this;
}
}