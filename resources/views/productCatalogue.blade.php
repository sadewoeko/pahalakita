
                    <style>
                      .panel-a{
                        position: relative;
                      }
                      .panel-group .panel {
                        margin-bottom:0px;
                      }
                      .trending-slider-03 .slick-arrow{
                        top: -40px;
                        width: 20px;
                        height: 20px;
                        margin-right: 13px;
                      }
                      .panel-group{
                        width:585px
                      }

                      .panel-group>.panel, .panel-default{
                        width:570px;
                        max-height:400px;
                        height:261px;
                      }

                      .btn-padding{
                        padding-bottom:64px;
                      }
                      .title{
                        display: block;
                        font-size: 20px;
                        position: relative;
                        text-transform: uppercase;
                        color: #333;
                        font-family: 'Times New Roman';
                      }
                      .item-name{
                        margin-top: 8px;
                        padding:0
                      }
                      a.green{
                        color: #333;
                        padding:20px;
                      }
                      a.green:hover{
                        color: #f55656;
                      }
                      
                    </style>
                    <style>
                      .youtube-container { display: block; margin: 20px auto; width: 100%; max-width: 700px; border:1px solid #000; }
                      .youtube-player { display: block; width: 100%; /* assuming that the video has a 16:9 ratio */ padding-bottom: 56.25%; overflow: hidden; position: relative; width: 100%; height: auto; cursor: hand; cursor: pointer; display: block; }
                      img.youtube-thumb { bottom: 0; display: block; left: 0; margin: auto; max-width: 100%; width: 100%; position: absolute; right: 0; top: 0; height: auto }
                      div.play-button { height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url("http://i.imgur.com/TxzC70f.png") no-repeat; }
                      #youtube-iframe { width: 100%; height: 100%; position: absolute; top: 0; left: 0; }
                    </style>
                    
<link rel="stylesheet" href="{{ asset('assets/assets/css/product_all.css') }}">

<hr style="color:black">

<section class="trending-03">
      <div class="container">      
        <h2 class="section-title">Products</h2>
          <ol class="breadcrumb text-right">
            <a href="{{ route('product_all', 'sell') }}" style="float:left"><strong class="fa fa-plus"> More</strong></a>
          </ol><!-- /.breadcrumb -->
          {{--  <div id="related-slider" class="related-slider">              
              <div class="col-sm-5">
                <div class="item">
                  <div class="item-thumbnail">
                  <img class="item-img" src="{{ asset('uploads/product/kerdus.jpg') }}" alt="Item Thumbnail">
                  </div><!-- /.item-thumbnail -->
                  <div class="item-content">
                    <h3 class="item-title">product name</h3><!-- /.item-title -->
                      <div class="item-price">
                        <label class="flag-label"><img class="flag-sortname" src="http://www.countryflags.io/shiny/64.png"></label><span>&nbsp;</span>
                        <strong class="company-name">sdf</strong>
                      </div>
                  </div><!-- /.item-content -->
                </div><!-- /.item -->              
              </div>
          </div>  --}}
          
          <div id="related-slider" class="related-slider">
            {{--  <div class="trending-slider-03 text-center">            --}}
              {{--  <div class="item">
                <div class="item-thumbnail">
                  <img class="item-img" src="{{ asset('uploads/product/kerdus.jpg') }}" style="width:200px;" alt="Item Thumbnail">
                </div><!-- /.item-thumbnail -->
                <div class="item-content">
                  <br>
                    <h3 class="item-title">Product Name</h3><!-- /.item-title -->
                      <div class="item-price">
                        <label class="flag-label"><img class="flag-sortname" src="http://www.countryflags.io/shiny/64.png"></label><span>&nbsp;</span>
                         <strong class="company-name">Full Name</strong>
                      </div>
                </div><!-- /.item-content -->
              </div><!-- /.item -->  --}}
              @foreach($All as $data3)
              <div class="item">
                <div class="item-thumbnail">
                  <img src="{{ asset('uploads/product/' . $data3->image) }}" class="img-square img-responsive" style="width:180px;height:180px" alt="Item Thumbnail"></a>
                </div><!-- /.item-thumbnail -->
                  <div class="item-content">
                    <h3 class="item-name" style="font-size:13px"><strong>{{ Link_to_route('productDetail.detail', substr($data3->product_name,0,20), array($data3->id), array('class' => 'green')) }}<a href="#"></a></strong></h3>
                    <div class="item-price">
                      <label class="flag-label"><img class="flag-sortname" src="http://www.countryflags.io/{{ $data3->sortname }}/shiny/64.png"></label><span>&nbsp;</span>
                      <strong class="company-name">{{ $data3->company_name }}</strong> 
                    </div>
                </div>
              </div>
              @endforeach
            {{--  </div>  --}}
          </div>    
          
      </div><!-- /.container -->
</section><!-- /.trending -->

<br>
<br>
<hr style="color:black">
<section id="cat" class="trending-03 other-banners other-banners-09">
  <div class="cat-title">
    <h1 class="title" align="center"><strong> Request of this month</strong></h1>
  </div>
    <br>
  <div class="container">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="row" style="margin-left:-20px;margin-right:-20px">    
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="row">
            <div class="panel-group" role="tablist" id="accordion2" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSell">
                  <a href="{{ route('product_all', 'sell') }}" style="float:left"><strong class="fa fa-plus"> More</strong></a>
                  <h2 class="panel-title" style="font-size:20px" align="center">
                  Selling 
                  </h2>
                </div> 

                <div class="panel-body">
                    <div class="section-details" style="padding:0">
                      <div class="row">
                        <div class="trending-slider-03 text-center">
                          @if(empty($Sell))
                            <div class="item">
                              <div class="item-thumbnail"><img src="{{ asset('uploads/product/kerdus.jpg') }}" class="img-square img-responsive" style="width:300px;height:100px" alt="Item Thumbnail"></a></div><!-- /.item-thumbnail -->
                              <div class="item-content">
                              <h3 class="item-name" style="font-size:10px"><strong><a href="#">No Product</a></strong></h3> 
                              </div>
                            </div>
                          @else
                            @foreach($Sell as $data1)
                              <div class="item">
                                <div class="item-thumbnail"><img src="{{ asset('uploads/product/' . $data1->image) }}" class="img-responsive" style="width:300px;height:150px" alt="Item Thumbnail"></a></div><!-- /.item-thumbnail -->
                                <div class="item-content">
                                <h3 class="item-name" align="center" style="font-size:10px"><strong>{{ Link_to_route('productDetail.detail', $data1->product_name, array($data1->id), array('class' => 'green')) }}</strong></h3> 
                                </div>
                              </div>
                            @endforeach
                          @endif
                        </div>
                      </div>
                    </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="row">
            <div class="panel-group" role="tablist" id="accordion1" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSell">
                  <a href="{{ route('product_all', 'buy') }}" style="float:left"><strong class="fa fa-plus"> More</strong></a>
                  <h2 class="panel-title" style="font-size:20px" align="center">
                  Buying
                  </h2>
                </div> 

                <div class="panel-body">
                    <div class="section-details" style="padding:0">
                      <div class="row">
                        <div class="trending-slider-03 text-center">
                        @if(empty($Buy))
                          <div class="item">
                            <div class="item-thumbnail"><img src="{{ asset('uploads/product/kerdus.jpg') }}" class="img-square img-responsive" style="width:300px;height:100px" alt="Item Thumbnail"></a></div><!-- /.item-thumbnail -->
                            <div class="item-content">
                            <h3 class="item-name" style="font-size:10px"><strong><a href="#">No Product</a></strong></h3> 
                            </div>
                          </div>
                        @else
                          @foreach($Buy as $data2)
                            <div class="item">
                              <div class="item-thumbnail"><img src="{{ asset('uploads/product/' . $data2->image) }}" class="img-responsive" style="width:300px;height:150px" alt="Item Thumbnail"></a></div><!-- /.item-thumbnail -->
                              <div class="item-content">
                              <h3 class="item-name" style="font-size:10px"><strong>{{ Link_to_route('productDetailBuy.detail', $data2->product_name, array($data2->id), array('class' => 'green')) }}</strong></h3> 
                              </div>
                            </div>
                          @endforeach
                        @endif
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      {{-- <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h2 class="panel-title" style="font-size:30px" align="center">
                Country and Their Request
              </h2>  
            </div>

              <div class="panel-body">                  
                <div class="col-sm-4">
                  <div class="item">
                    <a href="#">
                      <img src="http://place-hold.it/210x300/000" alt="Banner Image">
                        <div class="item-details">
                          <h3 class="item-title text-center" style="margin-top:70px;font-size:25px">
                            Agriculture
                            <span style="font-size:15px">Agrochemicals, Animal Fodders, Vegetables, Others</span>
                          </h3>
                        </div>
                    </a>
                  </div>
                </div>

                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/330x140/000" alt="Banner Image"> 
                          <div class="item-details">
                            <h3 class="item-title">
                              Apparels
                              <span style="font-size:16px">Children&#39;s Apparel, Men&#39;s Apparel, Women&#39;s Apparel, Fashion Accessories</span></h3>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="item">
                            <a href="#">
                              <img src="http://place-hold.it/90x60/000" alt="Banner Image">
                              <div class="item-details">
                                <h3 style="font-size:12px" class="item-title">
                                  Antiques & Collectible
                                  <span style="font-size:10px"></span>
                                </h3>
                              </div> 
                            </a>
                          </div>
                        </div>

                        <div class="col-sm-12" style="padding-top:20px">
                          <div class="item">
                            <a href="#">
                              <img src="http://place-hold.it/90x60/000" alt="Banner Image">
                              <div class="item-details">
                                <h3 style="font-size:12px" class="item-title">
                                  Computer Stuff
                                  <span style="font-size:10px"></span>
                                </h3>
                              </div> 
                            </a>
                          </div> 
                        </div>
                      </div> 
                    </div>

                    <div class="col-sm-6">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/210x130/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title text-center">
                            Otomotives
                            <span style="font-size:16px">Automobile Parts, Motorcycle Parts & Accessories</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>

                    <div class="col-sm-6">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/210x130/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title" style="margin-top:-60px;margin-left:40px">
                            Business Services
                            <span style="font-size:16px">Advertising, Consulting & Service Agent</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>
                  </div> 
                </div>

                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="margin-top:310px">
                  <div class="panel-body">
                    
                    <div class="col-sm-3" style="padding-left:0">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/160x142/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title" style="font-size:24px">
                              Chemicals
                              <span style="font-size:16px">Plastic chip, Biochemical products & others</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>

                    <div class="col-sm-6" style="margin-top:0">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/315x142/000" alt="Banner Image">
                          <div class="item-details" style="margin-top:-70px">
                            <h3 class="item-title" style="font-size:24px;">
                              Decoration
                              <span style="font-size:16px">Construction, Building facilities & Construction projects</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>

                    <div class="col-sm-3" style="padding-right:0">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/157x142/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title" style="font-size:20px">
                              Electronics
                              <span style="font-size:12px">Electrical, Electronic Accessories & Supplies</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>
                    

                    <div class="col-sm-4" style="padding-left:0;margin-top:30px">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/215x182/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title" style="font-size:20px">
                              Energy & Environment
                              <span style="font-size:12px">Environment projects, Natural gas, & Oil</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>

                    <div class="col-sm-5" style="margin-top:30px">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/257x182/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title" style="font-size:20px">
                              Food & Beverage
                              <span style="font-size:12px">Food Ingredients,Health Food,Others</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>

                    <div class="col-sm-3" style="padding-right:0;margin-top:30px;padding-left:11px">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/160x182/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title" style="font-size:20px">
                              Furniture & Furnishing
                              <span style="font-size:12px">Furniture Hardware, Metal Furniture, Accesories Furniture</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>

                    <div class="col-sm-4" style="padding-left:0;margin-top:30px">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/212x150/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title" style="font-size:20px">
                              Health & Beauty
                              <span style="font-size:12px">Medicine, Health Products, Personal Care, Others</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>

                    <div class="col-sm-8" style="padding-right:0;margin-top:30px">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/460x156/000" alt="Banner Image">
                          <div class="item-details">
                            <h3 class="item-title" style="font-size:20px">
                              Home Appliances
                              <span style="font-size:12px">indoor & outdoor equipment, Home Accessories, Others</span>
                            </h3> 
                          </div> 
                        </a>
                      </div> 
                    </div>

                    <div class="col-sm-8" style="padding-left:0">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="item">
                            <a href="#">
                              <img src="http://place-hold.it/207x140/000" alt="Banner Image">
                              <div class="item-details">
                                <h3 class="item-title text-center" style="font-size:20px">
                                Industrial Supplies & Machinery
                                <span style="font-size:12px">Pharmaceutical Machinery, Chemical & Industrial Supplies</span>
                                </h3> 
                              </div> 
                            </a>
                          </div> 
                        </div>
        
                        <div class="col-sm-6">
                          <div class="item">
                            <a href="#">
                              <img src="http://place-hold.it/207x140/000" alt="Banner Image">
                              <div class="item-details" style="margin-top:-60px">
                                <h3 class="item-title" style="font-size:20px">
                                  Textile & Leather
                                  <span style="font-size:12px">Yarn, Chemical Fabrics, Textile Products, Textile Materials</span>
                                </h3>  
                              </div> 
                            </a>
                          </div> 
                        </div>
                        

                        <div class="col-sm-3" style="margin-top:30px">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="item">
                                <a href="#">
                                  <img src="http://place-hold.it/190x125/000" alt="Banner Image">
                                  <div class="item-details"> 
                                    <h3 style="font-size:10px" class="item-title">
                                      Lights & Lightning
                                    </h3> 
                                  </div> 
                                </a>
                              </div> 
                            </div>
        
                            <div class="col-sm-12" style="padding-top:25px">
                              <div class="item">
                                <a href="#">
                                  <img src="http://place-hold.it/190x125/000" alt="Banner Image">
                                  <div class="item-details">
                                    <h3 style="font-size:10px;padding-left:0" class="item-title">
                                      Office Supplies
                                    </h3>
                                  </div> 
                                </a>
                              </div> 
                            </div>
                          </div> 
                        </div>

                        <div class="col-sm-9" style="margin-top:30px">
                          <div class="item">
                            <a href="#">
                              <img src="http://place-hold.it/325x140/000" alt="Banner Image"> 
                              <div class="item-details">
                                <h3 class="item-title" style="font-size:25px">
                                  Transportation
                                  <span style="font-size:16px">Logistic Services & Transportation Facilities</span>
                                </h3>
                              </div> 
                            </a>
                          </div> 
                        </div>
        

                      </div> 
                    </div>

                    <div class="col-sm-4" style="margin-top:30px;padding-right:0">
                      <div class="item">
                        <a href="#">
                          <img src="http://place-hold.it/215x310/000" alt="Banner Image">
                            <div class="item-details">
                              <h3 class="item-title text-center" style="margin-top:150px;font-size:27">
                                  Packaging
                                <span style="font-size:15px">
                                  Packaging Materials, Bottles & Waste Paper</span>
                              </h3> 
                            </div> 
                        </a>
                      </div> 
                    </div>
        


                    


                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div> --}}
    
  </div>
</section>
              
  <hr style="color:black">
<section class="blog-posts no-sidebar text-center">
<article class="post type-post format-video">
          <div class="entry-thumbnail">
            {{--  <div class="video-pop">  --}}
              {{--  <img src="{{ asset('uploads/product/8.jpg') }}"  --}}
              {{--  <a class="iframe" width="500" height="315" src="https://www.youtube.com/watch?v=qbf-a0CxbIo&t=1s" frameborder="0" allowfullscreen><i class="fa fa-play"></i></a>  --}}
              {{--  <iframe width="420" height="345" src="https://www.youtube.com/embed/qbf-a0CxbIo&t=1s" frameborder="0" allowfullscreen></iframe>  --}}
              {{--  <iframe class="embed-responsive-item" width="500" height="315" src="https://www.youtube.com/embed/qbf-a0CxbIo&t=1s" frameborder="0" allowfullscreen></iframe>
            </div>  --}}
            <div class="youtube-container" style="height:auto">
	            <div class="youtube-player" data-id="qbf-a0CxbIo">
                {{--  <iframe width="320" height="180" 
                  src="http://www.youtube.com/embed/iWZM7dNTokY">
                </iframe>  --}}
              </div>
            </div>
          </div>

          <div class="post-content media">

            <div class="entry-content media-body">
              <div class="entry-header">
                <h2 class="entry-title"><a href="#">pahalakita</a></h2><!-- /.entry-title -->
              </div><!-- /.entry-header -->

              <div class="meta-info">
                <span class="author"><i class="ti-user"></i><a href="#">John Doe</a></span>
                <span class="post-date"><i class="ti-calendar"></i><time datetime="2016-06-10">10 Jun, 2016</time></span>
                <span class="cat-links"><i class="ti-tag"></i><a href="#">WordPress</a>, <a href="#">Coding</a></span>
                <span class="comments-link"><i class="ti-comment"></i><a href="#">25 Comments</a></span>
              </div><!-- /.entry-meta -->

              <div class="description">
                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap. type and scrambled it to make a type specimen. </p>
              </div><!-- /.description -->

              {{--  <a href="#" class="btn">More <i class="ti-arrow-right"></i></a>  --}}
            </div><!-- /.entry-content -->
          </div><!-- /.content -->
        </article><!--/.post-->
</section>
  {{-- <section class="trending-03">
    <br>
      <div class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h2 class="panel-title" style="font-size:30px" align="center">
                Country and Their Request
              </h2>  
            </div>

              <div class="panel-body">
                <div id="related-slider" class="related-slider">        
                  @foreach($countriesRequest as $countryRequest)
                  <div class="panel-body"> 
                    <div class="widget widget_popular_post">
                      <div class="widget-details">
                        <article class="post type-post media">
                          <div class="entry-thumbnail media-left">
                            <a href="{{ route('index.filter', ['all', $countryRequest->country_id] ) }}"><img src="http://www.countryflags.io/{{ $countryRequest->sortname }}/shiny/64.png" alt="post"/></a>
                          </div>
      
                          <div class="post-content media-body"> 
                            <h3 class="entry-title"><a href="{{ route('index.filter', ['all', $countryRequest->country_id] ) }}">{{ $countryRequest->name }}</a></h3>
                            <div class="entry-meta">
                              <span class="posted-on"><i class="fa fa-flag"></i><a href="{{ route('index.filter', ['all', $countryRequest->country_id] ) }}">({{ $countryRequest->total }})</a></span>
                            </div>  
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                  @endforeach 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  </section> --}}

@if (session('login-message'))
  <script>
    swal("Welcome!", "Welcome at pahalakita.com. we hope today is more successful", "success");
  </script>
@endif

        
<script>
  $('.panel-a').scrollspy({ target: '#p-body' });

  $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>
<script>
(function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = JWTubeThumb(v[n].dataset.id);
        p.onclick = JWTubeIframe;
        v[n].appendChild(p);
    }
})();
 
function JWTubeThumb(id) {
    return '<img class="youtube-thumb" src="http://i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
}
 
function JWTubeIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "http://www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}
</script>