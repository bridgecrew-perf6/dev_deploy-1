<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $kommissionId;

/**
* @var \Parlament\Data\Kommission\KommissionExternalType
*/
public $kommission;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $ratsmitgliedId;

/**
* @var \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType
*/
public $ratsmitglied;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $aktiv;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $funktionId;

/**
* @var \Parlament\Data\KommissionFunktion\KommissionFunktionExternalType
*/
public $funktion;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = KommissionRatsmitgliedModel::class;
$this->externalTableName = "parlament_kommission_ratsmitglied";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->kommissionId = new \Nemundo\Model\Type\Id\IdType();
$this->kommissionId->fieldName = "kommission";
$this->kommissionId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kommissionId->aliasFieldName = $this->kommissionId->tableName ."_".$this->kommissionId->fieldName;
$this->kommissionId->label = "Kommission";
$this->addType($this->kommissionId);

$this->ratsmitgliedId = new \Nemundo\Model\Type\Id\IdType();
$this->ratsmitgliedId->fieldName = "ratsmitglied";
$this->ratsmitgliedId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ratsmitgliedId->aliasFieldName = $this->ratsmitgliedId->tableName ."_".$this->ratsmitgliedId->fieldName;
$this->ratsmitgliedId->label = "Ratsmitglied";
$this->addType($this->ratsmitgliedId);

$this->aktiv = new \Nemundo\Model\Type\Number\YesNoType();
$this->aktiv->fieldName = "aktiv";
$this->aktiv->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->aktiv->externalTableName = $this->externalTableName;
$this->aktiv->aliasFieldName = $this->aktiv->tableName . "_" . $this->aktiv->fieldName;
$this->aktiv->label = "Aktiv";
$this->addType($this->aktiv);

$this->funktionId = new \Nemundo\Model\Type\Id\IdType();
$this->funktionId->fieldName = "funktion";
$this->funktionId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->funktionId->aliasFieldName = $this->funktionId->tableName ."_".$this->funktionId->fieldName;
$this->funktionId->label = "Funktion";
$this->addType($this->funktionId);

}
public function loadKommission() {
if ($this->kommission == null) {
$this->kommission = new \Parlament\Data\Kommission\KommissionExternalType(null, $this->parentFieldName . "_kommission");
$this->kommission->fieldName = "kommission";
$this->kommission->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kommission->aliasFieldName = $this->kommission->tableName ."_".$this->kommission->fieldName;
$this->kommission->label = "Kommission";
$this->addType($this->kommission);
}
return $this;
}
public function loadRatsmitglied() {
if ($this->ratsmitglied == null) {
$this->ratsmitglied = new \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType(null, $this->parentFieldName . "_ratsmitglied");
$this->ratsmitglied->fieldName = "ratsmitglied";
$this->ratsmitglied->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ratsmitglied->aliasFieldName = $this->ratsmitglied->tableName ."_".$this->ratsmitglied->fieldName;
$this->ratsmitglied->label = "Ratsmitglied";
$this->addType($this->ratsmitglied);
}
return $this;
}
public function loadFunktion() {
if ($this->funktion == null) {
$this->funktion = new \Parlament\Data\KommissionFunktion\KommissionFunktionExternalType(null, $this->parentFieldName . "_funktion");
$this->funktion->fieldName = "funktion";
$this->funktion->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->funktion->aliasFieldName = $this->funktion->tableName ."_".$this->funktion->fieldName;
$this->funktion->label = "Funktion";
$this->addType($this->funktion);
}
return $this;
}
}