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
                            <h3>{{{$contestant->name}}}<small>{{{$contestant->department}}}</small></h3>
                        </div>

                        <div class="alert" style="display:none"></div>
                        <div class="col-md-3" id="contestant-{{$contestant->id}}">
                            
                            <div class="well">
                                <img src="{{url('image/' . ($contestant->avatar == ''?'no_avatar.jpg':$contestant->avatar))}}" alt="" class="img-thumbnail">

                                <div class="contestant-tools btn-group btn-group-justified">
                                    <a onclick="play_audio({{$contestant->id}})" class="btn"><i class="glyphicon glyphicon-headphones"></i></a>
                                    <a onclick="vote({{$contestant->id}})" style="color:{{User::get_user_voted() == $contestant->id?'red':''}}" class="btn"><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                    <a onclick="share({{$contestant->id}})" class="btn"><i class="glyphicon glyphicon-share"></i></a>
                                </div>
                            </div>
                            @include('audio')
                            
                        </div>                        
                        <div class="col-md-7">
                            <table class="table">
                                <tr>
                                    <td class="col-md-2 col-sm-4">目前票數</td>
                                    <td><span id="votenum-{{$contestant->id}}">{{{$contestant->vote_num}}}</span>票</td>
                                </tr>
                                
                                <tr>
                                    <td>自我介紹</td>
                                    <td><p>{{$contestant->profile}}</p></td>
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