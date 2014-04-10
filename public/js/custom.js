var play_status = 0;
var current_playing = "";
function play_audio(id){
    // $('#contestant-' + id + ' .glyphicon-headphones').css('color','red');
    // $('#contestant-' + id + ' .well').css('box-shadow','5px 5px 5px #888');
    // $('#contestant-' + id + ' .tools').css('display','block');
    // $('#audio-' + id).get(0).play();
    $('#audio-' + id).bind('ended',function(){
        $('#contestant-' + id + ' .glyphicon-headphones').css('color','#222222');
        $('#contestant-' + id + ' .well').css('box-shadow','');
        $('#contestant-' + id + ' .tools').css('display','');    
        play_status = 0;
        current_playing = "";
    });
    if(play_status == 1){
        $('#audio-' + current_playing).get(0).pause();
        current_playing = "";
        play_status = 0;
    }
    if($('#audio-' + id).get(0).paused){
        $('#audio-' + id).get(0).play();
        $('#contestant-' + id + ' .glyphicon-headphones').css('color','red');
        $('#contestant-' + id + ' .well').css('box-shadow','5px 5px 5px #888');
        $('#contestant-' + id + ' .tools').css('display','block');
        play_status = 1;
        current_playing = id;
    }else{
        $('#audio-' + id).get(0).pause();
        $('#contestant-' + id + ' .glyphicon-headphones').css('color','#222222');
        $('#contestant-' + id + ' .well').css('box-shadow','');
        $('#contestant-' + id + ' .tools').css('display','');
        play_status = 0;
        current_playing = "";
    }
}

function vote(id){
    $.post(url + '/vote',{id:id},function(data){
        $('.alert').removeClass('alert-success');
        $('.alert').removeClass('alert-danger');
        $('.alert').text(data);
        if(data == '投票成功！'){
            $('#votenum-' + id).text(parseInt($('#votenum-' + id).text())+1);
            $('#contestant-' + id + ' .glyphicon-thumbs-up').css('color','red');
            $('.alert').addClass('alert-success');
        }else if(data == '成功收回您的票'){
            $('#votenum-' + id).text(parseInt($('#votenum-' + id).text())-1);
            $('#contestant-' + id + ' .glyphicon-thumbs-up').css('color','#222222');
            $('.alert').addClass('alert-success');
        }else{
            $('.alert').addClass('alert-danger');
        }
        $('.alert').css('display','block');
    });
}

function share(id){
    $.post(url + '/share',{id:id},function(data){
        if(data == '請先登入才能進行投票、分享等功能。'){
            $('.alert').removeClass('alert-success');
            $('.alert').text(data);
            $('.alert').addClass('alert-danger');
            $('.alert').css('display','block');
        }else{
            $('.alert').removeClass('alert-danger');
            $('.alert').text(data);
            $('.alert').addClass('alert-success');
            $('.alert').css('display','block');
        }
        
    })
}