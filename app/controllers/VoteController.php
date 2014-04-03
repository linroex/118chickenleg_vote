<?php
class VoteController extends Controller{
    public function vote(){
        try {
            Vote::add(User::getUserId(),Input::get('id'));
            return '投票成功！';
        } catch (Exception $e) {
            if(Vote::has_voted(User::getUserId(),Input::get('id'))){
                Vote::remove(User::getUserId(),Input::get('id'));
                return '成功收回您的票';
            }else{
                return '您已經投過囉！';
            }
        }
    }
}