<!----webfonts---->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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