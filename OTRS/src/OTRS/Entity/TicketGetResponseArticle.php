<?php

namespace OTRS\Entity;

class TicketGetResponseArticle extends Article{
    
    protected $Age;
    protected $AgeTimeUnix;
    protected $ArticleID;
    protected $Attachment;
    protected $AttachmentIDOfHTMLBody;
    protected $Cc;
    protected $CcRealname;
    protected $Changed;
    protected $Closed;
    protected $ContentCharset;
    protected $CreateTimeUnix;
    protected $Created;
    protected $CreatedBy;
    protected $CustomerID;
    protected $CustomerUserID;
    protected $DynamicField_X;
    protected $EscalationDestinationDate;
    protected $EscalationDestinationIn;
    protected $EscalationDestinationTime;
    protected $EscalationResponseTime;
    protected $EscalationSolutionTime;
    protected $EscalationTime;
    protected $EscalationTimeWorkingTime;
    protected $EscalationUpdateTime;
    protected $FirstLock;
    protected $FromRealname;
    protected $InReplyTo;
    protected $IncomingTime;
    protected $Lock;
    protected $LockID;
    protected $MessageID;
    protected $Owner;
    protected $OwnerID;
    protected $Priority;
    protected $PriorityID;
    protected $Queue;
    protected $QueueID;
    protected $RealTillTimeNotUsed;
    protected $References;
    protected $ReplyTo;
    protected $Responsible;
    protected $ResponsibleID;
    protected $SLA;
    protected $SLAID;
    protected $Service;
    protected $ServiceID;
    protected $SolutionTime;
    protected $SolutionTimeDestinationDate;
    protected $SolutionTimeDestinationTime;
    protected $SolutionTimeWorkingTime;
    protected $State;
    protected $StateID;
    protected $StateType;
    protected $Subject;
    protected $TicketFreeKeyX;
    protected $TicketFreeTextX;
    protected $TicketFreeTimeX;
    protected $TicketID;
    protected $TicketNumber;
    protected $Title;
    protected $To;
    protected $ToRealname;
    protected $Type;
    protected $TypeID;
    protected $UntilTime;
    
    
    public function getAge() {
        return $this->Age;
    }

    public function getAgeTimeUnix() {
        return $this->AgeTimeUnix;
    }

    public function getArticleID() {
        return $this->ArticleID;
    }

    public function getAttachment() {
        return $this->Attachment;
    }

    public function getAttachmentIDOfHTMLBody() {
        return $this->AttachmentIDOfHTMLBody;
    }

    public function getCc() {
        return $this->Cc;
    }

    public function getCcRealname() {
        return $this->CcRealname;
    }

    public function getChanged() {
        return $this->Changed;
    }

    public function getClosed() {
        return $this->Closed;
    }

    public function getContentCharset() {
        return $this->ContentCharset;
    }

    public function getCreateTimeUnix() {
        return $this->CreateTimeUnix;
    }

    public function getCreated() {
        return $this->Created;
    }

    public function getCreatedBy() {
        return $this->CreatedBy;
    }

    public function getCustomerID() {
        return $this->CustomerID;
    }

    public function getCustomerUserID() {
        return $this->CustomerUserID;
    }

    public function getDynamicField_X() {
        return $this->DynamicField_X;
    }

    public function getEscalationDestinationDate() {
        return $this->EscalationDestinationDate;
    }

    public function getEscalationDestinationIn() {
        return $this->EscalationDestinationIn;
    }

    public function getEscalationDestinationTime() {
        return $this->EscalationDestinationTime;
    }

    public function getEscalationResponseTime() {
        return $this->EscalationResponseTime;
    }

    public function getEscalationSolutionTime() {
        return $this->EscalationSolutionTime;
    }

    public function getEscalationTime() {
        return $this->EscalationTime;
    }

    public function getEscalationTimeWorkingTime() {
        return $this->EscalationTimeWorkingTime;
    }

    public function getEscalationUpdateTime() {
        return $this->EscalationUpdateTime;
    }

    public function getFirstLock() {
        return $this->FirstLock;
    }

    public function getFromRealname() {
        return $this->FromRealname;
    }

    public function getInReplyTo() {
        return $this->InReplyTo;
    }

    public function getIncomingTime() {
        return $this->IncomingTime;
    }

    public function getLock() {
        return $this->Lock;
    }

    public function getLockID() {
        return $this->LockID;
    }

    public function getMessageID() {
        return $this->MessageID;
    }

    public function getOwner() {
        return $this->Owner;
    }

    public function getOwnerID() {
        return $this->OwnerID;
    }

    public function getPriority() {
        return $this->Priority;
    }

    public function getPriorityID() {
        return $this->PriorityID;
    }

    public function getQueue() {
        return $this->Queue;
    }

    public function getQueueID() {
        return $this->QueueID;
    }

    public function getRealTillTimeNotUsed() {
        return $this->RealTillTimeNotUsed;
    }

