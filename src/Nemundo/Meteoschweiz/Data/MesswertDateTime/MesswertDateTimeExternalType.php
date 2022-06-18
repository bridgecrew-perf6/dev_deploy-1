<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
class MesswertDateTimeExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = MesswertDateTimeModel::class;
$this->externalTableName = "meteoschweiz_messwert_date_time";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType();
$this->dateTime->fieldName = "date_time";
$this->dateTime->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateTime->externalTableName = $this->externalTableName;
$this->dateTime->aliasFieldName = $this->dateTime->tableName . "_" . $this->dateTime->fieldName;
$this->dateTime->label = "Date Time";
$this->addType($this->dateTime);

$this->date = new \Nemundo\Model\Type\DateTime\DateType();
$this->date->fieldName = "date";
$this->date->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->date->externalTableName = $this->externalTableName;
$this->date->aliasFieldName = $this->date->tableName . "_" . $this->date->fieldName;
$this->date->label = "Date";
$this->addType($this->date);

}
}