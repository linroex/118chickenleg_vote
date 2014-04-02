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
                                    @for($i=0;$i<12;$i++)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td><a href="{{url('contestant/1')}}">傅姿華</a></td>
                                        <td>企業管理系</td>
                                        <td>9</td>
                                        <td><a href=""><i class="glyphicon glyphicon-headphones"></i></a></td>
                                        <td><a href=""><i class="glyphicon glyphicon-share"></a></td>
                                        <td><a href="{{url('contestant/1')}}"><i class="glyphicon glyphicon-info-sign"></a></td>
                                    </tr>
                                    @endfor
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