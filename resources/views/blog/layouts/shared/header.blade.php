<!---header---->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('bloglte/images/logo.jpg') }}" title="" /></a>
        </div>
        <!---start-top-nav---->
        <div class="top-menu">
            <div class="search">
                <form>
                    <input type="text" placeholder="" required="">
                    <input type="submit" value=""/>
                </form>
            </div>
            <span class="menu"> </span>
            <ul>
                <li class="active"><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('about') }}">О проекте</a></li>
                <li><a href="{{ route('contact') }}">Контакты</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"></div>
        <script>
            $("span.menu").click(function(){
                $(".top-menu ul").slideToggle("slow" , function(){
                });
            });
        </script>
        <!---//End-top-nav---->
    </div>
</div>
<!--/header-->