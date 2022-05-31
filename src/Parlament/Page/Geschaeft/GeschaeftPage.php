<?php

namespace Parlament\Page\Geschaeft;

use Nemundo\Package\Bootstrap\Form\BootstrapSearchForm;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Parlament\Com\ListBox\GeschaeftsstatusListBox;
use Parlament\Com\ListBox\GeschaeftstypListBox;
use Parlament\Com\ListBox\LegislaturListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\ListBox\SessionListBox;
use Parlament\Com\Table\AbstimmungRatsmitgliedTable;
use Parlament\Com\Table\GeschaeftTable;
use Parlament\Template\ParlamentTemplate;

class GeschaeftPage extends ParlamentTemplate
{
    public function getContent()
    {


        $form = new BootstrapSearchForm($this);

        $formRow=new BootstrapRow($form);

        $geschaeftsstatus=new GeschaeftsstatusListBox($formRow);
        $geschaeftsstatus->column=true;
        $geschaeftsstatus->searchMode=true;

        $geschaeftstyp=new GeschaeftstypListBox($formRow);
        $geschaeftstyp->column=true;
        $geschaeftstyp->searchMode=true;

        $legislatur=new LegislaturListBox($formRow);
        $legislatur->column=true;
        $legislatur->searchMode=true;

        /*$rat=new RatListBox($formRow);
        $rat->column=true;
        $rat->searchMode=true;*/

        $session=new SessionListBox($formRow);
        $session->column=true;
        $session->searchMode=true;


        $table=new GeschaeftTable($this);






        return parent::getContent();
    }
}