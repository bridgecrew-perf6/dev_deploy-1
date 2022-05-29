<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
class DateContentExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $dateFrom;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $dateTo;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = DateContentModel::class;
$this->externalTableName = "isd_date_content";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->dateFrom = new \Nemundo\Model\Type\DateTime\DateType();
$this->dateFrom->fieldName = "date_from";
$this->dateFrom->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateFrom->externalTableName = $this->externalTableName;
$this->dateFrom->aliasFieldName = $this->dateFrom->tableName . "_" . $this->dateFrom->fieldName;
$this->dateFrom->label = "Date From";
$this->addType($this->dateFrom);

$this->dateTo = new \Nemundo\Model\Type\DateTime\DateType();
$this->dateTo->fieldName = "date_to";
$this->dateTo->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateTo->externalTableName = $this->externalTableName;
$this->dateTo->aliasFieldName = $this->dateTo->tableName . "_" . $this->dateTo->fieldName;
$this->dateTo->label = "Date To";
$this->addType($this->dateTo);

}
}