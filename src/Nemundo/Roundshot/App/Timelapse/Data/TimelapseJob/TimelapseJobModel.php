<?phpnamespace Nemundo\Roundshot\App\Timelapse\Data\TimelapseJob;class TimelapseJobModel extends \Nemundo\Model\Definition\Model\AbstractModel {/*** @var \Nemundo\Model\Type\Id\IdType*/public $id;/*** @var \Nemundo\Model\Type\DateTime\DateType*/public $date;/*** @var \Nemundo\Model\Type\External\Id\ExternalIdType*/public $roundshotId;/*** @var \Nemundo\Roundshot\Data\Roundshot\RoundshotExternalType*/public $roundshot;/*** @var \Nemundo\Model\Type\User\CreatedUserType*/public $userId;/*** @var \Nemundo\User\Data\User\UserExternalType*/public $user;/*** @var \Nemundo\Model\Type\Number\YesNoType*/public $done;protected function loadModel() {$this->tableName = "timelapse_timelapsejob";$this->aliasTableName = "timelapse_timelapsejob";$this->label = "TimelapseJob";$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();$this->id = new \Nemundo\Model\Type\Id\IdType($this);$this->id->tableName = "timelapse_timelapsejob";$this->id->externalTableName = "timelapse_timelapsejob";$this->id->fieldName = "id";$this->id->aliasFieldName = "timelapse_timelapsejob_id";$this->id->label = "Id";$this->id->allowNullValue = false;$this->date = new \Nemundo\Model\Type\DateTime\DateType($this);$this->date->tableName = "timelapse_timelapsejob";$this->date->externalTableName = "timelapse_timelapsejob";$this->date->fieldName = "date";$this->date->aliasFieldName = "timelapse_timelapsejob_date";$this->date->label = "Date";$this->date->allowNullValue = false;$this->roundshotId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);$this->roundshotId->tableName = "timelapse_timelapsejob";$this->roundshotId->fieldName = "roundshot";$this->roundshotId->aliasFieldName = "timelapse_timelapsejob_roundshot";$this->roundshotId->label = "Roundshot";$this->roundshotId->allowNullValue = false;$this->userId = new \Nemundo\Model\Type\User\CreatedUserType($this);$this->userId->tableName = "timelapse_timelapsejob";$this->userId->fieldName = "user";$this->userId->aliasFieldName = "timelapse_timelapsejob_user";$this->userId->label = "User";$this->userId->allowNullValue = false;$this->done = new \Nemundo\Model\Type\Number\YesNoType($this);$this->done->tableName = "timelapse_timelapsejob";$this->done->externalTableName = "timelapse_timelapsejob";$this->done->fieldName = "done";$this->done->aliasFieldName = "timelapse_timelapsejob_done";$this->done->label = "Done";$this->done->allowNullValue = false;}public function loadRoundshot() {if ($this->roundshot == null) {$this->roundshot = new \Nemundo\Roundshot\Data\Roundshot\RoundshotExternalType($this, "timelapse_timelapsejob_roundshot");$this->roundshot->tableName = "timelapse_timelapsejob";$this->roundshot->fieldName = "roundshot";$this->roundshot->aliasFieldName = "timelapse_timelapsejob_roundshot";$this->roundshot->label = "Roundshot";}return $this;}public function loadUser() {if ($this->user == null) {$this->user = new \Nemundo\User\Data\User\UserExternalType($this, "timelapse_timelapsejob_user");$this->user->tableName = "timelapse_timelapsejob";$this->user->fieldName = "user";$this->user->aliasFieldName = "timelapse_timelapsejob_user";$this->user->label = "User";}return $this;}}