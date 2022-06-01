<?php

namespace Parlament\Page\Session;

use Nemundo\Admin\Com\Redefine\AdminSearchRedefine;
use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Bfs\Gemeinde\Parameter\KantonParameter;
use Nemundo\Bfs\Gemeinde\Parameter\RatsmitgliedParameter;
use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\Bootstrap\Icon\BootstrapIcon;
use Nemundo\Package\Bootstrap\Image\BootstrapResponsiveImage;
use Nemundo\Package\Bootstrap\Layout\BootstrapTwoColumnLayout;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Nemundo\Package\Bootstrap\Pagination\BootstrapPagination;
use Nemundo\Web\Site\Site;
use Parlament\Com\ListBox\FraktionListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\Small\SourceSmall;
use Parlament\Com\Table\RatsmitgliedTable;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedReader;
use Parlament\Data\Session\SessionReader;
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Parameter\FraktionParameter;
use Parlament\Parameter\RatParameter;
use Parlament\Reader\SessionDataReader;


class SessionPage extends AdminTemplate
{

    public function getContent()
    {


        $table = new AdminTable($this);

        $header=new TableHeader($table);
        $header->addText('Id');
        $header->addText('Session');
        $header->addText('Von');
        $header->addText('Bis');


        $reader= new SessionDataReader();
        foreach ($reader->getData() as $sessionRow) {

            $row=new TableRow($table);
            $row->addText($sessionRow->id);
            $row->addText($sessionRow->session);
            $row->addText($sessionRow->von->getShortDateLeadingZeroFormat());
            $row->addText($sessionRow->bis->getShortDateLeadingZeroFormat());

        }

        return parent::getContent();

    }
}