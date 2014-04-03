<div class="column col-md-3 col-sm-4 col-xs-12" id="sidebar">
    <a href="{{url()}}" class="logo">台科大雞腿盃</a>
    <ul class="nav">
        @if(User::is_login())
        <li><img src="{{{User::get_user_avatar()}}}" id="login_user_avatar" alt="" class="img-thumbnail"></li>
        @endif
        <li><a href="{{User::get_login_url()}}">{{User::is_login()?'登入成功':'登入'}}</a></li>
        <li><a href="{{url('about')}}">關於</a></li>
        <li><a href="{{url('rank')}}">排名</a></li>
        <li><a href="{{url()}}">人氣獎</a></li>
        <li><a target="_blank" href="https://www.facebook.com/118chickenleg">粉絲頁</a></li>
    </ul>
    <ul class="nav" id="sidebar-footer">
        <h4>主辦單位：<a target="_blank" href="https://www.facebook.com/ntustsg">台科大學生會</a></h4>
        <p>作者：<a target="_blank" href="http://me.coder.tw">林熙哲</a></p>
    </ul>
</div>