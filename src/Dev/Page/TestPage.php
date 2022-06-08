<?php

namespace Dev\Page;

use Dev\App\MyVote\Cookie\MyVoteCookie;
use Dev\App\MyVote\Data\Vote\Vote;
use Dev\App\MyVote\Data\Vote\VoteReader;
use Nemundo\Admin\AdminConfig;
use Nemundo\Admin\Com\Button\AdminButton;
use Nemundo\Admin\Com\ListBox\AdminListBox;
use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Admin\Com\Navbar\AdminSiteNavbar;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Com\Template\AbstractResponsiveHtmlDocument;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Button\Button;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H2;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Html\Image\Img;
use Nemundo\Html\Layout\Nav;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;
use Nemundo\Package\FontAwesome\FontAwesomePackage;
use Parlament\Com\Container\RatsmitgliedListContainer;
use Parlament\Com\JavaScript\ParlamentModuleJavaScript;
use Parlament\Com\Table\AbstimmungTable;
use Parlament\Com\Table\RatsmitgliedTable;
use Parlament\Manager\RatsmitgliedManager;


class TestPage extends AdminTemplate  // AbstractTemplateDocument
{


    public function getContent()
    {

        $cookie = new MyVoteCookie();

        $h1=new H1($this);
        $h1->content='voter id: '.$cookie->getValue();

        $table=new AdminTable($this);

        $reader = new VoteReader();
        $reader->model->loadAbstimmung();
        $reader->model->abstimmung->loadGeschaeft();
        $reader->model->loadEntscheidung();
        $reader->filter->andEqual($reader->model->voterId,$cookie->getValue());



        foreach ($reader->getData() as $voteRow) {

            $tableRow = new TableRow($table);
            $tableRow->addText($voteRow->abstimmung->geschaeft->geschaeft);
            $tableRow->addText($voteRow->entscheidung->entscheidung);

        }









        new ParlamentModuleJavaScript($this);








        /*
        $btn= new AdminButton($this);
        $btn->label='Ja';

        $btn= new AdminButton($this);
        $btn->label='Nein';*/







/*
        $icon=new FontAwesomeIcon($this);
        $icon->icon='bars';




        //$this->addJsUrl('/js/dev/dropdown.js');
        $module=new ModuleJavaScript($this);
        $module->src='/js/dev/dropdown.js';

        //$this->addCssUrl('/css/framework/dropdown.css');


        $menu = new Div($this);
        $menu->addCssClass('dropdown-menu');



        $div=new Div($menu);
        $div->addCssClass('dropdown-btn');

        $button=new Button($div);
        $button->label='Dropdown';

        $dropdownContent = new Div($div);
        $dropdownContent->addCssClass('dropdown-content');

        $hyperlink=new Hyperlink($dropdownContent);
        $hyperlink->content='Link 1';

        $hyperlink=new Hyperlink($dropdownContent);
        $hyperlink->content='Link 2';

        $hyperlink=new Hyperlink($dropdownContent);
        $hyperlink->content='Link 3';



        $div=new Div($menu);
        $div->addCssClass('dropdown-btn');

        $button=new Button($div);
        $button->label='Dropdown2';

        $dropdownContent = new Div($div);
        $dropdownContent->addCssClass('dropdown-content');

        $hyperlink=new Hyperlink($dropdownContent);
        $hyperlink->content='Link 21';

        $hyperlink=new Hyperlink($dropdownContent);
        $hyperlink->content='Link 22';

        $hyperlink=new Hyperlink($dropdownContent);
        $hyperlink->content='Link 23';









        /*
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>*/






        /*
        $p=new Paragraph($this);
        $p->content='Gemäss dem Staatssekretariat für Wirtschaft hat die Schweiz im letzten Jahr Rüstungsgüter in 67 Länder exportiert. Die meisten Waffenexporte gingen 2021 an Deutschland. Es waren Waren im Wert von 123 Millionen Franken. Auf Platz 5 liegt das afrikanische Botswana, welches von der Schweiz Panzer für 63 Millionen Franken gekauft hat. Auf Platz 6 ist Saudiarabien, welches für 51 Mil­lionen Franken Rüstungsgüter von der Schweiz erhalten hat.';


        /*$table = new RatsmitgliedTable($this);
        $table->manager=new RatsmitgliedManager();*/






        //$this->addJsUrl('/js/dev/mobilemenu.js');

        /*$module=new ModuleJavaScript($this);
        $module->src= '/js/dev/mobilemenu.js';


        $this->addPackage(new FontAwesomePackage());

        $this->addCssUrl('/css/dev/mobilemenu.css');
        $this->addCssUrl('/css/aufrecht/style.css');


        $nav = new Nav($this);  // new AdminSiteNavbar($this);
        $nav->addCssClass('nav');


        $menuContent = new Div($nav);
        $menuContent->id = 'menu-content';

        foreach (AdminConfig::$webController->getMenuActiveSite() as $site) {

            $hyperlink=new SiteHyperlink($menuContent);
            $hyperlink->site=$site;
            $hyperlink->addCssClass('nav-item');

        }


        $icon = new FontAwesomeIcon($nav);
        $icon->icon = 'bars';
        $icon->id='hamburger';
        $icon->addCssClass('mobilemenu');



        //$navbar->site = AdminConfig::$webController;

        /*$this->navbar->userMode = AdminConfig::$userMode;
        $this->navbar->showPasswordChange = AdminConfig::$showPasswordChange;*/


        /*$nav=new Nav($this);
        $nav->addCssClass('nav');*/

        /*$logo = new Img($nav);
        $logo->id='logo';
        $logo->src='/tmp/logo.svg';*/
        //$logo->src='https://upload.wikimedia.org/wikipedia/commons/e/e8/Migros.svg';


        /*$button=new Button($this);
        $button->label='Hello';*/

        /*
        $icon = new FontAwesomeIcon($nav);
        $icon->icon = 'bars';
        $icon->id='hamburger';
        $icon->addCssClass('mobilemenu');

        $menuContent = new Div($this);
        $menuContent->id = 'menu-content';

        $close=new FontAwesomeIcon($menuContent);
        $close->id='menu-close';
        $close->icon='xmark';*/

/*
        $content = new Div($this);
        $content->id='main-content';


/*
        $h1= new H1($content);
        $h1->content='Hello World';


        $h1= new H2($content);
        $h1->content='Hello World';



        new AdminTextBox($this);

        $kanton=new KantonListBox($this);*/


        //new AdminListBox()






        //$container=new RatsmitgliedListContainer($this);



        /*
                $p=new Paragraph($content);
                $p->id='main';
                $p->content='Gemäss dem Staatssekretariat für Wirtschaft hat die Schweiz im letzten Jahr Rüstungsgüter in 67 Länder exportiert. Die meisten Waffenexporte gingen 2021 an Deutschland. Es waren Waren im Wert von 123 Millionen Franken. Auf Platz 5 liegt das afrikanische Botswana, welches von der Schweiz Panzer für 63 Millionen Franken gekauft hat. Auf Platz 6 ist Saudiarabien, welches für 51 Mil­lionen Franken Rüstungsgüter von der Schweiz erhalten hat.';
        */



        /*
        $meta = new Meta($this);
        $meta->addAttribute('name', 'viewport');
        $meta->addAttribute('content', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no');*/


        //$stationId = 66800;


        /*
        $form = new Form($this);

        $station = new StationAutocompleteListBox($form);

        new AdminSubmitButton($form);

        if ($station->hasValue()) {

            (new Debug())->write($station->getStationId());

            $chart = new Echart($this);

            $bar = new LineChartData($chart);  // new BarChartData($chart);


            $reader = new MeasurementReader();
            /*$reader->addGroup($reader->model->year);
            $reader->addGroup($reader->model->month);

            $max = new MaxField($reader);
            $max->aggregateField = $reader->model->temperature;*/

        /*   $reader->filter->andEqual($reader->model->stationId, $station->getStationId());
           $reader->filter->andEqual($reader->model->month, 5);
           $reader->filter->andEqual($reader->model->year, 2022);
           $reader->filter->andEqual($reader->model->temperatureValid, true);

           foreach ($reader->getData() as $row) {

               //(new Debug())->write($row->month.'/'.$row->year.' - '.$row->getModelValue($max));

               $chart->addXAxisLabel($row->year);
               $bar->addValue($row->temperature);

           }


       }*/


        return parent::getContent();

    }
}