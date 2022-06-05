<?php

namespace Parlament\Page\Geschaeft;

use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Nemundo\Package\Bootstrap\Pagination\BootstrapPagination;
use Parlament\Com\Container\GeschaeftListContainer;
use Parlament\Com\ListBox\DepartementListBox;
use Parlament\Com\ListBox\GeschaeftsstatusListBox;
use Parlament\Com\ListBox\GeschaeftstypListBox;
use Parlament\Com\ListBox\SessionListBox;
use Parlament\Com\ListBox\ThemaListBox;
use Parlament\Com\Table\GeschaeftTable;
use Parlament\Reader\GeschaeftDataReader;
use Parlament\Template\ParlamentTemplate;

class GeschaeftPage extends ParlamentTemplate
{
    public function getContent()
    {

        $h1 = new H1($this);
        $h1->content = 'Geschäft';

        $form = new SearchForm($this);

        $formRow = new BootstrapRow($form);

        $geschaeftstyp = new GeschaeftstypListBox($formRow);
        $geschaeftstyp->column = true;
        $geschaeftstyp->searchMode = true;
        $geschaeftstyp->submitOnChange = true;

        $geschaeftsstatus = new GeschaeftsstatusListBox($formRow);
        $geschaeftsstatus->column = true;
        $geschaeftsstatus->searchMode = true;
        $geschaeftsstatus->submitOnChange = true;

        $session = new SessionListBox($formRow);
        $session->column = true;
        $session->searchMode = true;
        $session->submitOnChange = true;

        /*$thema = new ThemaListBox($formRow);
        $thema->column = true;
        $thema->searchMode = true;
        $thema->submitOnChange = true;

        $depeartement = new DepartementListBox($formRow);
        $depeartement->column = true;
        $depeartement->searchMode = true;
        $depeartement->submitOnChange = true;*/

        /*$table = new GeschaeftTable($this);

        if ($session->hasValue()) {
            $table->sessionId = $session->getValue();
        }

        if ($geschaeftsstatus->hasValue()) {
            $table->geschaeftsstatusId = $geschaeftsstatus->getValue();
        }

        if ($geschaeftstyp->hasValue()) {
            $table->geschaeftstypId = $geschaeftstyp->getValue();
        }*/


        $reader = new GeschaeftDataReader();
        if ($session->hasValue()) {
            $reader->sessionId = $session->getValue();
        }

        if ($geschaeftsstatus->hasValue()) {
            $reader->geschaeftsstatusId = $geschaeftsstatus->getValue();
        }

        if ($geschaeftstyp->hasValue()) {
            $reader->geschaeftstypId = $geschaeftstyp->getValue();
        }

        $reader->loadFilter();
        $reader->sortByDatum();



        $p= new Paragraph($this);
        $p->content= ($reader->currentPage+1).' von '. ($reader->getPaginationCount()+1);

        $p= new Paragraph($this);
        $p->content= 'Total '. $reader->getTotalCount();


        $container= new GeschaeftTable($this);  //  new GeschaeftContainer($this);
        $container->geschaeftReader=$reader;

        $pagination=new BootstrapPagination($this);
        $pagination->paginationReader= $reader;


/*        foreach ($reader->getData() as $geschaeftRow) {
        }*/

        /*$reader->sessionId = $this->sessionId;
        $reader->geschaeftstypId = $this->geschaeftstypId;
        $reader->geschaeftsstatusId = $this->geschaeftsstatusId;*/

        return parent::getContent();

    }

}