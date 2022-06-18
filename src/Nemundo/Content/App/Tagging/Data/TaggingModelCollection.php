<?php
namespace Nemundo\Content\App\Tagging\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class TaggingModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Content\App\Tagging\Data\Tag\TagModel());
}
}