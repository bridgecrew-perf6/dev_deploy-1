<?php

namespace Nemundo\App\CssDesigner\Com\Form;

use Nemundo\Admin\Com\Form\AbstractAdminForm;
use Nemundo\Admin\Com\ListBox\AdminColorPicker;
use Nemundo\Admin\Com\ListBox\AdminNumberBox;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\TextFile\Writer\TextFileWriter;
use Nemundo\Project\Path\ProjectPath;

class StyleBuilderForm extends AbstractAdminForm
{

    /**
     * @var AdminColorPicker
     */
    private $lightColor1;

    /**
     * @var AdminColorPicker
     */
    private $lightColor2;

    /**
     * @var AdminColorPicker
     */
    private $darkColor1;

    /**
     * @var AdminColorPicker
     */
    private $darkColor2;

    /**
     * @var AdminNumberBox
     */
    private $borderRadius;


    public function getContent()
    {

        $this->lightColor1 = new AdminColorPicker($this);
        $this->lightColor1->label = 'Light Color 1';

        $this->lightColor2 = new AdminColorPicker($this);
        $this->lightColor2->label = 'Light Color 2';

        $this->darkColor1 = new AdminColorPicker($this);
        $this->darkColor1->label = 'Dark Color 1';

        $this->darkColor2 = new AdminColorPicker($this);
        $this->darkColor2->label = 'Dark Color 2';

        $this->borderRadius=new AdminNumberBox($this);
        $this->borderRadius->label='Border Radius';
        $this->borderRadius->value=0;


        return parent::getContent();

    }


    protected function onSubmit()
    {


        $filename = (new ProjectPath())
            ->addPath('css')
            ->addPath('dev')
            ->addPath('style.css')
            ->getFullFilename();

        $writer=new TextFileWriter($filename);
        $writer->overwriteExistingFile=true;

        $writer
            ->addLine('@import "../framework/framework.css";')
            ->addLine(':root {')
            ->addLine('--color-light1: '.$this->lightColor1->getValue().';')
            ->addLine('--color-light2: '.$this->lightColor2->getValue().';')
            ->addLine('--color-dark1: '.$this->darkColor1->getValue().';')
            ->addLine('--color-dark2: '.$this->darkColor2->getValue().';')
            ->addLine('')
            ->addLine('--box-shadow: 3px 6px 4px -6px #000000;')
            ->addLine('--border-radius: '.$this->borderRadius->getValue().'px;')
            ->addLine('}')
            ->addLine('')
            ->saveFile();


        // save in design.json



    /*--color-light1: #cbf078;
    --color-light1: #f8f398;
    --color-dark1: #f1b963;
    --color-dark2: #e46161;*/

//}



        //(new Debug())->write($this->darkColor1->getValue());
        //exit;


        // TODO: Implement onSubmit() method.
    }


}