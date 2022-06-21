<?php
namespace Parlament\Data\Kommission;
class KommissionExternalType extends \Nemundo\Model\Type\External\ExternalType {
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
* @var \Nemundo\Model\Type\Id\IdType
*/
public $ratId;

/**
* @var \Parlament\Data\Rat\RatExternalType
*/
public $rat;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = KommissionModel::class;
$this->externalTableName = "parlament_kommission";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->kommission = new \Nemundo\Model\Type\Text\TextType();
$this->kommission->fieldName = "kommission";
$this->kommission->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kommission->externalTableName = $this->externalTableName;
$this->kommission->aliasFieldName = $this->kommission->tableName . "_" . $this->kommission->fieldName;
$this->kommission->label = "Kommission";
$this->addType($this->kommission);

$this->aktiv = new \Nemundo\Model\Type\Number\YesNoType();
$this->aktiv->fieldName = "aktiv";
$this->aktiv->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->aktiv->externalTableName = $this->externalTableName;
$this->aktiv->aliasFieldName = $this->aktiv->tableName . "_" . $this->aktiv->fieldName;
$this->aktiv->label = "Aktiv";
$this->addType($this->aktiv);

$this->ratId = new \Nemundo\Model\Type\Id\IdType();
$this->ratId->fieldName = "rat";
$this->ratId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ratId->aliasFieldName = $this->ratId->tableName ."_".$this->ratId->fieldName;
$this->ratId->label = "Rat";
$this->addType($this->ratId);

}
public function loadRat() {
if ($this->rat == null) {
$this->rat = new \Parlament\Data\Rat\RatExternalType(null, $this->parentFieldName . "_rat");
$this->rat->fieldName = "rat";
$this->rat->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->rat->aliasFieldName = $this->rat->tableName ."_".$this->rat->fieldName;
$this->rat->label = "Rat";
$this->addType($this->rat);
}
return $this;
}
}