<div>
    
</div>
<div class="topNav">
    <div>
        <h3 style="color: black;">
            <img src="{{ url('storage/images/logo.png') }}" alt="" class="logo">
        </h3>
    </div>
    <div class="searchArea">
        <form action="./shop/process.php" method="POST">
        <input type="text" id="search" name="search" placeholder="Search products">
        <input type="button" id="searchButton" value="SEARCH" name="search">
        <span id="response"></span>
        </form>
    </div>
    <div class="flexNav">
        <div>
        <a id="navs" href="/login/"> Login</a>
        </div>
        <div>
            <a id="navs" href="/cart/">Cart(<?php 
           if (!empty($_SESSION['cart'])) {
               echo count($_SESSION['cart']);
           }else {
               echo 0;
           } ?>)</a>
        </div>
        <div>
            <a id="navs" href="/">IGIVEAFRICA</a>
        </div>
    </div>
</div>