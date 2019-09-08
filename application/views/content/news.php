<!--Crypto code-->
<div class="row pt-2">
    <!--Crypto box-->
    <div class="col-2 col-sm-2 col-md-3 col-lg-2 py-1 pr-md-0 mb-md-1">
        <div class="d-inline-block d-md-block d-sm-none bg-primary text-white text-center breaking-caret py-1 px-2">
            <span class="fas fa-bolt" title="Breaking News"></span>
            <span class="d-none d-md-inline-block">CryptoCurrency</span>
        </div>
    </div>
    <!--Crypto content-->
    <div class="col-9 col-sm-10 col-md-9 col-lg-10 pl-1 pl-md-2">
        <div class="breaking-box pt-2 pb-1">
            <!--marque-->
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();" id="scrool">

            </marquee>
        </div>
    </div>
</div>
<!--end Crypto code-->

<!-- Start News code -->
<div class="row">
    <div class="col-12">
        <section class="row">
            <div class="col-12 pb-0 pb-md-3 pt-2 pr-md-1">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators carousel-top" id="indicators">
                        
                    </ol>

                    <div id="news" class="carousel-inner">

                    </div>
                </div>
                <!--navigation-->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--Start box-->
            <div class="col-12 col-md-12 pt-2 mb-3 mb-lg-4">
                <div class="row">
                    <!--box-->
                    <div class="col-md-6 col-sm-12 pb-1">
                        <div class="card card-custom overflow border-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="mr-5"><h5 class="text-primary"><?php echo $count ?> Total Wish Shared!</h5></div>
                            </div>
                            <a class="card-footer text-primary clearfix small z-1" href="<?php echo site_url('list') ?>#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    
                    <!--box-->
                    <div class="col-md-6 col-sm-12 pb-1">
                        <div class="card card-custom overflow border-success o-hidden h-100">
                            <div class="card-body">
                                <div class="mr-5"><h5 class="text-success"><?php echo $today ?> Today New Wish!</h5></div>
                            </div>
                            <a class="card-footer text-success clearfix small z-1" href="<?php echo site_url('recent') ?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end box-->
                </div>
            </div>
        </section>
    </div>
</div>
<!--end code-->