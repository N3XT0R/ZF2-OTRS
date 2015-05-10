<?php

namespace OTRS\Entity;

class ActionArticle {
    
    protected $ArticleTypeID;
    protected $ArticleType;
    protected $SenderTypeID;
    protected $SenderType;
    protected $From;
    protected $Subject;
    protected $Body;
    protected $ContentType;
    protected $Charset;
    protected $MimeType;
    protected $HistoryType;
    protected $HistoryComment;
    protected $AutoResponseType;
    protected $TimeUnit;
    protected $NoAgentNotify;
    protected $ForceNotificationToUserID;
    protected $ExcludeNotificationToUserID;
    protected $ExcludeMuteNotificationToUserID;
    
    public function getArticleTypeID() {
        return $this->ArticleTypeID;
    }

    public function getArticleType() {
        return $this->ArticleType;
    }

    public function getSenderTypeID() {
        return $this->SenderTypeID;
    }

    public function getSenderType() {
        return $this->SenderType;
    }

    public function getFrom() {
        return $this->From;
    }

    public function getSubject() {
        return $this->Subject;
    }

    public function getBody() {
        return $this->Body;
    }

    public function getContentType() {
        return $this->ContentType;
    }

    public function getCharset() {
        return $this->Charset;
    }

    public function getMimeType() {
        return $this->MimeType;
    }

    public function getHistoryType() {
        return $this->HistoryType;
    }

    public function getHistoryComment() {
        return $this->HistoryComment;
    }

    public function getAutoResponseType() {
        return $this->AutoResponseType;
    }

    public function getTimeUnit() {
        return $this->TimeUnit;
    }

    public function getNoAgentNotify() {
        return $this->NoAgentNotify;
    }

    public function getForceNotificationToUserID() {
        return $this->ForceNotificationToUserID;
    }

    public function getExcludeNotificationToUserID() {
        return $this->ExcludeNotificationToUserID;
    }

    public function getExcludeMuteNotificationToUserID() {
        return $this->ExcludeMuteNotificationToUserID;
    }

    public function setArticleTypeID($ArticleTypeID) {
        $this->ArticleTypeID = $ArticleTypeID;
        return $this;
    }

    public function setArticleType($ArticleType) {
        $this->ArticleType = $ArticleType;
        return $this;
    }

    public function setSenderTypeID($SenderTypeID) {
        $this->SenderTypeID = $SenderTypeID;
        return $this;
    }

    public function setSenderType($SenderType) {
        $this->SenderType = $SenderType;
        return $this;
    }

    public function setFrom($From) {
        $this->From = $From;
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

    public function setContentType($ContentType) {
        $this->ContentType = $ContentType;
        return $this;
    }

    public function setCharset($Charset) {
        $this->Charset = $Charset;
        return $this;
    }

    public function setMimeType($MimeType) {
        $this->MimeType = $MimeType;
        return $this;
    }

    public function setHistoryType($HistoryType) {
        $this->HistoryType = $HistoryType;
        return $this;
    }

    public function setHistoryComment($HistoryComment) {
        $this->HistoryComment = $HistoryComment;
        return $this;
    }

    public function setAutoResponseType($AutoResponseType) {
        $this->AutoResponseType = $AutoResponseType;
        return $this;
    }

    public function setTimeUnit($TimeUnit) {
        $this->TimeUnit = $TimeUnit;
        return $this;
    }

    public function setNoAgentNotify($NoAgentNotify) {
        $this->NoAgentNotify = $NoAgentNotify;
        return $this;
    }

    public function setForceNotificationToUserID($ForceNotificationToUserID) {
        $this->ForceNotificationToUserID = $ForceNotificationToUserID;
        return $this;
    }

    public function setExcludeNotificationToUserID($ExcludeNotificationToUserID) {
        $this->ExcludeNotificationToUserID = $ExcludeNotificationToUserID;
        return $this;
    }

    public function setExcludeMuteNotificationToUserID($ExcludeMuteNotificationToUserID) {
        $this->ExcludeMuteNotificationToUserID = $ExcludeMuteNotificationToUserID;
        return $this;
    }


}