    public function getReferences() {
        return $this->References;
    }

    public function getReplyTo() {
        return $this->ReplyTo;
    }

    public function getResponsible() {
        return $this->Responsible;
    }

    public function getResponsibleID() {
        return $this->ResponsibleID;
    }

    public function getSLA() {
        return $this->SLA;
    }

    public function getSLAID() {
        return $this->SLAID;
    }

    public function getService() {
        return $this->Service;
    }

    public function getServiceID() {
        return $this->ServiceID;
    }

    public function getSolutionTime() {
        return $this->SolutionTime;
    }

    public function getSolutionTimeDestinationDate() {
        return $this->SolutionTimeDestinationDate;
    }

    public function getSolutionTimeDestinationTime() {
        return $this->SolutionTimeDestinationTime;
    }

    public function getSolutionTimeWorkingTime() {
        return $this->SolutionTimeWorkingTime;
    }

    public function getState() {
        return $this->State;
    }

    public function getStateID() {
        return $this->StateID;
    }

    public function getStateType() {
        return $this->StateType;
    }

    public function getSubject() {
        return $this->Subject;
    }

    public function getTicketFreeKeyX() {
        return $this->TicketFreeKeyX;
    }

    public function getTicketFreeTextX() {
        return $this->TicketFreeTextX;
    }

    public function getTicketFreeTimeX() {
        return $this->TicketFreeTimeX;
    }

    public function getTicketID() {
        return $this->TicketID;
    }

    public function getTicketNumber() {
        return $this->TicketNumber;
    }

    public function getTitle() {
        return $this->Title;
    }

    public function getTo() {
        return $this->To;
    }

    public function getToRealname() {
        return $this->ToRealname;
    }

    public function getType() {
        return $this->Type;
    }

    public function getTypeID() {
        return $this->TypeID;
    }

    public function getUntilTime() {
        return $this->UntilTime;
    }

    public function setAge($Age) {
        $this->Age = $Age;
        return $this;
    }

    public function setAgeTimeUnix($AgeTimeUnix) {
        $this->AgeTimeUnix = $AgeTimeUnix;
        return $this;
    }

    public function setArticleID($ArticleID) {
        $this->ArticleID = $ArticleID;
        return $this;
    }

    public function setAttachment($Attachment) {
        $this->Attachment = $Attachment;
        return $this;
    }

    public function setAttachmentIDOfHTMLBody($AttachmentIDOfHTMLBody) {
        $this->AttachmentIDOfHTMLBody = $AttachmentIDOfHTMLBody;
        return $this;
    }

    public function setCc($Cc) {
        $this->Cc = $Cc;
        return $this;
    }

    public function setCcRealname($CcRealname) {
        $this->CcRealname = $CcRealname;
        return $this;
    }

    public function setChanged($Changed) {
        $this->Changed = $Changed;
        return $this;
    }

    public function setClosed($Closed) {
        $this->Closed = $Closed;
        return $this;
    }

    public function setContentCharset($ContentCharset) {
        $this->ContentCharset = $ContentCharset;
        return $this;
    }

    public function setCreateTimeUnix($CreateTimeUnix) {
        $this->CreateTimeUnix = $CreateTimeUnix;
        return $this;
    }

    public function setCreated($Created) {
        $this->Created = $Created;
        return $this;
    }

    public function setCreatedBy($CreatedBy) {
        $this->CreatedBy = $CreatedBy;
        return $this;
    }

    public function setCustomerID($CustomerID) {
        $this->CustomerID = $CustomerID;
        return $this;
    }

    public function setCustomerUserID($CustomerUserID) {
        $this->CustomerUserID = $CustomerUserID;
        return $this;
    }

    public function setDynamicField_X($DynamicField_X) {
        $this->DynamicField_X = $DynamicField_X;
        return $this;
    }

    public function setEscalationDestinationDate($EscalationDestinationDate) {
        $this->EscalationDestinationDate = $EscalationDestinationDate;
        return $this;
    }

    public function setEscalationDestinationIn($EscalationDestinationIn) {
        $this->EscalationDestinationIn = $EscalationDestinationIn;
        return $this;
    }

    public function setEscalationDestinationTime($EscalationDestinationTime) {
        $this->EscalationDestinationTime = $EscalationDestinationTime;
        return $this;
    }

    public function setEscalationResponseTime($EscalationResponseTime) {
        $this->EscalationResponseTime = $EscalationResponseTime;
        return $this;
    }

    public function setEscalationSolutionTime($EscalationSolutionTime) {
        $this->EscalationSolutionTime = $EscalationSolutionTime;
        return $this;
    }

    public function setEscalationTime($EscalationTime) {
        $this->EscalationTime = $EscalationTime;
        return $this;
    }

    public function setEscalationTimeWorkingTime($EscalationTimeWorkingTime) {
        $this->EscalationTimeWorkingTime = $EscalationTimeWorkingTime;
        return $this;
    }

