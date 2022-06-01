<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Session\SessionReader;
use Parlament\Manager\SessionManager;
use Parlament\Reader\SessionDataReader;

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

        $reader = new SessionDataReader();
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->session);
        }

        return parent::getContent();
    }
}