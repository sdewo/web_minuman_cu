<!-- Breadcrumb area Start -->
<section class="page-title-area bg-color" data-bg-color="#f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Checkout</h1>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--80 pt-md--60 pb--72 pb-md--60">
        <div class="container">
            <div class="row">
                <!-- Checkout Area Start -->  
                <div class="col-lg-6">
                    <div class="checkout-title mt--10">
                        <h2>Billing Details</h2>
                    </div>
                    <div class="checkout-form">
                        <form action="<?php echo base_url()?>checkout/proses_order" method="post" name="frmCO" id="frmCO" class="payment-form">
                            <div class="form-row mb--20">
                                <div class="form__group col-md-6 mb-sm--30">
                                    <label for="billing_fname" class="form__label">First Name  <span class="required">*</span></label>
                                    <input type="text" name="billing_fname" id="billing_fname" class="form__input" required>
                                </div>
                                <div class="form__group col-md-6">
                                    <label for="billing_lname" class="form__label">Last Name  <span class="required">*</span></label>
                                    <input type="text" name="billing_lname" id="billing_lname" class="form__input" required>
                                </div>
                            </div>
                            <div class="form-row mb--20">
                                <div class="form__group col-12">
                                    <label for="billing_streetAddress" class="form__label">Street Address <span class="required">*</span></label>

                                    <input type="text" name="billing_streetAddress" id="billing_streetAddress" class="form__input mb--30" placeholder="House number and street name" required>

                                    <input type="text" name="billing_apartment" id="billing_apartment" class="form__input" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                            </div>
                            
                            <div class="form-row mb--20">
                                <div class="form__group col-12">
                                    <label for="billing_phone" class="form__label">Phone <span class="required">*</span></label>
                                    <input type="text" name="billing_phone" id="billing_phone" class="form__input" required>
                                </div>
                            </div>
                            <div class="form-row mb--20">
                                <div class="form__group col-12">
                                    <label for="billing_email" class="form__label">Email Address  <span class="required">*</span></label>
                                    <input type="email" name="billing_email" id="billing_email" class="form__input" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form__group col-12">
                                    <label for="orderNotes" class="form__label">Order Notes</label>
                                    <textarea class="form__input form__input--textarea" id="orderNotes" name="orderNotes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                    <div class="order-details">
                        <div class="checkout-title mt--10">
                            <h2>Your Order</h2>
                        </div>
                        <div class="table-content table-responsive mb--30">
                            <table class="table order-table order-table-2">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $cart = $this->cart->contents();
                                $total = 0;
                                foreach ($cart as $item){
                                    $jumlah = $item['price'] * $item['qty'];
                                    $total = $total + $item['subtotal'];
                                ?>
                                    <tr>
                                        <th><?php echo $item['name']; ?> 
                                            <strong><span>&#10005;</span>&nbsp;<?php echo $item['qty']; ?></strong>
                                        </th>
                                        <td class="text-right">Rp. <?php echo number_format($jumlah, 0,",","."); ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td class="text-right"><span class="order-total-ammount">Rp. <?php echo number_format($total, 0,",","."); ?></span></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="checkout-payment">
                                <div class="payment-group mt--20">
                                    <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                    <button type="submit" class="btn btn-size-md btn-fullwidth">Place Order</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Checkout Area End -->
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->