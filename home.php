<!doctype html> 
<html itemtype="http://schema.org/WebPage" lang="pt-pt">
<head> 
<meta charset="UTF-8">   
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Oficina Office</title>
<meta name="author" content="TechBrains">
<meta name="robots" content="noindex,follow">
<meta name="viewport" content="width=device-width" /> 
<meta property="og:type" content="article" /> 
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="página inicial do sistema">
<meta name="og:description" content=" página inicial do sistema">
<meta name="og:url" content="http://oficina_office.com/nn/fat3.html">
<meta name="og:title" content="Oficina Offce"><link id="favicon" rel="shortcut icon" href="img/tt.png" type="image/png">
<link rel="stylesheet" href="">  
        
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
<style>
    

    *,
    *:before,
    *:after{
    margin:0; 
    padding:0; }
 
    body{  
    background:#e9e9e9; 
    user-select: none; 
    font-weight: normal;   
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
    color: #23282d; } 

    .ref{  
    color:white;
    text-decoration: none; 
    display:block; 
    position:static;
    padding:20px 0px; 
    border-top:1px solid #373941;
    font-size: 17px; 
    color:#cecece;  
    border-left:2px solid #24282e;    } 

    .ref:hover{
    background:#1e1e1e;
    color:rgb(233, 232, 232);
    border-left:2px solid #0da3d0;    }

    .ref_seconde{
    color:white;
    text-decoration: none; 
    display:block; 
    background:#1e2227;
    padding:19px 0px;  
    font-size: 15px; 
    color:#cecece;  
    border-left:2px solid #24282e;} 

    .ref_seconde:hover{  
     border-left:2px solid #0da3d0;
    background:#1e1e1e;
     color:#00b7ff; }

    .list{    
    text-align:center;
    list-style:none;  
    background:none; } 

    #dashbord{  
    height:100%;
    margin-top:60px;
    transition: left 0.5s ease;
    background:#24282e; 
    position:fixed;
    left:0;
    width:192px;
    top:0;    } 
    #of2{
    background:#0096dd; 
    position:fixed;
    padding:19.3px 0 19.3px 47px;
    width:145px;
    left:0 ;
    top:0 ;     }
  
    .left{
    color:rgba(0,0,0,0.1);
    font-size:1.9em;
    position:fixed;
    margin:.7% 0px 0px 64px     } 
        
    #main{     
    padding: 8px 0px 0px 0px;   
    width:91%;
    position:absolute;
    right:0;
    top:0; 
    height:95%;
    margin: 129px 0 0 0px; }
   
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
  transition: all .4s ease-in-out; }
    .hamburguer{
    display: block;
    position: relative;
    width: 20px;
    top:29px;
    transition: .5s ease-in-out;
    left:19.5px; 
    height:2px; 
    background-color: #FFF; }
    
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
  #of1{ 
    box-shadow:4px 3px 6px 1px rgba(0,0,0,0.1);  
       border-bottom:2px solid rgba(0,0,0,0.1); 
       top:0;
        width:100%;
        right:0;
        position:absolute;
        background-color:rgba(0,0,0,0.1);
     padding:57px 0% 57px 0%;
  }

    #arc{color:#077798;
cursor:pointer;
position:absolute;
margin:6px 0 0 0;
  }
   
    #oficina_left{
      background:#0da3d0; 
           position:fixed;
           padding:19.6px 44.8px 19.6px 48px;
        left:0 ; 
         top:0 ;      
    }
   
  #exit:hover{ 
 background:#dcdcdc;
  transition:.5s; }

     #exit{  
        border-radius:71px 71px 71px 71px;
     right:33;
     position:absolute;
     margin:-13.1px 0px 0px 0%;
     font-size:17px;
     background:none;  
     outline:none;
     border-top:1px solid black;
     border:none;
     padding:2px 3px 0px 3px;
   bottom:0;
     color:#fff; 
    cursor:pointer;
   }

    #usuario{
  right:343px; 
  border-radius:71px 71px 71px 71px;
     position:absolute;
     margin:-11px 0px 0px 0%; 
     font-size:19.6px;
     color:#fff;
   } 

   #exit35{
  right:200px; 
  border-radius:71px 71px 71px 71px;
     position:absolute;
     margin:-12px 0px 0px 0%; 
     font-size:19.6px;
     color:#fff; transition:.9s;
   }

   #exit3{
  padding:5.8px 5.4px 5.8px 5.4px;
  right:176px; 
  border-radius:71px 71px 71px 71px;
     position:absolute;
     margin:-23px 0px 0px 0%; 
     font-size:19.6px;
     background:none;  
     outline:none;
     color:#fff;
     border:none; 
    cursor:pointer;
     transition:.9s;
   }

   .sair:hover{
     background:rgba(0,0,0,0.2);
     transition:.5s;
   } 

   #exit3:hover{
     background:rgba(0,0,0,0.2);
      transition:.5s;
   }

   .sair{
      padding:5.8px 5.4px 5.8px 5.4px;
  right:31px; 
  border-radius:71px 71px 71px 71px;
     position:absolute;
     margin:-31px 0px 0px 0%; 
     font-size:19.6px;
     background:none;  
     outline:none;
     color:#fff;  
     border:none; 
    cursor:pointer;
     transition:.9s;
   }

   .menu{ 
  margin:-.5px 0px 0px 15px ;
       color:#ffff;
       right:1;
       cursor: pointer;
       position:absolute;
     font-size: 17.5px;
   }
   
   .bi-caret-left{
    color:#4a7c94;
    font-size:1.3em;
    position:fixed;
      transform: rotate(-90deg);
     margin:6px 0px 0px 35px; 
   }
      .of{
    display: none;
   } 
     
 
  
