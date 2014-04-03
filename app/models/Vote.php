<?php
class Vote extends Eloquent{
    protected $table = 'vote_history';
    protected $guarded = array('created_at','updated_at','id');
    public $primaryKey = 'id';

    public static function has_voted($user_id, $contestant_id){

    }
    public static function vote($user_id, $contestant_id){

    }
    public static function unvote($user_id, $contestant_id){

    }
}