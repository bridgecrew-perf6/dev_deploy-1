<?phpnamespace Nemundo\Roundshot\Data\Roundshot;class RoundshotModel extends \Nemundo\Model\Definition\Model\AbstractModel {/*** @var \Nemundo\Model\Type\Id\IdType*/public $id;/*** @var \Nemundo\Model\Type\Text\TextType*/public $roundshot;/*** @var \Nemundo\Model\Type\Text\TextType*/public $url;/*** @var \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType*/public $geoCoordinate;/*** @var \Nemundo\Model\Type\Number\NumberType*/public $roundshotNumber;/*** @var \Nemundo\Model\Type\Number\YesNoType*/public $active;protected function loadModel() {$this->tableName = "roundshot_roundshot";$this->aliasTableName = "roundshot_roundshot";$this->label = "Roundshot";$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();$this->id = new \Nemundo\Model\Type\Id\IdType($this);$this->id->tableName = "roundshot_roundshot";$this->id->externalTableName = "roundshot_roundshot";$this->id->fieldName = "id";$this->id->aliasFieldName = "roundshot_roundshot_id";$this->id->label = "Id";$this->id->allowNullValue = false;$this->roundshot = new \Nemundo\Model\Type\Text\TextType($this);$this->roundshot->tableName = "roundshot_roundshot";$this->roundshot->externalTableName = "roundshot_roundshot";$this->roundshot->fieldName = "roundshot";$this->roundshot->aliasFieldName = "roundshot_roundshot_roundshot";$this->roundshot->label = "Roundshot";$this->roundshot->allowNullValue = false;$this->roundshot->length = 255;$this->url = new \Nemundo\Model\Type\Text\TextType($this);$this->url->tableName = "roundshot_roundshot";$this->url->externalTableName = "roundshot_roundshot";$this->url->fieldName = "url";$this->url->aliasFieldName = "roundshot_roundshot_url";$this->url->label = "Url";$this->url->allowNullValue = true;$this->url->length = 255;$this->geoCoordinate = new \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType($this);$this->geoCoordinate->tableName = "roundshot_roundshot";$this->geoCoordinate->externalTableName = "roundshot_roundshot";$this->geoCoordinate->fieldName = "geo_coordinate";$this->geoCoordinate->aliasFieldName = "roundshot_roundshot_geo_coordinate";$this->geoCoordinate->label = "Geo Coordinate";$this->geoCoordinate->allowNullValue = true;$this->roundshotNumber = new \Nemundo\Model\Type\Number\NumberType($this);$this->roundshotNumber->tableName = "roundshot_roundshot";$this->roundshotNumber->externalTableName = "roundshot_roundshot";$this->roundshotNumber->fieldName = "roundshot_number";$this->roundshotNumber->aliasFieldName = "roundshot_roundshot_roundshot_number";$this->roundshotNumber->label = "Roundshot Number";$this->roundshotNumber->allowNullValue = true;$this->active = new \Nemundo\Model\Type\Number\YesNoType($this);$this->active->tableName = "roundshot_roundshot";$this->active->externalTableName = "roundshot_roundshot";$this->active->fieldName = "active";$this->active->aliasFieldName = "roundshot_roundshot_active";$this->active->label = "Active";$this->active->allowNullValue = true;$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);$index->indexName = "roundshot_number";$index->addType($this->roundshotNumber);}}