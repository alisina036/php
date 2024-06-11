<!DOCTYPE html>
<html>
  <head>
    <title>sentir bon</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  </head>
  <body>
    <nav class="gridLayout">
      <div class="header"></div>
      <div class="logo"><img class="logo" id="logo" src="images/official logo.png" alt="LOGO" /></div>
      <button class="box" id="box-1"><a href="official site.html"><img src="images/icons8-shop-50.png" alt="SHOP"></button></a>
      <button class="box" id="box-2"><img src="images/icons8-perfume-bottle-50.png" alt="PERFUME"></button>
      <button class="box" id="box-3"><img src="images/icons8-info-50.png" alt="INFO"></button>
      <button class="box" id="box-4"><img src="images/icons8-footer-50.png" alt="FOOTER"></button>
      <button class="box" id="box-5"><img src="images/icons8-bag-50.png" alt="SHOPPINGBAG"></button>
      <button class="box" id="box-6"><img src="images/icons8-user-50.png" alt="ACCOUNT"></button>
    </nav>
    <div class="gridLayout">
      <div class="parfum" id="parfum-1"><img src="images/cristian dior.png" alt="" style="rotate: -45deg; margin-left: 0px; margin-top: 20px;" ></div>
      <div class="parfum" id="parfum-2"><img src="images/montale.png" alt="" style="rotate: -45deg; margin-left: 0px; margin-top: 0px;" ></div>
      <div class="parfum" id="parfum-3"><img src="images/lv.png" alt="" style="rotate: -45deg; margin-left: 5px; margin-top: 15px;"></div>
      <div class="parfum" id="parfum-4"></div>
    </div>
  </body>
  <style>
    nav{
      position: sticky;
      top: 0;
    }
    body{
      background-color: black;
    }
    .gridLayout {
      display: grid;
      grid-template-columns: 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5%;
      grid-auto-rows: 100px;
    }
    .logo{
        grid-column: 8/14;
        grid-row: 1;
        text-align: center;
        width: auto;
        height: 100%;
        margin-top: 25px;
        position: sticky;
    }
    #logo{
        filter: drop-shadow(0px 0px 5px black);
        transition: 1s;
    }
    #logo:hover{
      filter: drop-shadow(20px 20px 5px blue);
      transition: 1s;
    }
    .box{
      width: 100px;
      height: 100px;
      border-radius: 25%;
      margin-top: 50px;
      transition: 1s;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0.5);
      background-color: rgba(0, 0, 0, 0.5);
      border-width: 4px;
      grid-row: 1;
      filter: drop-shadow(0px 0px 5px black);
    }
    #box-1{
      grid-column: 1/21;
      margin-left: 3%;
      position: sticky;
    }
    #box-2{
      grid-column: 1/21;
      margin-left: 9%;
      position: sticky;
    }
    #box-3{
      grid-column: 1/21;
      margin-left: 15%;
      position: sticky;
    }
    #box-4{
      grid-column: 1/21;
      margin-left: 21%;
      position: sticky;
    }
    #box-5{
      grid-column: 1/21;
      margin-left: 80%;
      position: sticky;
    }
    #box-6{
      grid-column: 1/21;
      margin-left: 90%;
      position: sticky;
    }
    .box:hover{
      background-color: rgba(0, 0, 255, 0.5);
      border-color: blue;
      border-radius: 50%;
      filter: drop-shadow(20px 20px 5px blue);
      margin-top: 25px;
    }
    .header{
      grid-row: 1;
      grid-column: 1/21;
      width: 100%;
      height: 200px;
      background-image: linear-gradient(to bottom, black, white, black);
      border-radius: 10px;
      border-color: black;
      border-width: 5px;
      transition: 1s;
      position: sticky;
    }
    .parfum{
      margin-left: 25%;
      width: 100px;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.5);
      border-color: white;
      border-style: solid;
      border-width: 5px;
      grid-row: 3;
      border-radius: 0px 0px;
      rotate: 45deg;
      transition: 1s;
    }
    .parfum:hover{
      background-color: rgba(0, 0, 255, 0.5);
      border-color: rgba(0, 0, 255, 0.5);
      border-radius: 50px;
      transition: 1s;
    }
    #parfum-1{
      grid-column: 10;
      border-radius: 25px 0px;
    }
    #parfum-1:hover{
      margin-top: -50%;
      filter: drop-shadow(20px 20px 5px blue);
    }
    #parfum-2{
      grid-column: 9;
      grid-row: 4;
      margin-left: 22%;
      margin-top: -15%;
      border-radius: 0px 25px;
    }
    #parfum-2:hover{
      margin-left: -28%;
      filter: drop-shadow(20px -20px 5px blue);
    }
    #parfum-3{
      grid-column: 11;
      grid-row: 4;
      margin-left: 28%;
      margin-top: -15%;
      border-radius: 0px 25px;
    }
    #parfum-3:hover{
      margin-left: 78%;
      filter: drop-shadow(-20px 20px 5px blue);
    }
    #parfum-4{
      grid-column: 10;
      grid-row: 5;
      margin-top: -30%;
      border-radius: 25px 0px;
    }
    #parfum-4:hover{
      margin-top: 20%;
      filter: drop-shadow(-20px -20px 5px blue);
    }
  </style>
</html>
