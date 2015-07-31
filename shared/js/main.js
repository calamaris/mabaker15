$(document).ready(function(){
  // window.localStorage.setItem('lang',0);
  checaIdioma ();
  cambiaIdioma ();
	calcula();
  intervalManager(true, mueveAuto, tiempo);
  resposiveScript();
	var s = skrollr.init();
  
  preload([
           'shared/img/miniaturas/galletas.png',
           'shared/img/miniaturas/panaderia.png',
           'shared/img/miniaturas/pastel.png',
           'shared/img/miniaturas/bombon.png',
           'shared/img/miniaturas/gelatina.png',
           'shared/img/miniaturas/fondant.png',
           'shared/img/miniaturas/chocolate.png',
           'shared/img/miniaturas/productos.png',
           'shared/img/bgSubmenu.jpg',
           'shared/img/MaBakerLogo.png',
           'shared/img/patronComida.png',
           'shared/img/plecaHolan.png'
       ]);
  if (typeof producto != "undefined") {
    prodInit();
  };
});

var rutaResp="url(shared/img/slider/slideMovil/";
var rutaNorm="url(shared/img/slider/";
function responsiveSlider () {

  if ($("body").width()<=768) {
    // console.log("<--------> se activa el responsive");
    // console.log(slidesTotales,"<-- slides totales");}
      $(".slide").css("background-image","");
      for (var i=0; i<=slidesTotales; i++){
        // console.log(i,"hola")
        
        var ruta=$("#slide"+Number(i+1)).css("background-image");
        //console.log(ruta);
        var imgName=ruta.substr(ruta.indexOf("slider")+7);
        //console.log(imgName);
        var nuevaRuta=rutaResp+imgName;
        console.log(nuevaRuta);
        $("#slide"+(i+1)).css("background-image",nuevaRuta);
      }
  }else{
       $(".slide").css("background-image","");
  }

}
function preload(arrayOfImages) {
     $(arrayOfImages).each(function(){
         $('<img/>')[0].src = this;
       
     });
      console.log("done preload completo");
 }

function resposiveScript () {
  var wWidth=$("body").width();
  if (wWidth <= 500) {
    $("#logo").attr("data-0","bottom: -8px; height:174px; background-image: url(shared/img/logoMabaker.png);")
    $("#logo").attr("data-303","bottom:-12px; height:83px; background-image: url(shared/img/MaBakerLogo.png);")
  };
}

function miniatura (nombre) {
	var img = nombre;
	$("#miniaturaSmenu img").attr("src", "shared/img/miniaturas/"+img+".png");
}


// ---------------Slider

  var sliderWidth;
  var slide=0;
  var slidesTotales;
  // var move=sliderWidth;
  var toGo;
  var tiempo=8000;
  var intervalo;


  function intervalManager(flag, funcion, tiempo) {
     if(flag){
       intervalo =  setInterval(funcion, tiempo);
       // console.log("++++++interval INICIADO");
     }else{
      clearInterval(intervalo);
      // console.log("-----interval STOP");
     }
      
  }

  function calcula () {
    slidesTotales = $("#sliderWrapper").children().length-1;
    sliderWidth = $("#slider").width();
    $(".slide").width(sliderWidth);
    responsiveSlider();
  }
  
  function mueveAuto () { 
    if (slide<slidesTotales) {
     mueve("der"); 
   }else{
      slide=0; mueve("izq"); 
    } 
  }

  function mueve(dir){

      if (dir=="der"){

        if (slide<slidesTotales) {
          slide++;
          // $("#flechaAnt").css("display","block");
        }else{
          // $("#flechaSig").css("display","none");
        };
      }else{
        if (dir="izq") {
          if (slide > 0) {
            slide--;
            // $("#flechaSig").css("display","block");
          }else{
            // $("#flechaAnt").css("display","none");
          };
        };
      }

    toGo = -(slide*sliderWidth); 
    intervalManager(false);
    $("#sliderWrapper").css("left",toGo);
    intervalManager(true, mueveAuto, tiempo);
  }

function toggleActive () {

     for (var i=0; i < arguments.length; i++) {
         $(arguments[i]).toggleClass("active");
     };
     
}

$(window).resize(function(){
    calcula();
    mueve();
});


// ________________________________  Fichas


