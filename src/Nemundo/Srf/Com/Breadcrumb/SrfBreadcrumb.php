<?php

namespace Nemundo\Srf\Com\Breadcrumb;

use Nemundo\Admin\Com\Breadcrumb\AdminBreadcrumb;
use Nemundo\Srf\Data\Episode\EpisodeRow;
use Nemundo\Srf\Data\Show\ShowRow;
use Nemundo\Srf\Parameter\ShowParameter;
use Nemundo\Srf\Site\ShowSite;
use Nemundo\Srf\Site\SrfSite;

class SrfBreadcrumb extends AdminBreadcrumb
{

    /**
     * @var ShowRow
     */
    public $showRow;

    /**
     * @var EpisodeRow
     */
    public $episodeRow;

    public function getContent()
    {

        $this->addSite(SrfSite::$site);

        if ($this->showRow!==null) {
            $site=clone(ShowSite::$site);
            $site->title= $this->showRow->show;
            $site->addParameter(new ShowParameter($this->showRow->id));
            $this->addSite($site);
        }

        if ($this->episodeRow!==null) {
            $this->addText($this->episodeRow->title);
        }


        return parent::getContent();

    }

}