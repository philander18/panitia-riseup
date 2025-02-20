<script>
    function method_url(controller, method) {
        const base_url = "<?= base_url(); ?>" + controller + '/' + method;
        return base_url;
    }

    function tampil_flash() {
        $.ajax({
            url: method_url('Home', 'flash'),
            data: {},
            method: 'post',
            dataType: 'html',
            success: function(data) {
                $('.flash').html(data);
            }
        });
    }
    // toogle class active

    // Ketika hamburger-menu di klik
    $(document).ready(function() {
        // toogle class active
        // Ketika hamburger-menu di klik
        $('#hamburger-menu').on('click', function() {
            $('.navbar-nav-phil').toggleClass('active');
        });
        // Klik di luar sidebar untuk menghilangkan nav
        $(document).click(function(event) {
            if (!$(event.target).closest(".navbar-nav-phil, #hamburger-menu").length) {
                $(".navbar-nav-phil").removeClass('active');
            }
        })

        function updateCountdown() {
            var targetDate = new Date("April 26, 2025 16:00:00").getTime();
            var now = new Date().getTime();
            var distance = targetDate - now;

            if (distance < 0) {
                $("#countdown").html("Waktu telah tiba!");
                return;
            }

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            $("#countdown").html(days + " hari " + hours + " jam " + minutes + " menit " + seconds + " detik lagi");
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    })
</script>