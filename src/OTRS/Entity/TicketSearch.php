<?php

namespace OTRS\Entity;

class TicketSearch {
    
    private $UserLogin;
    private $CustomerUserLogin;
    private $SessionID;
    private $Password;
    private $Limit;
    private $TicketNumber;
    private $Title;
    private $Queues;
    private $QueueIDs;
    private $UseSubQueues;
    private $Types;
    private $TypeIDs;
    private $States;
    private $StateIDs;
    private $StateType;
    private $StateTypeIDs;
    private $Priorities;
    private $PriorityIDs;
    private $Services;
    private $ServiceIDs;
    private $SLAs;
    private $SLAIDs;
    private $Locks;
    private $LockIDs;
    private $OwnerIDs;
    private $ResponsibleIDs;
    private $WatchUserIDs;
    private $CustomerID;
    private $CreatedUserIDs;
    private $CreatedTypes;
    private $CreatedTypeIDs;
    private $CreatedPriorities;
    private $CreatedPriorityIDs;
    private $CreatedStates;
    private $CreatedStateIDs;
    private $CreatedQueues;
    private $CreatedQueueIDs;
    private $DynamicFields;
    private $Ticketflag;
    private $From;
    private $To;
    private $Cc;
    private $Subject;
    private $Body;
    private $FullTextIndex;
    private $ContentSearch;
    private $ConditionInline;
    private $ArticleCreateTimeOlderMinutes;
    private $ArticleCreateTimeNewerMinutes;
    private $ArticleCreateTimeNewerDate;
    private $ArticleCreateTimeOlderDate;
    private $TicketCreateTimeOlderMinutes;
    private $ATicketCreateTimeNewerMinutes;
    private $TicketCreateTimeNewerDate;
    private $TicketCreateTimeOlderDate;
    private $TicketChangeTimeOlderMinutes;
    private $TicketChangeTimeNewerMinutes;
    private $TicketChangeTimeNewerDate;
    private $TicketChangeTimeOlderDate;
    private $TicketLastChangeTimeOlderMinutes;
    private $TicketLastChangeTimeNewerMinutes;
    private $TicketLastChangeTimeNewerDate;
    private $TicketLastChangeTimeOlderDate;
    private $TicketCloseTimeOlderMinutes;
    private $TicketCloseTimeNewerMinutes;
    private $TicketCloseTimeNewerDate;
    private $TicketCloseTimeOlderDate;
    private $TicketPendingTimeOlderMinutes;
    private $TicketPendingTimeNewerMinutes;
    private $TicketPendingTimeNewerDate;
    private $TicketPendingTimeOlderDate;
    private $TicketEscalationTimeOlderMinutes;
    private $TTicketEscalationTimeNewerMinutes;
    private $TicketEscalationTimeNewerDate;
    private $TicketEscalationTimeOlderDate;
    private $ArchiveFlags;
    private $OrderBy;
    private $SortBy;
    private $CustomerUserID;
    
    
    public function getUserLogin() {
        return $this->UserLogin;
    }

