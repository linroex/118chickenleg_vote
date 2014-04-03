<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('head',array('page_name'=>'參賽者'))
</head>
<body>
    <div class="wrapper">
        <div class="box">
            @include('sidebar')
            <div class="column col-md-9 col-sm-8" id="main">
                
                <div class="padding">
                    <div class="full">
                        <div class="page-header text-muted">
                            <h3>{{{$data->name}}}<small>{{{$data->department}}}</small></h3>
                        </div>

                        <div class="alert" style="display:none"></div>
                        <div class="col-md-3" id="contestant-{{$data->id}}">
                            
                            <div class="well">
                                <img src="{{url('image/' . ($data->avatar == ''?'no_avatar.jpg':$data->avatar))}}" alt="" class="img-thumbnail">

                                <div class="contestant-tools btn-group btn-group-justified">
                                    <a onclick="play_audio({{$data->id}})" class="btn"><i class="glyphicon glyphicon-headphones"></i></a>
                                    <a onclick="vote({{$data->id}})" style="color:{{User::get_user_voted() == $data->id?'red':''}}" class="btn"><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                    <a onclick="share({{$data->id}})" class="btn"><i class="glyphicon glyphicon-share"></i></a>
                                </div>
                            </div>
                            <audio id="audio-{{$data->id}}" preload="metadata" loop src="{{{url('audio/' . $data->audio_file)}}}"></audio>
                            
                        </div>                        
                        <div class="col-md-7">
                            <table class="table">
                                <tr>
                                    <td class="col-md-2 col-sm-4">目前票數</td>
                                    <td><span id="votenum-{{$data->id}}">{{{$data->vote_num}}}</span>票</td>
                                </tr>
                                
                                <tr>
                                    <td>自我介紹</td>
                                    <td><p>{{{$data->profile}}}</p></td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>