function busca(searchVal) {
    var searchField = "nombre";
    // var searchVal = arguments[0];
    for (var i=0 ; i < Productos.pro.length ; i++)
    {
        if (Productos.pro[i][searchField][0] == searchVal) {
            result = Productos.pro[i];
        }
    }
    return result;
}

var producto;
var lang;
var p;
var nombre;
var subt;
var desc;
var modo;
var vrs;
var categ;
var pdfs;
var colores;
var img;


 
function prodInit() {
 
    p = busca(producto); 

    nombre=p.nombre[lang];
    subt=p.subtitulo[lang];
    desc=p.desc[lang];
    modo=p.modo[lang];
    vrs=p.vid[1];
    categ=p.vid[0].categoria;
    pdfs=p.pdf[lang];
    img=p.imagen;
    colores=p.colores;

    var imagenF= "url(shared/img/productos/fichas/"+img+")";
       // var imagenF= "shared/img/productos/fichas/"+img;
    

    $("h1").html(nombre);
    $("h2").html(subt);

    $(".ficha p").html(desc);
    $(".fichaAdicionales p").html(modo);
    console.log(imagenF);
    var imgConstruction="<img src='"+imagenF+"' width='100%' alt='"+nombre+"'/>";
    $("#productoImagen figure").css("background-image" , imagenF)
    // $("#productoImagen figure").html(imgConstruction);
    $("head").find('[name="description"]').attr('content', desc);
    $('tittle').html(nombre);
    console.log("textos agregados");

    if (p.vid[1].length>0){   /*--------------videos*/
      console.log("si hay videos");
      $(".videoModule").css("display","block");
      $("#btnVideoreceta").attr("href", categ);
      var vidID;
      for (i in vrs) {
         vidID=vrs[i]
         var vidFormado= '<div class="video"><iframe width="100%" height="auto" src="https://www.youtube.com/embed/'+vidID+'?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>';
         $(".videoModule .videosWrapp").append(vidFormado);
         console.log("se agrego"+vidID);
      };
      
      
    }

    if (pdfs.length>0) {  /*--------------pdfs*/
      console.log("si hay pdfs");
      $(".catalogoModule").css("display","block");
      var ruta;
      var thumb;
      for (i in pdfs) {
         ruta=pdfs[i].ruta
         thumb=pdfs[i].thumb
         var pdfFormado= '<a href="shared/pdfs/'+ruta+'" target="_blank"><img src="shared/pdfs/thumbs/'+thumb+'"  width="100" alt="'+thumb+'"></a>';
         $(".catalogoModule .pdfsWrapp").append(pdfFormado);
         console.log("se agrego"+pdfFormado);
      };
    };


    if (colores.length>0) {  /*--------------gamaColores*/
      console.log("si hay colores");
      $(".coloresModule").css("display","block");
      var ruta;
      for (i in colores) {
         ruta=colores[i]
         var colorFormado= '<a href="shared/img/productos/gamasColores/'+ruta+'" target="_blank"><img src="shared/img/productos/gamasColores/'+ruta+'"  width="150" alt="'+ruta+'"></a>';
         $(".coloresModule .coloresWrapp").append(colorFormado);
         console.log("se agrego"+colorFormado);
      };
    };

    var fbLink='<div class="fb-share-button" data-href="" data-layout="button"></div>';
    $(".redesWrapp").append(fbLink);
    console.log("se agrego facebook");

    // cambia titulos
    if (lang==1) {
      $(".ficha h3").html("Description");
      $(".fichaAdicionales h3").html("Proper use and quantities");
    };
    pintaOrigen();

}

function pintaOrigen () {
  
    if (window.localStorage.getItem("seccionOrigen").length>0) {
        var origen=window.localStorage.getItem("seccionOrigen");
        var sLink=window.localStorage.getItem("link");
        $(".navegacion").find("[href='catalogoProductos.php']").attr("href",sLink).html(origen);
    };
  
}
// $.ajax({
//       url: "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&alt=json&maxResults=50&playlistId=PLQyaS0EGI7dlx9jZjN_hpot5tXKBCzb0d&key=AIzaSyBx9mbP6l6jnsctf-BKukGTkPkxUm37YOg",
//       type:"GET",
//       cache: false
//     })
//     .done(function(r) {
//         console.log(r)
//       });
// }
// PLQyaS0EGI7dlx9jZjN_hpot5tXKBCzb0d
// http://gdata.youtube.com/feeds/api/playlists/PLQyaS0EGI7dlx9jZjN_hpot5tXKBCzb0d?v=3&alt=json&max-results=20
// ------------------- Videorecetas

