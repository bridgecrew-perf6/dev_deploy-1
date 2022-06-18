<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
class TagCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var TagModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TagModel();
}
}