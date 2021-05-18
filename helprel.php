<!doctype html>
<html loc="pt">
<head onload="oi">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Oficina Office</title> 
<meta name="viewport" content="width=device-width" />
<meta name="author" content="TechBrains">
<meta name="robots" content="noindex,follow">
<meta property="og:type" content="article" /> 
<meta name="google" content="notranslate">  
<meta name="og:description" content="área de faturamento">
<meta name="og:url" content="http://oficina_office.com/nn/fat.php">
<meta name="og:title" content="Oficina Offce">
<link id="favicon" rel="shortcut icon" href=" " type="image/png"> 
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

      
<?php
// Copyright (C) Tech Brains Corporation. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.
 #*
 #* This source code is licensed under the Tech Brains
 #* LICENSE file in the root directory of this source tree
require_once "backend/banc.php";
session_start();

//Verificando se o usuário esta logado, senão redireciona-o para a index!
 
?>

<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>  
   <head> 
   <style>
    
    
   *,
   *:before,
   *:after{
   margin:0;
   scroll-behavior: smooth;
   padding:0;} 

   #conteudo3{
   padding: 11px 11px 0 16px; } 
   
   .menu5{  
    border-radius: 50%;
    width: 60px;  
    margin:-14px 0px 0px 73px;
    height:60px;    
    color:#ffff;
    right:1;
    cursor: pointer;
    position:absolute;
    font-size: 17.5px;}

    .menu5:hover{  
    cursor: pointer;
    transition: all .4s ease-in-out;}

    .hamburguer{
    display: block;
    position: relative;
    width: 20px;
    top:29px;
    transition: .5s ease-in-out;
    left:19.5px; 
    height:2px; 
    background-color: #FFF;}

    .hamburguer:before,
    .hamburguer:after{
    background-color: #FFF;
    content:'';
    transition: .5s ease-in-out;
    display: block;
    position: absolute;
    width: 100%; 
    height:100%;}
 
    .hamburguer:after{
    bottom:-8px;}

    .tt{
    display: none;} 

 
    .hamburguer:before{
    top:-8px;}

    #main1{ 
    background:#fff; 
    right:0;  
    padding: 4px 0px 4px 0px;
    height:230px;
    position:fixed; 
    width:91%;
    bottom:0;
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);} 

    h3 { 
    padding-bottom: 9px 14px; 
    border-bottom:1px solid #e0e0e0;
    color:#555454;
    font-size: 24px;
    margin: -5px 0 0 0;
    padding: 0 14px;}
   
    body{ 
    margin:0;
    background:#ebedf0;
    padding:0;     
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    user-select: none;
    font-weight: normal;  
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
    color: #23282d;}   
      
    .ref{  
    color:white;
    text-decoration: none; 
    display:block; 
    position:static;
    padding:20px 0px; 
    border-top:1px solid #373941;
    font-size: 17px; 
    color:#cecece;  
    border-left:2px solid #24282e;} 

    .ref:hover{
    background:#1e1e1e;
    color:rgb(233, 232, 232);
    border-left:2px solid #0da3d0;}

    .ref_seconde{
    color:white;
    text-decoration: none; 
    display:block; 
    background:#1e2227;
    padding:19px 0px;  
    font-size: 15px; 
    color:#cecece;  
    border-left:2px solid #24282e;} .ref_seconde:hover{  
    border-left:2px solid #0da3d0;
    background:#1e1e1e;
    color:#00b7ff;}

    .list{    
    text-align:center;
    list-style:none;  
    background:none;} 

    #dashbord{  
    height:100%;
    margin-top:60px;
    transition: left 0.5s ease;
    background:#24282e; 
    position:fixed;
    left:0;
    width:192px;
    top:0;} 

    #of2{
    background:#0096dd; 
    position:fixed;
    padding:19.3px 0 19.3px 47px;
    width:145px;
    left:0 ; 
    top:0 ;}

     #main{
    background: #fff; 
    width:91%; 
    right:0; 
    padding: 8px 0px 0px 0px;
    top:76px;
    position:fixed; 
    height:86%; 
    margin: 0px 0 0 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);}
   
    .left{
    color:#e9e9e9;
    font-size:1.9em;
    position:fixed;
    margin:.7% 0px 0px 65px} 

    #of1{ 
    box-shadow:4px 3px 6px 1px rgba(0,0,0,0.1);  
    border-bottom:2px solid rgba(0,0,0,0.1); 
    top:0; 
    width:100%;
    position:fixed;
    background-color:rgb(255, 254, 254);
    padding:30px 0% 30px 0%;}
  
    #exit:hover{
        background:#dcdcdc;
    transition:.5s; }

    #exit{  
    border-radius:71px 71px 71px 71px;
    right:33px;
    position:absolute;
    margin:-10px 0px 0px 0%;
    font-size:17px;
    background:none;  
    outline:none;
    border:none;
    font-weight:bold;
    padding:2px 3px 0px 3px;
    color:#037db6 ; 
    transition:.9s;
    cursor:pointer;}

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
    transition:.9s;}

    #exit3:hover{
    background:#dcdcdc;
    transition:.5s;}

        .menu{ 
        margin:-.5px 0px 0px 15px ;
    color:#ffff;
    right:1;
        cursor: pointer;
    position:absolute;
    font-size: 17.5px;}
   
    .of{
    display: none;    }
 
    #sub-of{  
    margin:.5px 0px 0px -18px ;
    font-size: 17px;
    text-align:center;
    color:rgb(255, 255, 255); 
    float:left;}

 .bi-caret-left{
    color:#4a7c94;
    font-size:1.3em;
    position:fixed;
    transform: rotate(-90deg);
    margin:6px 0px 0px 35px;}

       @media all and (max-width:9999px) {body{ margin:0 auto;padding:0;
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


  @media all and (max-width:1220px) {body{ margin:0 auto;padding:0;
  } #of2{ padding:19.3px 0 19.3px 93px; width:99px; }
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
    @media all and (max-width:2175px) {body{ margin:0 auto;padding:0;
  }   #main{ 
       width:88%;
      }
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
  @media all and (max-width:850px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:76%;    
  } 
  
  #atualizar{     
             width:210px;  
             padding:1px 0 1px 0;margin:29px 0 0 0 ;
  
    }
     
    #at{margin:1px 0 0 -29px ;padding:6px 7px 6px 7px;
      background:#fff;border-radius:44%;}
   
   #inputatualizar{ 
    width:183px;  
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
    footer#rodape{
 bottom:0;
    text-align: center;
 position:absolute; width:100%; 
border-top:1px solid #dbdfe4;
    clear:both;
}

footer#rodape p{

    text-align: center;
} 
  
 </style></head>
  
  <body >  
  <div id="of1">  
    <a href='JavaScript:window.location.reload()' name="" id="exit3" title="Atualizar" onclick="fec()" > 
    <i class="gg-redo"></i> </a> 
