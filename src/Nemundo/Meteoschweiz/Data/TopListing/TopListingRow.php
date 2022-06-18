<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var TopListingModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $listingLimit;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->listingLimit = intval($this->getModelValue($model->listingLimit));
}
}