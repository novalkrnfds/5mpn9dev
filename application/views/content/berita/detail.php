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
          <a href="<?=base_url();?>">Home</a><i class="fa fa-angle-double-right"></i>Detail Berita
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
        <a href="<?=base_url();?>">Home</a><i class="fa fa-angle-double-right"></i>Detail Berita
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
            <a href="https://smpn2spn.sch.id/admin/assets/uploads/berita/<?=$berita['gambar']; ?>" class="colorbox img"><img src="https://smpn2spn.sch.id/admin/assets/uploads/berita/<?=$berita['gambar']; ?>" width="100%" alt=""></a>
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
<!--

Envor site content end

//-->
</div>
<!--

Envor footer start

//-->
<footer class="footer  footer-1">
<div class="container">
  <div class="row">
    <!--

    Footer About Widget start

    //-->
    <div class="col-lg-3 col-md-3">
      <div class="widget">
        <h3>about</h3>
        <div class="widget-inner">
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <div class="quick_newsletter">
            <form action="../../php/process.php">
              <input name="name" id="name" value="Name" class="text" onblur="_hint(this,'Name',1)" onclick="_hint(this,'Name',0)" type="text">
              <input name="email" id="email" value="email" class="text" onblur="_hint(this,'email',1)" onclick="_hint(this,'email',0)" type="text">
              <input name="submit" value="Subscribe me!" class="btn  btn-primary  btn-normal" onclick="doSubscribe(this,'#subscribe_response_div');" type="button">
            </form>
          </div>
          <span id="subscribe_response_div"></span>
        </div>
      </div>
    <!--

    Footer About Widget end

    //-->
    </div>
    <!--

    Footer News Widget start

    //-->
    <div class="col-lg-3 col-md-3">
      <div class="widget">
        <h3>latest <strong>news</strong></h3>
        <div class="widget-inner">
          <div class="wrapper" id="footer-news">
            <!--

            News Item start

            //-->
            <article class="post-preview">
              <div class="post-preview-inner">
                <div class="header">
                  <div class="date">
                    <span class="day">25</span><span class="month">DEC, 13</span>
                  </div>
                  <a href="">In pharetra posuere dolor nulla...</a>
                </div>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec ut aliquet enim...</p>
              </div>
            <!--

            News Item end

            //-->
            </article>
            <!--

            News Item start

            //-->
            <article class="post-preview">
              <div class="post-preview-inner">
                <div class="header">
                  <div class="date">
                    <span class="day">12</span><span class="month">JAN, 14</span>
                  </div>
                  <a href="">Vivamus euismod, mauris quis auctor...</a>
                </div>
                <p>Vestibulum vitae interdum dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac...</p>
              </div>
            <!--

            News Item end

            //-->
            </article>
            <!--

            News Item start

            //-->
            <article class="post-preview">
              <div class="post-preview-inner">
                <div class="header">
                  <div class="date">
                    <span class="day">30</span><span class="month">JAN, 14</span>
                  </div>
                  <a href="">Etiam mattis turpis non est auctor...</a>
                </div>
                <p>Cras luctus venenatis elit. Etiam sagittis felis eu lectus egestas consequat. Nulla non nisi sit amet eros sollicitudin...</p>
              </div>
            <!--

            News Item end

            //-->
            </article>
            <!--

            News Item start

            //-->
            <article class="post-preview">
              <div class="post-preview-inner">
                <div class="header">
                  <div class="date">
                    <span class="day">02</span><span class="month">FEB, 14</span>
                  </div>
                  <a href="">Nulla ligula augue, placerat in magna...</a>
                </div>
                <p>Ut id commodo diam, eget auctor odio. Aenean convallis, eros id luctus vehicula, risus dolor laoreet magna, nec ultrices...</p>
              </div>
            <!--

            News Item end

            //-->
            </article>
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
        </div>
      </div>
