<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
class TagDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var TagModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TagModel();
}
}