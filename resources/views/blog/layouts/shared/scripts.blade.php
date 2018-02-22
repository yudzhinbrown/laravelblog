<!----webfonts---->
<script src="{{asset('adminlte/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminlte/vendor/popper.js/umd/popper.min.js')}}"> </script>

<!--end slider -->
<!--script-->
<script type="text/javascript" src="{{ asset('bloglte/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('bloglte/js/easing.js') }}"></script>
<!--/script-->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<!---->
<script src="{{asset('adminlte/js/slug.js')}}"></script>
<script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@yield('ckeditor')