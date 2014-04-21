<?php
class User extends Eloquent{
    protected $table = 'vote_history';
    protected $guarded = array('created_at','updated_at','id');
    public $primaryKey = 'id';
    
    private static $facebook = null;

    public static function construct(){

        self::$facebook = new Facebook(array(
           'appId'=>'495514560560625',
           'secret'=>'9e039645039f959768e5c09a2f18ed0c'
       ));
    }
    public static function credentials($user_id){
        if(self::$facebook == null){
            self::construct();
        }
        if(self::whererRaw('uid = ? and created_at = CURDATE()',array($user_id))->count() == 0){
            return True;
        }else{
            return False;
        }
    }
    public static function is_login(){
        if(self::$facebook == null){
            self::construct();
        }
        if(self::$facebook->getUser() == 0){
            return False;
        }else{
            return True;
        }
    }
    public static function getUserId(){
        if(self::$facebook == null){
            self::construct();
        }
        return self::$facebook->getUser();
    }
    public static function get_login_url(){
        if(self::$facebook == null){
            self::construct();
        }
        $scope = array('user_about_me','publish_stream');
        return (self::$facebook->getLoginUrl(array('scope'=>$scope,'redirect_uri'=>url())));
    }
    public static function get_user_data(){
        if(self::$facebook == null){
            self::construct();
        }
        return self::$facebook->api('/me');
    }
    public static function get_user_avatar(){
        // https://graph.facebook.com/linroex/picture?redirect=false&type=large
        if(self::$facebook == null){
            self::construct();
        }

        return self::$facebook->api(self::getUserId() . '/picture','GET',array('redirect'=>false,'type'=>'large'))['data']['url'];
    }
    public static function get_user_voted(){
        if(self::$facebook == null){
            self::construct();
        }
        try {
            return self::whereRaw('uid = ? and created_at = CURDATE()',array(self::getUserId()))->first()->contestant_id;
        } catch (Exception $e) {
            return False;            
        }
    }
    public static function post_facebook($message, $link){
        if(self::$facebook == null){
            self::construct();
        }
        self::$facebook->api('/me/feed','POST',array('message'=>$message,'link'=>$link));
    }
}