<!doctype html> <html itemscope="" itemtype="http://schema.org/WebPage" lang="pt-PT"><head> 
<meta charset="UTF-8"><meta content="origin" name="referrer"><link href="/manifest?pwa=webhp" crossorigin="use-credentials" rel="manifest"><meta content="w-logo-blue.png" itemprop="image">
   
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
<meta name="og:url" content="http://oficina_office.com/nn/fat3.html"><meta name="og:title" content="Oficina Offce">
<link id="favicon" rel="shortcut icon" href="img\return-home-button-png-7.png" type="image/png">
<link rel="stylesheet" href=" ">  
      
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

 <?php


// Copyright (C) Tech Brains Corporation. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.
 #*
 #* This source code is licensed under the Tech Brains
 #* LICENSE file in the root directory of this source tree

 
include_once "backend/banc.php";

session_start();

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
   padding:0;  
   } 
     .h3 { 
      padding-bottom: 9px 14px; 
      border-bottom:1px solid #e0e0e0;
      color:#555454;
      font-size: 21.5px;
      margin: -5px 0 0 0;
      padding: 0 14px; 
    } 
      #main{background: #fff; 
       width:91%;  right:0; 
 padding: 8px 0px 0px 0px;top:76px;
 position:fixed; 
  height:86%; 
       margin: 0px 0 0 0px;
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13); 
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

    body{background:#e9e9e9; 
      user-select: none; 
        font-weight: normal;   

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
      color: #23282d;
    }
    .cto{   
        padding-bottom: 9px 14px;  
      color:#555454;
      font-size: 21.5px;
      margin: -28px 0 5px 0; 
      padding: 0 14px; 
    }
     #of1{ 
     box-shadow:4px 3px 6px 1px rgba(0,0,0,0.1);  
       border-bottom:2px solid rgba(0,0,0,0.1); 
       top:0; width:100%;
        position:fixed;
     background-color:rgb(255, 254, 254);
     padding:30px 0% 30px 0%;
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
  
 
     .left{
    color:#e9e9e9;
    font-size:1.9em;
    position:fixed;margin:.7% 0px 0px 65px 
   } 
#sub-of{  
  margin:.5px 0px 0px -18px ;
  font-size: 17px; text-align:center;
    color:rgb(255, 255, 255); 
  float:left;}
  
   #exit3{
  padding:5.8px 5.4px 5.8px 5.4px;
  right:66px; 
  border-radius:71px 71px 71px 71px;
     position:absolute;
     margin:-11px 0px 0px 0%; 
     font-size:19.6px;
     background:none;  
     outline:none; transition:.9s;
     color:#037db6 ;
     border:none; 
    cursor:pointer; }

   #exit3:hover{
     background:#e9e9e9;
     transition:.5s;}

   .menu{ 
  margin:-.5px 0px 0px 15px ;
       color:#ffff;
       right:1;
       cursor: pointer;
       position:absolute;
     font-size: 17.5px;}
   
             .of{ display: none; }
 
   .btn1 { 
      color: rgba(0, 115, 170, 0.8);
      display: inline-block;
      text-decoration: none;
      font-size: 16px;   
      cursor: pointer;
      -webkit-border-radius: 3px; 
      border-radius: 3.3px;
    transition:1.3s;
            outline: none; 
             right:109px;  
              position:fixed;
      margin:-15.5px 0 0 0px;
      padding:7px 13px;

    }
    .btn2:hover{  
       transition:.5s;
    background:#e9e9e9;
   }
    .data34:focus{  
      border: 1.3px solid #037db6; 
      -webkit-box-shadow: 0 1px 3px #037db6;
        box-shadow: 0 0px 1px .4px #037db6;
          transition:.44s; 
          font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
} 
    #func{padding:0% 1%; 
            margin:1% 1%;
            width:95%; 
} 
 
  #sex3{border:1.4px solid #c9c6c6; 
    padding:.7% 3% 1.3% 3%; margin:.3% 0%;
      width:91%;
  }
   
    #func{padding:0% 1%;  
            width:95%; 
}
 .btn3{
      background:#fafafa;
      border: 1.3px solid rgba(0, 115, 170, 0.8);
      color:rgba(0, 115, 170, 0.8);
      display: inline-block; 
      font-size: 13.3px;   
      cursor: pointer;
      outline:none;  
     right:31px; 
      position:absolute; 
      -webkit-border-radius: 3px;
      border-radius: 3.3px; 
    margin:-121px 0px 0px 0% ; 
    padding:11px 18px;transition:1.3s;
    }
     .btn4{
      background:#fafafa;
      border: 1.3px solid rgba(0, 115, 170, 0.8);
      color:rgba(0, 115, 170, 0.8);
      display: inline-block; 
      font-size: 13.3px;  
      position:absolute; 
      cursor: pointer;
     right:177px;
      outline:none;  
      -webkit-border-radius: 3px;
      border-radius: 3.3px;   
     
    margin:-45px 0px 0px 0% ; 
    padding:11px 18px;transition:1.3s;
    }
    .btn3:hover{  
    color:#fff; 
    border: 1.3px solid #fff;
    transition:.8s;
    background:#e00e0e; 
   }
   .btn4:hover{  
    color:#fff; 
    border: 1.3px solid #fff;
    transition:.8s;
    background: #1ba4a4; 
   }
  
   .bi-caret-left{
    color:#4a7c94;
    font-size:1.3em;
    position:fixed;
      transform: rotate(-90deg);
     margin:6px 0px 0px 35px; 
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
          .gg-redo:active:before   {
              left: -1px; 
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
          .ref:hover .icon4{
              color:#3691bc;
          }
           .ref:hover .icon3{
              color:#3691bc;
          }
           .ref:hover .icon7{
              color:#3691bc;
          }
           .ref:hover .icon5{
              color:#3691bc;
          }
          .ref:hover .icon6{
              color:#3691bc;
          }
          .all_btn:hover{
              background-color:#f1f1f1;
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
}
          @media all and (max-width:9999px) {body{ margin:0 auto;padding:0;
  } #main{   
       width:95%;  
  }
 #field_ontato{ 
    border:none; width:97%;border-top:1px solid #e0e0e0;
    margin:-17px 0px 1px 18px;
  } 
#wells{-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 3px 6px 1px rgba(0, 0, 0, 0.13);

border:1px solid rgba(202, 202, 202, 0.55); 
   width:101%;  
  margin:-21px 0px 1px -6px;   
  padding:19px 1px  9px 7px;     
}  
#sex  {  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.13);
border:1px solid rgba(202, 202, 202, 0.55);
  margin:6px 0px 1px 0%;
