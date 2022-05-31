<?php

namespace Nemundo\Bfs\Gemeinde\Import;

use Nemundo\Bfs\Gemeinde\Data\Kanton\Kanton;
use Nemundo\Core\Base\AbstractImport;
use Nemundo\Core\File\File;
use Nemundo\Core\WebRequest\WebRequest;
use Nemundo\Office\Excel\Reader\ExcelReader;
use Nemundo\Project\Path\TmpPath;

class KantonImport extends AbstractImport
{

    public function importData()
    {

        $url = 'https://dam-api.bfs.admin.ch/hub/api/dam/assets/22304854/master';
        $filename = (new TmpPath())->addPath('gemeinde.xlsx')->getFilename();

        if ((new File($filename))->fileNotExists()) {
            (new WebRequest())->downloadUrl($url, $filename);
        }

        $reader = new ExcelReader();
        $reader->filename = $filename;
        $reader->sheetName = 'KT';
        foreach ($reader->getData() as $excelRow) {

            $data = new Kanton();
            $data->ignoreIfExists = true;
            $data->id = $excelRow->getValue('KTNR');
            $data->kantonAbk = $excelRow->getValue('GDEKT');
            $data->kanton = $excelRow->getValue('GDEKTNA');
            $data->save();

        }

    }

}