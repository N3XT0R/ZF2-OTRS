<?php

namespace OTRS\Entity;

class TicketGetResponseTicket extends ActionTicket{
    
    private $Age;
    private $ArchiveFlag;
    private $Article = array();
    private $ChangeBy;
    private $Changed;
    private $Closed;
    private $CreateBy;
    private $CreateTimeUnix;
    private $Created;
    private $CustomerUserID;
    private $DynamicField_X;
    private $EscalationDestinationDate;
    private $EscalationDestinationIn;
    private $EscalationDestinationTime;
    private $EscalationResponseTime;
    private $EscalationSolutionTime;
    private $EscalationTime;
    private $EscalationTimeWorkingTime;
    private $EscalationUpdateTime;
    private $FirstResponseTimeEscalation;
    private $FirstResponseTimeNotification;
    private $FirstResponseTimeDestinationTime;
    private $FirstResponseTimeDestinationDate;
    private $FirstResponseTimeWorkingTime;
    private $FirstResponseTime;
    private $UpdateTimeEscalation;
    private $UpdateTimeNotification;
    private $UpdateTimeDestinationTime;
    private $UpdateTimeDestinationDate;
    private $UpdateTimeWorkingTime;
    private $UpdateTime;
    private $FirstResponse;
    private $FirstResponseInMin;
    private $FirstResponseDiffInMin;
    private $SolutionInMin;
    private $SolutionDiffInMin;
    private $FirstLock;
    private $GroupID;
    private $Lock;
    private $LockID;
    private $RealTillTimeNotUsed;
    private $SolutionTime;
    private $SolutionTimeEscalation;
    private $SolutionTimeNotification;
    private $SolutionTimeDestinationDate;
    private $SolutionTimeDestinationTime;
    private $SolutionTimeWorkingTime;
    private $StateType;
    private $TicketFreeKeyX;
    private $TicketFreeTextX;
    private $TicketFreeTimeX;
    private $TicketID;
    private $TicketNumber;
    private $UnlockTimeout;
    private $UntilTime;
    
    
    public function getAge() {
        return $this->Age;
    }

    public function getArchiveFlag() {
        return $this->ArchiveFlag;
    }

    public function getArticle() {
        return $this->Article;
    }
    
    public function addArticle($oArticle){
        $this->Article[] = $oArticle;
        return $this;
    }

    public function getChangeBy() {
        return $this->ChangeBy;
    }

    public function getChanged() {
        return $this->Changed;
    }

    public function getClosed() {
        return $this->Closed;
    }

    public function getCreateBy() {
        return $this->CreateBy;
    }

    public function getCreateTimeUnix() {
        return $this->CreateTimeUnix;
    }

