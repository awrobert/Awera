<!-- FOOTER-->
<section class="wrap wrap-footer">
    <div class="con con-footer">
        <div class="row">
            <div class="col-md-12">
<?php       
wp_nav_menu( array(
    'theme_location'  => 'footer_menu',
    'menu'            => 'Footer Menu', 
    'container'       => 'false', 
    'container_class' => '', 
    'container_id'    => '',
    'menu_class'      => 'menu', 
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="fm-ul">%3$s</ul>',
    'depth'           => 0,
    'walker'          => '',
) );
?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <center><img src="<?php echo THEME_URL; ?>/img/footer-logo.png"></center>
            </div>
            <div class="col-md-3 fc-number">
                <center>
                <font class="t1"><i class="fa fa-phone-square" aria-hidden="true"></i> 8 (999) 99-99-999</font>
                </center>
            </div>
            <div class="col-md-3 fc-social">
                <center>
                    <i class="fa fa-vk" aria-hidden="true"></i>
                    <i class="fa fa-odnoklassniki-square" aria-hidden="true"></i>
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </center>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<!-- /FOOTER-->

<!-- MODAL WINDOWS -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="hidden"></div>

<?php wp_footer(); ?>
</body>
</html>
