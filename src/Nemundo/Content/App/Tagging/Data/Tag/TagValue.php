<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
class TagValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var TagModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TagModel();
}
}