<?php

namespace OTRS\Entity;

class TicketGetResponseAttachment extends Attachment{
    
    private $ContentAlternative;
    private $ContentID;
    private $Filesize;
    private $FilesizeRaw;
    
    public function getContentAlternative() {
        return $this->ContentAlternative;
    }

    public function getContentID() {
        return $this->ContentID;
    }

    public function getFilesize() {
        return $this->Filesize;
    }

    public function getFilesizeRaw() {
        return $this->FilesizeRaw;
    }

    public function setContentAlternative($ContentAlternative) {
        $this->ContentAlternative = $ContentAlternative;
        return $this;
    }

    public function setContentID($ContentID) {
        $this->ContentID = $ContentID;
        return $this;
    }

    public function setFilesize($Filesize) {
        $this->Filesize = $Filesize;
        return $this;
    }

    public function setFilesizeRaw($FilesizeRaw) {
        $this->FilesizeRaw = $FilesizeRaw;
        return $this;
    }


}
