                        <li class="shopList-item">
                          <div class="shop-image">
<?php
$image_id = get_sub_field( 'shop_img' );
echo wp_get_attachment_image( $image_id, 'shop-detail' );
?>
                          </div>
                          <div class="shop-body">
                            <p class="shop-title"><?php the_sub_field( 'shop_name' ); ?></p>
                            <p class="shop-caption"><?php the_sub_field( 'shop_strength' ); ?></p>
                            <div class="shop-detail">
                              <dl>
                                <dt>間取り・広さ</dt>
                                <dd><?php the_sub_field( 'shop_hours' ); ?></dd>
                              </dl>
                              <dl>
                                <dt>理想・ご要望</dt>
                                <dd><?php the_sub_field( 'floor_info' ); ?></dd>
                              </dl>
                            </div>
                          </div>
                        </li>
