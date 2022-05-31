<?php

namespace Parlament\Page;

use Nemundo\Admin\Com\Redefine\AdminSearchRedefine;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Bfs\Gemeinde\Parameter\KantonParameter;
use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
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
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Parameter\FraktionParameter;
use Parlament\Parameter\RatParameter;
use Parlament\Site\Ratsmitglied\RatsmitgliedSite;


class RatsmitgliedPage extends AdminTemplate
{
    public function getContent()
    {

        $form = new SearchForm($this);

        $row = new BootstrapRow($form);

        $rat = new RatListBox($row);
        $rat->column = true;
        $rat->searchMode = true;
        $rat->submitOnChange = true;

        $kanton = new KantonListBox($row);
        $kanton->column = true;
        $kanton->searchMode = true;
        $kanton->submitOnChange = true;

        $fraktion = new FraktionListBox($row);
        $fraktion->column = true;
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


        $layout = new BootstrapTwoColumnLayout($this);
        $layout->col1->columnWidth = 10;
        $layout->col2->columnWidth = 2;

        $table = new RatsmitgliedTable($layout->col1);
        $table->manager = $manager;

        $pagination=new BootstrapPagination($layout->col1);
        $pagination->paginationReader= $manager->getPaginationReader();

        $redefine = new AdminSearchRedefine($layout->col2);
        $redefine->searchLabel = 'Rat';
        $redefine->showAtStartup = true;
        foreach ($manager->getRatGroupFilter() as $item) {

            $site = new Site();
            $site->title = $item->label;
            $site->addParameter(new RatParameter($item->id));
            $redefine->addItemSite($site, $item->count);

        }


        $redefine = new AdminSearchRedefine($layout->col2);
        $redefine->searchLabel = 'Kanton';
        $redefine->showAtStartup = true;
        foreach ($manager->getKantonGroupFilter() as $item) {

            $site = new Site();
            $site->title = $item->label;
            $site->addParameter(new KantonParameter($item->id));
            $redefine->addItemSite($site, $item->count);

        }


        $redefine = new AdminSearchRedefine($layout->col2);
        $redefine->searchLabel = 'Fraktion';
        $redefine->showAtStartup = true;
        foreach ($manager->getFraktionGroupFilter() as $item) {

            $site = new Site();
            $site->title = $item->label;
            $site->addParameter(new FraktionParameter($item->id));
            $redefine->addItemSite($site, $item->count);

        }

        new SourceSmall($this);

        return parent::getContent();
    }
}