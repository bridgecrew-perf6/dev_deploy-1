<?php

namespace Dev\App\MyVote\Com\Form;

use Dev\App\MyVote\Cookie\MyVoteCookie;
use Dev\App\MyVote\Data\Vote\Vote;
use Dev\App\MyVote\Data\Vote\VoteCount;
use Dev\App\MyVote\Data\Vote\VoteReader;
use Nemundo\Admin\Com\Button\AdminSubmitButton;
use Nemundo\Admin\Com\Form\AbstractAdminForm;
use Nemundo\Html\Paragraph\Paragraph;
use Parlament\Com\ListBox\EntscheidungListBox;

class VoteForm extends AbstractAdminForm
{

    public $abstimmungId;

    /**
     * @var EntscheidungListBox
     */
    private $entscheidung;

    public function getContent()
    {

        $voterId = (new MyVoteCookie())->getValue();

        $count = new VoteCount();
        $count->filter->andEqual($count->model->abstimmungId, $this->abstimmungId);
        $count->filter->andEqual($count->model->voterId, $voterId);
        if ($count->getCount() === 0) {

            $this->entscheidung = new EntscheidungListBox($this);

            //new AdminSubmitButton($this);


        } else {

            $reader = new VoteReader();
            $reader->model->loadEntscheidung();
            $reader->filter->andEqual($count->model->abstimmungId, $this->abstimmungId);
            $reader->filter->andEqual($count->model->voterId, $voterId);
            foreach ($reader->getData() as $voteRow) {

                $p = new Paragraph($this);
                $p->content = 'Deine Entscheidung: ' . $voteRow->entscheidung->entscheidung;

            }

        }

        return parent::getContent();

    }


    protected function onSubmit()
    {

        $data = new Vote();
        $data->abstimmungId = $this->abstimmungId;
        $data->voterId = (new MyVoteCookie())->getValue();
        $data->entscheidungId = $this->entscheidung->getValue();
        $data->save();

    }


}