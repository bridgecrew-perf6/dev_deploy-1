<?php

namespace Nemundo\Content\App\WebRadio\Content\WebRadio;

use Nemundo\Content\App\WebRadio\Data\WebRadio\WebRadio;
use Nemundo\Content\App\WebRadio\Data\WebRadio\WebRadioId;
use Nemundo\Content\Type\AbstractContentBuilder;

class WebRadioContentBuilder extends AbstractContentBuilder
{

    public $webRadio;

    public $streamUrl;

    public function saveContent()
    {

        $data = new WebRadio();
        $data->updateOnDuplicate=true;
        $data->webRadio = $this->webRadio;
        $data->streamUrl = $this->streamUrl;
        $data->save();

        $id =new WebRadioId();
        $id->filter->andEqual($id->model->streamUrl,$this->streamUrl);
        $dataId=$id->getId();

        $this->saveIndex((new WebRadioContentType($dataId)));

    }

}