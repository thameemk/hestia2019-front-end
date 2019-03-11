<html>

<head>
  <title>Hestia19</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/img/hestia-icon.png">
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<!-- <script type="text/javascript">
  function initmask() {
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if(w < 960){

      var x = document.getElementById("event-img");
     x.setAttribute("src", "assets/img/WEB_DENOVO_H.jpg");
    //  var y = document.getElementById("event-mask");
    // y.setAttribute("src", "assets/img/mobile_phone_front_end.png");
    }
    
}
   </script> -->
<style>
  @media screen and (max-width: 767px){
    #event-mask{
      -webkit-transform: rotateZ(90deg);
    -moz-transform: rotateZ(90deg);
    -ms-transform: rotateZ(90deg);
    -o-transform: rotateZ(90deg);
    transform: rotateZ(90deg);
    }
    .event_block{
      padding-top: 70%;
    }

  }
  
  *{
    font-family: 'Pathway Gothic One', sans-serif;
  }
  .btn-custom{
    background-color: midnightblue;
    color: white;
    margin-left: 40%;
    margin-bottom: 10px;
  }
  .btn-custom:hover{
    color: grey;
  }
  body{
    overflow-x: hidden;
  }
 @media screen and (min-width: 1366px) {
  /* #img-event{
  	    overflow: hidden;
       padding: 0px;
       height: 100%;
       width: 100%;
     }
     #event-mask{
       width: 100%;
       height: 100%;
     } */
     
     #event-img{
       /* padding-right: 50px; */
       /* padding-top: 120px; */
       height: 100%;
       margin-left: -160px;
       margin-top: 35px;
     }
  #img-cont{
   		height : 540px;
   		overflow-y: scroll

     }
     body{
       overflow: hidden;
     }
     .space{
     margin-right: 30px;
   }
   /* #event-mask{
      height:100vh;
     }
     #event-mask-img{
      height:90vh;
     } */

}

