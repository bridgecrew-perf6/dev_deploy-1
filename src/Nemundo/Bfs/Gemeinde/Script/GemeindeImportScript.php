<?php

namespace Nemundo\Bfs\Gemeinde\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Bfs\Gemeinde\Data\Bezirk\Bezirk;
use Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkReader;
use Nemundo\Bfs\Gemeinde\Data\Gemeinde\Gemeinde;
use Nemundo\Bfs\Gemeinde\Data\Kanton\Kanton;
use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Bfs\Gemeinde\Import\GemeindeImport;
use Nemundo\Core\File\File;
use Nemundo\Core\WebRequest\WebRequest;
use Nemundo\Office\Excel\Reader\ExcelReader;
use Nemundo\Project\Path\TmpPath;

class GemeindeImportScript extends AbstractConsoleScript
{

    protected function loadScript()
    {
        $this->scriptName = 'gemeinde-import';
    }

    public function run()
    {

        (new GemeindeImport())->import();

        /*
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
            $data->ignoreIfExists=true;
            //$data->updateOnDuplicate = true;
            $data->id = $excelRow->getValue('KTNR');
            $data->kantonAbk = $excelRow->getValue('GDEKT');
            $data->kanton = $excelRow->getValue('GDEKTNA');
            $data->save();

        }


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
                $data->ignoreIfExists=true;
                //$data->updateOnDuplicate = true;
                $data->id = $excelRow->getValue('GDEBZNR');
                $data->bezirk = $bezirk;  // $excelRow->getValue('GDEBZNA');
                //$data->bezirkNr = $excelRow->getValue('GDEBZNR');
                $data->kantonId = $kantonList[$kanton];
                $data->save();
            }

        }

        /*$bezirkList = [];
        $bezirkReader = new BezirkReader();
        foreach ($bezirkReader->getData() as $bezirkRow) {
            $bezirkList[$bezirkRow->bezirkNr] = $bezirkRow->id;
        }*/


        /*
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
                    $data->ignoreIfExists=true;
                    //$data->updateOnDuplicate = true;
                    $data->id = $nr;
                    $data->gemeinde = $excelRow->getValue('GDENAME');
                    $data->kantonId = $kantonList[$kanton];
                    $data->bezirkId =  $bezirkNr;  //$bezirkList[$bezirkNr];
                    $data->save();

                }

            }

        }*/

    }

}