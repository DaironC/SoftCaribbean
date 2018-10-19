// <!-- Código de instalación Cliengo para http://54.242.192.75/ -->
<script type="text/javascript">
    window.onload = function() {( function () {
        var ldk = document.createElement('script');
        ldk.type = 'text/javascript';
        ldk.async = true;
        ldk.src = 'https://s.cliengo.com/weboptimizer/5b857e0fe4b0ae9c80701756/5b857e14e4b0ae9c8070175c.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ldk, s);
        })();
        }
</script>

<script>   
    $('.slick2').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        cssEase: 'linear',
        dots: true,
        arrows: true,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
            slidesToShow: 2,
            slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
            slidesToShow: 1,
            arrows: true,
            slidesToScroll: 1
            }
        }
        ]
    });
</script>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    var f=0;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("mouseover", mostrarPanel);
        acc[i].addEventListener("mouseout", ocultarPanel);

    }
    function mostrarPanel(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === ""||panel.style.display === "none") panel.style.display = "block";
            
    }
    function ocultarPanel(){
        this.classList.remove("active");
        var panel = this.nextElementSibling;                            
        if (panel.style.display === "block") panel.style.display = "none";
    }
</script>

<script>
    window.onscroll = function() {myFunction()};

    function myFunction() {
        if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
            document.getElementById("icono").className = "slideUp";
        }
    }
</script>