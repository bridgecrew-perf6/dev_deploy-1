<?php
namespace Nemundo\Content\Index\Log\Data\Log;
class Log extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var LogModel
*/
protected $model;

/**
* @var string
*/
public $contentId;

public function __construct() {
parent::__construct();
$this->model = new LogModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->contentId, $this->contentId);
$id = parent::save();
return $id;
}
}