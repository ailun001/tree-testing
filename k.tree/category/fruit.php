<?php include './../header.php'?>

<section class="container content-section">
            <h2 class="heading">Fruit Tree</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Initial Apple</span>
                    <a href="./apple.php"><img class="shop-item-image" src="./../Images/Initial_apple.png" alt="Fruit plants" width="300" height="300"></a>

                    <div class="shop-item-details">
                        <span class="shop-item-price">$50</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <span class="shop-item-title">Nevelina Orange</span>
                    <a href="./orange.php"><img class="shop-item-image" src="./../Images/Navelina_Orange.png" alt="Fruit plants" width="300" height="300"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$28</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Meyer Lemon</span>
                    <a href="./lemon.php"><img class="shop-item-image" src="./../Images/Meyer_Lemon.png" alt="Fruit plants" width="300" height="300"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$15</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>

<?php include './../footer.php'?>