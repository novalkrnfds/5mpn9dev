<<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").on("hidden.bs.modal",function(){
      $("#iframeYoutube").attr("src","#");
    })
  })

  function stopVid(){
    $("#iframeYoutube").attr("src","#");
  }

  function changeVideo(vId){
    var iframe = document.getElementById("iframeYoutube");
    iframe.src= vId;
    console.log(vId)

    $("#myModal").modal("show");
  }
</script>

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
			  
              <?php foreach ($galeri as $g) { 
                if($g->tag == 'Video'){ ?>
                <article class="project padding-bottom-30 padding-left-30 <?=$g->tag;?>  sorting-item  listing-item">
                  <div class="project-inner">
                    <figure><a href=""><img src="<?=base_url();?>admin/assets/uploads/gallery/<?=$g->gambar;?>" alt=""></a><figcaption><a onclick="changeVideo('<?=$g->gambar;?>')"><i class="fa fa-search"></i></a></figcaption></figure>
                  </div>
                </article>
                <?php } else { ?>
                <article class="project padding-bottom-30 padding-left-30 <?=$g->tag;?>  sorting-item  listing-item">
                  <div class="project-inner">
                    <figure><a href=""><img src="<?=base_url();?>admin/assets/uploads/gallery/<?=$g->gambar;?>" alt=""></a><figcaption><a href="<?=base_url();?>admin/assets/uploads/gallery/<?=$g->gambar;?>" class="colorbox"><i class="fa fa-search"></i></a></figcaption></figure>
                  </div>
                </article>
              <?php }
              } ?>
            </div>
        </div>
        </div>
      <!--

      Items To Sort end

      //-->
      </div>

      <!-- <a onclick="changeVideo('e80BbX05D7Y')">video-1</a>
      <a onclick="changeVideo('ReRcHdeUG9Y')">video-2</a> -->

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

  

  <div class="modal fade" style="padding-top:120px" id="myModal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
        
          <iframe id="iframeYoutube" width="100%" height="315" src="" frameborder="0" allowfullscreen></iframe> 
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="stopVid()" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
