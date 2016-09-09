<?php
    namespace modules\hodapikey\service;
    use lib\service\BaseService;

    class Apikey extends BaseService{

        function getByUserToken($token){
            $key= $this->db->select("apikey")
                ->where("`token`='".$token."'")->fetchModel("key","data");

            if($key && $key->isValid()){
                return $key->user;
            }

            return false;
        }

        function getByKey($key){
            return $this->db->select("apikey")
                ->where("`key`='".$key."'")->fetchModel("key","data");
        }

        function save($key){
            $this->db->saveModel($key,"apikey");
        }
    }
?>