padding:13px 8px 13px 39px ; 
width:95%; 
          }
          #ui{
            padding:2px 0px 0px 8px;
          }  
  #one{margin:-5px 0px 0px 0px;
    display:flex;
  }
  #one3{
    display:flex;
    margin:14px 0px 0px 0px;
  }
  #to{ display:flex;
    margin:8px 0px 1px 0%;
padding:5px 8px .7px 39px ;
  }
   
  #te4{
    display:flex;
  }#contato{ margin:-13px 0px 0px 0%;
  display:flex;  padding:18px 0px;
}
  #te5{
    display:flex;
     margin:11px 0px 31px 19px; 
  }.entidade3{font-size:15px;  padding:5px 0px 5px 9px; 
     outline: none; 
      border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
 width:243px;;
   -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
}
  .nome3{font-size:15px; padding:6px 0px 6px 9px;  outline: none;
        border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
background:   rgba(255, 255, 255, 0.5);  
width:249px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
    box-shadow: 0 .4px 0 #ccc;
       
}
.cidade3{font-size:15px; padding:5px 0px 5px 9px;  outline: none;
        border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
background:   rgba(255, 255, 255, 0.5);  
width:230px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
    box-shadow: 0 .4px 0 #ccc;
       
}
.cidade{
  margin:0px 0px 0px 28px; }
.nome{
  margin:0px 0px 0px 28px; }
.Sobrenome{ margin:0px 0px 0px 28px;  }
.Sobrenome3{font-size:15px;  padding:6px 0px 6px 9px; 
   outline: none;  
    border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:232px;
 -webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
      
}
.telefone3{
  font-size:15px; padding:6px 0px 6px 9px;  
   outline: none; 
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:231px; 
 -webkit-border-radius: 3px;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
}
.telefone4{
  font-size:15px; padding:6px 0px 6px 9px;  
   outline: none; 
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:246px; 
 -webkit-border-radius: 3px;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
}
.telefone{
  margin:0px 0px 0px 0px;
}.endereco{
  margin:0px 0px 0px 28px;
}
.endereco3{
  font-size:15px; padding:6px 0px 6px 9px; 
    outline: none;  
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:144%;
 -webkit-border-radius: 3px;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
      
}
.email3{
  font-size:15px; padding:6px 0px 6px 9px; 
   outline: none;
      border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5); width:227px; 
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
  
}
.tel{
 margin:0px 0px 0px 29px;
}
.email{
 margin:0px 0px 0px 34px;
}.matricula{
  margin:0px 0px 0px 35px;
         }
  .matricula3{font-size:15px;  padding:6px 0px 6px 9px; 
     outline: none;   
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:273px;  
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
         }  .modelo3{
           font-size:15px;  padding:6px 0px 6px 9px; 
            outline: none; 
              border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:244px; 
 -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
         }
         .modelo{  
          margin:0px 0px 0px 30px;
         }
         .motor{
          margin:0px 0px 0px 33px; 
         }
