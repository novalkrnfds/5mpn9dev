<section class="section  home-slider">
  <div id="layerslider" class="layerslider" style="height: 500px;">
    <!--LayerSlider layer-->
    <div class="ls-layer" style="transition3d: 1,4,5,11; transition2d: 2,8,30;">
      <!--LayerSlider background-->
      <img class="ls-bg" src="<?=base_url();?>/assets/img/slide/e.jpg" alt="layer1-background">
      <div class="layerslider-block ls-s1" style="top: 300px; left: 15px; transition2d: all; slidedelay: 6000; durationin: 1000; easingin: easeOutExpo;">
        <h3>We are</h3>
        <h2>SMP Negeri 9 <br> Kota Sungai Penuh</h2>
        <p>Selamat datang di website resmi SMP Negeri 9 Kota Sungai Penuh, Jambi</p>
      </div>
    </div>
    <!--LayerSlider layer-->
    <div class="ls-layer" style="transition3d: 2,3,6,14; transition2d: 4,5,23;">
      <!--LayerSlider background-->
      <img class="ls-bg" src="<?=base_url();?>assets/img/slide/d.jpg" alt="layer1-background">
      <div class="layerslider-block ls-s1" style="top: 300px; left: 15px; transition2d: all; slidedelay: 6000; durationin: 1000; easingin: easeOutExpo;">
        <h3>we are</h3>
        <h2>SMP Negeri 9</h2>
        <p>Melaksanakan pengembangan potensi diri siswa serta meningkatkan kemampuan siswa dalam bidang teknologi.</p>
      </div>
    </div>
    <!--LayerSlider layer-->
    <div class="ls-layer" style="transition3d: 2,3,6,14; transition2d: 4,5,23;">
      <!--LayerSlider background-->
      <img class="ls-bg" src="<?=base_url();?>assets/img/slide/c.jpg" alt="layer1-background">
      <div class="layerslider-block ls-s1" style="top: 300px; left: 15px; transition2d: all; slidedelay: 6000; durationin: 1000; easingin: easeOutExpo;">
        <h3>we are</h3>
        <h2>SMP Negeri 9</h2>
        <p>Berprestasi dalam ilmu, Berbudi pekerti luhur dalam perilaku dan Bertaqwa kepada Tuhan Yang Maha Esa.</p>
      </div>
    </div>
  </div>
<!--

LayerSlider end

//-->
</section>
<!--

Features start

//-->

<!--

Call To Action start

//-->
<section class="section  section-st3  section-cta2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p><span><marquee>Selamat Datang di Website Resmi SMP Negeri 9 Kota Sungai Penuh</marquee></span></p>
      </div>
    </div>
  </div>
<!--

Call To Action #2 end

//-->
</section>
<!--

Projects start

//-->
<section class="section  section-align-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Sambutan <strong>Kepala Sekolah</strong></h3>
      </div>

      <?php if($data)
        foreach($data as $dt) : ?>
      <div class="row">
        <div class="col-lg-3 col-md-2">
          <figure class="single"><img src="<?=base_url();?>admin/assets/uploads/<?=$dt->foto_kepsek; ?>" width="200px" ></figure>
        </div>
        <div class="col-lg-9 col-md-9">
                <!-- <h2>Sambutan<strong> Kepala sekolah </strong></h2> -->
          <p style="text-align:justify;"><?=$dt->sambutan;?></p>
        </div>
      </div>
      <?php endforeach; ?>
  </div>
<!--

Projects end

//-->
</section>
<!--

Testimonials #1 start

//-->
<section class="section section-st1 section-align-left">
  <div class="container">
    <div class="row">
      <!--

      Latest News start

      //-->
      <div class="col-lg-6 col-md-6">
        <h3>Berita <strong>Terbaru</strong></h3>
        <div class="relative" id="latest-news">
          <!--

          News Item start

          //-->
          <?php
			       foreach($berita as $b) : ?>
              <article class="post-preview  padding-left-30">
                <div class="post-preview-inner">
                  <div class="header">
                    <div class="date">
                      <span class="day"><?=date('d', strtotime($b->dibuat))?></span><span class="month"><?=date('M', strtotime($b->dibuat))?>, <?=date('y', strtotime($b->dibuat))?></span>
                    </div>
                    <a target="_blank" href="<?=base_url('berita/detail/'. $b->id) ?>"><span style="font-size:0.87em"><?=$b->judul;?></span></a>
                  </div>
                  <p><?=substr($b->body, 0, 180); ?>... <a target="_blank" href="<?=base_url('berita/detail/'. $b->id) ?>" class="more">Selengkapnya →</a></p><br></p>
                </div>
              <!--

              News Item end

              //-->
              </article>
          <?php endforeach; ?>
          <!--

          Navigation News Item start

          //-->
          <div class="navigation  navigation-left rivaslider-navigation">
            <a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
          <!--

          Navigation News Item end

          //-->
          </div>
        </div>
      <!--

      Latest News end

      //-->
      </div>
      <!--

      Testimonials #2 start

      //-->
      <div class="col-lg-6 col-md-6">
        <h3>Pengumuman <strong>Sekolah</strong></h3>
        <div class="toggle">
          <!--

          Toggle Item start

          //-->
          <?php
          foreach ($pengumuman as $p) { ?>
          <article>
            <header><i class="fa fa-bullhorn"></i>&nbsp;<?=$p->judul;?> <i class="fa fa-plus"></i></header>
            <p><?=$p->isi;?></p>
          <!--

          Toggle Item end

          //-->
          </article>
          <?php } ?>
        </div>

      <!--

      Testimonials #2 end

      //-->
      </div>
    </div>
  </div>
<!--

Latest News + Testimonials #2 end

//-->
</section>
<!--

Partners start

//-->
<section class="section  section-align-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Link <strong>terkait</strong></h2>
        <div class="relative" id="our-partners">
          <div class="partner-logo"><a target="_blank" href="http://jardiknas.kemdikbud.go.id/"><div class="inner"><img src="<?=base_url();?>assets/img/link/jardiknas.jpg" alt=""><span class="helper"></span></div></a></div>
          <div class="partner-logo"><a target="_blank" href="http://m-edukasi.kemdikbud.go.id/medukasi/"><div class="inner"><img src="<?=base_url();?>assets/img/link/medukasi.jpg" alt=""><span class="helper"></span></div></a></div>
          <div class="partner-logo"><a target="_blank" href="http://nisn.data.kemdikbud.go.id/"><div class="inner"><img src="<?=base_url();?>assets/img/link/nisn.jpg" alt=""><span class="helper"></span></div></a></div>
          <div class="partner-logo"><a target="_blank" href="http://www.simdik.info/"><div class="inner"><img src="<?=base_url();?>assets/img/link/simdik.jpg" alt=""><span class="helper"></span></div></a></div>
          <div class="partner-logo"><a target="_blank" href="http://e-resources.perpusnas.go.id/"><div class="inner"><img src="<?=base_url();?>assets/img/link/perpunas.jpg" alt=""><span class="helper"></span></div></a></div>
          <!--
          * Our Partners Controls
          //-->
          <div class="controls rivaslider-controls"></div>
        </div>
      </div>
    </div>
  </div>
<!--

Partners end

//-->
</section>
<!--

//-->
