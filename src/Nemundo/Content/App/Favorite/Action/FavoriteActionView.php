<?phpnamespace Nemundo\Content\App\Favorite\Action;use Nemundo\Content\Action\AbstractActionView;use Nemundo\Content\App\Favorite\Com\Button\FavoriteButton;use Nemundo\Html\Paragraph\Paragraph;use Nemundo\Package\Bootstrap\Button\BootstrapButton;class FavoriteActionView extends AbstractActionView{    public function getContent()    {        $btn=new FavoriteButton($this);        $btn->contentType=$this->content;        return parent::getContent();    }}