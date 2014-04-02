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
                        <div class="col-md-9">
                            <div class="page-header text-muted">
                                <h3>人氣歌手票選</h3>
                            </div>
                        </div>
                        @for($i=0;$i<4;$i++)
                        <div class="row">
                            @for($ii=0;$ii<3;$ii++)
                            <div class="col-md-4">

                                <div class="contestant_img well">
                                    <a href="{{url('contestant/1')}}"><img src="image/10014560_1570796576479732_2102164275_n.jpg" alt="" class="img-thumbnail"></a>

                                    <div class="tools btn-group btn-group-justified">
                                        <a href="" class="btn"><i class="glyphicon glyphicon-headphones"></i></a>
                                        <a href="" class="btn"><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                        <a href="" class="btn"><i class="glyphicon glyphicon-share"></i></a>
                                        <a href="{{url('contestant/1')}}" class="btn"><i class="glyphicon glyphicon-info-sign"></i></a>
                                    </div>
                                
                                    <h4 class="text-center"><a href="{{url('contestant/1')}}">傅姿華<small>企業管理系</small></a></h4>
                                    <p class="text-center">目前：10票</p>
                                </div>
                            </div>
                            @endfor
                        </div>
                        <div class="row divider"></div>
                        @endfor
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>