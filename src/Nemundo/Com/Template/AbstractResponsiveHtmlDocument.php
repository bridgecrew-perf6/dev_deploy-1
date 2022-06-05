<?phpnamespace Nemundo\Com\Template;use Nemundo\Com\Container\LibraryTrait;use Nemundo\Com\Html\Header\LibraryHeader;use Nemundo\Html\Document\AbstractHtmlDocument;use Nemundo\Html\Header\Meta\Meta;use Nemundo\Html\Header\Title;abstract class AbstractResponsiveHtmlDocument extends AbstractHtmlDocument{    use LibraryTrait;    public $pageTitle;    public function getContent()    {        new LibraryHeader($this);        $meta = new Meta($this);        $meta->addAttribute('charset', 'UTF-8');        $meta = new Meta($this);        $meta->addAttribute('name', 'viewport');        $meta->addAttribute('content', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no');        $this->html->addAttribute('translate', 'no');        $this->html->addAttribute('lang', 'de');        $title = new Title($this);        $title->content = $this->pageTitle;        return parent::getContent();    }}