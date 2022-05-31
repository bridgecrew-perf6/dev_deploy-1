<?php

namespace Parlament\Import\Ratsmitglied;

use Parlament\Data\Ratsmitglied\Ratsmitglied;
use Parlament\Import\Base\AbstractPageParlamentImport;


// Historisch
class RatsmitgliedImport extends AbstractPageParlamentImport
{

    public function importData()
    {

        $this->loadJson('councillors');

    }


    protected function onJson($json)
    {

        $id = $json['id'];

        $data = new Ratsmitglied();
        $data->updateOnDuplicate = true;
        $data->id = $id;
        $data->aktiv= $json['active'];
        $data->name = $json['lastName'];
        $data->vorname = $json['firstName'];
        $data->hasHomepage = false;
        $data->save();


        (new RatsmitgliedDetailImport())->importRatsmitglied($id);


        /*
                "id": 1353,
            "updated": "2015-05-17T21:18:19Z",
            "active": false,
            "code": null,
            "firstName": "Giuseppe",
            "lastName": "a Marca",
            "officialDenomination": null,
            "salutationLetter": null,
            "salutationTitle": null
                */


    }

}