    public function getSessionID() {
        return $this->SessionID;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function getLimit() {
        return $this->Limit;
    }

    public function getTicketNumber() {
        return $this->TicketNumber;
    }

    public function getTitle() {
        return $this->Title;
    }

    public function getQueues() {
        return $this->Queues;
    }

    public function getQueueIDs() {
        return $this->QueueIDs;
    }

    public function getUseSubQueues() {
        return $this->UseSubQueues;
    }

    public function getTypes() {
        return $this->Types;
    }

    public function getTypeIDs() {
        return $this->TypeIDs;
    }

    public function getStates() {
        return $this->States;
    }

    public function getStateIDs() {
        return $this->StateIDs;
    }

    public function getStateType() {
        return $this->StateType;
    }

    public function getStateTypeIDs() {
        return $this->StateTypeIDs;
    }

    public function getPriorities() {
        return $this->Priorities;
    }

    public function getPriorityIDs() {
        return $this->PriorityIDs;
    }

    public function getServices() {
        return $this->Services;
    }

    public function getServiceIDs() {
        return $this->ServiceIDs;
    }

    public function getSLAs() {
        return $this->SLAs;
    }

    public function getSLAIDs() {
        return $this->SLAIDs;
    }

    public function getLocks() {
        return $this->Locks;
    }

    public function getLockIDs() {
        return $this->LockIDs;
    }

    public function getOwnerIDs() {
        return $this->OwnerIDs;
    }

    public function getResponsibleIDs() {
        return $this->ResponsibleIDs;
    }

    public function getWatchUserIDs() {
        return $this->WatchUserIDs;
    }

    public function getCustomerID() {
        return $this->CustomerID;
    }

    public function getCustomerUserLogin() {
        return $this->CustomerUserLogin;
    }

    public function getCreatedUserIDs() {
        return $this->CreatedUserIDs;
    }

    public function getCreatedTypes() {
        return $this->CreatedTypes;
    }

    public function getCreatedTypeIDs() {
        return $this->CreatedTypeIDs;
    }

    public function getCreatedPriorities() {
        return $this->CreatedPriorities;
    }

    public function getCreatedPriorityIDs() {
        return $this->CreatedPriorityIDs;
    }

    public function getCreatedStates() {
        return $this->CreatedStates;
    }

    public function getCreatedStateIDs() {
        return $this->CreatedStateIDs;
    }

    public function getCreatedQueues() {
        return $this->CreatedQueues;
    }

    public function getCreatedQueueIDs() {
        return $this->CreatedQueueIDs;
    }

    public function getDynamicFields() {
        return $this->DynamicFields;
    }

    public function getTicketflag() {
        return $this->Ticketflag;
    }

    public function getFrom() {
        return $this->From;
    }

    public function getTo() {
        return $this->To;
    }

    public function getCc() {
        return $this->Cc;
    }

    public function getSubject() {
        return $this->Subject;
    }

    public function getBody() {
        return $this->Body;
    }

    public function getFullTextIndex() {
        return $this->FullTextIndex;
    }

    public function getContentSearch() {
        return $this->ContentSearch;
    }

    public function getConditionInline() {
        return $this->ConditionInline;
    }

    public function getArticleCreateTimeOlderMinutes() {
        return $this->ArticleCreateTimeOlderMinutes;
    }

    public function getArticleCreateTimeNewerMinutes() {
        return $this->ArticleCreateTimeNewerMinutes;
    }

    public function getArticleCreateTimeNewerDate() {
        return $this->ArticleCreateTimeNewerDate;
    }

    public function getArticleCreateTimeOlderDate() {
        return $this->ArticleCreateTimeOlderDate;
    }

    public function getTicketCreateTimeOlderMinutes() {
        return $this->TicketCreateTimeOlderMinutes;
    }

    public function getATicketCreateTimeNewerMinutes() {
        return $this->ATicketCreateTimeNewerMinutes;
    }

    public function getTicketCreateTimeNewerDate() {
        return $this->TicketCreateTimeNewerDate;
    }

    public function getTicketCreateTimeOlderDate() {
        return $this->TicketCreateTimeOlderDate;
    }

    public function getTicketChangeTimeOlderMinutes() {
        return $this->TicketChangeTimeOlderMinutes;
    }

    public function getTicketChangeTimeNewerMinutes() {
        return $this->TicketChangeTimeNewerMinutes;
    }

    public function getTicketChangeTimeNewerDate() {
        return $this->TicketChangeTimeNewerDate;
    }

    public function getTicketChangeTimeOlderDate() {
        return $this->TicketChangeTimeOlderDate;
    }

    public function getTicketLastChangeTimeOlderMinutes() {
        return $this->TicketLastChangeTimeOlderMinutes;
    }

    public function getTicketLastChangeTimeNewerMinutes() {
        return $this->TicketLastChangeTimeNewerMinutes;
    }

    public function getTicketLastChangeTimeNewerDate() {
        return $this->TicketLastChangeTimeNewerDate;
    }

    public function getTicketLastChangeTimeOlderDate() {
        return $this->TicketLastChangeTimeOlderDate;
    }

    public function getTicketCloseTimeOlderMinutes() {
        return $this->TicketCloseTimeOlderMinutes;
    }

    public function getTicketCloseTimeNewerMinutes() {
        return $this->TicketCloseTimeNewerMinutes;
    }

    public function getTicketCloseTimeNewerDate() {
        return $this->TicketCloseTimeNewerDate;
    }

    public function getTicketCloseTimeOlderDate() {
        return $this->TicketCloseTimeOlderDate;
    }

    public function getTicketPendingTimeOlderMinutes() {
        return $this->TicketPendingTimeOlderMinutes;
    }

    public function getTicketPendingTimeNewerMinutes() {
        return $this->TicketPendingTimeNewerMinutes;
    }

    public function getTicketPendingTimeNewerDate() {
        return $this->TicketPendingTimeNewerDate;
    }

    public function getTicketPendingTimeOlderDate() {
        return $this->TicketPendingTimeOlderDate;
    }

    public function getTicketEscalationTimeOlderMinutes() {
        return $this->TicketEscalationTimeOlderMinutes;
    }

    public function getTTicketEscalationTimeNewerMinutes() {
        return $this->TTicketEscalationTimeNewerMinutes;
    }

    public function getTicketEscalationTimeNewerDate() {
        return $this->TicketEscalationTimeNewerDate;
    }

    public function getTicketEscalationTimeOlderDate() {
        return $this->TicketEscalationTimeOlderDate;
    }

    public function getArchiveFlags() {
        return $this->ArchiveFlags;
    }

    public function getOrderBy() {
        return $this->OrderBy;
    }

    public function getSortBy() {
        return $this->SortBy;
    }

    public function getCustomerUserID() {
        return $this->CustomerUserID;
    }

    public function setUserLogin($UserLogin) {
        $this->UserLogin = $UserLogin;
        return $this;
    }

    public function setSessionID($SessionID) {
        $this->SessionID = $SessionID;
        return $this;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
        return $this;
    }

    public function setLimit($Limit) {
        $this->Limit = $Limit;
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

    public function setQueues($Queues) {
        $this->Queues = $Queues;
        return $this;
    }

    public function setQueueIDs($QueueIDs) {
        $this->QueueIDs = $QueueIDs;
        return $this;
    }

    public function setUseSubQueues($UseSubQueues) {
        $this->UseSubQueues = $UseSubQueues;
        return $this;
    }

    public function setTypes($Types) {
        $this->Types = $Types;
        return $this;
    }

    public function setTypeIDs($TypeIDs) {
        $this->TypeIDs = $TypeIDs;
        return $this;
    }

    public function setStates($States) {
        $this->States = $States;
        return $this;
    }

    public function setStateIDs($StateIDs) {
        $this->StateIDs = $StateIDs;
        return $this;
    }

    public function setStateType($StateType) {
        $this->StateType = $StateType;
        return $this;
    }

    public function setStateTypeIDs($StateTypeIDs) {
        $this->StateTypeIDs = $StateTypeIDs;
        return $this;
    }

    public function setPriorities($Priorities) {
        $this->Priorities = $Priorities;
        return $this;
    }

    public function setPriorityIDs($PriorityIDs) {
        $this->PriorityIDs = $PriorityIDs;
        return $this;
    }

    public function setServices($Services) {
        $this->Services = $Services;
        return $this;
    }

    public function setServiceIDs($ServiceIDs) {
        $this->ServiceIDs = $ServiceIDs;
        return $this;
    }

    public function setSLAs($SLAs) {
        $this->SLAs = $SLAs;
        return $this;
    }

    public function setSLAIDs($SLAIDs) {
        $this->SLAIDs = $SLAIDs;
        return $this;
    }

    public function setLocks($Locks) {
        $this->Locks = $Locks;
        return $this;
    }

    public function setLockIDs($LockIDs) {
        $this->LockIDs = $LockIDs;
        return $this;
    }

    public function setOwnerIDs($OwnerIDs) {
        $this->OwnerIDs = $OwnerIDs;
        return $this;
    }

    public function setResponsibleIDs($ResponsibleIDs) {
        $this->ResponsibleIDs = $ResponsibleIDs;
        return $this;
    }

    public function setWatchUserIDs($WatchUserIDs) {
        $this->WatchUserIDs = $WatchUserIDs;
        return $this;
    }

    public function setCustomerID($CustomerID) {
        $this->CustomerID = $CustomerID;
        return $this;
    }

    public function setCustomerUserLogin($CustomerUserLogin) {
        $this->CustomerUserLogin = $CustomerUserLogin;
        return $this;
    }

    public function setCreatedUserIDs($CreatedUserIDs) {
        $this->CreatedUserIDs = $CreatedUserIDs;
        return $this;
    }

    public function setCreatedTypes($CreatedTypes) {
        $this->CreatedTypes = $CreatedTypes;
        return $this;
    }

    public function setCreatedTypeIDs($CreatedTypeIDs) {
        $this->CreatedTypeIDs = $CreatedTypeIDs;
        return $this;
    }

    public function setCreatedPriorities($CreatedPriorities) {
        $this->CreatedPriorities = $CreatedPriorities;
        return $this;
    }

    public function setCreatedPriorityIDs($CreatedPriorityIDs) {
        $this->CreatedPriorityIDs = $CreatedPriorityIDs;
        return $this;
    }

    public function setCreatedStates($CreatedStates) {
        $this->CreatedStates = $CreatedStates;
        return $this;
    }

    public function setCreatedStateIDs($CreatedStateIDs) {
        $this->CreatedStateIDs = $CreatedStateIDs;
        return $this;
    }

    public function setCreatedQueues($CreatedQueues) {
        $this->CreatedQueues = $CreatedQueues;
        return $this;
    }

    public function setCreatedQueueIDs($CreatedQueueIDs) {
        $this->CreatedQueueIDs = $CreatedQueueIDs;
        return $this;
    }

    public function setDynamicFields($DynamicFields) {
        $this->DynamicFields = $DynamicFields;
        return $this;
    }

    public function setTicketflag($Ticketflag) {
        $this->Ticketflag = $Ticketflag;
        return $this;
    }

    public function setFrom($From) {
        $this->From = $From;
        return $this;
    }

    public function setTo($To) {
        $this->To = $To;
        return $this;
    }

    public function setCc($Cc) {
        $this->Cc = $Cc;
        return $this;
    }

    public function setSubject($Subject) {
        $this->Subject = $Subject;
        return $this;
    }

    public function setBody($Body) {
        $this->Body = $Body;
        return $this;
    }

    public function setFullTextIndex($FullTextIndex) {
        $this->FullTextIndex = $FullTextIndex;
        return $this;
    }

    public function setContentSearch($ContentSearch) {
        $this->ContentSearch = $ContentSearch;
        return $this;
    }

    public function setConditionInline($ConditionInline) {
        $this->ConditionInline = $ConditionInline;
        return $this;
    }

    public function setArticleCreateTimeOlderMinutes($ArticleCreateTimeOlderMinutes) {
        $this->ArticleCreateTimeOlderMinutes = $ArticleCreateTimeOlderMinutes;
        return $this;
    }

    public function setArticleCreateTimeNewerMinutes($ArticleCreateTimeNewerMinutes) {
        $this->ArticleCreateTimeNewerMinutes = $ArticleCreateTimeNewerMinutes;
        return $this;
    }

    public function setArticleCreateTimeNewerDate($ArticleCreateTimeNewerDate) {
        $this->ArticleCreateTimeNewerDate = $ArticleCreateTimeNewerDate;
        return $this;
    }

    public function setArticleCreateTimeOlderDate($ArticleCreateTimeOlderDate) {
        $this->ArticleCreateTimeOlderDate = $ArticleCreateTimeOlderDate;
        return $this;
    }

    public function setTicketCreateTimeOlderMinutes($TicketCreateTimeOlderMinutes) {
        $this->TicketCreateTimeOlderMinutes = $TicketCreateTimeOlderMinutes;
        return $this;
    }

    public function setATicketCreateTimeNewerMinutes($ATicketCreateTimeNewerMinutes) {
        $this->ATicketCreateTimeNewerMinutes = $ATicketCreateTimeNewerMinutes;
        return $this;
    }

    public function setTicketCreateTimeNewerDate($TicketCreateTimeNewerDate) {
        $this->TicketCreateTimeNewerDate = $TicketCreateTimeNewerDate;
        return $this;
    }

    public function setTicketCreateTimeOlderDate($TicketCreateTimeOlderDate) {
        $this->TicketCreateTimeOlderDate = $TicketCreateTimeOlderDate;
        return $this;
    }

    public function setTicketChangeTimeOlderMinutes($TicketChangeTimeOlderMinutes) {
        $this->TicketChangeTimeOlderMinutes = $TicketChangeTimeOlderMinutes;
        return $this;
    }

    public function setTicketChangeTimeNewerMinutes($TicketChangeTimeNewerMinutes) {
        $this->TicketChangeTimeNewerMinutes = $TicketChangeTimeNewerMinutes;
        return $this;
    }

    public function setTicketChangeTimeNewerDate($TicketChangeTimeNewerDate) {
        $this->TicketChangeTimeNewerDate = $TicketChangeTimeNewerDate;
        return $this;
    }

    public function setTicketChangeTimeOlderDate($TicketChangeTimeOlderDate) {
        $this->TicketChangeTimeOlderDate = $TicketChangeTimeOlderDate;
        return $this;
    }

    public function setTicketLastChangeTimeOlderMinutes($TicketLastChangeTimeOlderMinutes) {
        $this->TicketLastChangeTimeOlderMinutes = $TicketLastChangeTimeOlderMinutes;
        return $this;
    }

    public function setTicketLastChangeTimeNewerMinutes($TicketLastChangeTimeNewerMinutes) {
        $this->TicketLastChangeTimeNewerMinutes = $TicketLastChangeTimeNewerMinutes;
        return $this;
    }

    public function setTicketLastChangeTimeNewerDate($TicketLastChangeTimeNewerDate) {
        $this->TicketLastChangeTimeNewerDate = $TicketLastChangeTimeNewerDate;
        return $this;
    }

    public function setTicketLastChangeTimeOlderDate($TicketLastChangeTimeOlderDate) {
        $this->TicketLastChangeTimeOlderDate = $TicketLastChangeTimeOlderDate;
        return $this;
    }

    public function setTicketCloseTimeOlderMinutes($TicketCloseTimeOlderMinutes) {
        $this->TicketCloseTimeOlderMinutes = $TicketCloseTimeOlderMinutes;
        return $this;
    }

    public function setTicketCloseTimeNewerMinutes($TicketCloseTimeNewerMinutes) {
        $this->TicketCloseTimeNewerMinutes = $TicketCloseTimeNewerMinutes;
        return $this;
    }

    public function setTicketCloseTimeNewerDate($TicketCloseTimeNewerDate) {
        $this->TicketCloseTimeNewerDate = $TicketCloseTimeNewerDate;
        return $this;
    }

    public function setTicketCloseTimeOlderDate($TicketCloseTimeOlderDate) {
        $this->TicketCloseTimeOlderDate = $TicketCloseTimeOlderDate;
        return $this;
    }

    public function setTicketPendingTimeOlderMinutes($TicketPendingTimeOlderMinutes) {
        $this->TicketPendingTimeOlderMinutes = $TicketPendingTimeOlderMinutes;
        return $this;
    }

    public function setTicketPendingTimeNewerMinutes($TicketPendingTimeNewerMinutes) {
        $this->TicketPendingTimeNewerMinutes = $TicketPendingTimeNewerMinutes;
        return $this;
    }

    public function setTicketPendingTimeNewerDate($TicketPendingTimeNewerDate) {
        $this->TicketPendingTimeNewerDate = $TicketPendingTimeNewerDate;
        return $this;
    }

    public function setTicketPendingTimeOlderDate($TicketPendingTimeOlderDate) {
        $this->TicketPendingTimeOlderDate = $TicketPendingTimeOlderDate;
        return $this;
    }

    public function setTicketEscalationTimeOlderMinutes($TicketEscalationTimeOlderMinutes) {
        $this->TicketEscalationTimeOlderMinutes = $TicketEscalationTimeOlderMinutes;
        return $this;
    }

    public function setTTicketEscalationTimeNewerMinutes($TTicketEscalationTimeNewerMinutes) {
        $this->TTicketEscalationTimeNewerMinutes = $TTicketEscalationTimeNewerMinutes;
        return $this;
    }

    public function setTicketEscalationTimeNewerDate($TicketEscalationTimeNewerDate) {
        $this->TicketEscalationTimeNewerDate = $TicketEscalationTimeNewerDate;
        return $this;
    }

    public function setTicketEscalationTimeOlderDate($TicketEscalationTimeOlderDate) {
        $this->TicketEscalationTimeOlderDate = $TicketEscalationTimeOlderDate;
        return $this;
    }

    public function setArchiveFlags($ArchiveFlags) {
        $this->ArchiveFlags = $ArchiveFlags;
        return $this;
    }

    public function setOrderBy($OrderBy) {
        $this->OrderBy = $OrderBy;
        return $this;
    }

    public function setSortBy($SortBy) {
        $this->SortBy = $SortBy;
        return $this;
    }

    public function setCustomerUserID($CustomerUserID) {
        $this->CustomerUserID = $CustomerUserID;
        return $this;
    }


    
}
