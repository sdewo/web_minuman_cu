<!-- Main Content Wrapper Start -->
<div  class="main-content-wrapper">
    <div class="shop-page-wrapper ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 order-lg-2 mb-md--50">
                    <div class="shop-products">
                        <div class="row">
                        <?php foreach($product as $row){ ?>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="payne-product">
                                <form method="post" action="<?php echo base_url();?>cart/add_cart" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="id" value="<?php echo $row['idProduct']; ?>" />
                                    <input type="hidden" name="nama" value="<?php echo $row['name']; ?>" />
                                    <input type="hidden" name="harga" value="<?php echo $row['price']; ?>" />
                                    <input type="hidden" name="gambar" value="<?php echo $row['img']; ?>" />
                                    <input type="hidden" name="qty" value="1" />
                                    <div class="product__inner">
                                        <div class="product__image">
                                            <figure class="product__image--holder">
                                                <img src="dist/img/products/<?php echo $row['img']; ?>" alt="Products" style = "height : 183px;width : 275px" >
                                            </figure>
                                            <div class="product__action">
                                                <a href="<?php echo base_url() ?>wishlist/addWishlist?id=<?php echo $row['idProduct']; ?>" class="action-btn">
                                                    <i class="fa fa-heart-o"></i>
                                                    <span class="sr-only">Add to wishlist</span>
                                                </a>
                                                <button type="submit" class="action-btn">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span class="sr-only">Add To Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product__info">
                                            <div class="product__info--left">
                                                <h3 class="product__title">
                                                    <span><?php echo $row['name']; ?></span>
                                                </h3>
                                                <div class="product__price">
                                                    <span class="sign">Rp.</span>
                                                    <span class="money"><?php echo number_format($row['price'],0,",","."); ?></span>
                                                </div>
                                            </div>
                                            <div class="product__info--right">
                                                <span class="product__rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 order-lg-1">
                    <aside class="shop-sidebar">
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Category</h3>
                            <ul class="widget-list category-list">
                                <li>
                                    <a href="product">
                                        <span class="category-title">All</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                                <?php 
                                    $cart = $this->cart->contents();
                                    foreach($category as $row){ 
                                ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>product?id=<?php echo $row['idCategory']; ?>">
                                            <span class="category-title"><?php echo $row['nama_kategori'] ?></span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Cart</h3>
                            <ul class="widget-list brand-list">
                                <?php
                                    foreach ($cart as $item){
                                ?>
                                <li>
                                    <a href="shop.html">
                                        <span><?php echo $item['name']; ?></span>
                                        <strong class="color--red font-weight-medium"><?php echo $item['qty']; ?></strong>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>