.motor3{font-size:15px; padding:6px 0px 6px 9px;  
   outline: none;  
    border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:214px;  
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
      } .cai{
        margin:0px 0px 0px 17px;
         }
         .cai3{
           font-size:15px;  padding:5px 0px 5px 9px; 
           outline: none;  
            border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:240px;
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
         } 

       .Svc3{
         font-size:15px; padding:5px 0px 5px 9px; 
         outline: none; 
           border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:233.6px;  
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       }
         .Svc{
          margin:0px 0px 0px 36.5px;
         } .marca{
          margin:0px 0px 0px 17px;
         }
         .marca3{
           font-size:15px;  padding:6px 0px 6px 9px; 
           outline: none;  
            border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:230px;
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
         }  .veiculo{
          margin:0px 0px 0px 37px;
         }
         .veiculo3{
           font-size:15px;  padding:5px 0px 5px 9px;  
          outline: none;
             border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;rgba(255, 255, 255, 0.5); 
width:235px; 
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
      }
         .combu{
          margin:0px 0px 0px 33px;
         }
         .combu3{
           font-size:15px;  padding:6px 0px 6px 9px;  
          outline: none;
             border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:rgba(0,0,0,.1); 
width:253px; 
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
      }
      .km{font-size:15px;
         padding:6px 0px 6px 9px; 
         outline: none;  
          border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:271px;
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       } 
.km1{
  margin:0px 0px 0px 35px;
}
 .cor3{font-size:15px; padding:6px 0px 6px 9px; 
         outline: none;  
          border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:213px; 
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       } 
.cor{
  margin:0px 0px 0px 35px;
}
         
         .situacao_carro{
          margin:0px 0px 0px 38px;
         }
         .situacao_carro3{
           font-size:15px; padding:6px 0px 6px 9px; 
             outline: none; 
               border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
background:   rgba(255, 255, 255, 0.5);  
width:249px;   
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
       
         }
         .revi{
          margin:0px 0px 0px 38px;
         }
         .revi3{
           font-size:15px; padding:6px 0px 6px 9px; 
             outline: none; 
               border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
background:   rgba(255, 255, 255, 0.5);  
width:231px;   
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
       
         }
           .check{
          margin:0px 0px 0px -19px;
         }
          .check3{
           font-size:15px; padding:6px 0px 6px 9px; 
             outline: none; 
               border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
background:   rgba(255, 255, 255, 0.5);  
width:222px;   
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
       
         }
       
         
        
        
       
          .operador{
            margin:0px 0px 0px 37px;
          }
         .operador3{ 
           font-size:15px;  padding:6px 0px 6px 9px; 
            outline: none;  
             border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:211px;  
 -webkit-border-radius: 3px;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
      } 

 
