<?phpnamespace Nemundo\Content\App\ImageGallery\Site;use Nemundo\Package\Dropzone\AbstractDropzoneUploadSite;class ImageGalleryUploadSite extends AbstractDropzoneUploadSite{    /**     * @var ImageGalleryUploadSite     */    public static $site;    protected function loadSite()    {        parent::loadSite(); // TODO: Change the autogenerated stub        ImageGalleryUploadSite::$site=$this;    }    public function loadContent()    {        // TODO: Implement loadContent() method.    }}