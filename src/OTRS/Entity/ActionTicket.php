<?php

namespace OTRS\Entity;

class ActionTicket {
    
    protected $Title;
    protected $QueueID;
    protected $Queue;
    protected $TypeID;
    protected $Type;
    protected $ServiceID;
    protected $Service;
    protected $SLAID;
    protected $SLA;
    protected $StateID;
    protected $State;
    protected $PriorityID;
    protected $Priority;
    protected $OwnerID;
    protected $Owner;
    protected $ResponsibleID;
    protected $Responsible;
    protected $CustomerUser;
    protected $CustomerID;
    protected $PendingTime;
    
    public function getTitle() {
        return $this->Title;
    }

    public function getQueueID() {
        return $this->QueueID;
    }

    public function getQueue() {
        return $this->Queue;
    }

    public function getTypeID() {
        return $this->TypeID;
    }

    public function getType() {
        return $this->Type;
    }

    public function getServiceID() {
        return $this->ServiceID;
    }

    public function getService() {
        return $this->Service;
    }

    public function getSLAID() {
        return $this->SLAID;
    }

    public function getSLA() {
        return $this->SLA;
    }

    public function getStateID() {
        return $this->StateID;
    }

    public function getState() {
        return $this->State;
    }

    public function getPriorityID() {
        return $this->PriorityID;
    }

    public function getPriority() {
        return $this->Priority;
    }

    public function getOwnerID() {
        return $this->OwnerID;
    }

    public function getOwner() {
        return $this->Owner;
    }

    public function getResponsibleID() {
        return $this->ResponsibleID;
    }

    public function getResponsible() {
        return $this->Responsible;
    }

    public function getCustomerUser() {
        return $this->CustomerUser;
    }

    public function getCustomerID() {
        return $this->CustomerID;
    }

    public function getPendingTime() {
        return $this->PendingTime;
    }

    public function setTitle($Title) {
        $this->Title = $Title;
        return $this;
    }

    public function setQueueID($QueueID) {
        $this->QueueID = $QueueID;
        return $this;
    }

    public function setQueue($Queue) {
        $this->Queue = $Queue;
        return $this;
    }

    public function setTypeID($TypeID) {
        $this->TypeID = $TypeID;
        return $this;
    }

    public function setType($Type) {
        $this->Type = $Type;
        return $this;
    }

    public function setServiceID($ServiceID) {
        $this->ServiceID = $ServiceID;
        return $this;
    }

    public function setService($Service) {
        $this->Service = $Service;
        return $this;
    }

    public function setSLAID($SLAID) {
        $this->SLAID = $SLAID;
        return $this;
    }

    public function setSLA($SLA) {
        $this->SLA = $SLA;
        return $this;
    }

    public function setStateID($StateID) {
        $this->StateID = $StateID;
        return $this;
    }

    public function setState($State) {
        $this->State = $State;
        return $this;
    }

    public function setPriorityID($PriorityID) {
        $this->PriorityID = $PriorityID;
        return $this;
    }

    public function setPriority($Priority) {
        $this->Priority = $Priority;
        return $this;
    }

    public function setOwnerID($OwnerID) {
        $this->OwnerID = $OwnerID;
        return $this;
    }

    public function setOwner($Owner) {
        $this->Owner = $Owner;
        return $this;
    }

    public function setResponsibleID($ResponsibleID) {
        $this->ResponsibleID = $ResponsibleID;
        return $this;
    }

    public function setResponsible($Responsible) {
        $this->Responsible = $Responsible;
        return $this;
    }

    public function setCustomerUser($CustomerUser) {
        $this->CustomerUser = $CustomerUser;
        return $this;
    }

    public function setCustomerID($CustomerID) {
        $this->CustomerID = $CustomerID;
        return $this;
    }

    public function setPendingTime(PendingTime $PendingTime) {
        $this->PendingTime = $PendingTime;
        return $this;
    }
}
