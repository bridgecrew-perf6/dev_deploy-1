<?php

namespace Nemundo\App\CssDesigner\Com\Form;

use Nemundo\Admin\Com\Form\AbstractAdminForm;
use Nemundo\Admin\Com\ListBox\AdminColorPicker;
use Nemundo\Admin\Com\ListBox\AdminNumberBox;
use Nemundo\App\ModelDesigner\Project\DefaultProject;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\File\File;
use Nemundo\Core\Json\Document\JsonDocument;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\TextFile\Writer\TextFileWriter;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Project\Path\ProjectPath;

class StyleBuilderForm extends AbstractAdminForm
{

    /**
     * @var AdminColorPicker
     */
    private $lightColor;

    /**
     * @var AdminColorPicker
     */
    private $darkColor;

    /**
     * @var AdminColorPicker
     */
    private $backgroundColor;

    /**
     * @var AdminColorPicker
     */
    private $fontColor;




    /**
     * @var AdminNumberBox
     */
    private $borderRadius;


    public function getContent()
    {

        $project = (new DefaultProject())->getDefaultProject();

        $p=new Paragraph($this);
        $p->content = $project->projectName;

        $p=new Paragraph($this);
        $p->content = $this->getJsonFilename();

        $p=new Paragraph($this);
        $p->content = $this->getStylesheetFilename();


        $this->lightColor = new AdminColorPicker($this);
        $this->lightColor->label = 'Light Color';

        $this->darkColor = new AdminColorPicker($this);
        $this->darkColor->label = 'Dark Color';

        $this->backgroundColor = new AdminColorPicker($this);
        $this->backgroundColor->label = 'Background Color';

        $this->fontColor = new AdminColorPicker($this);
        $this->fontColor->label = 'Font Color';

        $this->borderRadius=new AdminNumberBox($this);
        $this->borderRadius->label='Border Radius';
        $this->borderRadius->value=0;


        if ((new File($this->getJsonFilename()))->fileExists()) {

            $reader = new JsonReader();
            $reader->fromFilename($this->getJsonFilename());
            $json = $reader->getData();



            $this->lightColor->value = $json['color-light'];
            $this->darkColor->value = $json['color-dark'];
            $this->backgroundColor->value = $json['color-background'];
            $this->fontColor->value = $json['color-font'];
            $this->borderRadius->value=$json['border-radius'];


            /*
            $json['color-light'] = $this->lightColor->getValue();
            $json['color-dark'] = $this->darkColor->getValue();
            $json['color-background'] = $this->backgroundColor->getValue();
            $json['color-font'] = $this->fontColor->getValue();
            $json['box-shadow']='3px 6px 4px -6px #000000';
            $json['border-radius'] = $this->borderRadius->getValue();*/





            //(new Debug())->write($json);

        }




        return parent::getContent();

    }


    protected function onSubmit()
    {

        $project = (new DefaultProject())->getDefaultProject();

        $filename = (new ProjectPath())
            ->addPath('css')
            ->addPath( $project->projectName)
            ->addPath('style.css')
            ->getFullFilename();

        $writer=new TextFileWriter($filename);
        $writer->overwriteExistingFile=true;

        $writer
            ->addLine('@import "../framework/framework.css";')
            ->addLine(':root {')
            ->addLine('--color-light: '.$this->lightColor->getValue().';')
            ->addLine('--color-dark: '.$this->darkColor->getValue().';')
            ->addLine('--color-background: '.$this->backgroundColor->getValue().';')
            ->addLine('--color-font: '.$this->fontColor->getValue().';')
            ->addLine('')
            ->addLine('--box-shadow: 3px 6px 4px -6px #000000;')
            ->addLine('--border-radius: '.$this->borderRadius->getValue().'px;')
            ->addLine('}')
            ->addLine('')
            ->saveFile();





        // save in design.json


       /* $filename = (new ProjectPath())
            ->addPath('css')
            ->addPath($project->projectName)
            ->addPath('style.json')
            ->getFullFilename();*/

        $json=[];
        $json['color-light'] = $this->lightColor->getValue();
        $json['color-dark'] = $this->darkColor->getValue();
        $json['color-background'] = $this->backgroundColor->getValue();
        $json['color-font'] = $this->fontColor->getValue();
        $json['box-shadow']='3px 6px 4px -6px #000000';
        $json['border-radius'] = $this->borderRadius->getValue();


        $writer=new JsonDocument();
        $writer->filename = $this->getJsonFilename();
        /*(new ProjectPath())
            ->addPath('css')
            ->addPath($project->projectName)
            ->addPath('style.json')
            ->getFullFilename();*/
        $writer->overwriteExistingFile=true;
        $writer->setData($json);
        $writer->writeFile();




      /*  ->addLine('--color-light: '.$this->lightColor->getValue().';')
        ->addLine('--color-dark: '.$this->darkColor->getValue().';')
        ->addLine('--color-background: '.$this->backgroundColor->getValue().';')
        ->addLine('--color-font: '.$this->fontColor->getValue().';')
        ->addLine('')
        ->addLine('--box-shadow: 3px 6px 4px -6px #000000;')
        ->addLine('--border-radius: '.$this->borderRadius->getValue().'px;')*/






    /*--color-light1: #cbf078;
    --color-light1: #f8f398;
    --color-dark1: #f1b963;
    --color-dark2: #e46161;*/

//}



        //(new Debug())->write($this->darkColor1->getValue());
        //exit;


        // TODO: Implement onSubmit() method.
    }



    private function getJsonFilename() {

        $project = (new DefaultProject())->getDefaultProject();

        $filename = (new ProjectPath())
            ->addPath('css')
            ->addPath($project->projectName)
            ->addPath('style.json')
            ->getFullFilename();

        return $filename;

    }


    private function getStylesheetFilename() {

        $project = (new DefaultProject())->getDefaultProject();


        $filename = (new ProjectPath())
            ->addPath('css')
            ->addPath( $project->projectName)
            ->addPath('style.css')
            ->getFullFilename();

        return $filename;


    }



}