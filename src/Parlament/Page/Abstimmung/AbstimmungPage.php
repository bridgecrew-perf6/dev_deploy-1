<?php

namespace Parlament\Page\Abstimmung;

use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Html\Form\Form;
use Nemundo\Html\Heading\H1;
use Nemundo\Package\Bootstrap\Form\BootstrapSearchForm;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Parlament\Com\ListBox\GeschaeftsstatusListBox;
use Parlament\Com\ListBox\GeschaeftstypListBox;
use Parlament\Com\ListBox\SessionListBox;
use Parlament\Com\Table\AbstimmungTable;
use Parlament\Template\ParlamentTemplate;

class AbstimmungPage extends ParlamentTemplate
{

    public function getContent()
    {

        $h1 = new H1($this);
        $h1->content = 'Abstimmung';

        $form = new SearchForm($this);  // new BootstrapSearchForm($this);

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


        $table = new AbstimmungTable($this);

        if ($session->hasValue()) {
            $table->sessionId = $session->getValue();
        }

        if ($geschaeftsstatus->hasValue()) {
            $table->geschaeftsstatusId = $geschaeftsstatus->getValue();
        }

        if ($geschaeftstyp->hasValue()) {
            $table->geschaeftstypId = $geschaeftstyp->getValue();
        }

        return parent::getContent();

    }

}