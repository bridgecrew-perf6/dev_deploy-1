<?php
namespace Parlament\Data\Fraktion;
class FraktionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $fraktion;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $abkuerzung;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $aktiv;

protected function loadModel() {
$this->tableName = "parlament_fraktion";
$this->aliasTableName = "parlament_fraktion";
$this->label = "Fraktion";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_fraktion";
$this->id->externalTableName = "parlament_fraktion";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_fraktion_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->fraktion = new \Nemundo\Model\Type\Text\TextType($this);
$this->fraktion->tableName = "parlament_fraktion";
$this->fraktion->externalTableName = "parlament_fraktion";
$this->fraktion->fieldName = "fraktion";
$this->fraktion->aliasFieldName = "parlament_fraktion_fraktion";
$this->fraktion->label = "Fraktion";
$this->fraktion->allowNullValue = false;
$this->fraktion->length = 255;

$this->abkuerzung = new \Nemundo\Model\Type\Text\TextType($this);
$this->abkuerzung->tableName = "parlament_fraktion";
$this->abkuerzung->externalTableName = "parlament_fraktion";
$this->abkuerzung->fieldName = "abkuerzung";
$this->abkuerzung->aliasFieldName = "parlament_fraktion_abkuerzung";
$this->abkuerzung->label = "Abkürzung";
$this->abkuerzung->allowNullValue = false;
$this->abkuerzung->length = 5;

$this->aktiv = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->aktiv->tableName = "parlament_fraktion";
$this->aktiv->externalTableName = "parlament_fraktion";
$this->aktiv->fieldName = "aktiv";
$this->aktiv->aliasFieldName = "parlament_fraktion_aktiv";
$this->aktiv->label = "Aktiv";
$this->aktiv->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "aktiv_fraktion";
$index->addType($this->aktiv);
$index->addType($this->fraktion);

}
}