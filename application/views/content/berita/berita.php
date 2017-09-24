<section class="page-title-1" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <h1>Info & Berita</h1>
      </div>
    </div>
  </div>
<!--

Page Title end

//-->
</section>
<!--

Desktop breadscrubs start

//-->
<section class="desktop-breadscrubs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="desktop-breadscrubs-inner">
          <a href="<?=base_url();?>">Home</a><i class="fa fa-angle-double-right"></i>Info & Berita
        </div>
      </div>
    </div>
  </div>
<!--

Desktop breadscrubs end

//-->
</section>
<!--

Mobile breadscrubs start

//-->
<section class="mobile-breadscrubs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a href="<?=base_url();?>">Home</a><i class="fa fa-angle-double-right"></i>Info & Berita
      </div>
    </div>
  </div>
<!--

Mobile breadscrubs end

//-->
</section>
<!--

Main Content start

//-->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9">
        <!-- <p class="blog-cat">Info & <strong>Berita</strong></p> -->
        <p></p>
        <!--

        Post start

        //-->
        <?php
			  foreach($results as $b) { ?>

        <article class="post">
          <figure>
            <a href="https://smpn2spn.sch.id/admin/assets/uploads/berita/<?=$b->gambar; ?>" width="100%" class="colorbox">
              <img src="https://smpn2spn.sch.id/admin/assets/uploads/berita/<?=$b->gambar; ?>" width="100%" alt="">
            </a>
            <figcaption>
              <a href="https://smpn2spn.sch.id/admin/assets/uploads/berita/<?=$b->gambar; ?>" class="colorbox">
                <i class="fa fa-search"></i>
              </a>
            </figcaption>
          </figure>
          <header>
            <h3><i class="fa fa-pencil"></i> <a href="<?=base_url('berita/detail/'. $b->id) ?>"><?php echo $b->judul; ?></a></h3>
            <p>posted by <a><?=$b->nama?></a></p>
          </header>
          <p><?=substr($b->body, 0, 300); ?>...</p>
          <p><a href="<?=base_url('berita/detail/'. $b->id) ?>" class="btn  btn-small  btn-secondary-border">selengkapnya &nbsp;<i class="fa fa-arrow-circle-right"></i></a></p>
          <div class="date">
            <span class="day"><?=date('d', strtotime($b->dibuat))?></span>
            <span class="month"><?=date('M', strtotime($b->dibuat))?>, <?=date('y', strtotime($b->dibuat))?></span>

          </div>
        <!--

        Post end

        //-->
        </article>
        <?php } ?>
        <!--

        pagination start

        //-->
        <div class="pagination">
          <span class="page-numbers current">1</span>
          <a class="page-numbers" href="">2</a>
          <a class="page-numbers" href="">3</a>
          <a class="next page-numbers" href="">Next &raquo;</a>
        <!--

        pagination end

        //-->
        </div>
      </div>
      <!--

      Right Sidebar start

      //-->
      <div class="col-lg-3 col-md-3">
        <!--

        Search Widget

        //-->
      <!--

      Categories Widget

      //-->
      <aside class="widget  category-widget">
        <h3><strong>Kategori</strong></h3>
        <div class="widget-inner">
          <ul>
            <li>
              <p><a href=""><i class="glyphicon glyphicon-folder-open"></i> web</a> <a href=""><i class="fa fa-rss"></i></a> <span>16</span></p>
              <small>Cras facilisis diam sit amet.</small>
            </li>
            <li>
              <p><a href=""><i class="glyphicon glyphicon-folder-open"></i> html</a> <a href=""><i class="fa fa-rss"></i></a> <span>21</span></p>
              <small>Integer ante velit, tempus eu libero id.</small>
            </li>
            <li>
              <p><a href=""><i class="glyphicon glyphicon-folder-open"></i> design</a> <a href=""><i class="fa fa-rss"></i></a> <span>7</span></p>
              <small>Sed feugiat purus eu diam.</small>
            </li>
            <li>
              <p><a href=""><i class="glyphicon glyphicon-folder-open"></i> development</a> <a href=""><i class="fa fa-rss"></i></a> <span>11</span></p>
              <small>Nunc pretium lorem ullamcorper tincidunt.</small>
            </li>
            <li>
              <p><a href=""><i class="glyphicon glyphicon-folder-open"></i> marketing</a> <a href=""><i class="fa fa-rss"></i></a> <span>35</span></p>
              <small>Vestibulum placerat, nulla eu molestie.</small>
            </li>
          </ul>
        </div>
      </aside>
      <!--

      Tabs Widget

      //-->
      </div>
    </div>
  </div>
<!--

Main Content start

//-->
</section>