<!--exit button -->
    <button type="submit" name="" id="exit" value="" title=" Sair" onclick="fec()" >  
   <!--svg img exxit--> 
<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" 
xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1
 1-5.908-.053l.486.875z"/> <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/ > </svg></button> 
  
 </nav>
 
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
    <a href="home.php" class="ref" rel="next">
   
 <span style=" color:#4a7c94 ">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25­-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/> <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> </svg>

 </span>  
 <br> <span  class="ref_none" >Início </span> </a>  
 </li>
 
 <li class="list">
      <a href="man.php" class="ref feat-btn" rel="next"> 
 <span   style=" color:#4a7c94   "><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/> <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/> </svg>
 
 </span><br><span class="ref_none">Manutenção </span>
 
      </a> 
    </li>

    
 <li class="list"><a href="fat.php" class="ref" rel="next">
  
 <span style=" color:#4a7c94">  
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon5" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/> </svg>

 </span>  
<br> <span class="ref_none">
Faturamento</span> 
</a> 
</li>

 
  
 <li class="list">

<a href="#" class="ref serv-btn" rel="next"> <span style="  color:#4a7c94">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"  title="Funcionários"  class="icon4" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg >  
</span>  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi-caret-left icon2" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
</svg> <br><span class="ref_none">  Funcionários</span> 
   </a>
  
  <ul class="serv-show">
    <li class="list"><a href="func.php" class="ref_seconde" rel="next">Funcionários</a></li>
    <li><a href="func1.php" class="ref_seconde" rel="next">Novo Registo</a></li>
  </ul>

</li>
 <li class="list"><a href="car.php"  class="ref" rel="next">
 
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
 

  
<li class="list"><a href="rel.php" class="ref" rel="next">
   <span  style=" color:#4a7c94 ">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon6" fill="currentColor"
 xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 
 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-
 2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/></svg>
 </span>  
<br> <span class="ref_none">
Relatório</span> 
</a> 
</li>

<li class="list"><a href="help.php" style="background:#1e1e1e;border-bottom:none" class="ref" rel="next">
<span  style="  color:#00b7ff" >   
<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon7" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
 <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/> </svg>
 </span > <svg width="1em" class="left" height="1em" viewBox="0 0 16 16" class="bi bi-caret-left" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
</svg>
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
    <h3 style=" font-weight:normal;"> 
    <svg width=".7em" height=".7em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
 <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/> </svg>
 </span > 
</svg>Centro de Ajuda - Relatório</h3>   
<div id="conteudo3"> 
<article>
 

 </article></div>
<footer id="rodape">

           <p> Copyright  &copy; 2020 - by TechBrains-
           935467543| 94546756</p>

</footer>  

</section>
 
<script>
  
  

  $('.serv-btn').click(function(){

    $('nav ul .serv-show').toggleClass("show1");

  });
</script>
  </body>
  </html>