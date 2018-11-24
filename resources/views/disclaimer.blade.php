@extends('dashboard')
@section('content')
<style>
p, .description {
    font-size: 25px;
    line-height: 23px;
</style>
<br>
<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Disclaimer :</h3><!-- /.page-title -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->

  <section class="shop-contents">    
      <div class="container">
        <div class="product-details">
          <div class="product-tabs">
            <div class="tabs">
              <div role="tabpanel">

                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="true">Indonesia</a></li>
                  <li role="presentation" class=""><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" aria-expanded="false">English</a></li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                    <p class="description">
                      <strong>
                      www.pahalakita.com adalah sebuah marketplace yang menghubungkan penjual dan pembeli untuk transaksi dalam negeri dan eksportir dan importir untuk transaksi international. Setelah berkenalan melalui web kami, maka penjual dan pembeli akan berhubungan dan berkomunikasi langsung untuk follow up transaksi bisnis dan kami dari pihak www.pahalakita.com tidak terlibat dalam komunikasi, follow up & transaksi bisnis tersebut.
                      </strong>
                      <br><br>
                      Perusahaan tidak bertanggung jawab atas kegagalan atau transaksi yang merugikan & membahayakan, yang disebabkan karena semua transaksi dilakukan secara langsung oleh pembeli dan penjual atau eksportir dan importir
                    </p><!-- /.description -->                    
                  </div><!-- /.tab-pane -->

                  <div role="tabpanel" class="tab-pane fade" id="tab2">
                    <p class="description">
                      <strong>
                        www.pahalakita.com is a marketplace that connects sellers and buyers for domestic transactions or exporters and importers for international transactions. After getting acquainted through our website, sellers and buyers will relate and communicate directly to follow up business transactions and we from www.pahalakita.com are not involved in the communication, follow-up & business transactions.
                      </strong>
                      <br><br>
                        The company is not responsible for failures or transactions that are harmful, which is caused by all transactions carried out directly by buyers and sellers or exporters and importers
                    </p>

                  </div><!-- /.tab-pane -->

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.tab-panel -->
            </div><!-- /.tabs -->
          </div><!-- /.product-tabs --> 
        </div><!-- /.product-details -->
      </div><!-- /.container -->  
  </section><!-- /.shop-contents -->

@endsection