var objYT;
var totalDeVideos=[];
var cluster;
var seccion;

function callJson (playlistId) {
    $.ajax({
      url: "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&alt=json&maxResults=50&playlistId="+playlistId+"&key=AIzaSyBx9mbP6l6jnsctf-BKukGTkPkxUm37YOg",
      type:"GET",
      cache: false
    })
    .done(function(r) {
        objYT=r;
        totalDeVideos=objYT.items;
        pintaClusters();
      });
}
// function callCluster () {
//     $.ajax({
//       url: "videoCluster.html",
//       type:"GET",
//     })
//     .done(function(r) {
//       console.log(r);
//       cluster=r;
//     });
// }

cluster='<div class="videoCluster"> <div class="video"> <iframe width="100%" height="100%" src="" frameborder="0" allowfullscreen="1"></iframe> </div> <div class="tituloVideo"></div> </div>'

function obtenId (vidNum) {
        var idNeto=objYT.items[vidNum].snippet.resourceId.videoId;
        return idNeto;
}
function pintaClusters(){
  for (var i in totalDeVideos) {
    $("#videoContainer").append(cluster);
  }
  $.each($(".videoCluster"),function(index){
    $(this).attr("id", index)
  });
  pintaVideos();
}

function pintaVideos (){ 
    for (var i in totalDeVideos) {
        var videoId=obtenId(i);
        var videoTitle=objYT.items[i].title;

        $("#videoContainer #"+i+" iframe").attr( "src", "//www.youtube.com/embed/"+videoId+"?rel=0&amp;autohide=1&amp;showinfo=0" );
        $("#videoContainer #"+i+" .tituloVideo").html(videoTitle);
     };
     $("#videoContainer").css("background","white");
 }

// if (lang==0) {
//   window.location.hash="lang=es";
// };

// --------------------------------------------- CONTROL DE IDIOMA

var idioma, urlHash;
function checaIdioma () {
  urlHash=window.location.hash;
  lang=window.localStorage.getItem("lang");
  if (urlHash.length <= 0 && lang == null) {
    promptIdioma();
    console.log("no hay idioma seleccionado aun");
  }else if (urlHash.length>0) {
    idioma=urlHash.substring(6);
    console.log("si hay idioma por hash y es: " +idioma);
    guardaHash(idioma);
  }else if (lang==0 || lang==1) {
    console.log("si hay un idioma por localStorage y es: "+lang);
    pintaHash();
  };
  pintaIdioma();
}

function guardaHash (idioma) {
  if (idioma=="es") {
    window.localStorage.setItem('lang',0);
  }else if (idioma=="en") {
    window.localStorage.setItem('lang',1);
  };
  lang=window.localStorage.getItem("lang");
}

function pintaHash (){
  if (lang==0) {
    window.location.hash="#lang=es";
  }else if (lang==1) {
    window.location.hash="#lang=en";
  };
}

function promptIdioma(){
    $("#idiomaPrompt").addClass("active");
    $(".btnIdiomaP").click(function(){
      $("#idiomaPrompt").removeClass("active");
    })
        
}
function selecIdioma(idioma){
    $(".lang").removeClass("active");
    $(".lang#"+idioma).addClass("active");
    if (idioma=="es") {
      window.location.hash="#lang=es";
      window.localStorage.setItem('lang',0); 
    }else if (idioma=="en") {
      window.location.hash="#lang=en";
      window.localStorage.setItem('lang',1);     
    };
    location.reload();
}

function pintaIdioma () {
  if (lang==0) {
    var idioma="es";
     // $("#langSelector span").html("language");
  };
  if (lang==1) {
    var idioma="en";
    // $("#langSelector span").html("idioma");
  };

  $(".lang").removeClass("active");
  $(".lang#"+idioma).addClass("active");
}

/*

para quitar los tags de html a un string
var newString=HTMLedString.replace(/(<([^>]+)>)/ig,"");

*/