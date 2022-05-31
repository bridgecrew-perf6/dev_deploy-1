<?php

namespace Parlament\Import\Kommission;

use Parlament\Data\Kommission\Kommission;
use Parlament\Import\Base\AbstractPageParlamentImport;

class KommissionImport extends AbstractPageParlamentImport
{

    /**
     * @var bool
     */
    public $importDetail = false;

    public function importData()
    {

        $this->loadJson('committees');

    }


    protected function onJson($json)
    {

        $kommissionId = $json['id'];

        $aktiv = false;
        if (isset($json['isActive'])) {
            $aktiv = $json['isActive'];
        }


        $data = new Kommission();
        $data->updateOnDuplicate = true;
        $data->id = $kommissionId;
        $data->kommission = $json['name'];
        $data->aktiv = $aktiv;
        $data->ratId = $json['council']['id'];
        $data->save();

        if ($this->importDetail) {
            (new KommissionDetailImport())->importKommission($kommissionId);
        }


        /*
         * {
    "id": 4,
    "updated": "2020-07-15T11:59:55Z",
    "abbreviation": "APK-NR",
    "code": "KOM_4_",
    "committeeNumber": 4,
    "council": {
      "id": 1,
      "updated": "2010-12-26T13:07:49Z",
      "abbreviation": "NR",
      "code": "RAT_1_",
      "name": "Nationalrat",
      "type": "N"
    },
    "from": "1900-01-01T00:00:00Z",
    "isActive": true,
    "name": "Aussenpolitische Kommission NR",
    "typeCode": 1
  },
         *
         *
         */


    }


}