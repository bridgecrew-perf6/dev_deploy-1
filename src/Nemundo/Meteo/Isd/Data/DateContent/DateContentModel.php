<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
class DateContentModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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

protected function loadModel() {
$this->tableName = "isd_date_content";
$this->aliasTableName = "isd_date_content";
$this->label = "Date Content";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "isd_date_content";
$this->id->externalTableName = "isd_date_content";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "isd_date_content_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->dateFrom = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->dateFrom->tableName = "isd_date_content";
$this->dateFrom->externalTableName = "isd_date_content";
$this->dateFrom->fieldName = "date_from";
$this->dateFrom->aliasFieldName = "isd_date_content_date_from";
$this->dateFrom->label = "Date From";
$this->dateFrom->allowNullValue = true;

$this->dateTo = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->dateTo->tableName = "isd_date_content";
$this->dateTo->externalTableName = "isd_date_content";
$this->dateTo->fieldName = "date_to";
$this->dateTo->aliasFieldName = "isd_date_content_date_to";
$this->dateTo->label = "Date To";
$this->dateTo->allowNullValue = true;

}
}