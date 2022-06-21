<?php

namespace Parlament\Page\Ratsmitglied;

use Nemundo\Admin\Com\Card\AdminCard;
use Nemundo\Admin\Com\Form\AdminSearchForm;
use Nemundo\Admin\Com\Icon\AdminIcon;
use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Html\Paragraph\Paragraph;
use Parlament\Com\Container\RatsmitgliedListContainer;
use Parlament\Com\ListBox\FraktionListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\Small\ParlamentSource;
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Site\Ratsmitglied\RatsmitgliedSite;
use Parlament\Template\ParlamentTemplate;


class RatsmitgliedPage extends ParlamentTemplate
{
    public function getContent()
    {

        $card = new AdminCard($this);

        $h1 = new AdminTitle($card);
        $h1->content = RatsmitgliedSite::$site->title;

        $row = new AdminSearchForm($card);

        $rat = new RatListBox($row);
        $rat->searchMode = true;
        $rat->submitOnChange = true;

        $kanton = new KantonListBox($row);
        $kanton->searchMode = true;
        $kanton->submitOnChange = true;

        $fraktion = new FraktionListBox($row);
        $fraktion->searchMode = true;
        $fraktion->submitOnChange = true;

        $hyperlink = new SiteHyperlink($row);
        $hyperlink->site = RatsmitgliedSite::$site;
        $hyperlink->showSiteTitle = false;
        $hyperlink->title = 'Suchfilter löschen';


        $icon = new AdminIcon($hyperlink);  // new BootstrapIcon($hyperlink);
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


        $p = new Paragraph($card);
        $p->content = $manager->getFormatCount() . ' Ratsmitglieder gefunden';


        $container = new RatsmitgliedListContainer($this);
        $container->manager = $manager;

        new ParlamentSource($this);

        return parent::getContent();
    }
}