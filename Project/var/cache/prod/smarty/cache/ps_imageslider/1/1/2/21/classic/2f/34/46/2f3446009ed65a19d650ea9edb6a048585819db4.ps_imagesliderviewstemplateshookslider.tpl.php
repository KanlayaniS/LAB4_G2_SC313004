<?php
/* Smarty version 4.3.1, created on 2024-01-30 20:12:47
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b8f5cf05f195_36858132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1706534575,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_65b8f5cf05f195_36858132 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">            <figure>
              <img src="http://localhost/se_project/Project/modules/ps_imageslider/images/54502830ba97660398666cb557494eca1e04bec4_KKU_Shop_slid.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">            <figure>
              <img src="http://localhost/se_project/Project/modules/ps_imageslider/images/67ccb497c406c0df01ccbf0d5d77a89d6cb7ddfb_KKU_Shop_slid_1.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">            <figure>
              <img src="http://localhost/se_project/Project/modules/ps_imageslider/images/f1bb2e01475bfd981d7176952a2d5471363ab41b_KKU_Shop_slid_2.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="ปุ่มหมุน">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="ก่อนหน้า">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="ต่อไป">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
