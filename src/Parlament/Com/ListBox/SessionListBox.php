<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Session\SessionReader;
use Parlament\Manager\SessionManager;

class SessionListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Session';
        $this->name='session';

    }


    public function getContent()
    {

        /*$reader = new SessionReader();
        $reader->addOrder($reader->model->session);*/
        foreach ((new SessionManager())->getSessionData() as $row) {
            $this->addItem($row->id, $row->session);
        }

        return parent::getContent();
    }
}