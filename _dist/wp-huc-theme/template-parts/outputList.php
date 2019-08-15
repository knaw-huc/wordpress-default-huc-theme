    <?php


    wp_reset_postdata();

    $args = array(
        'post_type' => 'output',
        'order'     => 'DESC',
        'meta_key'   => 'publication_date',
	      'orderby' => 'meta_value',
        'meta_query' => array(
                    array(
                        'key' => 'output_type',
                        'value' => $type,
                        'compare' => '='
                    )

                ),
    );
    query_posts( $args );

    if ( have_posts() ) :

      ?>
      <div class="itemBlock ">
        <div class="listFilterBar">
          <input type="text" id="filterWord" onkeyup="filterList()" placeholder="Filter in list">
        </div>
      <ul class="outputList" id="outputList">
      <?php

      while ( have_posts() ) : the_post();
      ?>
        <li>

          <?php
          if (get_post_meta($post->ID, 'output_type', true) == 'dataset') {
            get_template_part( 'template-parts/outputList-dataset' );
          }elseif ( (get_post_meta($post->ID, 'output_type', true) == 'presentation') || (get_post_meta($post->ID, 'output_type', true) == 'publication') ) {
            get_template_part( 'template-parts/outputList-presentation' );
          }else {
            get_template_part( 'template-parts/outputList-default' );
          }
          //get_template_part( 'template-parts/outputList-dataset' );

           ?>
        </li>


      <?php
      endwhile;
    endif;
    ?>
  </ul>

  <script>
function filterList() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('filterWord');
  filter = input.value.toUpperCase();
  ul = document.getElementById("outputList");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("div")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
      </div>
