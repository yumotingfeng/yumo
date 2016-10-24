<?php
class indexModel extends Model {
    public function get_contents($url){
        return file_get_contents($url);
    }
    public function put_contents($data){
        file_put_contents('test.html', $data);
    }
}