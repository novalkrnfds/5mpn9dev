<section class="page-title-1" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <h1>Detail Berita</h1>
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
          <a href="<?=base_url();?>">Home</a><i class="fa fa-angle-double-right"></i><a href="<?=base_url('berita');?>">Berita</a><i class="fa fa-angle-double-right"></i>Detail Berita
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
        <a href="<?=base_url();?>">Home</a><i class="fa fa-angle-double-right"></i><a href="<?=base_url('berita');?>">Berita</a><i class="fa fa-angle-double-right"></i>Detail Berita
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
        <!--

        Post start

        //-->
        <article class="post">
            <a href="<?=base_url();?>admin/assets/uploads/berita/<?=$berita['gambar']; ?>" class="colorbox img"><img src="<?=base_url();?>admin/assets/uploads/berita/<?=$berita['gambar']; ?>" width="100%" alt=""></a>
          <header>
            <h3><i class="fa fa-pencil"></i> <span><?=$berita['judul'];?></span></h3>
            <p>posted by <a ><?=$berita['nama'];?></a></p>
          </header>
          <p style="text-align:justify;"><?=$berita['body'];?></p>

          <p>&nbsp;</p>
          <div class="date">
            <span class="day"><?=date('d', strtotime($berita['dibuat']))?></span>
            <span class="month"><?=date('M', strtotime($berita['dibuat']))?>, <?=date('y', strtotime($berita['dibuat']))?></span>
          </div>
        <!--

        Post end

        //-->
        </article>
        <p class="pull-right"><a href="<?=base_url('berita');?>" class="btn  btn-small  btn-secondary-border"><i class="fa fa-arrow-circle-left"></i> &nbsp;Kembali</a></p>
      </div>
      <!--

      Right Sidebar start

      //-->
      <div class="col-lg-3 col-md-3">

      <!--

      Categories Widget

      //-->
      <aside class="widget  category-widget">
        <h3>browse <strong>Categories</strong></h3>
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

      <!--

      Twitter Widget

      //-->

      <!--

      Right Sidebar end

      //-->
      </div>
    </div>
  </div>
<!--

Main Content start

//-->
</section>
