<section class="background-primary text-center py-4">
    <div class="container">
        <p class="color-white lh-6 mb-0 fw-600">&copy; みくろす All rights reserved</p>
    </div>
</section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="<?php echo base_url(); ?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/CustomEase.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/config.js"></script>
<script src="<?php echo base_url(); ?>assets/js/zanimation.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/flexslider/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<!-- 予約フォームの2重クリック防止 -->
<script>
$(function() {
    $('#form').on('submit', function() {
        $('#reserve_confirm').hide();
        $('#send_reserve').text('送信中...');
    });
});
</script>
</body>

</html>