.data{
  margin:0px 0px 0px -17px;
  }
  .data3{font-size:15px;  padding:5px 0px 5px 9px;  
    outline: none;   
    border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:221px; 
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
      
    } .mec{
      margin:0px 0px 0px 41px;
    }
    .mec3{font-size:15px; padding:6px 0px 6px 9px; 
        outline: none;  
         border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:220px; 
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
      
    } 
       
          .hora3{font-size:15px; padding:5px 0px 5px 9px;  outline: none; 
               border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:236px; 
 -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       }
       
        .hora{
  margin:0px 0px 0px 38px; 
}
    
     .area4{
      margin:0px 0px 0px 41px; 
    }.area{font-size:15px;
   padding:7px 0px 7px 9px;
    outline: none;  
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:433px;  
 -webkit-border-radius: 3px;transition:.7s;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

   .area:focus{
      width:499px; 
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
  
    @media all and (max-width:1684px) {body{margin:0 auto;padding:0;
  }
  .cidade3{  
width:196px;     
}
.cidade{
  margin:0px 0px 0px 18px; }

  .entidade3{

    width:186px;
  }  
   .nome3{ 
width:198px;
       
}
.nome{
  margin:0px 0px 0px 2.3%; 
}
.Sobrenome3{
width:171px;
      
}
.telefone3{ 
width:173px;
       
}
.telefone4{ 
width:195px;
       
}
 
.tel{
  margin:0px 0px 0px 26px; 
}
.Sobrenome{
  margin:0px 0px 0px 2.3%; 
}
.email3{
  width:174px;
}
.telefone{
  margin:0px 0px 0px 3px;
}
.email{
  margin:0px 0px 0px 27px;
}
.endereco{
  margin:0px 0px 0px 1.85%;
}
.endereco3{ 
width:222px;
      
}.matricula{
          margin:0px 0px 0px 1.5%;
         }
  .matricula3{ 
width:211px;
       
         }  .modelo3{
width:193px;
       
         }
         .modelo{  
          margin:0px 0px 0px 27px; 
         }
         .motor{
          margin:0px 0px 0px 23px; 
         }
.motor3{ 
width:180px; 
      } .cai{
          margin:0px 0px 0px 21px;
         }
         .cai3{
width:183px;
       } .Svc3{ 
width:183px;
       }
         .Svc{
          margin:0px 0px 0px 28px; 
         } .marca{
          margin:0px 0px 0px 19px;
         }
         .marca3{ 
width:173px; 
       
         } 
         .veiculo{
          margin:0px 0px 0px 27px;
         }
         .veiculo3{
width:184px; 
      }.km{ 
width:150px;
       }
         .combu{
          margin:0px 0px 0px 27px;
         }
         .combu3{
width:203px; 
      }.km{ 
width:208px;
       } 
.km1{
  margin:0px 0px 0px 21px;
} 
     .cor3{ 
width:177px;
       } 
.cor{
  margin:0px 0px 0px 25px;
}     
         .situacao_carro{
        margin:0px 0px 0px 31px;
         }
        
         .situacao_carro3{
width:198px; 
       
         }

         .revi{
        margin:0px 0px 0px 31px;
         }
        
         .revi3{
width:183px; 
       
         }
          .check{
          margin:0px 0px 0px -18px;
         }
         .check3{
width:168px; 
       
         }
         .mec3{
          width:171px;
         }
        .mec{
          margin:0px 0px 0px 31px;  
        }
        .hora{
          margin:0px 0px 0px 33px;  
         }
        
          .hora3{ 
width:185px; 
       }
          .operador{
            margin:0px 0px 0px 25px;
          }
         .operador3{
width:177px; 
      }
         
 
.data{
    margin:0px 0px 0px -15px;
  }
  .data3{ 
width:163px;
      
    } 
    
    .area{
      width:355px;
       height:34px;
    }
    .area4{
      margin:0px 0px 0px 25px; 
    }
     .area:focus{position:static;
      width:400px; 
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
 
     @media all and (max-width:1343px) {body{ margin:0 auto;padding:0;
  }   #opt{  
        padding:64px 0px 833px 0px; 
         position:fixed;
         top:0;
         width:174px;
  }
  .entidade3{ 
    width:92.4%;
    margin:10px 0px 0px 0px; 
  }
  .nome{
    margin:0 0 0 0;
  }
  .nome3{ 
    width:91%;
    margin:10px 0px 0px 0px; 
  }
.Sobrenome{
    margin:0 0 0 0;
  }
.Sobrenome3{
    margin:10px 0px 0px 0px; 
    width:91%; 
  }
  .endereco{
    margin:0 0 0 0 ;
  }
  .endereco3{
    margin:10px 0px 0px 0px; 
    width:90.9%; 
  } 
  .telefone3{ 
   width:93.3%;
    margin:10px 0px 0px 0px; 
  }
  .telefone{margin:0 0 0 0 ; 
  }
  .email3{
    margin:10px 0px 0px 0px; 
    width:93.3%; 
  }
  .matricula3{ 
    width:89%;
    margin:10px 0px 0px 0px; 
  }
  
  
  .modelo{
    margin:0 0 0 0;
  }
   .modelo3{
    margin:10px 0px 0px 0px; 
    width:89.1%;
  }
  .motor{
    margin:0 0 0 0;
  }
  .motor3{
    margin:10px 0px 0px 0px;  
    width:89%;
  }
  .cai{
    margin:0 0 0 0;
  }

  .cai3{
    margin:10px 0px 0px 0px; 
    width:90%; 
  }
  .Svc{
    margin:0 0 0 0;
  }
  .Svc3{ 
    margin:10px 0px 0px 0px; 
    width:90%;  
  }
  .marca{
   
    margin:0 0 0 0;
  }
  .marca3{
    margin:10px 0px 0px 0px; 
    width:89.3%;  
  }
  
 
  
  
  .combu{
    margin:0 0 0 0 ;
  }
  .combu3{
    margin:10px 0px 0px 0px; 
    width:90%;  
  }
  .km1{
    margin:0 0 0 0;  
  }
  .km{
    margin:10px 0px 0px 0px; 
    width:89%;
  } .cor{
    margin:0 0 0 0;  
  }
  .cor3{
    margin:10px 0px 0px 0px; 
    width:89%;
  }
  .situacao_carro{
    margin:0 0 0 0;
  }
  .situacao_carro3{ 
    margin:10px 0px 0px 0px; 
    width:90.3%; 
  }
   .revi{
    margin:0 0 0 0;
  }
  .revi3{ 
    margin:10px 0px 0px 0px; 
    width:90.3%; 
  } 
   .check{
    margin:0 0 0 0;
  }
  .check3{
    margin:10px 0px 0px 0px; 
    width:90.3%; 
  }
  .data{
    margin:0 0 0 0;
  }
  .hora3{
    margin:10px 0px 0px 0px; 
    width:89%; 
  }
  .matricula{
    
    margin:0 0 0 0
  }
  .veiculo{
    
    margin:0 0 0 0
  }
  .cidade{
    
    margin:0 0 0 0
  }

  .mec{
    margin:0 0 0 0;
  }
  .hora{
    margin:0 0 0 0; 
  }
  .tel{
    margin:0 0 0 0; 
  }
  .mec3{
    margin:10px 0px 0px 0px;  
    width:89%; 
  }


  .telefone4{
    margin:10px 0px 0px 0px; 
   width:93.3%; 
  }
    .operador{
    margin:0 0 0 0
  } 
  .cidade3{
    margin:10px 0px 0px 0px; 
    width:92%; 
  }
  .email{
    
    margin:0 0 0 0
  }
    .operador3{
    margin:10px 0px 0px 0px; 
    width:89%; 
  } 
.data{
  margin:0 0 0 0;
}
.data3{
    margin:10px 0px 0px 0px; 
    width:89%;
}
.veiculo3
{
    margin:10px 0px 0px 0px; 
    width:90%;
}
.area{width:89%;
    margin:10px 0px 0px 0px; 
  height:89%;
}
 
     .area:focus{ 
      width:89%; 
    }
.area4{
  margin:0 0 0 0;
}

  #main{ 
    position:static;
    float:right;  
     padding:0 0 44px 0;margin:0px 0px 27px 0px;  
    margin-top:76px; 
  }
   #one{margin:0px 0px 0px 0px;
    display:block;
  }
  #one3{
    display:block;
    margin:0px 0px 0px 0px;
  }
  #to{ display:block;
padding:0 0 0 0; 
    margin:0px 0px 0px 0px; 
  }#contato{
    display:block;
    margin:19px 0px 11px 0px; 
  }
   .btn3{ position:static;float:right;
      margin:44px 0 0 55%;  
    }
    .btn4{ position:static;
      margin:30px 0 0 0;  float:right;
    }
  #te4{
    display:block;
  }
  #te5{
    display:block; 
    margin:0px 0px 0px 0px; 
  } 
  #field_ontato{
      margin:16px 0px 0px 0px;
  } 
    #wells{
        padding-bottom:66px; 
    }
      #of2{ padding:19.3px 0 19.3px 93px; width:99px; }
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

