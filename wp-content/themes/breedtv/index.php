<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="">
    <?php roots_main_before(); ?>
      <div id="main" class="eightcol first" role="main">
        <div class="page-header">
          <h1><?php _e('Latest Posts', 'roots');?></h1>
        </div>
        <?php get_template_part('loop', 'index'); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="ninecol last" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <?php get_sidebar(); ?>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>
