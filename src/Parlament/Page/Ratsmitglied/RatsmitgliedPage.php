<?php

namespace Parlament\Page\Ratsmitglied;

use Nemundo\Admin\Com\Form\AdminSearchForm;
use Nemundo\Admin\Com\Redefine\AdminSearchRedefine;
use Nemundo\Admin\Template\BootstrapAdminTemplate;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Bfs\Gemeinde\Parameter\KantonParameter;
use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\Bootstrap\Icon\BootstrapIcon;
use Nemundo\Package\Bootstrap\Layout\BootstrapTwoColumnLayout;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Nemundo\Package\Bootstrap\Pagination\BootstrapPagination;
use Nemundo\Web\Site\Site;
use Parlament\Com\Container\RatsmitgliedListContainer;
use Parlament\Com\ListBox\FraktionListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\Small\ParlamentSource;
use Parlament\Com\Table\RatsmitgliedTable;
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Parameter\FraktionParameter;
use Parlament\Parameter\RatParameter;
use Parlament\Site\Ratsmitglied\RatsmitgliedSite;


class RatsmitgliedPage extends AbstractTemplateDocument  // AdminTemplate
{
    public function getContent()
    {



        $h1 = new H1($this);
        $h1->content = RatsmitgliedSite::$site->title;  // 'Ratsmitglied';


        //$form = new AdminSearchForm($this);  // new SearchForm($this);

        $row =new AdminSearchForm($this);  // new BootstrapRow($form);

        $rat = new RatListBox($row);
        //$rat->column = true;
        $rat->searchMode = true;
        $rat->submitOnChange = true;

        $kanton = new KantonListBox($row);
        //$kanton->column = true;
        $kanton->searchMode = true;
        $kanton->submitOnChange = true;

        $fraktion = new FraktionListBox($row);
        //$fraktion->column = true;
        $fraktion->searchMode = true;
        $fraktion->submitOnChange = true;

        $hyperlink = new SiteHyperlink($row);
        $hyperlink->site = RatsmitgliedSite::$site;
        $hyperlink->showSiteTitle = false;
        $hyperlink->title = 'Suchfilter löschen';



        $icon = new BootstrapIcon($hyperlink);
        $icon->icon = 'x-circle';

        $manager = new RatsmitgliedManager();

        if ($rat->hasValue()) {
            $manager->ratId = $rat->getValue();
        }

        if ($kanton->hasValue()) {
            $manager->kantonId = $kanton->getValue();
        }

        if ($fraktion->hasValue()) {
            $manager->fraktionId = $fraktion->getValue();
        }


        $p = new Paragraph($this);
        $p->content = $manager->getFormatCount() . ' Ratsmitglieder gefunden';


        $container= new RatsmitgliedListContainer($this);
        $container->manager= $manager;




        new ParlamentSource($this);

        return parent::getContent();
    }
}