<?php

namespace Nemundo\Srf\Setup;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Srf\Data\Show\ShowUpdate;

class SrfCrawlerSetup extends AbstractBase
{

    public function addShow($srfId)
    {

        $update = new ShowUpdate();
        $update->crawler = true;
        $update->filter->andEqual($update->model->srfId, $srfId);
        $update->update();

        return $this;

    }

}