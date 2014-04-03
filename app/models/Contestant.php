<?php
class Contestant extends Eloquent{
    protected $table = 'contestant';
    protected $guarded = array('id');
    public $primaryKey = 'id';

    public static function list_all(){

    }
    public static function rank(){

    }
    public static function data($id){

    }
    public static function add_votenum($id){

    }

}