#sub-of{  
  margin:.5px 0px 0px -18px ;
  font-size: 17px;  
    color:rgb(255, 255, 255); 
  float:left;}

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
      
      .ref:hover .icon6{
              color:#3691bc;
          } 
          .ref:hover .icon2{
              color:#3691bc;
          }
           .ref:hover .icon3{
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
         
           .menu_second:hover{
            box-shadow:7px 1px 8px rgba(0,0,0,.2);
             transition:.8s;   
             border: 1.3px solid rgba(0,0,0,.2); 
           }
            
           #atualizar{    
             width:59%;   
              margin:8% 0% 0% 0;
           }
   
         
          .et{  display:none;
          } 
          .ul45{
            margin:41px 0 0 0 ;
            text-align:center;
          }
          .list11{
             margin:0px 5px 0px 5px;
      display: inline-block;
list-style:none;
          }
          .ul3{text-align:center;
            margin:81px 0 0 0 ;
          }
          .list3{
             margin:0 5px 0px 5px;
      display: inline-block;
list-style:none;
          } 
          .a35{ 
             text-decoration:none; 
     padding:26px 18.1px; 
      color: #fff;
      display: inline-block;
      text-decoration: none;
       border: 1.9px solid #c7cdd3; 
      font-size: 16px;
      cursor: pointer;
    background:rgba(0,0,0,0.3);
      -webkit-border-radius: 4px;
    transition:.8s; 
      border-radius: 4px;
            outline: none;
     }
      .a34{
       text-decoration:none; 
      color: #FFF;
      display: inline-block;
      border: 1.9px solid #c7cdd3; 
      text-decoration: none;
      font-size: 16px;
    background:rgba(0,0,0,0.3);
      cursor: pointer;
      -webkit-border-radius: 4px;
    transition:.8s; 
      border-radius: 4px;
padding:26px 17.1px;   
     }

     .a345{  
         text-decoration:none;
      color: #fff;
      display: inline-block;
      text-decoration: none;
    transition:.8s; 
      font-size: 16px;
      cursor: pointer;
      -webkit-border-radius: 4px;
      border: 1.9px solid #c7cdd3; 
      border-radius: 4px;
padding:26px 72.9px; 
background:rgba(0,0,0,0.3);
     }

     .a4{ 
       text-decoration:none;
     border: 1.9px solid #c7cdd3; 
      color: #fff;
      display: inline-block;
      text-decoration: none;
      cursor: pointer;
       background:rgba(0,0,0,0.3);
    transition:.8s; 
      -webkit-border-radius: 4px;
      border-radius: 4px;
     padding:26px 57.6px;  
     font-size: 16px; 
          }
           .a5{
             text-decoration:none;
           border: 1.9px solid #c7cdd3; 
      color: #fff;
    background:rgba(0,0,0,0.3);
      display: inline-block;
      text-decoration: none;
      font-size: 185px;
      cursor: pointer;
      -webkit-border-radius: 4px;
      border-radius: 4px;
     padding:26px 58.1px;  
     font-size: 16px; 
    transition:.8s; 
          }
          .a3{      
     text-decoration:none;
     padding:26px 59px;
     border: 1.9px solid #c7cdd3; 
      color: #fff;
      display: inline-block;
      text-decoration: none;
      font-size: 16px;
    background:rgba(0,0,0,0.3);
      cursor: pointer;
      -webkit-border-radius: 4px;
      border-radius: 4px;
    transition:.8s; 
          }

          .vv:hover{  
                background:#077798;
    color:#fff;
      font-size: 14px;
    transition:.2s;
    border: 1.9px solid #077798; 
          }
            
      #img{
        width:3em;
        position:absolute;
        top:27px;
        height:3em;
        left:16%;
      }
       #Oficina_Office{
        font-weight:bold;
      color:rgba(0,0,0,.5);
       position:absolute;
       color:#fff;
        top:41px;
        font-size:1.1em;
        left:20%;
      } 
   
  
      .login-page
{          margin:0 auto;
position:fixed;
  width:100%;  
   height:100%;
    right:0; top:0;
}
::-webkit-scrollbar{
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
}    @media all  and (max-height:9999px) {body{ margin:0 auto;padding:0;
  }  

  #main{
  height:83%; 
  }
