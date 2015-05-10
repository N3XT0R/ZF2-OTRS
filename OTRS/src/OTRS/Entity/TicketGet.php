<?php

namespace OTRS\Entity;

class TicketGet {
    
    private $UserLogin;
    private $CustomerUserLogin;
    private $SessionID;
    private $Password;
    private $TicketID;
    private $DynamicFields = 0;
    private $Extended = 0;
    private $AllArticles = 0;
    private $ArticleSenderType;
    private $ArticleOrder;
    private $ArticleLimit;
    private $Attachments;
    
    
    public function getUserLogin() {
        return $this->UserLogin;
    }

    public function getCustomerUserLogin() {
        return $this->CustomerUserLogin;
    }

    public function getSessionID() {
        return $this->SessionID;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function getTicketID() {
        return $this->TicketID;
    }

    public function getDynamicFields() {
        return $this->DynamicFields;
    }

    public function getExtended() {
        return $this->Extended;
    }

    public function getAllArticles() {
        return $this->AllArticles;
    }

    public function getArticleSenderType() {
        return $this->ArticleSenderType;
    }

    public function getArticleOrder() {
        return $this->ArticleOrder;
    }

    public function getArticleLimit() {
        return $this->ArticleLimit;
    }

    public function getAttachments() {
        return $this->Attachments;
    }

    public function setUserLogin($UserLogin) {
        $this->UserLogin = $UserLogin;
        return $this;
    }

    public function setCustomerUserLogin($CustomerUserLogin) {
        $this->CustomerUserLogin = $CustomerUserLogin;
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

    public function setTicketID($TicketID) {
        $this->TicketID = $TicketID;
        return $this;
    }

    public function setDynamicFields($DynamicFields) {
        $this->DynamicFields = $DynamicFields;
        return $this;
    }

    public function setExtended($Extended) {
        $this->Extended = $Extended;
        return $this;
    }

    public function setAllArticles($AllArticles) {
        $this->AllArticles = $AllArticles;
        return $this;
    }

    public function setArticleSenderType($ArticleSenderType) {
        $this->ArticleSenderType = $ArticleSenderType;
        return $this;
    }

    public function setArticleOrder($ArticleOrder) {
        $this->ArticleOrder = $ArticleOrder;
        return $this;
    }

    public function setArticleLimit($ArticleLimit) {
        $this->ArticleLimit = $ArticleLimit;
        return $this;
    }

    public function setAttachments($Attachments) {
        $this->Attachments = $Attachments;
        return $this;
    }


}