    public function setEscalationUpdateTime($EscalationUpdateTime) {
        $this->EscalationUpdateTime = $EscalationUpdateTime;
        return $this;
    }

    public function setFirstLock($FirstLock) {
        $this->FirstLock = $FirstLock;
        return $this;
    }

    public function setFromRealname($FromRealname) {
        $this->FromRealname = $FromRealname;
        return $this;
    }

    public function setInReplyTo($InReplyTo) {
        $this->InReplyTo = $InReplyTo;
        return $this;
    }

    public function setIncomingTime($IncomingTime) {
        $this->IncomingTime = $IncomingTime;
        return $this;
    }

    public function setLock($Lock) {
        $this->Lock = $Lock;
        return $this;
    }

    public function setLockID($LockID) {
        $this->LockID = $LockID;
        return $this;
    }

    public function setMessageID($MessageID) {
        $this->MessageID = $MessageID;
        return $this;
    }

    public function setOwner($Owner) {
        $this->Owner = $Owner;
        return $this;
    }

    public function setOwnerID($OwnerID) {
        $this->OwnerID = $OwnerID;
        return $this;
    }

    public function setPriority($Priority) {
        $this->Priority = $Priority;
        return $this;
    }

    public function setPriorityID($PriorityID) {
        $this->PriorityID = $PriorityID;
        return $this;
    }

    public function setQueue($Queue) {
        $this->Queue = $Queue;
        return $this;
    }

    public function setQueueID($QueueID) {
        $this->QueueID = $QueueID;
        return $this;
    }

    public function setRealTillTimeNotUsed($RealTillTimeNotUsed) {
        $this->RealTillTimeNotUsed = $RealTillTimeNotUsed;
        return $this;
    }

    public function setReferences($References) {
        $this->References = $References;
        return $this;
    }

    public function setReplyTo($ReplyTo) {
        $this->ReplyTo = $ReplyTo;
        return $this;
    }

    public function setResponsible($Responsible) {
        $this->Responsible = $Responsible;
        return $this;
    }

    public function setResponsibleID($ResponsibleID) {
        $this->ResponsibleID = $ResponsibleID;
        return $this;
    }

    public function setSLA($SLA) {
        $this->SLA = $SLA;
        return $this;
    }

    public function setSLAID($SLAID) {
        $this->SLAID = $SLAID;
        return $this;
    }

    public function setService($Service) {
        $this->Service = $Service;
        return $this;
    }

    public function setServiceID($ServiceID) {
        $this->ServiceID = $ServiceID;
        return $this;
    }

    public function setSolutionTime($SolutionTime) {
        $this->SolutionTime = $SolutionTime;
        return $this;
    }

    public function setSolutionTimeDestinationDate($SolutionTimeDestinationDate) {
        $this->SolutionTimeDestinationDate = $SolutionTimeDestinationDate;
        return $this;
    }

    public function setSolutionTimeDestinationTime($SolutionTimeDestinationTime) {
        $this->SolutionTimeDestinationTime = $SolutionTimeDestinationTime;
        return $this;
    }

    public function setSolutionTimeWorkingTime($SolutionTimeWorkingTime) {
        $this->SolutionTimeWorkingTime = $SolutionTimeWorkingTime;
        return $this;
    }

    public function setState($State) {
        $this->State = $State;
        return $this;
    }

    public function setStateID($StateID) {
        $this->StateID = $StateID;
        return $this;
    }

    public function setStateType($StateType) {
        $this->StateType = $StateType;
        return $this;
    }

    public function setSubject($Subject) {
        $this->Subject = $Subject;
        return $this;
    }

    public function setTicketFreeKeyX($TicketFreeKeyX) {
        $this->TicketFreeKeyX = $TicketFreeKeyX;
        return $this;
    }

    public function setTicketFreeTextX($TicketFreeTextX) {
        $this->TicketFreeTextX = $TicketFreeTextX;
        return $this;
    }

    public function setTicketFreeTimeX($TicketFreeTimeX) {
        $this->TicketFreeTimeX = $TicketFreeTimeX;
        return $this;
    }

    public function setTicketID($TicketID) {
        $this->TicketID = $TicketID;
        return $this;
    }

    public function setTicketNumber($TicketNumber) {
        $this->TicketNumber = $TicketNumber;
        return $this;
    }

    public function setTitle($Title) {
        $this->Title = $Title;
        return $this;
    }

    public function setTo($To) {
        $this->To = $To;
        return $this;
    }

    public function setToRealname($ToRealname) {
        $this->ToRealname = $ToRealname;
        return $this;
    }

    public function setType($Type) {
        $this->Type = $Type;
        return $this;
    }

    public function setTypeID($TypeID) {
        $this->TypeID = $TypeID;
        return $this;
    }

    public function setUntilTime($UntilTime) {
        $this->UntilTime = $UntilTime;
        return $this;
    }


    
}
