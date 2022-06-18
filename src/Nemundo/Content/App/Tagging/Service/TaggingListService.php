<?php


namespace Nemundo\Content\App\Tagging\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Tagging\Data\Tag\TagReader;
use Nemundo\Core\Http\Request\HttpRequest;

class TaggingListService extends AbstractServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'tagging-list';
    }


    public function onRequest()
    {

        $reader = new TagReader();
        $reader->filter->andEqual($reader->model->contentId, (new HttpRequest('content'))->getValue());
        foreach ($reader->getData() as $tagRow) {

            $data = [];
            $data['id'] = $tagRow->id;
            $data['tag'] = $tagRow->tag;

            $this->addRow($data);

        }

    }

}