#sex  {  box-shadow:none;border:none;
  margin:6px 0px 1px 0%;
padding:13px 0 13px 0; 
width:90%; 
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
   
   }
  
   @media all and (max-width:642px) {body{ margin:0 auto;padding:0;
  } 
  #atualizar{     
             width:33%;  
             padding:6px 11px 4px 4px; position:fixed;
             top:47px ;right:199px ;float:none; 
   } 
    
   #inputatualizar{ 
    width:74%;  
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
    .menu5{   
    margin:-32px 0px 0px -29px; 
}
   #dashbord{
    width:76px;
  }
    
   #of2{  padding:34px 0 34px 39px; width:37px; 
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

    }.feat-show{
      position: static;
      display: none;

    }


    nav ul .feat-show.show{

      display: block;

    }

    nav ul .serv-show.show1{

      display: block;

    } 

.i ul{
      position: absolute;
      top:50%;
      left:50%;
      transform: translate(-50%,-50%);
      margin:0;
      padding:0;
      display:flex;
      margin-top:-30px;

    }

    .i ul li{
      list-style: none;
      width:10px;
      height: 10px;
      background: #eac5d870;
      margin:0 5px;
      border-radius:50%;
      animation: animate 1.4s linear infinite;  
    }
   @keyframes animate{
      0%{
        transform: translateY(0);
      }
      60%{
        transform: translateY(0);
      }
      80%{
        transform: translateY(-20px);
      }
      100%{
        transform: translateY(0px);
      }
    }

   .i ul li:nth-child(1){
      animation-delay:0;
    }
   .i ul li:nth-child(2){
      animation-delay:-1.2s;
    }
   .i ul li:nth-child(3){
      animation-delay:-1s;
    }
   .i ul li:nth-child(4){
      animation-delay:-.8s; 
    }
   .i ul li:nth-child(5){
      animation-delay:-.6s;
    }



 </style></head>
  
  <body >    
  <div id="of1">  
