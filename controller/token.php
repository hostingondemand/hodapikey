<?php
namespace modules\hodapikey\controller;
use core\Controller;

class Token extends Controller{
    function home(){}

    /**
     * @httpPost(dashboard)
     */
    function request(){
        $input=$this->model->tokenRequest->fromRequest();
        $output=$input->getToken();
        $this->response->renderJson($output);
    }
}
?>