<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('head',array('page_name'=>'排名'))
</head>
<body>
    <div class="wrapper">
        <div class="box">
            @include('sidebar')
            <div class="column col-md-9 col-sm-8" id="main">
                <div class="padding">
                    <div class="full">
                        <div class="col-md-9">
                            <div class="page-header text-muted">
                                <h3>人氣歌手排名</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="alert" style="display:none"></div>
                            </div>
                            <table class="table table-hover rank_table">
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td>姓名</td>
                                        <td>科系</td>
                                        <td>票數</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($data as $contestant)
                                    <?php $i++; ?>
                                    <tr id="contestant-{{$contestant->id}}">
                                        <td>{{$i}}</td>
                                        <td><a href="{{url('contestant/' . $contestant->id)}}">{{{$contestant->name}}}</a></td>
                                        <td>{{{$contestant->department}}}</td>
                                        <td>{{{$contestant->vote_num}}}</td>
                                        <td><a onclick="play_audio({{$contestant->id}})" class="btn"><i class="glyphicon glyphicon-headphones"></i></a></td>
                                        <td><a onclick="vote({{$contestant->id}})" style="color:{{User::get_user_voted() == $contestant->id?'red':''}}" class="btn"><i class="glyphicon glyphicon-thumbs-up"></i></a></td>
                                        <td><a onclick="share({{$contestant->id}})" class="btn"><i class="glyphicon glyphicon-share"></i></a></td>
                                    </tr>
                                    <audio id="audio-{{$contestant->id}}" preload="metadata" loop src="audio/{{{$contestant->audio_file}}}"></audio>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>