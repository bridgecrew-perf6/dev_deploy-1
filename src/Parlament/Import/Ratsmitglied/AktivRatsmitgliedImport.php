<?php

namespace Parlament\Import\Ratsmitglied;

use Nemundo\Bfs\Gemeinde\Directory\KantonDirectory;
use Nemundo\Core\Json\Reader\JsonReader;
use Parlament\Data\Partei\Partei;
use Parlament\Data\Ratsmitglied\Ratsmitglied;
use Parlament\Directory\FraktionKeyValue;
use Parlament\Directory\RatDirectory;
use Parlament\Import\Base\AbstractParlamentImport;


class AktivRatsmitgliedImport extends AbstractParlamentImport
{

    /**
     * @var RatDirectory
     */
    private $ratDirectory;

    /**
     * @var KantonDirectory
     */
    private $kantonDirectory;

    /**
     * @var FraktionKeyValue
     */
    private $fraktionDirectory;



    public function importData()
    {

        $this->kantonDirectory = new KantonDirectory();
        $this->ratDirectory=new RatDirectory();
        $this->fraktionDirectory=new FraktionKeyValue();

        $this->loadJson('councillors/basicdetails');

    }


    protected function onJson($json)
    {

        //$id = $json['id'];
        $number = $json['number'];

        $data = new Ratsmitglied();
        $data->updateOnDuplicate = true;
        $data->id =$number;  // $id;
        //$data->number= $number;
        $data->aktiv=true;
        $data->name = $json['lastName'];
        $data->vorname = $json['firstName'];
        $data->biographieUrl=$json['biographyUrl'];

        $data->hasHomepage=false;
        if (isset($json['homepage'])) {
            $data->hasHomepage=true;
            $data->homepage=$json['homepage'];
        }

        $data->kantonId = $this->kantonDirectory->getKantonId($json['canton']);
        $data->ratId= $this->ratDirectory->getId($json['council']);
        $data->fraktionId=$this->fraktionDirectory->getId($json['faction']);

        $bildUrl = 'https://www.parlament.ch/sitecollectionimages/profil/portrait-260/'.$number.'.jpg';
        $data->bild->fromUrl($bildUrl);
        $data->save();

        $data=new Partei();
        $data->ignoreIfExists=true;
        $data->abkuerzung=$json['party'];
        $data->partei=$json['partyName'];
        $data->save();




/*
        {
            "id": 4154,
    "updated": "2020-05-26T10:59:56Z",
    "biographyUrl": "http://www.parlament.ch/d/suche/Seiten/biografie.aspx?biografie_id=4154",
    "canton": "VS",
    "cantonName": "Wallis",
    "council": "N",
    "faction": "V",
    "factionName": "Fraktion der Schweizerischen Volkspartei",
    "firstName": "Jean-Luc",
    "function": "Mitglied",
    "homepage": "www.jladdor.ch",
    "lastName": "Addor",
    "number": 3055,
    "party": "SVP",
    "partyName": "Schweizerische Volkspartei",
    "pictureUrl": "http://www.parlament.ch/SiteCollectionImages/profil/225x225/3055.jpg"
  },
        */


    }

}