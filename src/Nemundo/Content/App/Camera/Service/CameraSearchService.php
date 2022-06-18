<?php

namespace Nemundo\Content\App\Camera\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Content\App\Camera\Data\Camera\CameraModel;
use Nemundo\Content\App\Camera\Data\Camera\CameraPaginationReader;

class CameraSearchService extends AbstractListServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'camera-search';

    }


    public function onRequest()
    {

        $model = new CameraModel();

        $reader = new CameraPaginationReader();
        foreach ($reader->getData() as $cameraRow) {

            $data = [];
            $data['id'] = $cameraRow->id;
            $data['camera'] = $cameraRow->camera;
            $data['image_url'] = $cameraRow->image->getImageUrl($model->imageAutoSize300);

            $data['has_geo_coordinate']= $cameraRow->hasGeoCoordinate;

            $geoCoordinate=[];
            $geoCoordinate['lat']=$cameraRow->geoCoordinate->latitude;
            $geoCoordinate['lon']=$cameraRow->geoCoordinate->longitude;

            $data['geo_coordinate']=$geoCoordinate;


            $this->addRow($data);

        }

    }

}