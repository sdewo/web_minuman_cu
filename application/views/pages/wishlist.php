<!-- Breadcrumb area Start -->
<section class="page-title-area bg-color" data-bg-color="#f4f4f4">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Wishlist</h1>
                        <ul class="breadcrumb">
                            <li><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="current"><span>Wishlist</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="page-content-inner ptb--80 ptb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-content table-responsive">
                                <table class="table table-style-2 wishlist-table text-center">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th class="text-left">Product</th>
                                            <th>Stock Status</th>
                                            <th>Price</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($wishlist as $row){ ?>
                                        <tr>
                                            <td class="product-remove text-left"><a href="<?php echo base_url() ?>wishlist/deleteWishlist?id=<?php echo $row['idWishlist']; ?>"><i
                                                        class="flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="dist/img/products/<?php echo $row['img']; ?>" alt="Products" style = "height : 70px;width : 88px" >
                                                <!-- <img src="dist/img/products/product-11-70x88.jpg"
                                                    alt="Product Thumnail"> -->
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html"><?php echo $row['name']; ?></a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                                In Stock
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">Rp. <?php echo number_format($row['price'],0,",",".");?></span>
                                                </span>
                                            </td>
                                            <form method="post" action="<?php echo base_url();?>wishlist/add_cart" method="post" accept-charset="utf-8">
                                                <input type="hidden" name="id" value="<?php echo $row['idProduct']; ?>" />
                                                <input type="hidden" name="nama" value="<?php echo $row['name']; ?>" />
                                                <input type="hidden" name="harga" value="<?php echo $row['price']; ?>" />
                                                <input type="hidden" name="gambar" value="<?php echo $row['img']; ?>" />
                                                <input type="hidden" name="qty" value="1" />

                                                <td class="product-action-btn">
                                                    <button type="submit" class="btn">Add to cart</button>
                                                </td>
                                            </form>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->