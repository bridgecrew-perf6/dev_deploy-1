<?php
namespace Parlament\Data\Legislatur;
class LegislaturExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = LegislaturModel::class;
$this->externalTableName = "parlament_legislatur";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->code = new \Nemundo\Model\Type\Number\NumberType();
$this->code->fieldName = "code";
$this->code->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->code->externalTableName = $this->externalTableName;
$this->code->aliasFieldName = $this->code->tableName . "_" . $this->code->fieldName;
$this->code->label = "Code";
$this->addType($this->code);

$this->legislatur = new \Nemundo\Model\Type\Text\TextType();
$this->legislatur->fieldName = "legislatur";
$this->legislatur->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->legislatur->externalTableName = $this->externalTableName;
$this->legislatur->aliasFieldName = $this->legislatur->tableName . "_" . $this->legislatur->fieldName;
$this->legislatur->label = "Legislatur";
$this->addType($this->legislatur);

$this->von = new \Nemundo\Model\Type\DateTime\DateType();
$this->von->fieldName = "von";
$this->von->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->von->externalTableName = $this->externalTableName;
$this->von->aliasFieldName = $this->von->tableName . "_" . $this->von->fieldName;
$this->von->label = "Von";
$this->addType($this->von);

$this->bis = new \Nemundo\Model\Type\DateTime\DateType();
$this->bis->fieldName = "bis";
$this->bis->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bis->externalTableName = $this->externalTableName;
$this->bis->aliasFieldName = $this->bis->tableName . "_" . $this->bis->fieldName;
$this->bis->label = "Bis";
$this->addType($this->bis);

}
}