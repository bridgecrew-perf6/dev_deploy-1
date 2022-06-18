<?php


namespace Nemundo\Content\App\Explorer\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Content\App\Explorer\Content\Container\ContainerContentType;
use Nemundo\Content\App\Explorer\Data\Container\ContainerReader;
use Nemundo\Content\App\Explorer\Store\HomeContentIdStore;
use Nemundo\Content\Builder\ContentBuilder;
use Nemundo\Content\Index\Tree\Reader\ChildContentReader;

class ContainerListService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'container-list';
    }


    public function onRequest()
    {

        $reader=new ContainerReader();
        $reader->addOrder($reader->model->container);
        foreach ($reader->getData() as $containerRow) {

            $contentType = new ContainerContentType();
            $contentType->fromDataRow($containerRow);

            $this->addRow($contentType->getData());

        }



        /*
        $content = (new ContentBuilder())->getContent((new HomeContentIdStore())->getValue());

        $reader = new ChildContentReader();
        $reader->contentType = $content;
        foreach ($reader->getData() as $contentRow) {


            $row = [];
            $row['subject'] = $contentRow->child->subject;
            $row['content_id'] = $contentRow->childId;
            $row['content_type_id'] = $contentRow->child->contentTypeId;;
            $row['data_id'] = $contentRow->child->dataId;

            $this->addRow($row);

        }*/

    }

}