.z1asCe{display:inline-block;fill:currentColor;height:24px;line-height:24px; }
.A8SBwf{ margin:0 auto;padding-top:6px; width:auto; }  .A8SBwf{ margin:0 auto;padding-top:6px;width:484px;width:auto; }#searchform.big .A8SBwf{width:584px;width:auto; }.RNNXgb{background:#fff;display:flex;border:1px solid #dfe1e5;box-shadow:none;border-radius:24px;z-index:3;height:44px;margin:0 auto; width:auto;}.minidiv .RNNXgb{height:32px;border-radius:16px;margin:10px 0 0}.emcav .RNNXgb{border-bottom-left-radius:0;border-bottom-right-radius:0;border-color:rgba(223,225,229,0);box-shadow:0 1px 6px rgba(32,33,36,.28)}.minidiv .emcav .RNNXgb{border-bottom-left-radius:0;border-bottom-right-radius:0}.emcav.emcat .RNNXgb{border-bottom-left-radius:24px;border-bottom-right-radius:24px}.minidiv .emcav.emcat .RNNXgb{border-bottom-left-radius:16px;border-bottom-right-radius:16px}.RNNXgb:hover,.sbfc .RNNXgb{box-shadow:0 1px 6px rgba(32,33,36,.28);border-color:rgba(223,225,229,0)}.UUbT9{width:auto} .SDkEP{ width:90%;border-radius:24px;display:flex;padding:5px 8px 0 16px;padding-left:14px;}.minidiv .SDkEP{padding-top:0}.FPdoLc{padding-top:18px;top:53px;z-index:0;}#searchform.big .FPdoLc{}.iblpc{display:flex;align-items:center;padding-right:13px;margin-top:-5px}.minidiv .iblpc{margin-top:0}
.hsuHs{margin:auto}.wFncld{margin-top:3px;color:#9aa0a6;height:20px;width:20px}
.gLFyf{background-color:transparent;border:none;margin:0;padding:0;color:rgba(0,0,0,.87);word-wrap:break-word;outline:none;display:flex;flex:100%;-webkit-tap-highlight-color:transparent;margin-top:-37px;height:34px;font-size:16px}.minidiv .gLFyf{margin-top:-35px;}.a4bIc{display:flex;flex:1;flex-wrap:wrap}.pR49Ae{color:transparent;flex:100%;white-space:pre;height:34px}.pR49Ae span{background:url("/images/experiments/wavy-underline.png") repeat-x scroll 0 100% transparent;padding:0 0 10px 0;} 
      
       } 
    
 @media all and (max-width:9999px) {body{ margin:0 auto;padding:0;
  } 
    
     
  #main{     
 padding: 8px 0px 0px 0px;   
  width:91%;position:absolute;
right:0;top:0; 
  height:75%;
       margin: 129px 0 0 0px;
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
     } 
  @media all and (max-width:1113px) {body{ margin:0 auto;padding:0;
  }
   .et{  display:block;
          } 
      
   
   .ss{
      display:none;
      }
      #exit35{
      display:none;
      }  
       #exit3{
      display:none;
      }
   .ir{
      display:none;
      }
         .sair{ 
  right:38px;  
     margin:-37px 0px 0px 0%;  
   }   
      #img{
        width:2.5em; 
        height:2.5em;
        left:26%;
      }
       #Oficina_Office{ 
        left:36%;
        }
        
        .of{
     color:#fff;
      display:block;
      margin:1px 0px 0px -40px ;
   } 
   .menu5{   
    margin:-40px 0px 0px 28px; 
}  
     #of2{ padding:19.3px 0 19.3px 93px; width:99px; }
     
 #usuario{
  right:100px;  
     margin:-11px 0px 0px 0%; 
   }
 
  #sub-of{
     
    display: none;} 
   
   } 
     
    @media all and (max-width:896px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:77%;    
  }  
  }
    
  @media all and (max-width:784px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:74%;    
  } 
  } @media all and (max-width:755px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:83%;    
  } 
          .of{
  display: none;
   } 
   
   
   .menu5{   
    margin:-32px 0px 0px -29px; 
}
  #dashbord{
    width:76px;
  } 
   #oficina_left{ 
      top:0 ; 
     position:fixed;  
     padding:32px 66px;
     display:block; 
   } 
    
   .ref{width:20.5%;
    padding: 19px 29px;  
   } .link{ 
    display: none;
  }
   .left{display: none; }
   .bi-caret-left{display: none; }
  
    #of2{  padding:34px 0 34px 39px; width:37px;  
   }

    .ref_none{display: none;}
  }

     @media all and (max-width:552px) {body{ margin:0 auto;padding:0;
  } 
  #atualizar{    
             width:89%;   
              margin:8% 0% 0% 0;
           } 
  }
       @media all and (max-width:530px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:82%;    
  } 
  }
   @media all and (max-width:403px) {body{ margin:0 auto;padding:0;
  } 
  #Oficina_Office{ 
     display: none; 
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
    #atualizar{    
             width:118%;   
            }
  } 
  @media all and (max-width:263px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:67%;    
  } 
  }
  
      @media all and (max-width:240px) {body{ margin:0 auto;padding:0;
  } 
  
    #atualizar{    
             width:149%;   
            }
  }  
 

