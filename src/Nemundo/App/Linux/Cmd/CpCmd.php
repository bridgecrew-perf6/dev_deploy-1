<?phpnamespace Nemundo\App\Linux\Cmd;class CpCmd extends AbstractCmd{    public $sourcePath;    public $destinationPath;    public function getCmd()    {        $this->addCommandLine('cp -R '.$this->sourcePath.' '.$this->destinationPath);        //'mv '.$tmpPath.'dokuwiki-/ '.$webPath);*/        return parent::getCmd(); // TODO: Change the autogenerated stub    }}