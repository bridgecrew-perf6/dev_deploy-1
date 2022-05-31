<?php
namespace Parlament\Data\Ratsmitglied;
class RatsmitgliedExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $name;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $vorname;

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
public $ratId;

/**
* @var \Parlament\Data\Rat\RatExternalType
*/
public $rat;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $fraktionId;

/**
* @var \Parlament\Data\Fraktion\FraktionExternalType
*/
public $fraktion;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $biographieUrl;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $homepage;

/**
* @var \Nemundo\Model\Type\File\ImageType
*/
public $bild;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasHomepage;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $parteiId;

/**
* @var \Parlament\Data\Partei\ParteiExternalType
*/
public $partei;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $aktiv;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $geburtstag;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $geschlechtId;

/**
* @var \Parlament\Data\Geschlecht\GeschlechtExternalType
*/
public $geschlecht;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = RatsmitgliedModel::class;
$this->externalTableName = "parlament_ratsmitglied";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->name = new \Nemundo\Model\Type\Text\TextType();
$this->name->fieldName = "name";
$this->name->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->name->externalTableName = $this->externalTableName;
$this->name->aliasFieldName = $this->name->tableName . "_" . $this->name->fieldName;
$this->name->label = "Name";
$this->addType($this->name);

$this->vorname = new \Nemundo\Model\Type\Text\TextType();
$this->vorname->fieldName = "vorname";
$this->vorname->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->vorname->externalTableName = $this->externalTableName;
$this->vorname->aliasFieldName = $this->vorname->tableName . "_" . $this->vorname->fieldName;
$this->vorname->label = "Vorname";
$this->addType($this->vorname);

$this->kantonId = new \Nemundo\Model\Type\Id\IdType();
$this->kantonId->fieldName = "kanton";
$this->kantonId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kantonId->aliasFieldName = $this->kantonId->tableName ."_".$this->kantonId->fieldName;
$this->kantonId->label = "Kanton";
$this->addType($this->kantonId);

$this->ratId = new \Nemundo\Model\Type\Id\IdType();
$this->ratId->fieldName = "rat";
$this->ratId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ratId->aliasFieldName = $this->ratId->tableName ."_".$this->ratId->fieldName;
$this->ratId->label = "Rat";
$this->addType($this->ratId);

$this->fraktionId = new \Nemundo\Model\Type\Id\IdType();
$this->fraktionId->fieldName = "fraktion";
$this->fraktionId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->fraktionId->aliasFieldName = $this->fraktionId->tableName ."_".$this->fraktionId->fieldName;
$this->fraktionId->label = "Fraktion";
$this->addType($this->fraktionId);

$this->biographieUrl = new \Nemundo\Model\Type\Text\TextType();
$this->biographieUrl->fieldName = "biographie_url";
$this->biographieUrl->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->biographieUrl->externalTableName = $this->externalTableName;
$this->biographieUrl->aliasFieldName = $this->biographieUrl->tableName . "_" . $this->biographieUrl->fieldName;
$this->biographieUrl->label = "Biographie Url";
$this->addType($this->biographieUrl);

$this->homepage = new \Nemundo\Model\Type\Text\TextType();
$this->homepage->fieldName = "homepage";
$this->homepage->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->homepage->externalTableName = $this->externalTableName;
$this->homepage->aliasFieldName = $this->homepage->tableName . "_" . $this->homepage->fieldName;
$this->homepage->label = "Homepage";
$this->addType($this->homepage);

$this->bild = new \Nemundo\Model\Type\File\ImageType();
$this->bild->fieldName = "bild";
$this->bild->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bild->externalTableName = $this->externalTableName;
$this->bild->aliasFieldName = $this->bild->tableName . "_" . $this->bild->fieldName;
$this->bild->label = "Bild";
$this->addType($this->bild);

$this->hasHomepage = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasHomepage->fieldName = "has_homepage";
$this->hasHomepage->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasHomepage->externalTableName = $this->externalTableName;
$this->hasHomepage->aliasFieldName = $this->hasHomepage->tableName . "_" . $this->hasHomepage->fieldName;
$this->hasHomepage->label = "Has Homepage";
$this->addType($this->hasHomepage);

$this->parteiId = new \Nemundo\Model\Type\Id\IdType();
$this->parteiId->fieldName = "partei";
$this->parteiId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->parteiId->aliasFieldName = $this->parteiId->tableName ."_".$this->parteiId->fieldName;
$this->parteiId->label = "Partei";
$this->addType($this->parteiId);

$this->aktiv = new \Nemundo\Model\Type\Number\YesNoType();
$this->aktiv->fieldName = "aktiv";
$this->aktiv->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->aktiv->externalTableName = $this->externalTableName;
$this->aktiv->aliasFieldName = $this->aktiv->tableName . "_" . $this->aktiv->fieldName;
$this->aktiv->label = "Aktiv";
$this->addType($this->aktiv);

$this->geburtstag = new \Nemundo\Model\Type\DateTime\DateType();
$this->geburtstag->fieldName = "geburtstag";
$this->geburtstag->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geburtstag->externalTableName = $this->externalTableName;
$this->geburtstag->aliasFieldName = $this->geburtstag->tableName . "_" . $this->geburtstag->fieldName;
$this->geburtstag->label = "Geburtstag";
$this->addType($this->geburtstag);

$this->geschlechtId = new \Nemundo\Model\Type\Id\IdType();
$this->geschlechtId->fieldName = "geschlecht";
$this->geschlechtId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschlechtId->aliasFieldName = $this->geschlechtId->tableName ."_".$this->geschlechtId->fieldName;
$this->geschlechtId->label = "Geschlecht";
$this->addType($this->geschlechtId);

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
public function loadFraktion() {
if ($this->fraktion == null) {
$this->fraktion = new \Parlament\Data\Fraktion\FraktionExternalType(null, $this->parentFieldName . "_fraktion");
$this->fraktion->fieldName = "fraktion";
$this->fraktion->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->fraktion->aliasFieldName = $this->fraktion->tableName ."_".$this->fraktion->fieldName;
$this->fraktion->label = "Fraktion";
$this->addType($this->fraktion);
}
return $this;
}
public function loadPartei() {
if ($this->partei == null) {
$this->partei = new \Parlament\Data\Partei\ParteiExternalType(null, $this->parentFieldName . "_partei");
$this->partei->fieldName = "partei";
$this->partei->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->partei->aliasFieldName = $this->partei->tableName ."_".$this->partei->fieldName;
$this->partei->label = "Partei";
$this->addType($this->partei);
}
return $this;
}
public function loadGeschlecht() {
if ($this->geschlecht == null) {
$this->geschlecht = new \Parlament\Data\Geschlecht\GeschlechtExternalType(null, $this->parentFieldName . "_geschlecht");
$this->geschlecht->fieldName = "geschlecht";
$this->geschlecht->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschlecht->aliasFieldName = $this->geschlecht->tableName ."_".$this->geschlecht->fieldName;
$this->geschlecht->label = "Geschlecht";
$this->addType($this->geschlecht);
}
return $this;
}
}