<a href='car.php' class="btn1 btn2" title="Histórico" rel="next" >Víaturas</a>
  
    <a href="JavaScript:window.location.reload()" name="" id="exit3"   title="Atualizar" onclick="" > 
     <i class="gg-redo"></i> </a> 
<!--exit button -->


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
      <a href="man.php" class="ref feat-btn"  rel="next"  style="background:#1e1e1e; "> 
 <span   style="  color:#00b7ff"><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/> <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/> </svg>
 
 </span> <svg width="1em" class="left" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
</svg><br><span class="ref_none">Manutenção </span>
 
      </a>

     
    </li>

    
 <li class="list"><a href="fat.php" class="ref"  rel="next" >
  
 <span style=" color:#4a7c94">  
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon5" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/> </svg>

 </span>  
<br> <span class="ref_none">
Faturamento</span> 
</a> 
</li>

 
  
 <li class="list">

<a href="#" class="ref serv-btn"  rel="next" > <span style="  color:#4a7c94">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16"  title="Funcionários"  class="icon4" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg > 
</span> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi-caret-left icon2" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
</svg> <br> <span class="ref_none">  Funcionários</span> 
   </a>
  
  <ul class="serv-show">
    <li class="list"><a href="func.php" class="ref_seconde">Funcionários</a></li>
    <li><a href="func1.php" class="ref_seconde">Novo Registo</a></li>
  </ul>

</li>
 
 
 <li class="list"><a href="car.php"   rel="next"  class="ref" >
 
 <span  style=" color:#4a7c94 ">  
<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon3" fill="currentColor"
  xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 
  1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 
  0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.73
  2 0A2 2 0 0 0 12 10V6h1.02a.5.5 0 0 1 .39.188l1.48 1.85a.5.5 0 0 1 .11.313V10.5a.5.5 0 0 1-.5.5h-.768z"/> </svg>
  
 </span>  
 <br>   <span class="ref_none">
 Veículos </span> </a> 
 </li>
  
  
  
 

  
<li class="list"><a href="rel.php" class="ref"  rel="next" >
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
 </span> 
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

    <h3 style=" font-weight:normal;" class="h3"> 
<svg width=".7em" height=".7em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> 
<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> </svg>Informações do Cliente</h3>
    
 
<div id="ui">
 
 

<form method="POST" id="form" name="" action="backend/conexao.php">


  <nav id="te5">
<br>
    <label class="entidade" >Entidade*<br><select id=""  name="entidade" class="entidade3 data34 all_btn" maxlength="20">
  <option>Cliente</option>
<option>Empresa</option>
 

</select>
</label> <br><br>
<label class="nome">Nome<br><input type="name" name="nome" class=" nome3 data34 all_btn" id="" maxlength="35" required="required"> </label><br><br>
<label class="Sobrenome ">Sobrenome <br><input type="nickname" class=" Sobrenome3 data34 all_btn" name="sobrenome" maxlength="35"  id="" required="required"> </label> <br><br>
<label class="cidade">Cidade<br><select id="" name="cidade" class="cidade3 data34 all_btn" maxlength="8">
  <option>Luanda</option>
<option>Outro</option>
 

</select></label> <br><br>
 <label class="endereco">Endereço* <br>

  <input type="text" name="local1" class="endereco3 data34 all_btn" maxlength="45" list="op" id="" required="*"> </label>
 <datalist id="op">

