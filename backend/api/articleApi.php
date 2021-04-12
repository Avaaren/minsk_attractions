<?php
require_once 'baseApi.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/services/db_layer/db_query_builder.php');

class articleApi extends baseApi
{
    public $apiName = 'article';
    public $urlTemplates = [
        'list' => 'getArticles',
        '#id#' => 'getArticle',
        '#id#/edit' => 'editArticle',
        '#id#/delete' => 'deleteArticle',
        'add' => 'addArticle',
    ];

    /**
     * Метод GET
     * http://ДОМЕН/article/list/
     * @return string
     */
    public function getArticles()
    {
        if ($this->method === "GET"){
           
        }
        return $this->response('Wrong method', 405);
    }
    /**
     * Метод GET
     * http://ДОМЕН/article/#id#/
     * @return string
     */
    public function getArticle()
    {
        if ($this->method === "GET"){

        }
        return $this->response('Wrong method', 405);
    }
    /**
     * Метод POST
     * http://ДОМЕН/article/#id#/edit/
     * @return string
     */
    public function editArticle()
    {
        if ($this->method === "POST"){

        }
        return $this->response('Wrong method', 405);
    }
    /**
     * Метод POST
     * http://ДОМЕН/article/#id#/delete/
     * @return string
     */
    public function deleteArticle()
    {
        if ($this->method === "POST"){

        }
        return $this->response('Wrong method', 405);
    }
    /**
     * Метод POST
     * http://ДОМЕН/article/add/
     * @return string
     */
    public function addArticle()
    {
        if ($this->method === "POST"){

        }
        return $this->response('Wrong method', 405);
    }

}