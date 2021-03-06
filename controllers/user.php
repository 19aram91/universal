<?php
require_once('config.php');

class Select 
{

    function getConfigs(){
        global $DBH;
        global $lang;
        global $smarty;
        $STH = $DBH->prepare("SELECT configs.*, configs_dic.* FROM configs INNER JOIN configs_dic on configs_dic.lang = ?");
        $STH->execute(array($lang))or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('confLogo', $result);
        return $result[0];
    }

    function getLang(){
        if(isset($_GET['lang']))
            return $_GET['lang'];

        global $DBH;
        $STH = $DBH->prepare("SELECT code FROM languages LIMIT 1");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result[0]['code'];
    }

    function getLanguages(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM languages");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getLastArticles()
    {
        global $DBH;
        global $lang;
        $STH = $DBH->prepare("SELECT articles.*, article_dic.* FROM articles
                              INNER JOIN article_dic on articles.id = article_dic.article_id AND article_dic.lang = ?
                              ORDER BY articles.id desc limit 5");
        $STH->execute(array($lang)) or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getSlides()
    {
        global $DBH;
        global $lang;
        $STH = $DBH->prepare("SELECT slider.*, slider_dic.* FROM slider
                              INNER JOIN slider_dic on slider.id = slider_dic.slide_id AND slider_dic.lang = ?");
        $STH->execute(array($lang)) or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getPages()
    {
        global $DBH;
        global $lang;
        $STH = $DBH->prepare("SELECT pages.*, pages_dic.* FROM pages
                              INNER JOIN pages_dic on pages.ID = pages_dic.page_id AND pages_dic.language = ?
                              ORDER BY pages.position");
        $STH->execute(array($lang)) or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }


    function getMainText()
    {
        global $DBH;
        global $lang;
        $STH = $DBH->prepare("SELECT * FROM main where language = ?");
        $STH->execute(array($lang)) or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getPageText()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'main'){
            return;
        }

        $id = $_GET['id'];
        global $DBH, $lang;
        $STH = $DBH->prepare("SELECT pages.*, pages_dic.* FROM pages
                              INNER JOIN pages_dic on pages.ID = pages_dic.page_id AND pages_dic.language = ?
                              where pages_dic.parent_id = ? OR pages_dic.page_id = ?");
        $STH->execute(array($lang, $id, $id)) or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result[0];
    }

    function getArticleText()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'article'){
            return;
        }

        $id = $_GET['id'];
        $params = array($id);
        global $DBH, $lang;
        $STH = $DBH->prepare("Update articles set watch_count = watch_count+1 where created = ?");
        $STH->execute($params) or die(print_r($STH->errorInfo(), true));

        $params = array($lang, $id);
        $STH = $DBH->prepare("SELECT articles.*, article_dic.* FROM articles
                              INNER JOIN article_dic on articles.id = article_dic.article_id AND article_dic.lang = ?
                              where articles.created = ?");
        $STH->execute($params) or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result[0];
    }

    function getFbConfig()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'feedback'){
            return;
        }
        global $DBH;
        global $lang;
        $STH = $DBH->prepare("SELECT * FROM fb_config WHERE lang = ?");
        $STH->execute(array($lang)) or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result[0];
    }

    function getResults()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'results'){
            return;
        }
        $id = $_GET['id'];

        if(substr_count($id, 'is') > 1){
            $word = $_GET['id'];
            global $DBH;
            $STH = $DBH->prepare("SELECT ID, header FROM dreambook WHERE header LIKE ? ORDER BY header");
            $STH->execute(array('%'.$word.'%')) or die(print_r($STH->errorInfo(), true));
            $result = $STH->fetchAll();
            return $result;
        }
        else{
            $letter = $_GET['id'];
            global $DBH;
            $STH = $DBH->prepare("SELECT ID, header FROM dreambook WHERE header LIKE ? ORDER BY header");
            $STH->execute(array($letter.'%')) or die(print_r($STH->errorInfo(), true));
            $result = $STH->fetchAll();
            return $result;
        }

    }

    function getFBCaptcha()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'feedback'){
            return;
        }

        include("plugins/captcha/simple-php-captcha.php");
        $_SESSION['captcha'] = simple_php_captcha();
    }

    function checkCaptcha()
    {
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if($action == 'checkCaptcha'){
            $res = (strtolower($_GET['captcha']) == strtolower($_SESSION['captcha']['code']));
            echo json_encode(array('check' => $res));
            exit();
        }

    }

    function setMessage()
    {
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if($action == 'addMessage'){
            $name = strip_tags(htmlspecialchars(stripslashes(trim($_GET['name'])))) ;
            $mail = htmlspecialchars(stripslashes(trim($_GET['mail'])));
            $header = htmlspecialchars(stripslashes(trim($_GET['header'])));
            $description = htmlspecialchars(stripslashes(trim($_GET['desc'])));

            $data = array($name, $mail, $header, $description);
            global $DBH;
            $STH = $DBH->prepare("INSERT INTO feedback (fname, mail, header, description) values (?, ?, ?, ?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            echo json_encode(array('status' => 'ok'));
            exit();
        }

    }

}