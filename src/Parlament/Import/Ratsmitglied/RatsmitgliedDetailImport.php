<?php

namespace Parlament\Import\Ratsmitglied;

use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Type\DateTime\Date;
use Parlament\Data\Beruf\Beruf;
use Parlament\Data\Beruf\BerufId;
use Parlament\Data\Interessenbindung\Interessenbindung;
use Parlament\Data\Interessenbindung\InteressenbindungId;
use Parlament\Data\Ratsmitglied\Ratsmitglied;
use Parlament\Data\RatsmitgliedBeruf\RatsmitgliedBeruf;
use Parlament\Data\RatsmitgliedInteressenbindung\RatsmitgliedInteressenbindung;
use Parlament\Import\Base\AbstractParlamentImport;


class RatsmitgliedDetailImport extends AbstractParlamentImport
{

    public function importData()
    {

        //$this->loadJson('councillors');

    }


    public function importRatsmitglied($ratsmitgliedId)
    {

        $this->loadJsonList('councillors/' . $ratsmitgliedId);

    }


    protected function onJson($json)
    {

        //(new Debug())->write($json);

        $number = $json['number'];

        $geschlechtId = 0;
        switch ($json['gender']) {
            case 'm':
                $geschlechtId = 1;
                break;

            case 'f':
                $geschlechtId = 2;
                break;

        }

        $data = new Ratsmitglied();
        $data->updateOnDuplicate = true;
        //$data->id = $json['id'];
        $data->id = $number;
        $data->geburtstag = (new Date($json['birthDate']));
        $data->geschlechtId = $geschlechtId;

        /* $data->aktiv= $json['active'];
         $data->name = $json['lastName'];
         $data->vorname = $json['firstName'];
         $data->hasHomepage = false;*/
        $data->save();



        foreach ($json['concerns'] as $concern) {

            $organisation = $concern['name'];

            $data=new Interessenbindung();
            $data->ignoreIfExists=true;
            $data->organisation=$organisation;
            $data->save();


            $id = new InteressenbindungId();
            $id->filter->andEqual($id->model->organisation,$organisation);
            $interessenbindungId=$id->getId();

            $data=new RatsmitgliedInteressenbindung();
            $data->ignoreIfExists=true;
            $data->ratsmitgliedId= $number;
            $data->interessenbindungId= $interessenbindungId;
            $data->save();

        }

        //concerns



        foreach ($json['professions'] as $profession) {

            $data=new Beruf();
            $data->ignoreIfExists=true;
            $data->beruf=$profession;
            $data->save();

            $id = new BerufId();
            $id->filter->andEqual($id->model->beruf,$profession);
            $berufId=$id->getId();

            $data=new RatsmitgliedBeruf();
            $data->ignoreIfExists=true;
            $data->ratsmitgliedId=$number;
            $data->berufId=$berufId;
            $data->save();

        }

        //(new Debug())->write($json['professions']);

        //"professions": [
        //    "Hausarzt"
        //  ],



        //exit;


        /*


        {
  "id": 3871,
  "updated": "2020-05-15T10:29:47Z",
  "canton": "Solothurn",
  "cantonName": "SO",
  "council": "S",
  "faction": "M-E",
  "factionName": "Die Mitte-Fraktion. Die Mitte. EVP.",
  "firstName": "Pirmin",
  "function": "Vizepräsident/in",
  "lastName": "Bischof",
  "number": 2674,
  "party": "M-E",
  "partyName": "Die Mitte",
  "active": true,
  "additionalActivity": "Co-Präsident der Parlamentarischen Gruppe Inlandbanken; Co-Präsident der Parlamentarischen Gruppe Pflege",
  "birthDate": "1959-02-24T00:00:00Z",
  "birthPlace": {
    "canton": "SO",
    "city": "Solothurn"
  },
  "code": null,
  "committeeMemberships": [
    {
      "id": 0,
      "updated": "2011-11-01T08:56:54Z",
      "entryDate": "2007-12-03T00:00:00Z",
      "leavingDate": "2011-12-04T00:00:00Z",
      "committee": {
        "id": 10,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "WAK",
        "code": "KOM_10_",
        "committeeNumber": 10,
        "council": {
          "id": 1,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "NR",
          "code": "RAT_1_",
          "name": "Nationalrat",
          "type": "N"
        },
        "name": "Kommission für Wirtschaft und Abgaben NR"
      },
      "function": null
    },
    {
      "id": 1,
      "updated": "2015-10-19T12:14:38Z",
      "entryDate": "2011-12-15T00:00:00Z",
      "leavingDate": "2015-11-29T00:00:00Z",
      "committee": {
        "id": 29,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "BeK",
        "code": "KOM_29_",
        "committeeNumber": 29,
        "council": {
          "id": 3,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "V",
          "code": "RAT_3_",
          "name": "Vereinigte Bundesversammlung",
          "type": "B"
        },
        "name": "Begnadigungskommission"
      },
      "function": null
    },
    {
      "id": 2,
      "updated": "2015-10-19T12:14:38Z",
      "entryDate": "2011-12-15T00:00:00Z",
      "leavingDate": "2015-11-29T00:00:00Z",
      "committee": {
        "id": 17,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "APK",
        "code": "KOM_17_",
        "committeeNumber": 17,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Aussenpolitische Kommission SR"
      },
      "function": null
    },
    {
      "id": 3,
      "updated": "2015-10-19T12:14:38Z",
      "entryDate": "2011-12-15T00:00:00Z",
      "leavingDate": "2015-11-29T00:00:00Z",
      "committee": {
        "id": 23,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "WAK",
        "code": "KOM_23_",
        "committeeNumber": 23,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Wirtschaft und Abgaben SR"
      },
      "function": null
    },
    {
      "id": 4,
      "updated": "2015-10-19T12:14:38Z",
      "entryDate": "2011-12-15T00:00:00Z",
      "leavingDate": "2015-11-29T00:00:00Z",
      "committee": {
        "id": 25,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "RK",
        "code": "KOM_25_",
        "committeeNumber": 25,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Rechtsfragen SR"
      },
      "function": null
    },
    {
      "id": 5,
      "updated": "2015-12-10T09:21:47Z",
      "entryDate": "2015-11-30T00:00:00Z",
      "leavingDate": "2015-12-09T00:00:00Z",
      "committee": {
        "id": 29,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "BeK",
        "code": "KOM_29_",
        "committeeNumber": 29,
        "council": {
          "id": 3,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "V",
          "code": "RAT_3_",
          "name": "Vereinigte Bundesversammlung",
          "type": "B"
        },
        "name": "Begnadigungskommission"
      },
      "function": null
    },
    {
      "id": 6,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2015-11-30T00:00:00Z",
      "leavingDate": "2019-12-01T00:00:00Z",
      "committee": {
        "id": 17,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "APK",
        "code": "KOM_17_",
        "committeeNumber": 17,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Aussenpolitische Kommission SR"
      },
      "function": null
    },
    {
      "id": 7,
      "updated": "2015-12-10T08:11:49Z",
      "entryDate": "2015-11-30T00:00:00Z",
      "leavingDate": "2015-12-09T00:00:00Z",
      "committee": {
        "id": 23,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "WAK",
        "code": "KOM_23_",
        "committeeNumber": 23,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Wirtschaft und Abgaben SR"
      },
      "function": null
    },
    {
      "id": 8,
      "updated": "2015-12-10T08:16:44Z",
      "entryDate": "2015-11-30T00:00:00Z",
      "leavingDate": "2015-12-09T00:00:00Z",
      "committee": {
        "id": 25,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "RK",
        "code": "KOM_25_",
        "committeeNumber": 25,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Rechtsfragen SR"
      },
      "function": null
    },
    {
      "id": 9,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2015-12-10T00:00:00Z",
      "leavingDate": "2019-12-01T00:00:00Z",
      "committee": {
        "id": 24,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "SPK",
        "code": "KOM_24_",
        "committeeNumber": 24,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Staatspolitische Kommission SR"
      },
      "function": null
    },
    {
      "id": 10,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2015-12-10T00:00:00Z",
      "leavingDate": "2019-12-01T00:00:00Z",
      "committee": {
        "id": 19,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "SGK",
        "code": "KOM_19_",
        "committeeNumber": 19,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für soziale Sicherheit und Gesundheit SR"
      },
      "function": null
    },
    {
      "id": 11,
      "updated": "2017-11-13T13:50:12Z",
      "entryDate": "2015-12-10T00:00:00Z",
      "leavingDate": "2017-11-26T00:00:00Z",
      "committee": {
        "id": 23,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "WAK",
        "code": "KOM_23_",
        "committeeNumber": 23,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Wirtschaft und Abgaben SR"
      },
      "function": "Vizepräsident/in"
    },
    {
      "id": 13,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2017-11-27T00:00:00Z",
      "leavingDate": "2019-12-01T00:00:00Z",
      "committee": {
        "id": 23,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "WAK",
        "code": "KOM_23_",
        "committeeNumber": 23,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Wirtschaft und Abgaben SR"
      },
      "function": "Präsident/in"
    },
    {
      "id": 14,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2019-06-21T00:00:00Z",
      "leavingDate": "2019-12-01T00:00:00Z",
      "committee": {
        "id": 20,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "UREK",
        "code": "KOM_20_",
        "committeeNumber": 20,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Umwelt, Raumplanung und Energie SR"
      },
      "function": null
    },
    {
      "id": 16,
      "updated": "2021-11-16T14:32:00Z",
      "entryDate": "2019-12-02T00:00:00Z",
      "leavingDate": "2021-11-28T00:00:00Z",
      "committee": {
        "id": 17,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "APK",
        "code": "KOM_17_",
        "committeeNumber": 17,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Aussenpolitische Kommission SR"
      },
      "function": "Vizepräsident/in"
    },
    {
      "id": 17,
      "updated": "2019-12-12T09:27:54Z",
      "entryDate": "2019-12-02T00:00:00Z",
      "committee": {
        "id": 23,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "WAK",
        "code": "KOM_23_",
        "committeeNumber": 23,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Wirtschaft und Abgaben SR"
      },
      "function": null
    },
    {
      "id": 18,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2019-12-02T00:00:00Z",
      "committee": {
        "id": 19,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "SGK",
        "code": "KOM_19_",
        "committeeNumber": 19,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für soziale Sicherheit und Gesundheit SR"
      },
      "function": null
    },
    {
      "id": 19,
      "updated": "2019-12-12T09:22:23Z",
      "entryDate": "2019-12-02T00:00:00Z",
      "leavingDate": "2019-12-11T00:00:00Z",
      "committee": {
        "id": 24,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "SPK",
        "code": "KOM_24_",
        "committeeNumber": 24,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Staatspolitische Kommission SR"
      },
      "function": null
    },
    {
      "id": 20,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2019-12-02T00:00:00Z",
      "committee": {
        "id": 20,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "UREK",
        "code": "KOM_20_",
        "committeeNumber": 20,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Kommission für Umwelt, Raumplanung und Energie SR"
      },
      "function": null
    },
    {
      "id": 23,
      "updated": "2021-11-16T14:32:00Z",
      "entryDate": "2021-11-29T00:00:00Z",
      "committee": {
        "id": 17,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "APK",
        "code": "KOM_17_",
        "committeeNumber": 17,
        "council": {
          "id": 2,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "SR",
          "code": "RAT_2_",
          "name": "Ständerat",
          "type": "S"
        },
        "name": "Aussenpolitische Kommission SR"
      },
      "function": "Präsident/in"
    },
    {
      "id": 12,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2016-02-09T00:00:00Z",
      "leavingDate": "2019-12-01T00:00:00Z",
      "committee": {
        "id": 707,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "Del D",
        "code": "KOM_707_",
        "committeeNumber": 707,
        "council": {
          "id": 3,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "V",
          "code": "RAT_3_",
          "name": "Vereinigte Bundesversammlung",
          "type": "B"
        },
        "name": "Delegation für die Beziehungen zum Deutschen Bundestag"
      },
      "function": null
    },
    {
      "id": 15,
      "updated": "2020-03-03T16:26:26Z",
      "entryDate": "2019-12-02T00:00:00Z",
      "committee": {
        "id": 707,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "Del D",
        "code": "KOM_707_",
        "committeeNumber": 707,
        "council": {
          "id": 3,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "V",
          "code": "RAT_3_",
          "name": "Vereinigte Bundesversammlung",
          "type": "B"
        },
        "name": "Delegation für die Beziehungen zum Deutschen Bundestag"
      },
      "function": null
    },
    {
      "id": 21,
      "updated": "2020-11-16T15:57:13Z",
      "entryDate": "2020-05-18T00:00:00Z",
      "leavingDate": "2020-11-15T00:00:00Z",
      "committee": {
        "id": 1114,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "APK-NS 20-30",
        "code": "KOM_1114_",
        "committeeNumber": 1114,
        "council": {
          "id": 3,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "V",
          "code": "RAT_3_",
          "name": "Vereinigte Bundesversammlung",
          "type": "B"
        },
        "name": "Mitwirkung des Parlamentes im Bereich von Soft Law"
      },
      "function": "Präsident/in"
    },
    {
      "id": 22,
      "updated": "2020-12-01T06:55:13Z",
      "entryDate": "2020-12-01T00:00:00Z",
      "committee": {
        "id": 1114,
        "updated": "2020-07-15T11:59:55Z",
        "abbreviation": "APK-NS 20-30",
        "code": "KOM_1114_",
        "committeeNumber": 1114,
        "council": {
          "id": 3,
          "updated": "2010-12-26T13:07:49Z",
          "abbreviation": "V",
          "code": "RAT_3_",
          "name": "Vereinigte Bundesversammlung",
          "type": "B"
        },
        "name": "Mitwirkung des Parlamentes im Bereich von Soft Law"
      },
      "function": "Präsident/in"
    }
  ],
  "concerns": [
    {
      "agency": "F",
      "function": "P",
      "name": "AEK Onyx AG, Solothurn",
      "organizationType": "Bei.",
      "type": "AG"
    },
    {
      "agency": "F",
      "function": "M",
      "name": "Kernkraftwerk Gösgen-Däniken AG, Däniken",
      "organizationType": "VR",
      "type": "AG"
    },
    {
      "agency": "T",
      "function": "P",
      "name": "Parking AG, Solothurn",
      "organizationType": "VR",
      "type": "AG"
    },
    {
      "agency": "F",
      "function": "M",
      "name": "Schindler Aufzüge AG, Ebikon",
      "organizationType": "VR",
      "type": "AG"
    },
    {
      "agency": "F",
      "function": "M",
      "name": "Seilbahn Weissenstein AG, Solothurn",
      "organizationType": "VR",
      "type": "AG"
    },
    {
      "agency": "F",
      "function": "Sekr.",
      "name": "Stiftung für Schweizerische Rechtspflege, Solothurn",
      "organizationType": "Sr.",
      "type": "Stift."
    },
    {
      "agency": "F",
      "function": "M",
      "name": "W. A. de Vigier Stiftung, Solothurn",
      "organizationType": "Sr.",
      "type": "Stift."
    },
    {
      "agency": "F",
      "function": "P",
      "name": "Association Spitex privée Suisse (ASPS)",
      "organizationType": "-",
      "type": "Ve."
    },
    {
      "agency": "F",
      "function": "P",
      "name": "Schweizerischer Verband freier Berufe (SVFB), Bern",
      "organizationType": "V",
      "type": "Ve."
    },
    {
      "agency": "F",
      "function": "Sekr.",
      "name": "Solothurnischer Staatspersonalverband, Solothurn",
      "organizationType": "GL",
      "type": "Ve."
    }
  ],
  "contact": {
    "emailPrivate": "bischof@law-firm.ch",
    "emailWork": null,
    "faxPrivate": null,
    "faxWork": "+41 32 333 33 12",
    "homepagePrivate": null,
    "homepageWork": "www.pirmin-bischof.ch",
    "phoneMobilePrivate": null,
    "phoneMobileWork": null,
    "phonePrivate": null,
    "phoneWork": "+41 32 333 33 11"
  },
  "councilMemberships": [
    {
      "id": 0,
      "updated": "2012-03-22T11:52:34Z",
      "entryDate": "2007-12-03T00:00:00Z",
      "leavingDate": "2011-12-04T00:00:00Z",
      "canton": "SO",
      "cantonName": "Solothurn",
      "council": {
        "id": 1,
        "updated": "2010-12-26T13:07:49Z",
        "abbreviation": "NR",
        "code": "RAT_1_",
        "name": "Nationalrat",
        "type": "N"
      }
    },
    {
      "id": 1,
      "updated": "2012-03-22T11:52:45Z",
      "entryDate": "2011-12-05T00:00:00Z",
      "leavingDate": "2011-12-11T00:00:00Z",
      "canton": "SO",
      "cantonName": "Solothurn",
      "council": {
        "id": 1,
        "updated": "2010-12-26T13:07:49Z",
        "abbreviation": "NR",
        "code": "RAT_1_",
        "name": "Nationalrat",
        "type": "N"
      }
    },
    {
      "id": 2,
      "updated": "2015-10-19T12:18:17Z",
      "entryDate": "2011-12-12T00:00:00Z",
      "leavingDate": "2015-11-29T00:00:00Z",
      "canton": "SO",
      "cantonName": "Solothurn",
      "council": {
        "id": 2,
        "updated": "2010-12-26T13:07:49Z",
        "abbreviation": "SR",
        "code": "RAT_2_",
        "name": "Ständerat",
        "type": "S"
      }
    },
    {
      "id": 3,
      "updated": "2019-10-22T15:31:07Z",
      "entryDate": "2015-11-30T00:00:00Z",
      "leavingDate": "2019-12-01T00:00:00Z",
      "canton": "SO",
      "cantonName": "Solothurn",
      "council": {
        "id": 2,
        "updated": "2010-12-26T13:07:49Z",
        "abbreviation": "SR",
        "code": "RAT_2_",
        "name": "Ständerat",
        "type": "S"
      }
    },
    {
      "id": 4,
      "updated": "2019-11-21T15:05:48Z",
      "entryDate": "2019-12-02T00:00:00Z",
      "canton": "SO",
      "cantonName": "Solothurn",
      "council": {
        "id": 2,
        "updated": "2010-12-26T13:07:49Z",
        "abbreviation": "SR",
        "code": "RAT_2_",
        "name": "Ständerat",
        "type": "S"
      }
    }
  ],
  "displayLanguage": "de",
  "domicile": {
    "canton": null,
    "city": null,
    "addressLine": null,
    "zip": "0"
  },
  "factionId": 3,
  "gender": "m",
  "homePlaces": [
    {
      "canton": "SG",
      "city": "Eggersriet"
    },
    {
      "canton": "SG",
      "city": "Grub"
    }
  ],
  "language": "de",
  "mandate": "Exekutive der Gemeinde (Gemeinderat) Solothurn: seit Mai 1997; Legislative des Kantons (Kantonsrat): von April 2005 bis November 2007",
  "militaryGrade": "Soldat",
  "officialDenomination": "Bischof",
  "partyId": 1586,
  "postalAddress": {
    "canton": "SO",
    "city": "Solothurn",
    "addressLine": "Müllerhof",
    "company": "Bischof Stampfli Rechtsanwälte",
    "extraAddressLine": "St. Niklausstrasse 1",
    "zip": "4500"
  },
  "professions": [
    "Rechtsanwalt und Notar"
  ],
  "salutationLetter": "Herr Ständerat",
  "salutationTitle": null,
  "title": "Dr. iur., LL. M.",
  "workLanguage": "de"
}



                */


    }

}