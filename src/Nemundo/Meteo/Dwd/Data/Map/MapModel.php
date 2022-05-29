<?phpnamespace Nemundo\Meteo\Dwd\Data\Map;class MapModel extends \Nemundo\Model\Definition\Model\AbstractModel {/*** @var \Nemundo\Model\Type\Id\IdType*/public $id;/*** @var \Nemundo\Model\Type\Text\TextType*/public $map;/*** @var \Nemundo\Model\Type\Text\TextType*/public $mapUrl;protected function loadModel() {$this->tableName = "dwd_map";$this->aliasTableName = "dwd_map";$this->label = "Map";$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();$this->id = new \Nemundo\Model\Type\Id\IdType($this);$this->id->tableName = "dwd_map";$this->id->fieldName = "id";$this->id->aliasFieldName = "dwd_map_id";$this->id->label = "Id";$this->id->allowNullValue = false;$this->map = new \Nemundo\Model\Type\Text\TextType($this);$this->map->tableName = "dwd_map";$this->map->fieldName = "map";$this->map->aliasFieldName = "dwd_map_map";$this->map->label = "Map";$this->map->allowNullValue = true;$this->map->length = 255;$this->mapUrl = new \Nemundo\Model\Type\Text\TextType($this);$this->mapUrl->tableName = "dwd_map";$this->mapUrl->fieldName = "map_url";$this->mapUrl->aliasFieldName = "dwd_map_map_url";$this->mapUrl->label = "Map Url";$this->mapUrl->allowNullValue = true;$this->mapUrl->length = 255;$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);$index->indexName = "map_url";$index->addType($this->mapUrl);}}