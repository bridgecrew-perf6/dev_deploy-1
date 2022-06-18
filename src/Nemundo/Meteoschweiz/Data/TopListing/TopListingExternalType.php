<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $listingLimit;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = TopListingModel::class;
$this->externalTableName = "meteoschweiz_top_listing";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->listingLimit = new \Nemundo\Model\Type\Number\NumberType();
$this->listingLimit->fieldName = "listing_limit";
$this->listingLimit->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->listingLimit->externalTableName = $this->externalTableName;
$this->listingLimit->aliasFieldName = $this->listingLimit->tableName . "_" . $this->listingLimit->fieldName;
$this->listingLimit->label = "Listing Limit";
$this->addType($this->listingLimit);

}
}