<?phpnamespace Nemundo\Roundshot\App\Timelapse\Local;use Nemundo\Core\Debug\Debug;use Nemundo\Core\Local\AbstractLocalCommand;use Nemundo\Core\Local\LocalCommand;// Timelapse Cmdclass FfmpegLocalCommand extends AbstractLocalCommand{    public $framerate= 30;    public $imagePath;    public $videoFilename;    protected function loadCommand()    {        // TODO: Implement loadCommand() method.    }    public function createVideo() {        //ffmpeg -framerate 10 -i "/srv/web/paranautik_com/tmp/image_timeline/%d.jpg" -s:v 1440x1080 -c:v libx264 -crf 17 -pix_fmt yuv420p /srv/web/paranautik_com/tmp/video.mp4        $cmd = 'ffmpeg -framerate '.$this->framerate.' -i "' . $this->imagePath . '" -s:v 1440x1080 -c:v libx264 -crf 17 -pix_fmt yuv420p ' . $this->videoFilename;        //(new Debug())->write($cmd);        // ffmpeg -framerate 5 -i "D:\Cache\roundshot\19\2021-05-03\%d.jpg" -s:v 1440x1080 -c:v libx264 -crf 17 -pix_fmt yuv420p C:\git\tmp\19_2021-05-03.mp4        $this->addCommand($cmd);        $output =  $this->runCommand();        return $output;    }}