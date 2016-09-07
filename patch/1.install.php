<?php namespace modules\hodapikey\patch;
    use modules\maxpatch\lib\patch\BasePatch;

    class Install extends BasePatch{

        function patch()
        {

            $this->patch->table("apikey")
                ->addField("name", "varchar(50)")
                ->addField("host", "varchar(50)")
                ->addField("key", "varchar(100)")->addIndex("key")
                ->addField("token","varchar(100)")->addIndex("token")
                ->addField("lastToken","int")
                ->addField("user_id", "int")->addIndex("user_id")
                ->create();


            return true;
        }
    }
?>