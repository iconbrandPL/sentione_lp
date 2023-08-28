

<section class="<?php echo e($block['classes']); ?>" data-block="<?php echo e($block['id']); ?>" id="<?php echo e($block['anchor']); ?>" style="background-image: url('<?php echo get_field('background'); ?>')">
  <div class="container">
    <div class="row">
      <div class="col-10 col-sm-7 col-lg-5 mb-5 mb-lg-0">
        <h1 class="counter__title"><?php echo get_field('title'); ?></h1>
        <h3 class="counter__text"><?php echo get_field('text'); ?></h3>
      </div>
    </div>
  </div>
  <div class="counter__container container">
    <div class="counter__wrapper">
      <div class="counter__items">
        <div class="item item--left item--center-v col-lg-3 mb-5 mb-lg-0">
          <a href="<?php echo get_field('link')['url']; ?>" class="item__btn btn btn-primary"><?php echo get_field('link')['title']; ?></a>
        </div>
        <div class="item col-lg-2 mb-5 mb-lg-0">
          <h5 class="item__label">Follow</h5>
          <a href="https://www.instagram.com/<?php echo get_field('nick'); ?>" target="_blank" class="item__link">
            <h2 class="item__value">&#64;<?php echo get_field('nick'); ?></h2>
          </a>
        </div>
        <div class="item col-lg-4 mb-5 mb-lg-0">
          <h5 class="item__label">Giveaway Ends In</h5>
          <div class="item__counter">
            <div class="item__timer">
              <h2 class="item__value days"></h2>
              <h6 class="item__desc">Days</h6>
            </div>
            <div class="item__timer">
              <h2 class="item__value hours"></h2>
              <h6 class="item__desc">Hours</h6>
            </div>
            <div class="item__timer">
              <h2 class="item__value minutes"></h2>
              <h6 class="item__desc">Mins</h6>
            </div>
            <div class="item__timer">
              <h2 class="item__value seconds"></h2>
              <h6 class="item__desc">Secs</h6>
            </div>
          </div>
        </div>
        <div class="item col-lg-3">
          <h5 class="item__label">Ends</h5>
          <h2 class="item__value"><?php echo get_field('end_date'); ?></h2>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /var/www/html/wp-content/themes/sentione/resources/views/blocks/counter.blade.php ENDPATH**/ ?>