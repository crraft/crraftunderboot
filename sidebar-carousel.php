<?php if ( is_active_sidebar( 'carousel' ) ): ?>

    <!-- ******************* The carousel Widget Area ******************* -->

    <div id="crraftunderboot-carousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <?php dynamic_sidebar( 'carousel' ); ?>

        </div><!-- carousel inner -->
        <!-- Controls -->
        <a class="left carousel-control" href="#crraftunderboot-carousel" role="button" data-slide="prev"><i class="ci ci-left" aria-hidden="true"></i><span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#crraftunderboot-carousel" role="button" data-slide="next"><i class="ci ci-right" aria-hidden="true"></i><span class="sr-only">Next</span></a>
    </div><!-- id="crraftunderboot-carousel" -->

<?php endif; ?>
