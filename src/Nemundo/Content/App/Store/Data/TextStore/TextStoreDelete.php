<?php
namespace Nemundo\Content\App\Store\Data\TextStore;
class TextStoreDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var TextStoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TextStoreModel();
}
}