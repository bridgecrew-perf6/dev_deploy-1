<?php

namespace Nemundo\Content\App\WebRadio\Content\WebRadio;

use Nemundo\Content\App\WebRadio\Data\WebRadio\WebRadioDelete;
use Nemundo\Content\Type\AbstractContentDelete;

class WebRadioContentDelete extends AbstractContentDelete
{

    public function deleteContent($dataId)
    {

        (new WebRadioDelete())->deleteById($dataId);
        $this->deleteIndex((new WebRadioContentType($dataId)));

    }

}