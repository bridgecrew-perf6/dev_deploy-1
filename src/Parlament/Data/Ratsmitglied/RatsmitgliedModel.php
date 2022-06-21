<?php
namespace Parlament\Data\Ratsmitglied;
class RatsmitgliedModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType
*/
public $kanton;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $ratId;

/**
* @var \Parlament\Data\Rat\RatExternalType
*/
public $rat;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
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
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
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
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $geschlechtId;

/**
* @var \Parlament\Data\Geschlecht\GeschlechtExternalType
*/
public $geschlecht;

protected function loadModel() {
$this->tableName = "parlament_ratsmitglied";
$this->aliasTableName = "parlament_ratsmitglied";
$this->label = "Ratsmitglied";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_ratsmitglied";
$this->id->externalTableName = "parlament_ratsmitglied";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_ratsmitglied_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->name = new \Nemundo\Model\Type\Text\TextType($this);
$this->name->tableName = "parlament_ratsmitglied";
$this->name->externalTableName = "parlament_ratsmitglied";
$this->name->fieldName = "name";
$this->name->aliasFieldName = "parlament_ratsmitglied_name";
$this->name->label = "Name";
$this->name->allowNullValue = false;
$this->name->length = 255;

$this->vorname = new \Nemundo\Model\Type\Text\TextType($this);
$this->vorname->tableName = "parlament_ratsmitglied";
$this->vorname->externalTableName = "parlament_ratsmitglied";
$this->vorname->fieldName = "vorname";
$this->vorname->aliasFieldName = "parlament_ratsmitglied_vorname";
$this->vorname->label = "Vorname";
$this->vorname->allowNullValue = false;
$this->vorname->length = 255;

$this->kantonId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->kantonId->tableName = "parlament_ratsmitglied";
$this->kantonId->fieldName = "kanton";
$this->kantonId->aliasFieldName = "parlament_ratsmitglied_kanton";
$this->kantonId->label = "Kanton";
$this->kantonId->allowNullValue = true;

$this->ratId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->ratId->tableName = "parlament_ratsmitglied";
$this->ratId->fieldName = "rat";
$this->ratId->aliasFieldName = "parlament_ratsmitglied_rat";
$this->ratId->label = "Rat";
$this->ratId->allowNullValue = true;

$this->fraktionId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->fraktionId->tableName = "parlament_ratsmitglied";
$this->fraktionId->fieldName = "fraktion";
$this->fraktionId->aliasFieldName = "parlament_ratsmitglied_fraktion";
$this->fraktionId->label = "Fraktion";
$this->fraktionId->allowNullValue = true;

$this->biographieUrl = new \Nemundo\Model\Type\Text\TextType($this);
$this->biographieUrl->tableName = "parlament_ratsmitglied";
$this->biographieUrl->externalTableName = "parlament_ratsmitglied";
$this->biographieUrl->fieldName = "biographie_url";
$this->biographieUrl->aliasFieldName = "parlament_ratsmitglied_biographie_url";
$this->biographieUrl->label = "Biographie Url";
$this->biographieUrl->allowNullValue = true;
$this->biographieUrl->length = 255;

$this->homepage = new \Nemundo\Model\Type\Text\TextType($this);
$this->homepage->tableName = "parlament_ratsmitglied";
$this->homepage->externalTableName = "parlament_ratsmitglied";
$this->homepage->fieldName = "homepage";
$this->homepage->aliasFieldName = "parlament_ratsmitglied_homepage";
$this->homepage->label = "Homepage";
$this->homepage->allowNullValue = true;
$this->homepage->length = 255;

$this->bild = new \Nemundo\Model\Type\File\ImageType($this);
$this->bild->tableName = "parlament_ratsmitglied";
$this->bild->externalTableName = "parlament_ratsmitglied";
$this->bild->fieldName = "bild";
$this->bild->aliasFieldName = "parlament_ratsmitglied_bild";
$this->bild->label = "Bild";
$this->bild->allowNullValue = true;

$this->hasHomepage = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasHomepage->tableName = "parlament_ratsmitglied";
$this->hasHomepage->externalTableName = "parlament_ratsmitglied";
$this->hasHomepage->fieldName = "has_homepage";
$this->hasHomepage->aliasFieldName = "parlament_ratsmitglied_has_homepage";
$this->hasHomepage->label = "Has Homepage";
$this->hasHomepage->allowNullValue = false;

$this->parteiId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->parteiId->tableName = "parlament_ratsmitglied";
$this->parteiId->fieldName = "partei";
$this->parteiId->aliasFieldName = "parlament_ratsmitglied_partei";
$this->parteiId->label = "Partei";
$this->parteiId->allowNullValue = true;

$this->aktiv = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->aktiv->tableName = "parlament_ratsmitglied";
$this->aktiv->externalTableName = "parlament_ratsmitglied";
$this->aktiv->fieldName = "aktiv";
$this->aktiv->aliasFieldName = "parlament_ratsmitglied_aktiv";
$this->aktiv->label = "Aktiv";
$this->aktiv->allowNullValue = false;

$this->geburtstag = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->geburtstag->tableName = "parlament_ratsmitglied";
$this->geburtstag->externalTableName = "parlament_ratsmitglied";
$this->geburtstag->fieldName = "geburtstag";
$this->geburtstag->aliasFieldName = "parlament_ratsmitglied_geburtstag";
$this->geburtstag->label = "Geburtstag";
$this->geburtstag->allowNullValue = true;

$this->geschlechtId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->geschlechtId->tableName = "parlament_ratsmitglied";
$this->geschlechtId->fieldName = "geschlecht";
$this->geschlechtId->aliasFieldName = "parlament_ratsmitglied_geschlecht";
$this->geschlechtId->label = "Geschlecht";
$this->geschlechtId->allowNullValue = true;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "rat";
$index->addType($this->ratId);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "kanton";
$index->addType($this->kantonId);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "aktiv";
$index->addType($this->aktiv);

}
public function loadKanton() {
if ($this->kanton == null) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType($this, "parlament_ratsmitglied_kanton");
$this->kanton->tableName = "parlament_ratsmitglied";
$this->kanton->fieldName = "kanton";
$this->kanton->aliasFieldName = "parlament_ratsmitglied_kanton";
$this->kanton->label = "Kanton";
}
return $this;
}
public function loadRat() {
if ($this->rat == null) {
$this->rat = new \Parlament\Data\Rat\RatExternalType($this, "parlament_ratsmitglied_rat");
$this->rat->tableName = "parlament_ratsmitglied";
$this->rat->fieldName = "rat";
$this->rat->aliasFieldName = "parlament_ratsmitglied_rat";
$this->rat->label = "Rat";
}
return $this;
}
public function loadFraktion() {
if ($this->fraktion == null) {
$this->fraktion = new \Parlament\Data\Fraktion\FraktionExternalType($this, "parlament_ratsmitglied_fraktion");
$this->fraktion->tableName = "parlament_ratsmitglied";
$this->fraktion->fieldName = "fraktion";
$this->fraktion->aliasFieldName = "parlament_ratsmitglied_fraktion";
$this->fraktion->label = "Fraktion";
}
return $this;
}
public function loadPartei() {
if ($this->partei == null) {
$this->partei = new \Parlament\Data\Partei\ParteiExternalType($this, "parlament_ratsmitglied_partei");
$this->partei->tableName = "parlament_ratsmitglied";
$this->partei->fieldName = "partei";
$this->partei->aliasFieldName = "parlament_ratsmitglied_partei";
$this->partei->label = "Partei";
}
return $this;
}
public function loadGeschlecht() {
if ($this->geschlecht == null) {
$this->geschlecht = new \Parlament\Data\Geschlecht\GeschlechtExternalType($this, "parlament_ratsmitglied_geschlecht");
$this->geschlecht->tableName = "parlament_ratsmitglied";
$this->geschlecht->fieldName = "geschlecht";
$this->geschlecht->aliasFieldName = "parlament_ratsmitglied_geschlecht";
$this->geschlecht->label = "Geschlecht";
}
return $this;
}
}