<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('head',array('page_name'=>'人氣獎'))
</head>
<body>
    <div class="wrapper">
        <div class="box">
            @include('sidebar')
            <div class="column col-md-9 col-sm-8" id="main">
                
                <div class="padding">
                    <div class="full">
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="page-header text-muted">
                                <h3>人氣歌手票選</h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="alert" style="display:none"></div>
                        </div>
                        @foreach ($data as $contestant)

                            <div class="col-md-3 col-sm-6 col-lg-3" id="contestant-{{$contestant->id}}">

                                <div class="contestant_img well">
                                    <a href="{{url('contestant/' . $contestant->id)}}"><img src="image/{{$contestant->avatar == ''?'no_avatar.jpg':$contestant->avatar}}" alt="" class="img-thumbnail"></a>

                                    <div class="tools btn-group btn-group-justified">
                                        <a onclick="play_audio({{$contestant->id}})" class="btn"><i class="glyphicon glyphicon-headphones"></i></a>
                                        <a onclick="vote({{$contestant->id}})" style="color:{{User::get_user_voted() == $contestant->id?'red':''}}" class="btn"><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                        <a onclick="share({{$contestant->id}})" class="btn"><i class="glyphicon glyphicon-share"></i></a>
                                        <a href="{{url('contestant/' . $contestant->id)}}" class="btn"><i class="glyphicon glyphicon-info-sign"></i></a>
                                    </div>
                                
                                    <h4 class="text-center"><a href="{{url('contestant/' . $contestant->id)}}">{{{$contestant->name}}} <small>{{{$contestant->department}}}</small></a></h4>
                                    <p class="text-center">目前：<span id="votenum-{{$contestant->id}}">{{{$contestant->vote_num}}}</span>票</p>
                                    @include('audio')
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</body>
</html>