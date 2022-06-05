<?php

namespace Parlament\Page\Fraktion;

use Nemundo\Admin\Com\Redefine\AdminSearchRedefine;
use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Template\BootstrapAdminTemplate;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Bfs\Gemeinde\Parameter\KantonParameter;
use Nemundo\Bfs\Gemeinde\Parameter\RatsmitgliedParameter;
use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\Bootstrap\Icon\BootstrapIcon;
use Nemundo\Package\Bootstrap\Layout\BootstrapTwoColumnLayout;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Nemundo\Package\Bootstrap\Pagination\BootstrapPagination;
use Nemundo\Web\Site\Site;
use Parlament\Com\ListBox\FraktionListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\Small\SourceSmall;
use Parlament\Com\Table\RatsmitgliedTable;
use Parlament\Manager\FraktionManager;
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Parameter\FraktionParameter;
use Parlament\Parameter\RatParameter;


class FraktionItemPage extends BootstrapAdminTemplate
{

    public function getContent()
    {

        $fraktionId=(new FraktionParameter())->getValue();
        $fraktionRow=(new FraktionManager())->getFraktionRow($fraktionId);

        $h1=new H1($this);
        $h1->content=$fraktionRow->fraktion;

        $table = new AdminLabelValueTable($this);
        //$table->addLabelValue('Fraktion',$ratsmitgliedRow->fraktion->fraktion);
        $table->addLabelSite('Fraktion',$fraktionRow->getSite());

        return parent::getContent();

    }
}