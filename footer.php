<!-- FOOTER 1 -->
<footer>
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('footer-widget') ?>
            </div>
        </div>
    </footer>

    <!-- FOOTER 2 -->
    <footer class="page-section-no-padding  footer2-container">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('footer-widget-bottom') ?>
            </div>
        </div>
    </footer>
    <!-- Initiate Fancybox/Lightbox for Videos -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
             */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    prevEffect: 'none',
                    nextEffect: 'none',
                    arrows: false,
                    helpers: {
                        media: {},
                        buttons: {}
                    }
                });
        });
    </script>
<?php wp_footer() ?>
</body>
</html>