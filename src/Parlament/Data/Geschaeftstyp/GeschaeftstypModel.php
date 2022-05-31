<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geschaeftstyp;

protected function loadModel() {
$this->tableName = "parlament_geschaeftstyp";
$this->aliasTableName = "parlament_geschaeftstyp";
$this->label = "Geschäftstyp";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_geschaeftstyp";
$this->id->externalTableName = "parlament_geschaeftstyp";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_geschaeftstyp_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->geschaeftstyp = new \Nemundo\Model\Type\Text\TextType($this);
$this->geschaeftstyp->tableName = "parlament_geschaeftstyp";
$this->geschaeftstyp->externalTableName = "parlament_geschaeftstyp";
$this->geschaeftstyp->fieldName = "geschaeftstyp";
$this->geschaeftstyp->aliasFieldName = "parlament_geschaeftstyp_geschaeftstyp";
$this->geschaeftstyp->label = "Geschäftstyp";
$this->geschaeftstyp->allowNullValue = false;
$this->geschaeftstyp->length = 255;

}
}