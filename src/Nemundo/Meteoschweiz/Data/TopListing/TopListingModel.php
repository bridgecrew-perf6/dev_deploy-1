<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $listingLimit;

protected function loadModel() {
$this->tableName = "meteoschweiz_top_listing";
$this->aliasTableName = "meteoschweiz_top_listing";
$this->label = "Top Listing";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "meteoschweiz_top_listing";
$this->id->externalTableName = "meteoschweiz_top_listing";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "meteoschweiz_top_listing_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->listingLimit = new \Nemundo\Model\Type\Number\NumberType($this);
$this->listingLimit->tableName = "meteoschweiz_top_listing";
$this->listingLimit->externalTableName = "meteoschweiz_top_listing";
$this->listingLimit->fieldName = "listing_limit";
$this->listingLimit->aliasFieldName = "meteoschweiz_top_listing_listing_limit";
$this->listingLimit->label = "Listing Limit";
$this->listingLimit->allowNullValue = false;

}
}