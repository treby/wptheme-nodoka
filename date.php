<?php 
/**
 * date.php : Date Archive Template
 *                     2013.10.14 treby
 */

$archive_title = 'Archives';
$archive_detail = '';

if (is_day()) {
    $archive_detail = sprintf('Daily Archives (%s)', get_the_date('Y/n/j'));
} elseif (is_month()) {
    $archive_detail = sprintf('Monthly Archives (%s)', get_the_date('Y/n'));
} elseif (is_year()) {
    $archive_detail = sprintf('Yearly Archives (%s)', get_the_date('Y'));
}

get_header();
?>

<?php if (have_posts()) : ?>
<div class="content">
  <div class="container">
    <div class="blog">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <h2><?php echo $archive_title; ?></h2>
            <?php if (!empty($archive_detail)) : ?>
              <p class="big grey"><?php echo $archive_detail; ?></p>
            <?php endif; ?>
          <hr>
          <div class="posts">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
            <?php nodoka_paging_nav(); ?>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
