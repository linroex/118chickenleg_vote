<?php
class Vote extends Eloquent{
    protected $table = 'vote_history';
    protected $guarded = array('created_at','updated_at','id');
    public $primaryKey = 'uid';

    public static function has_voted($user_id, $contestant_id){
        if(self::whereRaw('uid = ? and contestant_id = ?',array($user_id, $contestant_id))->count() == 0){
            return False;
        }else{
            return True;
        }
    }
    public static function add($user_id, $contestant_id){
        if(User::credentials($user_id)){
            self::create(array(
                'uid'=>$user_id,
                'contestant_id'=>$contestant_id
            ));
            Contestant::increase_votenum($contestant_id);
            return True;
        }else{
            throw new Exception("The user credentials isn't enough");
        }
        
    }
    public static function remove($user_id, $contestant_id){
        if(self::has_voted($user_id, $contestant_id)){
            self::destroy($user_id);
            Contestant::decrease_votenum($contestant_id);
            return True;
        }else{
            throw new Exception("The user not yet poll this contestant");
        }
    }
}