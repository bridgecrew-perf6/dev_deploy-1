<?php


namespace Nemundo\Content\App\Camera\Site\Json;


use Nemundo\Admin\Parameter\PageParameter;
use Nemundo\Content\App\Camera\Data\Camera\CameraPaginationReader;
use Nemundo\Content\App\Camera\Data\Camera\CameraReader;
use Nemundo\Web\Site\AbstractJsonSite;

class CameraListingJsonSite extends AbstractJsonSite
{

    /**
     * @var CameraListingJsonSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->url='camera-listing-json';
        CameraListingJsonSite::$site=$this;
    }


    protected function loadJson()
    {


        $reader = new CameraPaginationReader();

        /*$parameter = new PageParameter();
        if ($parameter->hasValue()) {
        $reader->currentPage =$parameter->getValue();
        }*/

        $reader->paginationLimit=5;




        foreach ($reader->getData() as $cameraRow) {

            $data=[];
            $data['data_id']=$cameraRow->id;
            $data['camera']=$cameraRow->camera;
            $data['date_time']=$cameraRow->dateTime->getIsoDateTime();
            //$data['image_url']= $cameraRow->image->getImageUrl($cameraRow->model->imageAutoSize300);
            $data['image_url']= $cameraRow->image->getImageUrl($reader->model->imageAutoSize300);

            $this->addJsonRow($data);

        }

    }

}