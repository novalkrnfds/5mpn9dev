<section class="page-title-1" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <h1>Galeri Sekolah </h1>
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
          <a href="<?=base_url();?>">Beranda</a><i class="fa fa-angle-double-right"></i></i>Galeri Sekolah
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
        <a href="<?=base_url();?>">Beranda</a><i class="fa fa-angle-double-right"></i></i>Galeri Sekolah
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="">Galeri Sekolah SMP Negeri 9 Kota Sungai Penuh</h4>
        <hr>
        <div class="sorting" id="portfolio-sorting">
          <!--

          Filters

          //-->
          <div class="sorting-filters">
            <span data-value="Kegiatan">Kegiatan</span>
            <span data-value="Fasilitas">Fasilitas</span>
            <span data-value="Ekstrakulikuler">Ekstrakulikuler</span>
            <span data-value="Video">Video</span>
          </div>
          <!--

          Items To Sort start

          //-->
          <div class="row">
            <div class="col-lg-12">
            <div class="projects-listing  projects-listing-3-cols">
              <!--

			  
              Project Item

			  
              //-->
			  
              <?php foreach ($galeri as $g) { ?>
                <article class="project padding-bottom-30 padding-left-30 <?=$g->tag;?>  sorting-item  listing-item">
                  <div class="project-inner">
                    <figure><a href=""><img src="<?=base_url();?>admin/assets/uploads/gallery/<?=$g->gambar;?>" alt=""></a><figcaption><a href="<?=base_url();?>admin/assets/uploads/gallery/<?=$g->gambar;?>" class="colorbox"><i class="fa fa-search"></i></a></figcaption></figure>
                  </div>
                </article>
              <?php } ?>
            </div>
        </div>
        </div>
      <!--

      Items To Sort end

      //-->
      </div>
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
  </div>
  </div>
<!--

Main Content start

//-->
</section>
