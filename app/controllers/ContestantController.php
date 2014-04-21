<?php
class ContestantController extends Controller{
    public function showAllContestant(){
        return View::make('index')->with(array(
            'data'=>Contestant::list_all()
        ));
    }
    public function share(){
        $contestant = Contestant::data(Input::get('id'));
        $message = "我喜歡{$contestant->name}唱的{$contestant->department}\n大家快來雞腿盃人氣獎投票\n選出屬於你的歌王歌后！！";
        $link = url('contestant/' . Input::get('id'));
        User::post_facebook($message, $link);
        return '已將此訊息分享至您的塗鴉牆';
    }
    public function showContestantPage($id){
        return View::make('contestant')->with(array(
            'contestant'=>Contestant::data($id)
        ));
    }
    public function showRankPage(){
        return View::make('rank')->with(array(
            'data'=>Contestant::rank()
        ));
        
    }
}