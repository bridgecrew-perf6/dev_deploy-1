<?php

namespace Parlament\Reader;

use Parlament\Data\Ratsmitglied\RatsmitgliedReader;

class RatsmitgliedDataReader extends RatsmitgliedReader
{

    public function getData()
    {

     /*   $reader->model->loadRat();
        $reader->model->loadFraktion();
        $reader->model->loadPartei();
        $reader->model->loadKanton();
        $reader = $this->getFilter($reader);*/

        return parent::getData(); // TODO: Change the autogenerated stub
    }

}