.pace-inactive {

  display: none;
}

.pace .pace-progress {
 background:#0096dd;
  position:absolute;  
  top: 0;
  right: 100%; 
  width: 100%;
  height: 3px;
  margin-left:80%;
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
 </style>
 
</head>
   
  <body> <img src="img/1.png" class="login-page "> 
  <div id="of1">  
  <a href='JavaScript:window.location.reload()' name="" id="exit3"   title="Atualizar" onclick="" > 
    <i class="gg-redo"></i> </a> 


 
  <label id="exit35"><script><!--
 var data=new Date();

 var dia= data.getDate();
 var mes=data.getMonth()+1;
 var ano=data.getFullYear();
 var hora= data.getHours();
  var min= data.getMinutes();
  if((hora>=0) &&(hora<=9)){ 
  document.write('0'+hora);
  }  
   else{
    document.write(hora);
  }

   if((min>=0) &&(min<=9)){ 
 
    document.write(':'+'0'+min+'<br>'); }
    else{
    document.write(':'+min+'<br>');
  }
 if((dia>=0) &&(dia<=9)){ 
  document.write(' <strong>'+'0'+dia+'/'+' </strong>') }
    else{
   document.write(' <strong>'+dia+'/'+' </strong>') }
    
     if((mes>=0) &&(mes<=9)){ 
  document.write(' <strong>'+'0'+mes+'/'+ano+' </strong>') }
    else{
   document.write(' <strong>'+mes+'/'+ano+' </strong>') }
    
   //-->
 </script></label>
 <label id="usuario" title="Usuário"> 
 <svg width=".9em" height=".9em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 
  5.468-2.63z"/> <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> 
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/> </svg><span class="ss"> <?php?> </span>
</label> <nav> 
  <img src="img/w-logo-white.png" id="img" title="Oficina Office"><br>
  <label id="Oficina_Office" title="Oficina Office"><span class="sst">Oficina Office</span><br><span class="ss">Sitema de Gerenciamento</span> </label>
 

   </nav><button class="sair" title="Terminar Sessão" name=""><svg width="1.3em" height="1.3em" class="et" viewBox="0 0 16 16" fill="currentColor" 
xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1
 1-5.908-.053l.486.875z"/> <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/ > </svg><span class="ir" style="text-decoration:none;color:white;"><a href="index.php" style="text-decoration:none;color:white;"  rel="next" > Sair</a></span></button>

 
   </div>  
      <div id="of2"> 
       <script src="javascript/pace.min.js"></script>  
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
    <nav id="nav">
     <ul> 
       
       <li class="list">
       <a href="home.php"  rel="next"  class="ref" style="background:#1e1e1e;">
      <span style="  color:#00b7ff">
      <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> 
      <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1
      .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25­-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/> 
      <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> </svg> </span> 
       <svg width="1em" class="left" height="1em"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
      <path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/></svg>  
      <br>
      <span  class="ref_none" >Início </span> </a>  
      </li>


 <li class="list">
      <a href="man.php"  rel="next"  class="ref feat-btn"> 
 <span   style=" color:#4a7c94   "><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/> <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/> </svg>
 
 </span>
</svg><br><span class="ref_none">Manutenção </span>
 
      </a>

      
      
       
    </li>

    
 <li class="list"><a href="fat.php"  rel="next"  onclick=" "  class="ref" >
  
 <span style=" color:#4a7c94">  
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon5" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/> </svg>

 </span>  
<br> <span class="ref_none">
Faturamento</span> 
</a> 
</li>

 
  
 <li class="list">

<a href="#"  rel="next"  class="ref serv-btn" > <span style="  color:#4a7c94">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"  title="Funcionários"  class="icon4" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg > 
</span> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi-caret-left icon2" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
</svg> <br> <span class="ref_none">  Funcionários</span> 
   </a>
  
 <ul class="serv-show">
    <li class="list"><a href="func.php"  rel="next"  class="ref_seconde">Funcionários</a></li>
    <li><a href="func1.php" class="ref_seconde">Novo Registo</a></li>
  </ul>

</li>
<li class="list"><a href="car.php"   rel="next"  class="ref" >
 
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
   <span style=" color: #4a7c94">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon6" fill="currentColor"
 xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 
 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-
 2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/></svg>
 </span>  
<br> <span class="ref_none">
Relatório</span> 
</a> 
</li>

<li class="list"><a href="help.php"  rel="next"  style="border-bottom:none" class="ref" >
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
  
  <div id="func">
  <center>
   
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">


 <nav id="atualizar" title="Procurar"> 
 <div class="RNNXgb" jsname="RNNXgb"><div class="SDkEP"><div class="iblpc" jsname="uFMOof"> <div class="hsuHs"><span class="wFncld z1asCe MZy1Rb"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></span></div></div><div jscontroller="iDPoPb" class="a4bIc" jsname="gLFyf" jsaction="h5M12e;input:d3sQLd;blur:jI3wzf"> <div class="pR49Ae gsfi" jsname="vdLsw"></div><input class="gLFyf gsfi" maxlength="2048" name="q" type="search" jsaction="paste:puy29d" aria-autocomplete="both" placeholder="Procurar Funcinário" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="" role="combobox" spellcheck="false" title="Pesquisar" value="" aria-label="Pesq." data-ved="0ahUKEwjziqjGhZztAhWvz4UKHSiFDTIQ39UDCAQ"></div><div class="dRYYxd">   <span class="FqnKTc"></span></nav>
  </form> <?php 


#Programando...
if (isset($_POST['search'])) {

  $nome=mysqli_escape_string($conect, $_POST['nome']);
  $sql="SELECT * FROM cliente WHERE matricula LIKE '%$matricula%'";
  $resultado=mysqli_query($conect, $sql);

 if (mysqli_num_rows($resultado)) {
    
    $data=mysqli_fetch_array($resultado);

      echo $data=['matricula'];
    
  }else {

  echo "Nenhum resultado encontrado!";

  }
}

 ?>

 </nav></center>
<div  class="ul3" > 
  <nav >      
    <ul >
            
                  <li class="list3" >
<a href="man.php" onclick=" "  rel="next"  class="a3 vv" >
<svg width="1.8em" title="Manutenção" height="1.8em" viewBox="0 0 16 16"fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.02­6-.287.445-.445.287-­.026.529L11 13l.242.471.026.529.­445.287.287.445.529.­026L13 15l.471-.242.529-.02­6.287-.445.445-.287.­026-.529L15 13l-.242-.471-.026-.­529-.445-.287-.287-.­445-.529-.026z"/>
</svg><br>
Manutenção</a>  
</li>


<li class="list3"><a href="fat.php"  rel="next"  class="a4 vv" >
<svg width="1.8em" height="1.8em"viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/> </svg>
<br>
 Faturamento
</a>
</li>




<li class="list3">
<a href="func.php" onclick=" "  rel="next" class="a5 vv">
<svg width="1.8em" height="1.8em" viewBox="0 0 16 16"  title="Funcionários"  class="icon4" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg > <br>
Funcionários</a>  
</li> </ul> </nav></div>
 
<div class="ul45" >
<nav >      
    <ul   >
            
                  <li   class="list11">
<a href="car.php" onclick=" " class="a345 vv"  rel="next" ><svg width="1.8em"  height="1.8em" viewBox="0 0 16 16" fill="currentColor"
  xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 
  1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 
  0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.73
  2 0A2 2 0 0 0 12 10V6h1.02a.5.5 0 0 1 .39.188l1.48 1.85a.5.5 0 0 1 .11.313V10.5a.5.5 0 0 1-.5.5h-.768z"/> </svg>
  <br>
    Veículos</a>  
</li>


<li class="list11"><a href="rel.php" class="a34 vv"  rel="next" >
<svg width="1.8em" height="1.8em"  viewBox="0 0 16 16" fill="currentColor"
 xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 
 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-
 2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/></svg><br>
Relatório de Faturamento 
</a>
</li>




<li class="list11"><a href="func1.php" class="a35 vv"  rel="next" > <svg width="1.8em"  height="1.8em" viewBox="0 0 16 16"  title="Funcionários" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg ><br>
Cadastro de Funcionários</a> 
</li>  </ul> </nav>
  
</div>
 
</section>

<script>
  
    

  $('.serv-btn').click(function(){

    $('nav ul .serv-show').toggleClass("show1");

  });
</script>
  </body>
  </html>