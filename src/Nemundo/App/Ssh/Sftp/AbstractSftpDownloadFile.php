<?phpnamespace Nemundo\App\Ssh\Sftp;use Nemundo\Core\Debug\Debug;use Nemundo\Core\Log\LogMessage;use Nemundo\Dev\Linux\Ssh\SshConfig;use phpseclib3\Crypt\PublicKeyLoader;use phpseclib3\Net\SFTP;abstract class AbstractSftpDownloadFile extends AbstractSftp{    protected function getTextFileContent($filename)    {        $this->connect();        $content = $this->sftp->get($filename);        return $content;    }}