<?phpnamespace Nemundo\App\CssDesigner\Install;use Nemundo\App\Application\Type\Install\AbstractInstall;use Nemundo\App\CssDesigner\Data\CssDesignerModelCollection;use Nemundo\Model\Setup\ModelCollectionSetup;class CssDesignerInstall extends AbstractInstall{    public function install()    {        (new ModelCollectionSetup())->addCollection(new CssDesignerModelCollection());    }}