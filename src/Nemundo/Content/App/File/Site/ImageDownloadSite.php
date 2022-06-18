<?php


namespace Nemundo\Content\App\File\Site;


use Nemundo\Content\App\File\Data\Image\ImageReader;
use Nemundo\Core\Archive\ZipArchive;
use Nemundo\Core\Http\Response\ResponseType;
use Nemundo\Core\Http\Response\FileResponse;
use Nemundo\Core\File\File;
use Nemundo\Project\Path\WebTmpPath;
use Nemundo\Web\Site\AbstractSite;

class ImageDownloadSite extends AbstractSite
{

    protected function loadSite()
    {

        // /app/file/image/image-download-zip

        $this->title='Download';
        $this->url='image-download-zip';
        // TODO: Implement loadSite() method.
    }


    public function loadContent()
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

        $response = new FileResponse();
        $response->filename = $filename;
        $response->contentType = ResponseType::ZIP;
        $response->responseFilename = 'image.zip';
        $response->sendResponse();


    }

}