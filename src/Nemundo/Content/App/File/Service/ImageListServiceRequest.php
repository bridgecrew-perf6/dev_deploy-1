<?php

namespace Nemundo\Content\App\File\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Content\App\File\Content\Image\ImageContentType;
use Nemundo\Content\App\File\Data\Image\ImagePaginationReader;
use Nemundo\Content\Data\Content\ContentModel;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Db\DbConfig;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Model\Join\ModelJoin;

class ImageListServiceRequest extends AbstractListServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'file-image-list';

    }


    public function onRequest()
    {

        //DbConfig::$sqlDebug=true;

        $imageReader = new ImagePaginationReader();

        $model = new ContentModel();

        $join = new ModelJoin($imageReader);
        $join->externalModel = $model;
        $join->externalType = $model->dataId;
        $join->type= $imageReader->model->id;

        $imageReader->filter->andEqual($model->contentTypeId, (new ImageContentType())->typeId);

        $imageReader->addOrder($imageReader->model->id, SortOrder::DESCENDING);

        $parameter = new HttpRequest('id');
        if ($parameter->hasValue()) {
            $imageReader->filter->andEqual($imageReader->model->id, $parameter->getValue());
        }

        $imageReader->paginationLimit = $this->getPaginationLimit();
        $imageReader->currentPage = $this->getCurrentPage();

        foreach ($imageReader->getData() as $imageRow) {

            /*$row = [];
            $row['id'] = $imageRow->id;
            $row['filename'] = $imageRow->image->getFilename();
            $row['image_url'] = $imageRow->image->getUrl();
            $row['image_url_small'] = $imageRow->image->getImageUrl($imageReader->model->imageAutoSize400);
            $row['image_url_large'] = $imageRow->image->getImageUrl($imageReader->model->imageAutoSize1200);
            $row['image_width'] = $imageRow->imageWidth;
            $row['image_height'] = $imageRow->imageHeight;
            $row['date_time'] =$imageRow->dateTime->getIsoDateTime();*/

            $contentType = new ImageContentType();
            $contentType->fromDataRow($imageRow);

            $row = $contentType->getData();
            $row['content_id'] = $imageRow->getModelValue($model->id);

            $this->addRow($row);  // $contentType->getData());

        }

    }

}