<?php

namespace OTRS\Entity;


class ArrayOfArticle {
    
    protected $Article;
    
    function __construct($aArticle = null) {
        $this->setArticle($aArticle);
    }
    
    public function addArticle($oArticle){
        $this->Article[] = $oArticle;
    }
    
    public function getArticle(){
        return $this->Article;
    }
    
    public function setArticle(array $aArticle){
        $this->Article = $aArticle;
    }
}