    public function getCreated() {
        return $this->Created;
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

    public function getFirstResponseTimeEscalation() {
        return $this->FirstResponseTimeEscalation;
    }

    public function getFirstResponseTimeNotification() {
        return $this->FirstResponseTimeNotification;
    }

    public function getFirstResponseTimeDestinationTime() {
        return $this->FirstResponseTimeDestinationTime;
    }

    public function getFirstResponseTimeDestinationDate() {
        return $this->FirstResponseTimeDestinationDate;
    }

    public function getFirstResponseTimeWorkingTime() {
        return $this->FirstResponseTimeWorkingTime;
    }

    public function getFirstResponseTime() {
        return $this->FirstResponseTime;
    }

    public function getUpdateTimeEscalation() {
        return $this->UpdateTimeEscalation;
    }

    public function getUpdateTimeNotification() {
        return $this->UpdateTimeNotification;
    }

    public function getUpdateTimeDestinationTime() {
        return $this->UpdateTimeDestinationTime;
    }

    public function getUpdateTimeDestinationDate() {
        return $this->UpdateTimeDestinationDate;
    }

    public function getUpdateTimeWorkingTime() {
        return $this->UpdateTimeWorkingTime;
    }

    public function getUpdateTime() {
        return $this->UpdateTime;
    }

    public function getFirstResponse() {
        return $this->FirstResponse;
    }

    public function getFirstResponseInMin() {
        return $this->FirstResponseInMin;
    }

    public function getFirstResponseDiffInMin() {
        return $this->FirstResponseDiffInMin;
    }

    public function getSolutionInMin() {
        return $this->SolutionInMin;
    }

    public function getSolutionDiffInMin() {
        return $this->SolutionDiffInMin;
    }

    public function getFirstLock() {
        return $this->FirstLock;
    }

    public function getGroupID() {
        return $this->GroupID;
    }

    public function getLock() {
        return $this->Lock;
    }

    public function getLockID() {
        return $this->LockID;
    }

    public function getRealTillTimeNotUsed() {
        return $this->RealTillTimeNotUsed;
    }

    public function getSolutionTime() {
        return $this->SolutionTime;
    }

    public function getSolutionTimeEscalation() {
        return $this->SolutionTimeEscalation;
    }

    public function getSolutionTimeNotification() {
        return $this->SolutionTimeNotification;
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

    public function getStateType() {
        return $this->StateType;
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

    public function getUnlockTimeout() {
        return $this->UnlockTimeout;
    }

    public function getUntilTime() {
        return $this->UntilTime;
    }

    public function setAge($Age) {
        $this->Age = $Age;
        return $this;
    }

    public function setArchiveFlag($ArchiveFlag) {
        $this->ArchiveFlag = $ArchiveFlag;
        return $this;
    }

    public function setArticle($Article) {
        $this->Article = $Article;
        return $this;
    }

    public function setChangeBy($ChangeBy) {
        $this->ChangeBy = $ChangeBy;
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

    public function setCreateBy($CreateBy) {
        $this->CreateBy = $CreateBy;
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

    public function setFirstResponseTimeEscalation($FirstResponseTimeEscalation) {
        $this->FirstResponseTimeEscalation = $FirstResponseTimeEscalation;
        return $this;
    }

    public function setFirstResponseTimeNotification($FirstResponseTimeNotification) {
        $this->FirstResponseTimeNotification = $FirstResponseTimeNotification;
        return $this;
    }

    public function setFirstResponseTimeDestinationTime($FirstResponseTimeDestinationTime) {
        $this->FirstResponseTimeDestinationTime = $FirstResponseTimeDestinationTime;
        return $this;
    }

    public function setFirstResponseTimeDestinationDate($FirstResponseTimeDestinationDate) {
        $this->FirstResponseTimeDestinationDate = $FirstResponseTimeDestinationDate;
        return $this;
    }

    public function setFirstResponseTimeWorkingTime($FirstResponseTimeWorkingTime) {
        $this->FirstResponseTimeWorkingTime = $FirstResponseTimeWorkingTime;
        return $this;
    }

    public function setFirstResponseTime($FirstResponseTime) {
        $this->FirstResponseTime = $FirstResponseTime;
        return $this;
    }

    public function setUpdateTimeEscalation($UpdateTimeEscalation) {
        $this->UpdateTimeEscalation = $UpdateTimeEscalation;
        return $this;
    }

    public function setUpdateTimeNotification($UpdateTimeNotification) {
        $this->UpdateTimeNotification = $UpdateTimeNotification;
        return $this;
    }

    public function setUpdateTimeDestinationTime($UpdateTimeDestinationTime) {
        $this->UpdateTimeDestinationTime = $UpdateTimeDestinationTime;
        return $this;
    }

    public function setUpdateTimeDestinationDate($UpdateTimeDestinationDate) {
        $this->UpdateTimeDestinationDate = $UpdateTimeDestinationDate;
        return $this;
    }

    public function setUpdateTimeWorkingTime($UpdateTimeWorkingTime) {
        $this->UpdateTimeWorkingTime = $UpdateTimeWorkingTime;
        return $this;
    }

    public function setUpdateTime($UpdateTime) {
        $this->UpdateTime = $UpdateTime;
        return $this;
    }

    public function setFirstResponse($FirstResponse) {
        $this->FirstResponse = $FirstResponse;
        return $this;
    }

    public function setFirstResponseInMin($FirstResponseInMin) {
        $this->FirstResponseInMin = $FirstResponseInMin;
        return $this;
    }

    public function setFirstResponseDiffInMin($FirstResponseDiffInMin) {
        $this->FirstResponseDiffInMin = $FirstResponseDiffInMin;
        return $this;
    }

    public function setSolutionInMin($SolutionInMin) {
        $this->SolutionInMin = $SolutionInMin;
        return $this;
    }

    public function setSolutionDiffInMin($SolutionDiffInMin) {
        $this->SolutionDiffInMin = $SolutionDiffInMin;
        return $this;
    }

    public function setFirstLock($FirstLock) {
        $this->FirstLock = $FirstLock;
        return $this;
    }

    public function setGroupID($GroupID) {
        $this->GroupID = $GroupID;
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

    public function setRealTillTimeNotUsed($RealTillTimeNotUsed) {
        $this->RealTillTimeNotUsed = $RealTillTimeNotUsed;
        return $this;
    }

    public function setSolutionTime($SolutionTime) {
        $this->SolutionTime = $SolutionTime;
        return $this;
    }

    public function setSolutionTimeEscalation($SolutionTimeEscalation) {
        $this->SolutionTimeEscalation = $SolutionTimeEscalation;
        return $this;
    }

    public function setSolutionTimeNotification($SolutionTimeNotification) {
        $this->SolutionTimeNotification = $SolutionTimeNotification;
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

    public function setStateType($StateType) {
        $this->StateType = $StateType;
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

    public function setUnlockTimeout($UnlockTimeout) {
        $this->UnlockTimeout = $UnlockTimeout;
        return $this;
    }

    public function setUntilTime($UntilTime) {
        $this->UntilTime = $UntilTime;
        return $this;
    }


    
}
