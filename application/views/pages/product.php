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
                            <div class="col-md-7">
                                <div class="shop-toolbar__right">
                                    <p class="product-pages">Showing Result  10 Among  72</p>
                                    <div class="product-view-mode ml--50 ml-xs--0">
                                        <a class="active" href="#" data-target="grid">
                                            <img src="dist/img/icons/grid.png" alt="Grid">
                                        </a>
                                        <a href="#" data-target="list">
                                            <img src="dist/img/icons/list.png" alt="Grid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php foreach ($barang as $brg): ?>

                    <div class="shop-products">
                        <div class="row">
                            <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                <div class="minuman_cu-product">
                                    <div class="product__inner">
                                        <div class="product__image">
                                            <figure class="product__image--holder">
                                                <img src="<?php echo base_url().'dist/img/products/' .$brg->img ?>" alt="Products"style = "height : 183px;width : 275px">
                                            </figure>
                                            <a href="product-details.html" class="product__overlay"></a>
                                            <div class="product__action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                    <i class="fa fa-eye"></i>
                                                    <span class="sr-only">Quick View</span>
                                                </a>
                                                <a href="wishlist.html" class="action-btn">
                                                    <i class="fa fa-heart-o"></i>
                                                    <span class="sr-only">Add to wishlist</span>
                                                </a>
                                                <a href="compare.html" class="action-btn">
                                                    <i class="fa fa-repeat"></i>
                                                    <span class="sr-only">Add To Compare</span>
                                                </a>
                                                <a href="cart.html" class="action-btn">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span class="sr-only">Add To Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__info">
                                            <div class="product__info--left">
                                                <h3 class="product__title">
                                                    <a href="product-details.html"><?php echo $brg->name ?></a>
                                                </h3>
                                                <div class="product__price">
                                                    <span class="sign">Rp.</span>
                                                    <span class="money"><?php echo $brg->price ?></span>
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
                                </div>
                            </div>
                        </div>       
                        <?php endforeach; ?>
                    <nav class="pagination-wrap">
                        <ul class="pagination">
                            <li><span class="page-number current">1</span></li>
                            <li><a href="#" class="page-number">2</a></li>
                            <li><span class="dot"></span></li>
                            <li><span class="dot"></span></li>
                            <li><span class="dot"></span></li>
                            <li><a href="#" class="page-number">16</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->