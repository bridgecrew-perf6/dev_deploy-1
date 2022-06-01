<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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
public $kommissionId;

/**
* @var \Parlament\Data\Kommission\KommissionExternalType
*/
public $kommission;

protected function loadModel() {
$this->tableName = "parlament_geschaeft_kommission";
$this->aliasTableName = "parlament_geschaeft_kommission";
$this->label = "Geschäft Kommission";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_geschaeft_kommission";
$this->id->externalTableName = "parlament_geschaeft_kommission";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_geschaeft_kommission_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->geschaeftId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->geschaeftId->tableName = "parlament_geschaeft_kommission";
$this->geschaeftId->fieldName = "geschaeft";
$this->geschaeftId->aliasFieldName = "parlament_geschaeft_kommission_geschaeft";
$this->geschaeftId->label = "Geschäft";
$this->geschaeftId->allowNullValue = false;

$this->kommissionId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->kommissionId->tableName = "parlament_geschaeft_kommission";
$this->kommissionId->fieldName = "kommission";
$this->kommissionId->aliasFieldName = "parlament_geschaeft_kommission_kommission";
$this->kommissionId->label = "Kommission";
$this->kommissionId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "geschaeft_kommission";
$index->addType($this->geschaeftId);
$index->addType($this->kommissionId);

}
public function loadGeschaeft() {
if ($this->geschaeft == null) {
$this->geschaeft = new \Parlament\Data\Geschaeft\GeschaeftExternalType($this, "parlament_geschaeft_kommission_geschaeft");
$this->geschaeft->tableName = "parlament_geschaeft_kommission";
$this->geschaeft->fieldName = "geschaeft";
$this->geschaeft->aliasFieldName = "parlament_geschaeft_kommission_geschaeft";
$this->geschaeft->label = "Geschäft";
}
return $this;
}
public function loadKommission() {
if ($this->kommission == null) {
$this->kommission = new \Parlament\Data\Kommission\KommissionExternalType($this, "parlament_geschaeft_kommission_kommission");
$this->kommission->tableName = "parlament_geschaeft_kommission";
$this->kommission->fieldName = "kommission";
$this->kommission->aliasFieldName = "parlament_geschaeft_kommission_kommission";
$this->kommission->label = "Kommission";
}
return $this;
}
}