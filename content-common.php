  <li class="common-item">
    <a class="common-link" href="<?php the_permalink(); ?>">
      <div class="common-image"><?php the_post_thumbnail('common'); ?></div>
      <div class="common-body">
        <p class="name"><?php the_title(); ?></p>
        <p class="caption"><?php echo wp_trim_words(get_the_excerpt(), 30, ''); ?></p>
        <div class="buttonBox">
          <button type="button" class="seeDetail">詳しくは→</button>
        </div>
      </div>
    </a>
  </li>