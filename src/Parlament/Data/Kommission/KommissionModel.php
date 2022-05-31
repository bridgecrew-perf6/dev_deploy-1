<?php
namespace Parlament\Data\Kommission;
class KommissionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $kommission;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $aktiv;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $ratId;

/**
* @var \Parlament\Data\Rat\RatExternalType
*/
public $rat;

protected function loadModel() {
$this->tableName = "parlament_kommission";
$this->aliasTableName = "parlament_kommission";
$this->label = "Kommission";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_kommission";
$this->id->externalTableName = "parlament_kommission";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_kommission_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->kommission = new \Nemundo\Model\Type\Text\TextType($this);
$this->kommission->tableName = "parlament_kommission";
$this->kommission->externalTableName = "parlament_kommission";
$this->kommission->fieldName = "kommission";
$this->kommission->aliasFieldName = "parlament_kommission_kommission";
$this->kommission->label = "Kommission";
$this->kommission->allowNullValue = false;
$this->kommission->length = 255;

$this->aktiv = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->aktiv->tableName = "parlament_kommission";
$this->aktiv->externalTableName = "parlament_kommission";
$this->aktiv->fieldName = "aktiv";
$this->aktiv->aliasFieldName = "parlament_kommission_aktiv";
$this->aktiv->label = "Aktiv";
$this->aktiv->allowNullValue = false;

$this->ratId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->ratId->tableName = "parlament_kommission";
$this->ratId->fieldName = "rat";
$this->ratId->aliasFieldName = "parlament_kommission_rat";
$this->ratId->label = "Rat";
$this->ratId->allowNullValue = false;

}
public function loadRat() {
if ($this->rat == null) {
$this->rat = new \Parlament\Data\Rat\RatExternalType($this, "parlament_kommission_rat");
$this->rat->tableName = "parlament_kommission";
$this->rat->fieldName = "rat";
$this->rat->aliasFieldName = "parlament_kommission_rat";
$this->rat->label = "Rat";
}
return $this;
}
}