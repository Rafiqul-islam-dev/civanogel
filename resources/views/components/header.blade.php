<div class="fixed z-30 w-full py-4 px-12 flex justify-between items-center" id="header_area">
    <div class="min-w-max">
        <a href="{{ url('/')  }}"><img src="/img/logo.png" width="50" class="text-blue-500" alt=""></a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center items-center">
            <li><a class="menu-item" href="#">Land</a></li>
            <li><a class="menu-item" href="#">Villa</a></li>
            <li><a class="menu-item" href="#">Appertment</a></li>
            <li><a class="menu-item" href="#">About Us</a></li>
            <li><a class="menu-item" href="#">Contact Us</a></li>
        </ul>
    </div>

    <div class="min-w-max text-3xl">
        <a href="#">🏳️‍🌈 </a>
        <a href="#">🏴󠁧󠁢󠁥󠁮󠁧󠁿 </a>
    </div>
</div>

<script>
    $(window).scroll(function () {
        var bodyScroll = $(window).scrollTop();
        if(bodyScroll > 100){
            $('#header_area').addClass('stuck');
        }else{
            $('#header_area').removeClass('stuck');
        }
    });
</script>
