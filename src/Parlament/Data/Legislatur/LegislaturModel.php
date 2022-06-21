<?php
namespace Parlament\Data\Legislatur;
class LegislaturModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $code;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $legislatur;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $von;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $bis;

protected function loadModel() {
$this->tableName = "parlament_legislatur";
$this->aliasTableName = "parlament_legislatur";
$this->label = "Legislatur";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_legislatur";
$this->id->externalTableName = "parlament_legislatur";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_legislatur_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->code = new \Nemundo\Model\Type\Number\NumberType($this);
$this->code->tableName = "parlament_legislatur";
$this->code->externalTableName = "parlament_legislatur";
$this->code->fieldName = "code";
$this->code->aliasFieldName = "parlament_legislatur_code";
$this->code->label = "Code";
$this->code->allowNullValue = false;

$this->legislatur = new \Nemundo\Model\Type\Text\TextType($this);
$this->legislatur->tableName = "parlament_legislatur";
$this->legislatur->externalTableName = "parlament_legislatur";
$this->legislatur->fieldName = "legislatur";
$this->legislatur->aliasFieldName = "parlament_legislatur_legislatur";
$this->legislatur->label = "Legislatur";
$this->legislatur->allowNullValue = false;
$this->legislatur->length = 50;

$this->von = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->von->tableName = "parlament_legislatur";
$this->von->externalTableName = "parlament_legislatur";
$this->von->fieldName = "von";
$this->von->aliasFieldName = "parlament_legislatur_von";
$this->von->label = "Von";
$this->von->allowNullValue = false;

$this->bis = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->bis->tableName = "parlament_legislatur";
$this->bis->externalTableName = "parlament_legislatur";
$this->bis->fieldName = "bis";
$this->bis->aliasFieldName = "parlament_legislatur_bis";
$this->bis->label = "Bis";
$this->bis->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "code";
$index->addType($this->code);

}
}