<option>Viana</option>
<option>Kilamba</option>
<option>Golf1</option>
<option>Golf2</option>
<option>Talatona</option>
<option>Calemba2</option>
<option>Benfica</option>
<option>Camama</option>
<option>Jardim do Eden</option>
<option>11 de novembro</option>
<option>Maianga</option>
<option>Alvalade</option>
<option>Ramiros</option>
<option>Simione</option>
<option>Futungos</option>
<option>Morro Bento</option>
<option>Bairro Popular</option>
<option>Martes</option>
<option>São Paulo</option>
<option>Ilha</option>
<option>Mutamba</option>
<option>Nova vida</option>
<option>Cazenga</option>
<option>Cuca</option>
<option>Cacuaco</option>
<option>Sequele</option>
<option>Condomínio Y</option>
<option>outro</option>

</datalist>
</label><br>
</nav><fieldset id="field_ontato">
  
 <label>&nbsp;&nbsp;&nbsp;Contacto&nbsp;&nbsp;&nbsp;</label> <nav id="contato">
 

 <label class="telefone">Telefone </br><input type="number" name="telefone" class="telefone3 data34 all_btn" id="" maxlength="14" placeholder="+244" required="required"></label> <br><br><label class="tel">Telefone(opcional)</br><input type="number" name="telefone2" maxlength="14" class="telefone4 data34 all_btn" id=""  placeholder="+244">


 </label>

 </br><br>
 <label  class="email">E-mail</br><input type="text" name="email" class="email3 data34 all_btn" placeholder="@Gmail" maxlength="50" id=""></label><label style="margin-top:23px; letter-spacing:1px;"><?php 

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


  <style type="text/css"> 

    .ui{color:#43dc11;font-weight:bold;font-size: 18px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

} </style> 
 </nav></fieldset > 
<label>  &nbsp;&nbsp;&nbsp;<b><h1 class="cto" style=" font-weight:normal;"><svg width=".7em" height=".7em" viewBox="0 0 16 16" class="icon3" fill="currentColor"
  xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 
  1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 
  0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.73
  2 0A2 2 0 0 0 12 10V6h1.02a.5.5 0 0 1 .39.188l1.48 1.85a.5.5 0 0 1 .11.313V10.5a.5.5 0 0 1-.5.5h-.768z"/> </svg>
  Cadastro da Viatura</h1>  </b>&nbsp;&nbsp;&nbsp; </label>
<fieldset id="wells">  
 
<nav id="one"> 
<label class="marca">Marca<br><input type="text" name="marca" class=" marca3 data34 all_btn" list="p" id="" maxlength="50" required="required"><datalist id="p" class="">

<option>Toyota</option>
<option>Nissan</option>
<option>Hyundai</option>
<option>Kia</option>
<option>Audi</­option>
<option>Land Rover</option>
<option>Chevrolet</option>
<option>Citroen</option>
<option>Dacia</option>
<option>Lexus</option>
<option>Renalt Duster</option>
<option>Mitsubishi</option>
<option>Peugeot</option>
<option>Suzuki</option>
<option>VolksWagen</option>
<option>Volvo</option>
<option>Seat</option>
<option>Renault</option>
<option>Mercedes-Ben­z</option>
<option>Mazda</option>
<option>Jeep</option>
<option>Infinit</option>
<option>Jaguar</option>
<option>Ford</option>
<option>Fiat</option>
<option>Ferrari</option>
<option>Maserati</option>
<option>Porsche</option>
<option>Rolls Royce</option>
<option>Subaru</option>
<option>Dodge</option>
<option>Jeepp</option>
<option>Lexus</option>
<option>Gmc</option>
<option>Land Rover</option>
<option>Porsche</option>
<option>Forde</option>
<option>Nissan</option>
<option>Honda</option>
<option>Mercedes-Benz</option>
<option>Volkswagen</option>
<option>Dodje</­option>
<option>BMW</option>
<option>Bentley</option>
<option>Alfa Romeo</option>
<option>Range Rover</option>
<option>Tesla</option>
<option>Honda</option>
<option>Mini</option>
<option>Opel</option>

 
</datalist> 
</label> </br><br><label class="modelo">Modelo <br><input type="text" name="modelo" class=" modelo3 data34 all_btn" id="" maxlength="40" required="required"></label>
  </br><br><label class="veiculo" >Class<br>

 <select id="" name="classe" class="veiculo3 data34 all_btn">

<option>Jeep</option>
<option>Turismo</option>
<option>Carrinha</option> 
<option>Caminhão</option>

</select>

</label></br> <br>

<label class="motor ">Nº do Motor*<br> <input type="text" class=" motor3 data34 all_btn" name="motor" maxlength="40" placeholder="+" id="" ></label>
</br> <br>
<label class="matricula">Matrícula <br><input type="numbers" class=" matricula3 data34 all_btn" name="matricula" id="" maxlength="50" required="required"> </label></br> 
   
 
</nav > 
<nav id="one3"  > <br> <label class="cai">Caixa<br> <select id=" " name="caixa" class=" cai3 data34 all_btn">

