<?php
namespace Nemundo\Srf\Data\Show;
class ShowRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var ShowModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $show;

/**
* @var string
*/
public $srfId;

/**
* @var string
*/
public $description;

/**
* @var int
*/
public $mediaTypeId;

/**
* @var \Nemundo\Srf\Data\MediaType\MediaTypeRow
*/
public $mediaType;

/**
* @var \Nemundo\Model\Reader\Property\File\ImageReaderProperty
*/
public $image;

/**
* @var bool
*/
public $crawler;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->show = $this->getModelValue($model->show);
$this->srfId = $this->getModelValue($model->srfId);
$this->description = $this->getModelValue($model->description);
$this->mediaTypeId = intval($this->getModelValue($model->mediaTypeId));
if ($model->mediaType !== null) {
$this->loadNemundoSrfDataMediaTypeMediaTypemediaTypeRow($model->mediaType);
}
$this->image = new \Nemundo\Model\Reader\Property\File\ImageReaderProperty($row, $model->image);
$this->crawler = boolval($this->getModelValue($model->crawler));
}
private function loadNemundoSrfDataMediaTypeMediaTypemediaTypeRow($model) {
$this->mediaType = new \Nemundo\Srf\Data\MediaType\MediaTypeRow($this->row, $model);
}
}