<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
class TagPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var TagModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TagModel();
}
/**
* @return TagRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new TagRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}