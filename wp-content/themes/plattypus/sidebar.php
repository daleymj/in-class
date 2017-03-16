<aside id="sidebar">
  <section id="categories" class="widget">
    <h3 class="widget-title"> Categories </h3>
    <ul>
      <?php
      //show the 15 most common categories
      wp_list_categories(array(
        'depth'      => -1,
        'title_li'   => '',
        'number'     => 15,
        'orderby'    => 'count', //order by number of posts
        'order'      => 'DESC',  // high numbers first
        'show_count' => true,
      ));
      ?>
    </ul>
  </section>

  <section id="archives" class="widget">
    <h3 class="widget-title"> Archives </h3>
    <ul>
      <?php
      // list of all archives, by month
      wp_get_archives(array(
        'type'            => 'monthly',
        'limit'           => '',
        'format'          => 'html',
        'before'          => '',
        'after'           => '',
        'show_post_count' => false,
        'echo'            => 1,
        'order'           => 'DESC',
        'post_type'     => 'post'
      ));
      ?>
    </ul>
  </section>

  <section id="tags" class="widget">
    <h3 class="widget-title"> Tags </h3>
    <?php
    // tag cloud
    wp_tag_cloud(array(
      'smallest'                  => 8,
    	'largest'                   => 22,
    	'unit'                      => 'pt',
    	'number'                    => 45,
    	'format'                    => 'flat',
    	'separator'                 => "\n",
    	'orderby'                   => 'name',
    	'order'                     => 'ASC',
    	'exclude'                   => null,
    	'include'                   => null,
    	'topic_count_text_callback' => default_topic_count_text,
    	'link'                      => 'view',
    	'taxonomy'                  => 'post_tag',
    	'echo'                      => true,
    	'child_of'                  => null, // see Note!
    ));
    ?>
  </section>

  <section id="meta" class="widget">
    <h3 class="widget-title"> Meta </h3>
    <ul>
      <li><a href="#">Site Admin</a></li>
      <li><a href="#">Log out</a> </li>
    </ul>
  </section>
</aside>
<!-- end #sidebar -->
