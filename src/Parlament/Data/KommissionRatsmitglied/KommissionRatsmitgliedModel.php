<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $kommissionId;

/**
* @var \Parlament\Data\Kommission\KommissionExternalType
*/
public $kommission;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
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
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $funktionId;

/**
* @var \Parlament\Data\KommissionFunktion\KommissionFunktionExternalType
*/
public $funktion;

protected function loadModel() {
$this->tableName = "parlament_kommission_ratsmitglied";
$this->aliasTableName = "parlament_kommission_ratsmitglied";
$this->label = "Kommission Ratsmitglied";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_kommission_ratsmitglied";
$this->id->externalTableName = "parlament_kommission_ratsmitglied";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_kommission_ratsmitglied_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->kommissionId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->kommissionId->tableName = "parlament_kommission_ratsmitglied";
$this->kommissionId->fieldName = "kommission";
$this->kommissionId->aliasFieldName = "parlament_kommission_ratsmitglied_kommission";
$this->kommissionId->label = "Kommission";
$this->kommissionId->allowNullValue = false;

$this->ratsmitgliedId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->ratsmitgliedId->tableName = "parlament_kommission_ratsmitglied";
$this->ratsmitgliedId->fieldName = "ratsmitglied";
$this->ratsmitgliedId->aliasFieldName = "parlament_kommission_ratsmitglied_ratsmitglied";
$this->ratsmitgliedId->label = "Ratsmitglied";
$this->ratsmitgliedId->allowNullValue = false;

$this->aktiv = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->aktiv->tableName = "parlament_kommission_ratsmitglied";
$this->aktiv->externalTableName = "parlament_kommission_ratsmitglied";
$this->aktiv->fieldName = "aktiv";
$this->aktiv->aliasFieldName = "parlament_kommission_ratsmitglied_aktiv";
$this->aktiv->label = "Aktiv";
$this->aktiv->allowNullValue = false;

$this->funktionId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->funktionId->tableName = "parlament_kommission_ratsmitglied";
$this->funktionId->fieldName = "funktion";
$this->funktionId->aliasFieldName = "parlament_kommission_ratsmitglied_funktion";
$this->funktionId->label = "Funktion";
$this->funktionId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "kommission";
$index->addType($this->kommissionId);
$index->addType($this->aktiv);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "ratsmitglied";
$index->addType($this->ratsmitgliedId);
$index->addType($this->aktiv);

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "kommission_ratsmitglied";
$index->addType($this->kommissionId);
$index->addType($this->ratsmitgliedId);

}
public function loadKommission() {
if ($this->kommission == null) {
$this->kommission = new \Parlament\Data\Kommission\KommissionExternalType($this, "parlament_kommission_ratsmitglied_kommission");
$this->kommission->tableName = "parlament_kommission_ratsmitglied";
$this->kommission->fieldName = "kommission";
$this->kommission->aliasFieldName = "parlament_kommission_ratsmitglied_kommission";
$this->kommission->label = "Kommission";
}
return $this;
}
public function loadRatsmitglied() {
if ($this->ratsmitglied == null) {
$this->ratsmitglied = new \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType($this, "parlament_kommission_ratsmitglied_ratsmitglied");
$this->ratsmitglied->tableName = "parlament_kommission_ratsmitglied";
$this->ratsmitglied->fieldName = "ratsmitglied";
$this->ratsmitglied->aliasFieldName = "parlament_kommission_ratsmitglied_ratsmitglied";
$this->ratsmitglied->label = "Ratsmitglied";
}
return $this;
}
public function loadFunktion() {
if ($this->funktion == null) {
$this->funktion = new \Parlament\Data\KommissionFunktion\KommissionFunktionExternalType($this, "parlament_kommission_ratsmitglied_funktion");
$this->funktion->tableName = "parlament_kommission_ratsmitglied";
$this->funktion->fieldName = "funktion";
$this->funktion->aliasFieldName = "parlament_kommission_ratsmitglied_funktion";
$this->funktion->label = "Funktion";
}
return $this;
}
}