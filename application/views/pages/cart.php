<!-- <?php
	if ($cart = $this->cart->contents())
		{
 ?>
<h1>ada data</h1>
<?php
		}
	else
		{
			echo "<h3>Keranjang Belanja masih kosong</h3>";	
		}	
?> -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner ptb--80 pt-md--40 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-md--50">
                    <form action="<?php echo base_url()?>order/ubah_cart" method="POST" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                                <th class="text-left">Product</th>
                                                <th>price</th>
                                                <th>quantity</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $total = 0;
                                                foreach ($cart as $item){
                                                $jumlah = $item['price'] * $item['qty'];
                                                $total = $total + $item['subtotal'];
                                            ?>
                                            <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
                                            <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
                                            <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
                                            <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
                                            <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
                                            <input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
                                            <tr>
                                                <td class="product-remove text-left"><a href="<?php echo base_url()?>order/hapus/<?php echo $item['rowid'];?>"><i class="flaticon-cross"></i></a></td>
                                                <td class="product-thumbnail text-left">
                                                    <img src="<?php echo base_url() ?>dist/img/products/<?php echo $item['gambar'] ?>" alt="Product Thumnail" style="height:75px; width:75px;">
                                                </td>
                                                <td class="product-name text-left wide-column">
                                                    <h3>
                                                        <a href="product-details.html"><?php echo $item['name']; ?></a>
                                                    </h3>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money">Rp. <?php echo number_format($item['price'], 0,",","."); ?></span>
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity">
                                                        <input type="number" class="quantity-input" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty']; ?>" min="1">
                                                    </div>
                                                </td>
                                                <td class="product-total-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money">Rp. <?php echo number_format($jumlah, 0,",","."); ?></span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>  
                            </div>
                        </div>
                        <div class="row no-gutters border-top pt--20 mt--20">
                            <div class="col-sm-2">
                                <div class="coupon">
                                    <a href="<?php echo base_url('product'); ?>" class="cart-form__btn">Belanja Lagi</a>
                                </div>
                            </div>
                            <div class="col-sm-10 text-sm-right">
                                <a data-toggle="modal" data-target="#myModal" class="cart-form__btn">Clear Cart</a>
                                <button type="submit" class="cart-form__btn">Update Cart</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="cart-collaterals">
                        <div class="cart-totals">
                            <h5 class="font-size-14 font-bold mb--15">Cart totals</h5>
                            <div class="cart-calculator">
                                <div class="cart-calculator__item">
                                    <div class="cart-calculator__item--head">
                                        <span>Subtotal</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span class="money">Rp. <?php echo number_format($total, 0,",","."); ?></span>
                                    </div>
                                </div>
                                <div class="cart-calculator__item">
                                    <div class="cart-calculator__item--head">
                                        <span>Shipping</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span>Flat rate: Rp. 10.000</span>
                                    </div>
                                </div>
                                <div class="cart-calculator__item order-total">
                                    <div class="cart-calculator__item--head">
                                        <span>Total</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span class="product-price-wrapper">
                                            <span class="money">Rp. <?php echo number_format($total+10000, 0,",","."); ?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url()?>order/check_out" class="btn btn-size-md btn-shape-square btn-fullwidth">
                            Proceed To Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->

<!-- Modal Penilai -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
      	<form method="post" action="<?php echo base_url()?>order/hapus/all">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
			Anda yakin mau mengosongkan Shopping Cart?
            
        </div>
        <div class="modal-footer">
          <button type="button" class="cart-form__btn" data-dismiss="modal">Tidak</button>
          <button type="submit" class="cart-form__btn">Ya</button>
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  <!--End Modal-->
