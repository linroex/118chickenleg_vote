<?php
class Contestant extends Eloquent{
    protected $table = 'contestant';
    protected $guarded = array('id');
    public $primaryKey = 'id';
    public $timestamps = false;

    public static function list_all(){
        return self::all();
    }
    public static function rank(){
        return self::all()->sortBy('vote_num')->reverse();
    }
    public static function data($id){
        return self::find($id)->first();
    }
    public static function increase_votenum($id){
        
        $vote_num = self::find($id)->vote_num;
        if($vote_num < 0){
            throw new Exception("The vote number is abnormal");
        }
        self::find($id)->update(array('vote_num'=>($vote_num + 1)));
        return True;
    }
    public static function decrease_votenum($id){
        $vote_num = self::find($id)->vote_num;
        if($vote_num <= 0){
            throw new Exception("The vote number is abnormal");
        }
        self::find($id)->update(array('vote_num'=>($vote_num - 1)));
        return True;
    }

}