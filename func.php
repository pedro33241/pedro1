 <!doctype html><html loc="pt">
<head><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Oficina Office</title>

  <meta name="viewport" content="width=device-width" />
    <meta name="author" content="TechBrains">
<meta name="robots" content="noindex,follow">
<meta property="og:type" content="article" /> 
<meta name="google" content="notranslate"> 
<meta name="description" content="aqui é cadastrado os fucionários da Empresa">
<meta name="og:description" content="aqui é cadastrado os fucionários da Empresa">
<meta name="og:url" content="http://oficina_office.com/nn/car.php">
<meta name="og:title" content="Oficina Offce">
<link id="favicon" rel="shortcut icon" href="img\return-home-button-png-7.png" type="image/png">
<link rel="stylesheet" type="text/css" href="css/car.css">
<link rel="stylesheet" href=" "> 
<?php 
// Copyright (C) Tech Brains Corporation. All rights reserved.
// Use of this source code is governed by Tech Brains Team license that can be

// found in the LICENSE file.
 #* This source code was developed by Tech Brains (C)
include_once "backend/banc.php";
 session_start();
 
 
 ?>
 <?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>

<link href='https://css.gg/redo.css' rel='stylesheet'>  
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

 
<head>  <style>
    
 *,
   *:before,
   *:after{
   margin:0;
   scroll-behavior: smooth;
   padding:0;  
   }  
.menu5{  
    border-radius: 50%;
    width: 60px;  
    margin:-14px 0px 0px 73px;
    height:60px;    
       color:#ffff;
       right:1;
       cursor: pointer;
       position:absolute;
     font-size: 17.5px;
}
.menu5:hover{  
  cursor: pointer;
  transition: all .4s ease-in-out;
}
.hamburguer{
  display: block;
position: relative;
width: 20px;
top:29px;
transition: .5s ease-in-out;
left:19.5px; 
height:2px; 
background-color: #FFF;
}
.hamburguer:before,.hamburguer:after{
    background-color: #FFF;
    content:'';
    transition: .5s ease-in-out;
    display: block;
    position: absolute;
    width: 100%; 
    height:100%;
}
.hamburguer:after{
    bottom:-8px;
}
.tt{
    display: none;
} 

 
.hamburguer:before{
    top:-8px;
}

   
     .subh{
      position:absolute;
    }
       .h3 {   
      color:#555454;border-bottom:1px solid #dbdfe4;
      font-size: 24px; 
      margin: -3px 0 0 0; 
      padding: 0 14px;  padding-bottom:19px; 
    }
     #main{ 
  border-bottom:1px  solid rgba(0, 0, 0, 0.123);
  border-left:1px  solid rgba(0, 0, 0, 0.123); 
  margin:76px 0% 0% 0.8%;-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13); 
  border-top: none; float:right;
   text-align:center;  width:91%; 
  background:rgba(255, 255, 255, 0.938); 
 padding: 31px 0 19px  0;position:static;
  text-align:justify; 
}
  body{ background:#e9e9e9; 
      user-select: none; 
        font-weight: normal;   

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
      color: #23282d;
    }   
    
  .bi-caret-left{
    color:#4a7c94;
    font-size:1.3em;
    position:fixed;
      transform: rotate(-90deg);
     margin:6px 0px 0px 35px; 
   }
  
 
      .ref{  
      color:white;
      text-decoration: none; 
      display:block; 
         position:static;
       padding:20px 0px; 
     border-top:1px solid #373941;
     font-size: 17px; color:#cecece;  
     border-left:2px solid #24282e;
     } 
     .ref:hover{
            background:#1e1e1e;
            color:rgb(233, 232, 232);border-left:2px solid #0da3d0;
    }
     .ref_seconde{
      color:white;
      text-decoration: none; 
      display:block; background:#1e2227;
       padding:19px 0px;  
     font-size: 15px; color:#cecece;  
     border-left:2px solid #24282e;
    
     } .ref_seconde:hover{  
     border-left:2px solid #0da3d0;
            background:#1e1e1e;color:#00b7ff;
    
     }
     .list{    
           text-align:center;
           list-style:none;  
           background:none;
  } 

   #dashbord{  
      height:100%;margin-top:60px;
      transition: left 0.5s ease;
     background:#24282e; 
         position:fixed;left:0;
           width:192px;top:0;
  } 
 #of2{background:#0096dd; 
           position:fixed;padding:19.3px 0 19.3px 47px; width:145px;
        left:0 ;  top:0 ;     
    }
      
  #of1{ 
     box-shadow:4px 3px 6px 1px rgba(0,0,0,0.1);  
       border-bottom:2px solid rgba(0,0,0,0.1); 
       top:0; width:100%;
        position:fixed;
     background-color:rgb(255, 254, 254);
     padding:30px 0% 30px 0%;
  }
   
    
   
