<?php

namespace Nemundo\Content\App\File\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\File\Data\Image\ImageReader;
use Nemundo\Core\Archive\ZipArchive;
use Nemundo\Core\File\File;
use Nemundo\Project\Path\WebTmpPath;

class ImageDownloadService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'image-download';

    }


    public function onRequest()
    {

        $filename = (new WebTmpPath())
            ->addPath('image.zip')
            ->getFullFilename();

        $file = new File($filename);
        if ($file->fileExists()) {
            $file->deleteFile();
        }

        $zip = new ZipArchive();
        $zip->archiveFilename = $filename;

        $imageReader = new ImageReader();
        foreach ($imageReader->getData() as $imageRow) {
            $zip->addFilename($imageRow->image->getFullFilename());
        }

        $zip->createArchive();

        $this->sendOkStatus();

    }

}