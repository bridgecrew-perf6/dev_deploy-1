<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
use Nemundo\Model\Id\AbstractModelIdValue;
class TagId extends AbstractModelIdValue {
/**
* @var TagModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TagModel();
}
}