<option>Automático</option>
<option>Manual</option>  
</select></label><br> <br>
<label class="combu">Combustível<br> <select id="" name="combustivel" class=" combu3 data34 all_btn">

<option>Gasolina</option>
<option>Gasóleo</option>
<option>Etól</option>

</select>
</label><br> <br>
<label class="Svc" >Serviço <br><select id="" name="servico" class=" Svc3 data34 all_btn">

<option>Particular</option>
<option>Colectivo</option>
<option>Empresa</option>

</select>
</label><br><br><label class="cor">Cor*<br><input type="text" name="cor" class="cor3 data34 all_btn" list="o" id="" maxlength="20" required="*"><datalist id="o" class="">

<option>Vermelho</option>
<option>Verde</option>
<option>Branco</option>
<option>Azul</option>
<option>Laranja</option>
<option>Cinczento</option>
<option>Preto</option>
<option>Castanho</option>


</datalist> </label>
</label><br><br><label class="km1">Km Actual<br><input type="number" name="km" class="km data34 all_btn" id="" required="required" maxlength="7"></label><br><br>
</nav>  
 
<fieldset id="sex" > 
<legend>&nbsp;&nbsp;&nbsp;<b>Detalhes</b>&nbsp;&nbsp;&nbsp;</legend>
<nav id="one">  
<label class="check">Manutenção<br> 
 <input type="text" id="" list="h" name="checagem"
class="check3 data34 all_btn" required="" maxlength="">
<datalist id="h"  > 
<option>Revisão Geral</option>
<option>Alinhar Direcção</option>
<option>Embraagem</option>
<option>Equilibrar rodas</option>
<option>Filtro de Ar</option>
<option>Filtro de Gasóleo</option> 
<option>Filtro de Óleo</option> 
<option>Inspecção</option> 
<option>Lavagem</option> 
<option>Luzes</option> 
<option>Mudar Óleo</option> 
<option>Serviço de Pintura</option> 
<option>Substituir Correias</option>
<option>Substituir correia de Distribuição</option>

<option>Suspensão</option>
<option>Travões</option>
<option>Velas</option>
<option>Outros</option> 
<datalist>
</label>
   <br><br>
<label class="situacao_carro">Situação<br> <select id="" name="situacao" class="situacao_carro3 data34 all_btn">


<option>Normal</option>
<option>Razoável</option>
<option>Grave</option>
<option>Critíca</option>

</select>
</label><br><br>

 <label class="revi">Nº de Revisão<br> <select id=""  name="revisao" class="revi3 data34 all_btn" maxlength="19">


<option value="1">primeira revisão</option>



</select>
</label><br><br>
 <label class="area4"><span >Observa­ção</span> </br><textarea name="observacao" maxlength="100" id="" class="area  data34 all_btn" required="*"></textarea> </label> 


  </nav > 
  
 
</fieldset>
<nav id="to">   
  
 <label class="data">Proxima revisão<br><input type="date" name="datac" class="data3 data34 all_btn" id=""  required="*"></label></br> <br>
 <label class="hora">Hora <br><input type="time" name="hora" class="hora3 data34 all_btn" id=""  required="*"></label><br><br>
  
<label class="mec">Mecânico<br> <input type="name" class="mec3 data34 all_btn" name="mecanico" id="" maxlength="45" required="*"></label> <br><br>
 <label class="operador">Operador/a*<br></span> <input type="name" name="operador" class="operador3 data34 all_btn"  maxlength="45" id="" required="*"></label> 
 </nav > <br><span  style=" color:rgba(0,0,0,.5);margin:0px 0px 0px 19px; ">Será um prazer cadastrar o novo cliente!</span></label>   
<br>  </fieldset>  
 
<input type="submit" name="cad" class="btn4" onclick="return confirm('Confirme a operação' ); return false;" value="Cadastrar">
<br><br><br><br>
<input type="reset"  name="" onclick="return confirm('Confirme a operação' ); return false;" class="btn3"  value="Limpar Campos">




 <?php

session_unset();
 
 

  ?>
 </form>

</div>
 
 
</section>



<script>
  
  $('.feat-btn').click(function(){

    $('nav ul .feat-show').toggleClass("show");
   
  });

  $('.serv-btn').click(function(){

    $('nav ul .serv-show').toggleClass("show1");

  });
</script>
 
  </body>
  </html>