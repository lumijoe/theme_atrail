                    <article class="article-card">
                      <a class="card-link" href="<?php echo get_term_link($term); ?>">
                        <div class="image">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-dummy.png" />
                        </div>
                        <div class=" body">
                          <p class="title"><?php echo $term->name; ?></p>
                          <p class="excerpt"><?php echo $term->description; ?></p>
                          <div class="buttonBox">
                            <button type="button" class="seeDetail">詳しくは→</button>
                          </div>
                        </div>
                      </a>
                    </article>