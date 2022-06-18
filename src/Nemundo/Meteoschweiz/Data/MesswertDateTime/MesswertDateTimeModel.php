<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
class MesswertDateTimeModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $dateTime;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $date;

protected function loadModel() {
$this->tableName = "meteoschweiz_messwert_date_time";
$this->aliasTableName = "meteoschweiz_messwert_date_time";
$this->label = "Messwert Date Time";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "meteoschweiz_messwert_date_time";
$this->id->externalTableName = "meteoschweiz_messwert_date_time";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "meteoschweiz_messwert_date_time_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType($this);
$this->dateTime->tableName = "meteoschweiz_messwert_date_time";
$this->dateTime->externalTableName = "meteoschweiz_messwert_date_time";
$this->dateTime->fieldName = "date_time";
$this->dateTime->aliasFieldName = "meteoschweiz_messwert_date_time_date_time";
$this->dateTime->label = "Date Time";
$this->dateTime->allowNullValue = false;

$this->date = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->date->tableName = "meteoschweiz_messwert_date_time";
$this->date->externalTableName = "meteoschweiz_messwert_date_time";
$this->date->fieldName = "date";
$this->date->aliasFieldName = "meteoschweiz_messwert_date_time_date";
$this->date->label = "Date";
$this->date->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "date_time";
$index->addType($this->dateTime);

}
}