#sub-of{  
  margin:.5px 0px 0px -18px ;
  font-size: 17px; text-align:center;
    color:rgb(255, 255, 255); 
  float:left;}
   
  #exit:hover{

 background:#dcdcdc;
  transition:.5s; }
     #exit{   border-radius:71px 71px 71px 71px;
     right:33px;
     position:absolute;
     margin:-10px 0px 0px 0%;
     font-size:17px;
     background:none;  
     outline:none;
     border:none; transition:.9s;
     font-weight:bold;
     padding:2px 3px 0px 3px;
     color:#037db6 ; 
    cursor:pointer;
   }
   #exit3{
  padding:5.8px 5.4px 5.8px 5.4px;
  right:66px; 
  border-radius:71px 71px 71px 71px;
     position:absolute;
     margin:-11px 0px 0px 0%; 
     font-size:19.6px;
     background:none;  
     outline:none;
     color:#037db6 ;
     border:none; 
    cursor:pointer;
     transition:.9s;
   }
   #exit3:hover{
     background:#dcdcdc; transition:.5s;
   }
 
    .btn11 { 
      color:red;
      display: inline-block;
      text-decoration: none;
      font-size: 16px;   
      cursor: pointer;
      -webkit-border-radius: 3px;
      -webkit-appearance: none;
      border-radius: 3.3px;
      white-space: nowrap;
    -webkit-transition:-webkit-transform 1s;
    transition:.8s;
      -webkit-box-sizing: border-box;
      -moz-box-sizing:    border-box;
            outline: none;  right:199px;
      box-sizing:         border-box;    position:absolute;
      margin:-15px 0 0 0px;
      padding:7px 13px;
    }
   .btn1 { 
      color: rgba(0, 115, 170, 0.8);
      display: inline-block;
      text-decoration: none;
      font-size: 16px;   
      cursor: pointer;
      -webkit-border-radius: 3px;
      -webkit-appearance: none;
      border-radius: 3.3px;
      white-space: nowrap;
    -webkit-transition:-webkit-transform 1s;
    transition:.8s;
      -webkit-box-sizing: border-box;
      -moz-box-sizing:    border-box;
            outline: none;  right:109px;
      box-sizing:         border-box;    position:absolute;
      margin:-15px 0 0 0px;
      padding:7px 13px;
    }
  .btn2:hover{  
    -webkit-transition:-webkit-transform 1s; ;
    background:#dcdcdc;
   } 
    .of{
    display: none;
   }
    #atualizar{     
             width:388px;  
              margin:-55px 0px 0px 0px; float:right; 
   }
  .container { width:100%;
overflow-x: scroll; 
  
}::-webkit-scrollbar{
  -webkit-border-radius:4px;
height:11px;width:11px;
}
::-webkit-scrollbar-track-piece{
  background:transparent;
  -webkit-border-radius:3px;  
}
::-webkit-scrollbar-thumb:vertical{
  height:5px;background:#919191;
  -webkit-border-radius:3px;
}
::-webkit-scrollbar-thumb:horizontal{
  height:5px;background:#fff;
  -webkit-border-radius:3px;
}
     @media all and (max-width:9999px) {body{ margin:0 auto;padding:0;
  } .z1asCe{display:inline-block;fill:currentColor;height:24px;line-height:24px; }
.A8SBwf{ margin:0 auto;padding-top:6px; width:auto; }  .A8SBwf{ margin:0 auto;padding-top:6px;width:484px;width:auto; }#searchform.big .A8SBwf{width:584px;width:auto; }.RNNXgb{background:#fff;display:flex;border:1px solid #dfe1e5;box-shadow:none;border-radius:24px;z-index:3;height:44px;margin:0 auto; width:auto;}.minidiv .RNNXgb{height:32px;border-radius:16px;margin:10px 0 0}.emcav .RNNXgb{border-bottom-left-radius:0;border-bottom-right-radius:0;border-color:rgba(223,225,229,0);box-shadow:0 1px 6px rgba(32,33,36,.28)}.minidiv .emcav .RNNXgb{border-bottom-left-radius:0;border-bottom-right-radius:0}.emcav.emcat .RNNXgb{border-bottom-left-radius:24px;border-bottom-right-radius:24px}.minidiv .emcav.emcat .RNNXgb{border-bottom-left-radius:16px;border-bottom-right-radius:16px}.RNNXgb:hover,.sbfc .RNNXgb{box-shadow:0 1px 6px rgba(32,33,36,.28);border-color:rgba(223,225,229,0)}.UUbT9{width:auto} .SDkEP{ width:90%;border-radius:24px;display:flex;padding:5px 8px 0 16px;padding-left:14px;}.minidiv .SDkEP{padding-top:0}.FPdoLc{padding-top:18px;top:53px;z-index:0;}#searchform.big .FPdoLc{}.iblpc{display:flex;align-items:center;padding-right:13px;margin-top:-5px}.minidiv .iblpc{margin-top:0}
.hsuHs{margin:auto}.wFncld{margin-top:3px;color:#9aa0a6;height:20px;width:20px}
.gLFyf{background-color:transparent;border:none;margin:0;padding:0;color:rgba(0,0,0,.87);word-wrap:break-word;outline:none;display:flex;flex:100%;-webkit-tap-highlight-color:transparent;margin-top:-37px;height:34px;font-size:16px}.minidiv .gLFyf{margin-top:-35px;}.a4bIc{display:flex;flex:1;flex-wrap:wrap}.pR49Ae{color:transparent;flex:100%;white-space:pre;height:34px}.pR49Ae span{background:url("/images/experiments/wavy-underline.png") repeat-x scroll 0 100% transparent;padding:0 0 10px 0;} 
      
     
 .f5{
        width:100%;
        
  background:rgba(255, 255, 255, 0.938); 
        color: white; padding:10px 0 10px 0;
        box-shadow:0px 0px 7px 1px #e5e4c4;
        text-align: center;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

} 
  #main{   
       width:95%;  
  } 
  }   
    @media all and (max-width:4723px) {body{ margin:0 auto;padding:0;
  }   #main{ 
       width:93%;
      }
    }
  @media all and (max-width:2826px) {body{ margin:0 auto;padding:0;
  }   #main{ 
       width:91%;
      }
    }


  @media all and (max-width:2175px) {body{ margin:0 auto;padding:0;
  }   #main{ 
       width:88%;
      }
     } @media all and (max-width:1220px) {body{ margin:0 auto;padding:0;
  }  #of2{ padding:19.3px 0 19.3px 93px; width:99px; }
       .of{
     color:#fff;
      display:block;
      margin:1px 0px 0px -40px ;
   } 
  .menu5{   
    margin:-40px 0px 0px 28px; 
}
  #sub-of{
     
    display: none;} 
   
  } 
  @media all and (max-width:1716px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:87%;    
  }
  }
   
      @media all and (max-width:1372px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:85%;    
  }
   
  } 
    
          @media all and (max-width:1274px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:84%;    
  } 
   
  } 
  @media all and (max-width:1210px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:80%;    
  } 
    
  }
   
    
   @media all and (max-width:938px) {body{  margin:0 auto;padding:0;
  } 
  #main{  
       width:78%;   
  } 
     
  }
 
   @media all and (max-width:856px) {body{ margin:0 auto;padding:0;
  } 
 .f5{
        width:0%;
         
}   
   
   }
   @media all and (max-width:850px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:76%;    
  } 
  
  #atualizar{     
             width:215px;  
             padding:1px 0 1px 0;margin:21px 0 21px 0 ;
  
    }
      
 .yy1{     
             width:55px;  
         
    }
   
   } 
    
  
    @media all and (max-width:755px) {body{ margin:0 auto;padding:0;
  }  
 #main{ 
       width:85%;    
  } 
     
          .of{
  display: none;
   } 
   
   #dashbord{
    width:76px;
  }
     .menu5{   
    margin:-32px 0px 0px -29px; 
}
   #of2{  padding:34px 0 31px 39px; width:37px;
       }
    
    
   .ref{width:20.5%;
    padding: 19px 29px;  
   } 
   .link{ 
    display: none;
  }
   .left{display: none; }
   .bi-caret-left{display: none; } 
    .ref_none{display: none;}


  }    @media all and (max-width:530px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:82%;    
  } 
  }
  @media all and (max-width:458px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:79%;    
  } 
  }@media all and (max-width:391px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:76%;    
  } 
  }@media all and (max-width:335px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:73%;    
  } 
  }@media all and (max-width:304px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:70%;    
  } 
   
  } 
  @media all and (max-width:263px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:67%;    
  } 
  }
     
