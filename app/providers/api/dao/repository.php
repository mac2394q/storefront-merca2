<?php

interface repository{

    public function save($model);

    public function saveAll($arrayModel);

    public function findById($model);

    public function delete($model);

    public function update($model);

    public function customQuery($query,$typeTransaction);



}


?>