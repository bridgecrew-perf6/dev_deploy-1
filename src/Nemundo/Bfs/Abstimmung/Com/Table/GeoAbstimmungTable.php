<?phpnamespace Nemundo\Bfs\Abstimmung\Com\Table;use Nemundo\Admin\Com\Table\AdminTable;use Nemundo\Admin\Com\Table\AdminTableHeader;use Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevelRow;use Nemundo\Bfs\Abstimmung\Data\Resultat\ResultatReader;use Nemundo\Com\TableBuilder\TableRow;use Nemundo\Db\Sql\Order\SortOrder;class GeoAbstimmungTable extends AdminTable{    public $abstimmungId;    //public $geoLevelId;    /**     * @var GeoLevelRow     */    public $geoLevelRow;    /**     * @var ResultatReader     */    public $resultatReader;    protected function loadContainer()    {        parent::loadContainer(); // TODO: Change the autogenerated stub        $this->resultatReader = new ResultatReader();        $this->resultatReader->model->loadAbstimmung();        $this->resultatReader->model->abstimmung->loadDatum();        $this->resultatReader->model->loadGeo();    }    public function getContent()    {        // $this->resultatReader->limit = 30;        //if ($abstimmung->hasValue()) {        $this->resultatReader->filter->andEqual($this->resultatReader->model->abstimmungId, $this->abstimmungId);        $showAbstimmung = false;        //}        //if ($geo->hasValue()) {        $this->resultatReader->filter->andEqual($this->resultatReader->model->geo->geoLevelId, $this->geoLevelRow->id);  //geoLevelId);        //}//        $this->resultatReader->addOrder($this->resultatReader->model->jaProzent, SortOrder::DESCENDING);        $header = new AdminTableHeader($this);        if ($showAbstimmung) {            $header->addText($this->resultatReader->model->abstimmung->datum->label);            $header->addText($this->resultatReader->model->abstimmung->label);        }//        $header->addText($this->resultatReader->model->geo->label);        $header->addText($this->geoLevelRow->geoLevel);        $header->addText($this->resultatReader->model->jaProzent->label);        $header->addText($this->resultatReader->model->jaAbsolut->label);        $header->addText($this->resultatReader->model->neinAbsolut->label);        $header->addText($this->resultatReader->model->stimmbeteiligungProzent->label);        foreach ($this->resultatReader->getData() as $resultatRow) {            $row = new TableRow($this);            if ($showAbstimmung) {                $row->addText($resultatRow->abstimmung->datum->datum->getShortDateLeadingZeroFormat());                $row->addText($resultatRow->abstimmung->abstimmung);            }            $row->addText($resultatRow->geo->geo);            //$row->addText($resultatRow->jaProzent);            $row->addText($resultatRow->getJaProzent());            $row->addText($resultatRow->jaAbsolut);            $row->addText($resultatRow->neinAbsolut);            $row->addText($resultatRow->getStimmbeteiligungProzent());        }        return parent::getContent(); // TODO: Change the autogenerated stub    }}