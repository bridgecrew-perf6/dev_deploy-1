<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $funktion;

protected function loadModel() {
$this->tableName = "parlament_kommission_funktion";
$this->aliasTableName = "parlament_kommission_funktion";
$this->label = "Kommission Funktion";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_kommission_funktion";
$this->id->externalTableName = "parlament_kommission_funktion";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_kommission_funktion_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->funktion = new \Nemundo\Model\Type\Text\TextType($this);
$this->funktion->tableName = "parlament_kommission_funktion";
$this->funktion->externalTableName = "parlament_kommission_funktion";
$this->funktion->fieldName = "funktion";
$this->funktion->aliasFieldName = "parlament_kommission_funktion_funktion";
$this->funktion->label = "Funktion";
$this->funktion->allowNullValue = false;
$this->funktion->length = 255;

}
}