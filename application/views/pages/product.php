<!-- Main Content Wrapper Start -->
<div  class="main-content-wrapper">
    <div class="shop-page-wrapper ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-toolbar mb--50">
                        <div class="row align-items-center">
                            <div class="col-md-5 mb-sm--30 mb-xs--10">
                                <div class="shop-toolbar__left">
                                    <div class="product-ordering">
                                        <select class="product-ordering__select nice-select">
                                            <option value="0">Default Sorting</option>
                                            <option value="1">Relevance</option>
                                            <option value="2">Name, A to Z</option>
                                            <option value="3">Name, Z to A</option>
                                            <option value="4">Price, low to high</option>
                                            <option value="5">Price, high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-products">
                        <div class="row">
                        <?php foreach($product as $row){ ?>
                            <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                <div class="payne-product">
                                    <div class="product__inner">
                                        <form method="post" action="<?php echo base_url();?>cart/add_cart" method="post" accept-charset="utf-8">
                                            <div class="product__image">
                                                <figure class="product__image--holder">
                                                    <img src="<?php echo base_url() ?>dist/img/products/<?php echo $row->img; ?>" alt="Products"style = "height : 183px;width : 275px">
                                                </figure>
                                                <a href="product-details.html" class="product__overlay"></a>
                                            </div>
                                            <div class="product__info">
                                                <div class="product__info--left">
                                                    <h3 class="product__title">
                                                        <a href="product-details.html"><?php echo $row->name; ?></a>
                                                    </h3>
                                                    <div class="product__price">
                                                        <span class="sign">Rp.</span>
                                                        <span class="money"><?php echo $row->price; ?></span>
                                                    </div>
                                                </div>
                                                
                                                <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
                                                <input type="hidden" name="nama" value="<?php echo $row->name; ?>" />
                                                <input type="hidden" name="harga" value="<?php echo $row->price; ?>" />
                                                <input type="hidden" name="gambar" value="<?php echo $row->img; ?>" />
                                                <input type="hidden" name="qty" value="1" />
                                            
                                                <button type="submit" class="add_cart btn btn-size-sm">Add To Cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->