@media screen and (min-width: 320px) and (max-width: 767px) {
  /* #img-event{
  	    min-height:400px;
        overflow: hidden;
        height: 100vh;

     } */
     body{
       /* overflow-x: hidden; */
       width: 100vw;
     }
     #event-mask{
      margin-top: -12px;
      max-width: 100vw;
     }
     #event-img{
       max-width: 100vw;
     }
     /* #event-mask-img{
      height:100%;
      max-height: 200px;
      background-position: center;
     } */
  #img-cont{
   		min-height : 400px;
      
   	}


}
@media screen and (min-width: 768px) and (max-width: 1365px){
  #event-img{
       /* padding-right: 50px; */
       /* padding-top: 120px; */
       height: 100%;
       margin-left: -110px;
       margin-top: 20px;
     }
     #event-mask{
       height: 100vh;
     }
  #img-cont{
   		height : 540px;
   		overflow-y: scroll

     }
     body{
       overflow: hidden;
     }
     .space{
     margin-right: 30px;
   }

}
@media screen and (width: 1280px){
  #event-mask{
       height: 100%;
     }
     #event-img{
       
      margin-top: 0px;
     }
}
@media screen and (height: 1366px){
  #event-mask{
       height: 45vh;
     }
     #event-img{
       
      margin-top: 0px;
     }
}
@media screen and (height: 1024px){
  #event-mask{
       height: 55vh;
     }
     #event-img{
       
      margin-top: 0px;
     }
}
@media screen and (height: 1280px){
  #event-mask{
       height: 50vh;
     }
     #event-img{
       
      margin-top: 0px;
     }
}
</style>
<body>
  <section>
    <div class="container-fluid p-0 m-0 py-lg-3 py-md-0 ">
      <!-- <div class="card"> -->
        <div class="row ">
          <!-- <div class="col-md-5 col-sm-12" style="position: fixed;" id="img-event">
            <div id="event-mask-img" style="background-image: url('assets/img/WEB_DENOVO_H.jpg'); background-size: cover; background-position: right; background-repeat: no-repeat;  width:100%;  position: absolute;z-index:0;"></div>
            <div id="event-mask" src="" style=" background-image: url('assets/img/mask technical events short  crcted.png'); background-size: cover; background-position: right; background-repeat: no-repeat;   "></div>
            </div>
          </div> -->
          <div class="col-md-5 col-sm-12">
          <img src="assets/img/web.jpg" id="event-img" style="position: absolute; width:100%; z-index:0;" alt="">
          <img src="assets/img/event_mask.png" id="event-mask" style="position: absolute; width:100%; z-index:1; " alt="">
            <!-- <div style="background-image: url('assets/img/WEB_DENOVO_H.jpg'); background-size: cover; background-position: right; background-repeat: no-repeat;  width:100%;  position: absolute;z-index:0;"></div> -->
            <!-- <div style="background-image: url('assets/img/event-mask1.png'); background-size: cover; background-position: right; background-repeat: no-repeat;  width:100%;  position: absolute;z-index:1;"></div> -->
          </div>
          <div class="col-md-7 px-3 col-sm-12 event_block"  style="z-index: 1; display: block;  " >
            <div class="card-block px-3" style="margin-top: 5%; overflow: scroll !important;" id="img-cont">
              <h2 class="card-title" style="font-weight: 900; letter-spacing: 3px;max-height: 100vh;">EVENT 1</h2>
              <p class="card-text text-justify text-muted space" style="font-size: 1.2em;" >Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, has in doming impedit, quas cetero patrioque cu mei. Maluisset laboramus disputando eum id, has maiorum erroribus vulputate no. Vis solum labore reformidans eu. An sit ubique posidonium.

                  Modo hendrerit an mei. His ad commune appetere. No quo latine sanctus partiendo, vix platonem dissentiunt id. Nam dolor tation ne, ius at bonorum facilisis percipitur, fuisset forensibus deterruisset qui id. Vix habemus democritum ne, vix at laudem appellantur definitiones.

                  Usu ut malis dolorum. Est menandri expetenda iracundia id. Quidam eripuit aliquando sit an, vim meis singulis ut. In usu modus malis invenire, prima ridens ex est. Eum eu verear dolorem, nulla expetendis id usu.
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, has in doming impedit, quas cetero patrioque cu mei. Maluisset laboramus disputando eum id, has maiorum erroribus vulputate no. Vis solum labore reformidans eu. An sit ubique posidonium.

                  Modo hendrerit an mei. His ad commune appetere. No quo latine sanctus partiendo, vix platonem dissentiunt id. Nam dolor tation ne, ius at bonorum facilisis percipitur, fuisset forensibus deterruisset qui id. Vix habemus democritum ne, vix at laudem appellantur definitiones.

                  Usu ut malis dolorum. Est menandri expetenda iracundia id. Quidam eripuit aliquando sit an, vim meis singulis ut. In usu modus malis invenire, prima ridens ex est. Eum eu verear dolorem, nulla expetendis id usu.

                  Natum oporteat disputando id sea, duo illud tibique accumsan et. Volutpat definiebas ea per, per altera debitis contentiones et. Dicunt albucius vix in. Pro et civibus apeirian iracundia. Quando forensibus pro ut, case theophrastus nam eu.

                  Vix wisi homero ea, cum iusto persius mnesarchum te. Cu eos regione reformidans, purto omnium accusamus pri in, per cibo iuvaret ut. Sea ludus persius ea, ei ridens fabulas usu, soluta nominavi molestie pro ut. Altera noster has ei. In pro habeo oportere intellegebat, probo melius consetetur eu vel, an summo choro antiopam mel.
                  Lorem ipsum dolor sit amet, has in doming impedit, quas cetero patrioque cu mei. Maluisset laboramus disputando eum id, has maiorum erroribus vulputate no. Vis solum labore reformidans eu. An sit ubique posidonium.

                  Modo hendrerit an mei. His ad commune appetere. No quo latine sanctus partiendo, vix platonem dissentiunt id. Nam dolor tation ne, ius at bonorum facilisis percipitur, fuisset forensibus deterruisset qui id. Vix habemus democritum ne, vix at laudem appellantur definitiones.

                  Usu ut malis dolorum. Est menandri expetenda iracundia id. Quidam eripuit aliquando sit an, vim meis singulis ut. In usu modus malis invenire, prima ridens ex est. Eum eu verear dolorem, nulla expetendis id usu.

                  Natum oporteat disputando id sea, duo illud tibique accumsan et. Volutpat definiebas ea per, per altera debitis contentiones et. Dicunt albucius vix in. Pro et civibus apeirian iracundia. Quando forensibus pro ut, case theophrastus nam eu.

                  Vix wisi homero ea, cum iusto persius mnesarchum te. Cu eos regione reformidans, purto omnium accusamus pri in, per cibo iuvaret ut. Sea ludus persius ea, ei ridens fabulas usu, soluta nominavi molestie pro ut. Altera noster has ei. In pro habeo oportere intellegebat, probo melius consetetur eu vel, an summo choro antiopam mel.

                </p>
              <a href="#" class="btn btn-custom">BUY TICKET&nbsp;<i class="fas fa-shopping-cart"></i></a>
            </div>
          </div>
        </div>
      <!-- </div> -->
    </div>
  </section>
</body>

</html>
