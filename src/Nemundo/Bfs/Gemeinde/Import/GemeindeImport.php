<?php

namespace Nemundo\Bfs\Gemeinde\Import;

use Nemundo\Bfs\Gemeinde\Data\Bezirk\Bezirk;
use Nemundo\Bfs\Gemeinde\Data\Gemeinde\Gemeinde;
use Nemundo\Bfs\Gemeinde\Data\Kanton\Kanton;
use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\File\File;
use Nemundo\Core\WebRequest\WebRequest;
use Nemundo\Office\Excel\Reader\ExcelReader;
use Nemundo\Project\Path\TmpPath;

class GemeindeImport extends AbstractBase
{

    public function import()
    {

        $url = 'https://dam-api.bfs.admin.ch/hub/api/dam/assets/22304854/master';
        $filename = (new TmpPath())->addPath('gemeinde.xlsx')->getFilename();

        if ((new File($filename))->fileNotExists()) {
            (new WebRequest())->downloadUrl($url, $filename);
        }

        /*$reader = new ExcelReader();
        $reader->filename = $filename;
        $reader->sheetName = 'KT';
        foreach ($reader->getData() as $excelRow) {

            $data = new Kanton();
            $data->ignoreIfExists = true;
            $data->id = $excelRow->getValue('KTNR');
            $data->kantonAbk = $excelRow->getValue('GDEKT');
            $data->kanton = $excelRow->getValue('GDEKTNA');
            $data->save();

        }*/


        (new KantonImport())->importData();


        $kantonList = [];

        $kantonReader = new KantonReader();
        foreach ($kantonReader->getData() as $kantonRow) {
            $kantonList[$kantonRow->kantonAbk] = $kantonRow->id;
        }


        $reader = new ExcelReader();
        $reader->filename = $filename;
        $reader->sheetName = 'BZN';
        foreach ($reader->getData() as $excelRow) {

            $kanton = $excelRow->getValue('GDEKT');
            $bezirk = $excelRow->getValue('GDEBZNA');

            if ($bezirk !== null) {
                $data = new Bezirk();
                $data->ignoreIfExists = true;
                $data->id = $excelRow->getValue('GDEBZNR');
                $data->bezirk = $bezirk;
                $data->kantonId = $kantonList[$kanton];
                $data->save();
            }

        }

        $reader = new ExcelReader();
        $reader->filename = $filename;
        $reader->sheetName = 'GDE';
        foreach ($reader->getData() as $excelRow) {

            $nr = $excelRow->getValue('GDENR');

            if ($nr !== '') {

                $kanton = $excelRow->getValue('GDEKT');
                $bezirkNr = $excelRow->getValue('GDEBZNR');

                if ($kanton !== null) {

                    $data = new Gemeinde();
                    $data->ignoreIfExists = true;
                    $data->id = $nr;
                    $data->gemeinde = $excelRow->getValue('GDENAME');
                    $data->kantonId = $kantonList[$kanton];
                    $data->bezirkId = $bezirkNr;
                    $data->save();

                }

            }

        }

    }

}