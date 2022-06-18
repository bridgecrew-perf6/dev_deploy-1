<?php


namespace Nemundo\Content\App\File\Site\Json;


use Nemundo\Admin\Com\Table\AdminClickableTable;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Content\App\File\Content\Image\ImageContentType;
use Nemundo\Content\App\File\Data\Image\ImagePaginationReader;
use Nemundo\Content\App\File\Data\Image\ImageReader;
use Nemundo\Content\Com\Dropdown\ContentActionDropdown;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Package\Bootstrap\Image\BootstrapResponsiveImage;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Nemundo\Web\Site\AbstractJsonSite;

class ImageListJsonSite extends AbstractJsonSite
{

    /**
     * @var ImageListJsonSite
     */
    public static $site;

    protected function loadSite()
    {

        $this->url='image-list-json';
        ImageListJsonSite::$site=$this;

    }

    protected function loadJson()
    {


        //$reader = new ImageReader();

        $imageReader = new ImagePaginationReader();
        $imageReader->addOrder($imageReader->model->id, SortOrder::DESCENDING);

        foreach ($imageReader->getData() as $imageRow) {


            $data=[];
            $data['image_src'] = $imageRow->image->getImageUrl($imageReader->model->imageAutoSize400);

            $this->addJsonRow($data);

            /*$row->addText($imageRow->fileSize);
            $row->addText($imageRow->fileExtension);
            $row->addText($imageRow->imageWidth);
            $row->addText($imageRow->imageHeight);*/


            //$dropdown->addContentAction(new FavoriteSaveContentAction());
            //$dropdown->addContentAction(new SendToContentAction());

        }




    }

}