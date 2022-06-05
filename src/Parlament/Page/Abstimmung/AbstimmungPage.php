<?php

namespace Parlament\Page\Abstimmung;

use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Html\Heading\H1;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Parlament\Com\Container\AbstimmungContainer;
use Parlament\Com\ListBox\GeschaeftsstatusListBox;
use Parlament\Com\ListBox\GeschaeftstypListBox;
use Parlament\Com\ListBox\SessionListBox;
use Parlament\Com\Small\SourceSmall;
use Parlament\Reader\AbstimmungDataReader;
use Parlament\Template\ParlamentTemplate;

class AbstimmungPage extends ParlamentTemplate
{

    public function getContent()
    {

        $h1 = new H1($this);
        $h1->content = 'Abstimmung';

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


        $dataReader = new AbstimmungDataReader();

        if ($session->hasValue()) {
            $dataReader->sessionId = $session->getValue();
        }

        if ($geschaeftsstatus->hasValue()) {
            $dataReader->geschaeftsstatusId = $geschaeftsstatus->getValue();
        }

        if ($geschaeftstyp->hasValue()) {
            $dataReader->geschaeftstypId = $geschaeftstyp->getValue();
        }

        $container = new AbstimmungContainer($this);
        $container->abstimmungReader = $dataReader;

        new SourceSmall($this);

        return parent::getContent();

    }

}