.gg-redo { 
  box-sizing: border-box; 
position: relative;
 display: block;
 transform: scale(var(--ggs,1));
 width: 18px;
  height: 18px; border: 2px solid;
   border-right-color: transparent; 
   border-radius: 666% }

  .gg-redo::before { 
    content: ""; 
    display: block;
     box-sizing: border-box; 
     position: absolute; 
     width: 9px; 
  height: 9px; 
  border-top: 2px solid; 
  border-right: 2px solid; 
  top: -3.8px; right: -1px; 
  transform: rotate(73deg) }
   
      .gg-redo:active{ 
         position: relative; 
       width: 19px; 
       height: 18px;
    border-radius: 695%; 
    border-top: solid 2px currentColor; 
    border-bottom: solid 2px currentColor;
     border-left: solid 2px transparent;
      border-right: solid 2px currentColor;
      transition:all 0s;
     }
     .gg-redo:active:before 
     {  left: -1px; 
     top: 7.9px; 
     content: "";
      display: block;
       box-sizing: border-box; 
       position: absolute;
        width:10px; 
   height:10px; border-top: 2px solid;
    border-right: 2px solid; 
    -webkit-transform: rotate(-22.5deg);
      transform: rotate(-99deg);
      transition:all 0s;
      border-radius: 695%; }
      
    
      .ref:hover .icon{
              color:#3691bc;
          } 
          .ref:hover .icon2{
              color:#3691bc;
          }
           .ref:hover .icon6{
              color:#3691bc;
          }
           .ref:hover .icon4{
              color:#3691bc;
          }
           .ref:hover .icon5{
              color:#3691bc;
          }
          .ref:hover .icon7{
              color:#3691bc;
          }
         
 .serv-show{
      position: static;
      display: none;

    } 

    nav ul .feat-show.show{

      display: block;

    }

    nav ul .serv-show.show1{

      display: block;

    } 
         
 .pace {
  -webkit-pointer-events: none;
  pointer-events: none;

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.pace-inactive {

  display: none;
}

.pace .pace-progress {
 background: #0b6884;
  position: fixed;

  z-index: 2000;
  top: 0;
  right: 100%;
  width: 100%;
  height: 4px;
  margin-left:20%;
}
   .btnTop{position:fixed;right:20px;width:45px;height:45px;background:#0096dd;color:#fff;bottom:20px; border:none;outline:none;border-radius:50vh;cursor:pointer;display:none;transition:3s }

      .btnTop1{position:absolute;  color:transparent; border:none; 
      font-size: 20.4px;   
      padding: 0 14px;  
   } 
  .top{
    font-size:1.8em;

      transform: rotate(90deg);
  }
 </style></head>
  
  <body >    
  <div id="of1"> <label class='btn11' >
  <?php 


$rr="SELECT nome from funcionarios";
  
if (mysqli_query($conect, $rr)) {
      
  $rr=true;
  echo "rt".$rr;
      }else {
    echo "erro no rvcee"; }
  
  # code...
 

 


 ?> </label>

<a href='func1.php' class="btn1 btn2" title="Cadastrar"  rel="next" >Cadastrar</a>
  
    <a href="JavaScript:window.location.reload()" name="" id="exit3"   title="Atualizar" onclick="" > 
     <i class="gg-redo"></i> </a> 
<!--exit button -->
    <button type="submit" name="" id="exit" value="" title=" Sair" onclick="" >  
   <!--svg img exxit--> 
<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" 
xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1
 1-5.908-.053l.486.875z"/> <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/ > </svg></button> 
  
   </div>  
      <div id="of2">   
     <label id="sub-of" style=" font-weight:normal;">Oficina
      <b style="font-size: 20px;color:#fff; font-weight:normal;">O</b>
     ffice</label><label class="of" style="font-size: 20px;color:#fff;font-weight:normal;" >
     <b style="font-size: 20px;color:#fff;">O</b>ffice</label>
     <span   style="color:#fff" title="Menu"> <input type="checkbox" class="tt" id="menu-hamburguer">
    <label for="menu-hamburguer"> 
<div class="menu5">
     <span class="hamburguer"></span>
</div></label> </strong>
  
  </span>    </div> 
     
  
    <header id="dashbord">
     <!--criando o dashbord-->
            <nav >
         
                <ul >
                         
                              <li class="list"   >
    <a href="home.php" class="ref"  rel="next" >
   
 <span style=" color:#4a7c94 ">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25­-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/> <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> </svg>

 </span>  
 <br> <span  class="ref_none" >Início </span> </a>  
 </li>
 
 <li class="list">
      <a href="man.php" class="ref feat-btn"  rel="next" > 
 <span   style="color:#4a7c94 "><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/> <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/> </svg>
 
 </span>  <br><span class="ref_none">Manutenção </span>
 
      </a>

     
    </li>


 <li class="list"><a href="fat.php" class="ref"  rel="next" >
  
  <span  style=" color:#4a7c94">  
  <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon5" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/> </svg>
 
  </span>  
 <br> <span class="ref_none">
 Faturamento</span> 
 </a> 
 </li>


   
<li class="list">

<a href="#" class="ref serv-btn" style="background:#1e1e1e;  border-left:2px solid #0da3d0;"  rel="next" > <span style="  color:#00b7ff">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"  title="Funcionários"  class="icon4" class="bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg > <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi-caret-left icon2" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
</svg><br> 
</span>  <span class="ref_none">  Funcionários</span> 
   </a>
  
  <ul class="serv-show">
    <li class="list"><a href="func.php" class="ref_seconde"  rel="next" >funcionários</a></li>
    <li><a href="func1.php" class="ref_seconde"  rel="next" >Novo Registo</a></li>
  </ul>

</li>
<li class="list"><a href="car.php"  rel="next"   onclick=" "  class="ref" >
 
 <span style=" color:#4a7c94 ">  
<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon3" fill="currentColor"
  xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 
  1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 
  0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.73
  2 0A2 2 0 0 0 12 10V6h1.02a.5.5 0 0 1 .39.188l1.48 1.85a.5.5 0 0 1 .11.313V10.5a.5.5 0 0 1-.5.5h-.768z"/> </svg>
  
 </span>  
 <br>   <span class="ref_none">
 Veículos </span> </a> 
 </li>
  

  
<li class="list"><a href="rel.php"  rel="next"  class="ref" >
   <span style=" color:#4a7c94 ">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon6" fill="currentColor"
 xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 
 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-
 2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/></svg>
 </span>  
<br> <span class="ref_none">
Relatório</span> 
</a> 
</li>

<li class="list"><a href="help.php" style="border-bottom:none" class="ref"  rel="next" >
<span style=" color:#4a7c94 ">   
<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon7" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
 <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/> </svg>
 </span > 
<br> <span class="ref_none">
Ajuda</span> 
</a> 
</li>
                  </ul>
    
    
    
    
            </nav>
 
    
    </header>
    
      
 

</section>
<!--corpo do sistema-->
   
<section id="main">
  
  <label  id="btnTop1" class="btnTop1"> <h3 style="font-weight:normal;" ><svg width=".7em" height=".7em" viewBox="0 0 16 16" class="icon6" fill="currentColor"
 xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 
 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-
 2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/></svg>  Histórico de Funcioarios</h3>
 </label> <h3 style=" font-weight:normal;" class="h3"> <label class="subh" id="btn_h3"><svg width=".7em" height=".7em" viewBox="0 0 16 16" class="icon6" fill="currentColor"
 xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 
 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-
 2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/></svg>  Histórico de Funcioarios</label> <br>
</h3>
 <nav id="atualizar" title="Procurar">
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"><div class="RNNXgb" jsname="RNNXgb"><div class="SDkEP"><div class="iblpc" jsname="uFMOof"> <div class="hsuHs"><span class="wFncld z1asCe MZy1Rb"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></span></div></div><div jscontroller="iDPoPb" class="a4bIc" jsname="gLFyf" jsaction="h5M12e;input:d3sQLd;blur:jI3wzf"> <div class="pR49Ae gsfi" jsname="vdLsw"></div><input class="gLFyf yy1 gsfi" maxlength="2048" name="q" type="search" jsaction="paste:puy29d" aria-autocomplete="both" placeholder="Procurar Funcinário" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="" role="combobox" spellcheck="false" title="Pesquisar" value="" aria-label="Pesq." data-ved="0ahUKEwjziqjGhZztAhWvz4UKHSiFDTIQ39UDCAQ"></div><div class="dRYYxd">   <span class="FqnKTc"></span></nav>
  <br> 
<div id="conteudo3">



  <?php 

          $sql= "SELECT * FROM  view_funcionario ORDER BY id";
          $link= mysqli_query($conect, $sql);
          if (mysqli_num_rows($link) > 0):
          while ($dados = mysqli_fetch_array($link)):
            
         ?>
 <label style="margin-top:-423px; letter-spacing:1px;"><?php 

  //conexão com banco de dados//

if (isset($_SESSION['sms'])) {

  echo


  $_SESSION['sms'];



   ;




}

 ?></label>


 <?php

session_unset();
 
 

  ?> 
 <div class="  container" > 
  <table cellspacing="10" class="f5" ><br>
    
<tr class="f" style="color:#000000;
        font-size:18px;
        text-align: center;
        ">  

         <td style="font-size:18px;">Nome</td>
        <td>Sobrenome</td>
      <td>Nacionalidade</td>
     <td>Naturalidade</td>
    <td>Data de nascimento</td>
  <td>Genéro</td>
 
<style type="text/css"> 

.p4{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: white;
    text-decoration: none;
   
  background-color:#f1110d;
 width:97%;padding:7px 31px 7px 31px; border:none;font-size:14px;} 
  .p4:hover{   background-color:#db1411;
  } 
 .p6:hover{   background-color:#0789c7;
  } 
.p6{  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: white;
    text-decoration: none;
   
  background-color:#0096dd;
 width:97%;padding:7px 25px 7px 25px; border:none;font-size:14px;
} 
</style>
        <input type="hidden" name="sim" value="<?php echo $dados['id'];?>">
  <td   ><button type="submit" title="Deletar Registo" style=" border-radius:4%;border:none; "><span ><a href="backend/delete2.php?id=<?php echo $dados['id'];?>" onclick="return confirm('Tem certeza que deseja deletar esse relatório?' ); return false;" class="p4">Apagar</a></span></button></td>

  </form>




</tr>

  <div class="line1">  
<tr>  


<td style="border:none;color:#a90969;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px; "><?php echo $dados['nome'];?></td>
<td  style="border:none;color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px;font-size:18px;  " ><?php echo $dados['sobrenome'];?></td>
<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['nacionalidade'];?></td>
<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['naturalidade'];?></td>
<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['datac'];?></td>
<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['genero'];?></td>

 
</tr>

 </tr>

<tr  class="f" style="color:#4d4c4c;
        font-size:18px;
        text-align: center;
        ">
 <td>Cidade</td>
<td>Município</td>
<td>Bairro</td> 

<td>Rua</td>
<td>Telefone</td>
<td>Telefone(2)</td>
       
<td><button type="submit" title="Imprimir Registo" style=" 
 border-radius:4%;border:none; " onclick=" "><span><a href="func.php?id=<?php echo $dados['id'];?>" class="p6" >Imprimir</a></span></button></td>


</tr>  
</div>
<tr> 
<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['cidade'];?></td>

<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['municipio'];?></td>
<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['bairro' ];?></td>
 


<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['rua'];?></td>
<td  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['telefone'];?></td>

<td  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['telefone2'];?></td>
 



</tr>

<tr  class="f" style="color:#4d4c4c;
        font-size:18px;
        text-align: center;
        "> 
    <td>Email</td>
    <td>Estado</td>
     <td>Posição</td>
      <td>Situação de trabalhador</td>
       <td>Data de admissão</td>
        <td>Hora</td>
         


</tr> 
<tr>  
<td  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['email'];?></td>
<td  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['estado'];?></td>
<td  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['cargo'];?></td>
<td  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['trabalhador'];?></td>
<td style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['admissao'];?></td>
<td style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['hora'];?></td>



</tr>
<?php  endwhile; 
else:?>

  <span style="text-align:justify;margin-left: 40%;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px;color:#9f9b9a;font-weight:normal;">Sem funcionarios cadastrados no sistema!</span>

  <?php

endif;?>


</tr>

 
  </table><div  ><br style="">

 <button onclick="backToTop()" id="btnTop" class="btnTop"><svg width="1em" height="1em" viewBox="0 0 16 16" class="top" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/></button> 
    <script> 

    window.onscroll= function()
    {
      
      scroll();
    };
    function scroll(){
      let btn = document.getElementById("btnTop");
      if(document.documentElement.scrollTop > 50){
        btn.style.display = "block"; 


      }
else{
btn.style.display = "none";
}

 let btn1 = document.getElementById("btnTop1");
      if(document.documentElement.scrollTop > 88){
        btn1.style.display = "block";
        btn1.style.position="fixed";
        btn1.style.color="#555454"; 
        btn1.style.top='15px'; 



      }
else{
btn1.style.display = "none";
  btn1.style.top='33px';  


}


 let btn2 = document.getElementById("btn_h3");
      if(document.documentElement.scrollTop > 88){
    btn2.style.display = "none"; 
 
      }
else{
       btn2.style.display = "block";  


        btn1.style.position="absolute";
}}
 

function backToTop(){
  document.documentElement.scrollTop = 0;
 
    }</script>
  
  </div>
</section>
<script>
  

  $('.serv-btn').click(function(){

    $('nav ul .serv-show').toggleClass("show1");

  });
</script>
  </body>
  </html>