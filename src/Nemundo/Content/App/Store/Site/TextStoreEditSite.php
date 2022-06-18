<?php

namespace Nemundo\Content\App\Store\Site;

use Nemundo\Admin\Template\NavbarAdminTemplate;
use Nemundo\Admin\Template\PlainAdminTemplate;
use Nemundo\Content\App\Store\Form\TextStoreForm;
use Nemundo\Content\App\Store\Parameter\StoreParameter;
use Nemundo\Content\App\Store\Type\TextStoreType;
use Nemundo\Package\Bootstrap\Document\BootstrapDocument;
use Nemundo\Package\FontAwesome\Site\AbstractEditIconSite;
use Nemundo\Web\Site\AbstractSite;


class TextStoreEditSite extends AbstractEditIconSite
{

    /**
     * @var TextStoreEditSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'text-store-edit';
        TextStoreEditSite::$site = $this;
    }


    public function loadContent()
    {

        $store = new TextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $page = new PlainAdminTemplate();  // new AdminTemplate();  // new BootstrapDocument();
        $page->pageTitle = 'Edit';

        $form = new TextStoreForm($page);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        $page->render();

    }
}