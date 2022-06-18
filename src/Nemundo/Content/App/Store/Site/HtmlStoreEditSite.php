<?php

namespace Nemundo\Content\App\Store\Site;

use Nemundo\Admin\AdminConfig;
use Nemundo\Admin\Template\NavbarAdminTemplate;
use Nemundo\Admin\Template\PlainAdminTemplate;
use Nemundo\Com\Template\ResponsiveHtmlDocument;
use Nemundo\Content\App\Store\Form\HtmlStoreForm;
use Nemundo\Content\App\Store\Parameter\StoreParameter;
use Nemundo\Content\App\Store\Type\LargeTextStoreType;
use Nemundo\Package\Bootstrap\Document\BootstrapDocument;
use Nemundo\Package\CkEditor5\CkEditor5Package;
use Nemundo\Package\FontAwesome\Site\AbstractEditIconSite;
use Nemundo\Package\Jquery\Container\JqueryHeader;
use Nemundo\Package\Jquery\Package\JqueryPackage;
use Nemundo\Web\Site\AbstractSite;



class HtmlStoreEditSite extends AbstractEditIconSite
{

    /**
     * @var HtmlStoreEditSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'html-store-edit';
        HtmlStoreEditSite::$site = $this;
    }


    public function loadContent()
    {

        $store = new LargeTextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $page = new PlainAdminTemplate();
        /*$page = new ResponsiveHtmlDocument();
        $page->addCssUrl(AdminConfig::$defaultStylesheet);*/
        $page->pageTitle = 'Edit';
        $page->addPackage(new JqueryPackage());
        $page->addPackage(new CkEditor5Package());

        //$page->addHeaderContainer(new JqueryHeader());

        $form = new HtmlStoreForm($page);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        $page->render();

    }

}