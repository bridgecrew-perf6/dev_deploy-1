<?phpnamespace Nemundo\Core\Xml\Reader;use Nemundo\Core\Base\DataSource\AbstractDataSource;class XmlReader extends AbstractDataSource{    public $prefix = '';    protected $xmlText;    public function fromText($xmlText)    {        $this->xmlText = $xmlText;        return $this;    }    protected function loadData()    {        //$xml = simplexml_load_string($this->xmlText, 'SimpleXMLElement', LIBXML_NOCDATA);        //$xml =  simplexml_load_string($this->xmlText, "SimpleXMLElement", 0, $this->prefix, true);        $xml = simplexml_load_string($this->xmlText, "SimpleXMLElement", LIBXML_NOCDATA, $this->prefix, true);        $json = json_encode($xml);        // (new Debug())->write($xml);        $this->list = json_decode($json, true);    }}