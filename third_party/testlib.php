<?php
class testlib{
    public function __construct()
    {
        $sql="insert into test (name) VALUES ('logintest')";
        Db::justexecute($sql);
    }
}
