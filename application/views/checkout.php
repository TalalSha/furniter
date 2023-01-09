<!doctype html>
<html>
<head>
<title>Checkout - Withington Furniture</title>
<?php require_once('includes/header.php');?>


<section class="subBanner" id="aboutBanner">
    <div class="container relative _inner regular text-center">
        <h1 class="mx_bold">Checkout</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li><a href="shopping-cart.php">Shopping Cart</a></li>
            <li>/</li>
            <li>Checkout</li>
        </ul>
    </div>
</section><!-- subBanner -->


<section id="checkOut" class="sec_marg">
    <div class="container regular">
        <div class="row relative">
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 LSide pull-right">
                <h4 class="color">Your Order</h4>
                <ul class="orderLst text-center clearfix">
                    <li>
                        <div class="inner">
                            <div class="ico">
                                <a href="?"><img src="images/items/1.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Green Office Chair</a></h4>
                            </div>
                            <div class="qtyBtn">
                                <input type="button" value="-" class="qtyminus readBtn">
                                <input type="button" name="quantity" value="1" class="qty">
                                <input type="button" value="+" class="qtyplus readBtn">
                            </div>
                            <div class="price itmPrice">$ 270.00</div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <div class="ico">
                                <a href="?"><img src="images/items/2.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Cover Wood Table</a></h4>
                            </div>
                            <div class="qtyBtn">
                                <input type="button" value="-" class="qtyminus readBtn">
                                <input type="button" name="quantity" value="1" class="qty">
                                <input type="button" value="+" class="qtyplus readBtn">
                            </div>
                            <div class="price itmPrice">$ 270.00</div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <div class="ico">
                                <a href="?"><img src="images/items/3.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Study Wood Chair</a></h4>
                            </div>
                            <div class="qtyBtn">
                                <input type="button" value="-" class="qtyminus readBtn">
                                <input type="button" name="quantity" value="1" class="qty">
                                <input type="button" value="+" class="qtyplus readBtn">
                            </div>
                            <div class="price itmPrice">$ 270.00</div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <div class="ico">
                                <a href="?"><img src="images/items/4.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Corona Classic Wood Table</a></h4>
                            </div>
                            <div class="qtyBtn">
                                <input type="button" value="-" class="qtyminus readBtn">
                                <input type="button" name="quantity" value="1" class="qty">
                                <input type="button" value="+" class="qtyplus readBtn">
                            </div>
                            <div class="price itmPrice">$ 270.00</div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <div class="ico">
                                <a href="?"><img src="images/items/5.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Arcorn Red Sofa</a></h4>
                            </div>
                            <div class="qtyBtn">
                                <input type="button" value="-" class="qtyminus readBtn">
                                <input type="button" name="quantity" value="1" class="qty">
                                <input type="button" value="+" class="qtyplus readBtn">
                            </div>
                            <div class="price itmPrice">$ 270.00</div>
                        </div>
                    </li>
                </ul>
                <div class="orderTable">
                    <table>
                        <tbody><tr>
                            <td>Subtotal:</td>
                            <td class="price">$ 4363.64</td>
                        </tr>
                        <tr>
                            <td>Indication shipping:</td>
                            <td class="price"><span class="color">Free</span></td>
                        </tr>
                        <tr>
                            <td class="bold">Total:</td>
                            <td class="price">$ 4363.64</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 RSide">
                <form class="" id="" action="test.php" method="post">
                    <h4 class="color">Customer Information</h4>
                    <div class="row">
                        <div class="txtBoxGrp col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Email</label>
                            <input class="txtBox" id="email" name="email" type="text">
                        </div>
                    </div>
                    <h4 class="color shippingAddress">Shipping Address</h4>
                    <div class="row">
                        <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-6 col-xx-12">
                            <label>First Name</label>
                            <input class="txtBox" id="fname" name="fname" type="text">
                        </div>
                        <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-6 col-xx-12">
                            <label>Last Name</label>
                            <input class="txtBox" id="lname" name="lname" type="text">
                        </div>
                        <div class="txtBoxGrp col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Company</label>
                            <input class="txtBox" id="company" name="company" type="text">
                        </div>
                        <div class="txtBoxGrp col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <label>Address</label>
                            <input class="txtBox" id="address" name="address" type="text">
                        </div>
                        <div class="txtBoxGrp col-lg-4 col-md-4 col-sm-12 col-xs-6 col-xx-12">
                            <label>Apt</label>
                            <input class="txtBox" id="apt" name="apt" type="text">
                        </div>
                        <div class="txtBoxGrp col-lg-12 col-md-12 col-sm-12 col-xs-6 col-xx-12">
                            <label>City</label>
                            <input class="txtBox" id="city" name="city" type="text">
                        </div>
                        <div class="txtBoxGrp col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <label>Country</label>
                            <select class="txtBox">
                                <option value="0">&nbsp;</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                            </select>
                        </div>
                        <div class="txtBoxGrp col-lg-4 col-md-7 col-sm-12 col-xs-6 col-xx-12">
                            <label>Province</label>
                            <select class="txtBox">
                                <option value="0">&nbsp;</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                            </select>
                        </div>
                        <div class="txtBoxGrp col-lg-3 col-md-5 col-sm-12 col-xs-6 col-xx-12">
                            <label>Postal Code</label>
                            <input class="txtBox" id="postalcode" name="postalcode" type="text">
                        </div>
                        <div class="txtBoxGrp col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Phone</label>
                            <input class="txtBox" id="phone" name="phone" type="text">
                        </div>
                    </div>
                    <h4 class="color">Payment Method</h4>
                    <div class="creditCard">
                        <div class="head">
                            <h5 class="color pull-left">Credit Card</h5>
                            <ul class="pull-right bold">
                                <li><img src="images/card1.svg" alt=""></li>
                                <li><img src="images/card2.svg" alt=""></li>
                                <li><img src="images/card3.svg" alt=""></li>
                                <li><img src="images/card4.svg" alt=""></li>
                                <li>and more..</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="txtBoxGrp col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Card Number</label>
                                <input class="txtBox" id="cardnumber" name="cardnumber" type="text">
                            </div>
                            <div class="txtBoxGrp col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <label>Card Holder</label>
                                <input class="txtBox" id="cardholder" name="cardholder" type="text">
                            </div>
                            <div class="txtBoxGrp col-lg-3 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                <label>Expiry (MM/YY)</label>
                                <input class="txtBox" id="datepicker" name="expiry" type="text">
                            </div>
                            <div class="txtBoxGrp col-lg-3 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                <label>CVC ?</label>
                                <input class="txtBox" id="cvc" name="cvc" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="text-center bTn">
                        <button type="submit" value="" class="readBtn">Complete Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- checkOut -->


<?php require_once('includes/footer.php');?>