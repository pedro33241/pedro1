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
<meta name="og:url" content="http://oficina_office.com/nn/fat3.html">
<meta name="og:title" content="Oficina Offce"><link id="favicon" rel="shortcut icon" href="img\return-home-button-png-7.png" type="image/png">
<link rel="stylesheet" href=" ">  
     
<?php
// Copyright (C) Tech Brains Corporation. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.
 #*
 #* This source code is licensed under the Tech Brains
 #* LICENSE file in the root directory of this source tree

require_once "backend/banc.php";
session_start();


?>

<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>  
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
 
 
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
      padding: 6px 14px; 
    }
    h1{   
      color:#555454;
      font-weight:bolder; 
      font-size: 21px;
      margin: -5px 0 0 0;
      padding: 6px 14px;
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
 
   #main{background: #fff; 
       width:91%;  right:0; 
 padding: 8px 0px 0px 0px;top:76px;
 position:fixed; 
  height:86%; 
       margin: 0px 0 0 0px;
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13); 
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
     
     
     
     .left{
    color:rgba(0,0,0,0.1);
    font-size:1.9em;
    position:fixed;margin:.7% 0px 0px 64px 
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
     border:none;  transition:.9s;
    cursor:pointer;
     transition:.9s; }

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
    display: none; }
 
   
   .btn1 { 
      color: rgba(0, 115, 170, 0.8);
      display: inline-block;
      text-decoration: none;
      font-size: 16px;   
      cursor: pointer; transition:.9s;
      -webkit-border-radius: 3px; 
      border-radius: 3.3px;
    transition:1.3s;
            outline: none; 
             right:109px;  
              position:fixed;
      margin:-15.5px 0 0 0px;
      padding:7px 13px;

    }.btn2:hover{   transition:.5s;
    background:#dcdcdc;
   }
    .data34:focus{  
      border: 1.3px solid #037db6;
       -webkit-box-shadow: 0 1px 3px #037db6;
        box-shadow: 0 0px 1px .4px #037db6;
         transition:.4s;
         font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
} 
    #func{padding:0% 1%; 
            margin:1% 1%;
            width:95%; 
}  
  #sex3{border:1.4px solid #c9c6c6; 
    padding:.7% 3% 1.3% 3%; 
    margin:.3% 0%;
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
    margin:-106px 0px 0px 0% ; 
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
     
    margin:-106px 0px 0px 0% ; 
    padding:11px 18px;transition:1.3s;
    }
    .btn4:hover{  
    color:#fff; 
    border: 1.3px solid #1ba4a4;
    transition:.8s;
    background: #1ba4a4; 
   }
   .btn3:hover{  
    color:#fff;  border: 1.3px solid #e00e0e;
    transition:.8s;background:#e00e0e;  
   }
  .bi-caret-left{
    color:#4a7c94;
    font-size:1.3em;
    position:fixed;
      transform: rotate(-90deg);
     margin:6px 0px 0px 35px;    }
    .left{
    color:#e9e9e9;font-size:1.9em;position:fixed;margin:.7% 0px 0px 64px
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
  } 
 
#wells{border:none; 
  margin:-44px 0px 1px -6px; 
  padding:0px 1px 0px 7px;
}  
#detalhe{ 
   -webkit-box-shadow: 0 1px 3px #e6e3e39a;
        box-shadow: 0 1px 6px 1px #e6e3e39a;
border:1px solid rgba(202, 202, 202, 0.55);
  margin:19px 0px 1px 0%; 
padding:5px 8px 16px 39px ; 
width:97%; 
          }
          #ui{
            padding:2px 0px 0px 8px;
          }  
  #one{margin:11px 0px 0px 0px;
    display:flex;
  }
  #manutencao1{
    display:flex;
    margin:14px 0px 0px 0px;
  }
  #to{ display:flex;
padding:5px 0px 0px 39px ; 
    margin:19px 0px 14px 0px; 
  }
   
  #te4{
    display:flex;
  }
  #te5{
    display:flex;
     margin:24px 0px 31px 19px; 
  }
   .entidade3{font-size:15px;  padding:5px 0px 5px 9px; 
     outline: none; 
      border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:#ececec;  
 width:235px;;
   -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
}
 .nome3{font-size:15px; padding:6px 0px 6px 9px;  outline: none;
        border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
background: #ececec;  
width:249px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
    box-shadow: 0 .4px 0 #ccc;
       
}
.nome{
  margin:0px 0px 0px 28px; }

  .Sobrenome{ margin:0px 0px 0px 28px;  }
.Sobrenome3{font-size:15px;  padding:6px 0px 6px 9px; 
   outline: none;  
    border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:#ececec;  
width:232px;
 -webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
      
}
.endereco{
  
  margin:0px 0px 0px 28px;
}
.endereco3{
  font-size:15px; padding:5px 0px 5px 9px;  outline: none;
        border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
background:   rgba(255, 255, 255, 0.5);  
width:230px;
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
width:130%;
 -webkit-border-radius: 3px;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
     
}  
.telefone{
  margin:0px 0px 0px 28px;
}
.matricula3{
           font-size:15px;  padding:6px 0px 6px 9px; 
           outline: none;  
            border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background: #ececec;  
width:227px;
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
           }
         .matricula{
          margin:0px 0px 0px 19px; 
         }  
      .km3{ font-size:15px;  padding:6px 0px 6px 9px; 
            outline: none; 
              border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:229px; 
 -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
          } 
.km1{
 margin:0px 0px 0px 33px;
        }
.check{
  
          margin:0px 0px 0px 33px;
}
        .check3{
            font-size:15px;  padding:5px 0px 5px 9px;  
          outline: none;
             border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;rgba(255, 255, 255, 0.5); 
width:245px;  
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
     
        }
        .cor{
           margin:0px 0px 0px 33px; 
         
        }
    .cor3{
      font-size:15px; padding:6px 0px 6px 9px;  
   outline: none;  
    border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
  
 background:  rgba(0,0,0,.1);
width:221px;  
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
color:red;
     
    }
.servico3{font-size:15px;  padding:6px 0px 6px 9px; 
     outline: none;   
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background: #ececec;   
width:241px;  
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
      }
         .servico{
          margin:0px 0px 0px 35px;
       }
       .revi{
        margin:0px 0px 0px -19px;
         }
         .revi3{
           
           font-size:15px; padding:6px 0px 6px 9px; 
             outline: none; 
               border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
background:  #ececec;  
width:220px;   
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
       
        } 

               
       .situacao{
          margin:0px 0px 0px 37px;
         }
         .situacao3{
           font-size:15px; padding:6px 0px 6px 9px; 
             outline: none; 
               border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
width:242px;   
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
       
         }
        
       
        .numer_revi{
          margin:0px 0px 0px 36px;
         }
        .numer_revi3{
           font-size:15px; padding:6px 0px 6px 9px; 
             outline: none; 
               border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
width:224px;   
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
width:217px; 
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
      
    }
     .mecanico{
      margin:0px 0px 0px 41px;
    }
    .mecanico3{font-size:15px; padding:6px 0px 6px 9px; 
        outline: none;  
         border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:221px; 
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
    
  }   .area4{
      margin:0px 0px 0px 36px; 
    }.area{font-size:15px;
   padding:7px 0px 7px 9px;
    outline: none;  
    text-align: justify;
    height:50px;
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:177%;  
 -webkit-border-radius: 3px;
 border-radius: 3px;transition:.4s;
  box-shadow: 0 .4px 0 #ccc;
font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
} 

      .area:focus{
      width:211%;
       height:50px;
     
       
    }
          .operador{
            margin:0px 0px 0px 41px;
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
  
  
}     @media all and (max-width:4723px) {body{ margin:0 auto;padding:0;
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
 
      @media all and (max-width:1716px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:87%;    
  }
  }
     @media all and (max-width:1623px) {body{ margin:0 auto;padding:0;
  }
  #to{   
    margin-left:-15px; 
  }
     .endereco3{ 
width:196px;    
}
.endereco{
  margin:0px 0px 0px 23px; }
 .entidade3{

    width:173px;
  }  
   .nome3{ 
width:198px;
       
}
.nome{
  margin:0px 0px 0px 23px; 
}
.Sobrenome3{
width:171px;
      
}

.Sobrenome{
  margin:0px 0px 0px 23px;  
}
.telefone{
  
  margin:0px 0px 0px 23px; 
}
.telefone3{width:200px;
  
} 
 .matricula{
          margin:0px 0px 0px 19px;
         }
         
 .matricula3{
        width:168px;   }
        .km1{
          margin:0px 0px 0px 30px;
         }
         .km3{
width:164px; 
      }
       .check3{
         width:191px;
       }  
       .check{  
          margin:0px 0px 0px 27px; 
         }
   .cor{
          margin:0px 0px 0px 31px; 
         }
.cor3{ 
width:189px; 
      }  .revi{
          margin:0px 0px 0px -18px;
         }
         .revi3{
width:162px; 
       
         }
           .servico{
  margin:0px 0px 0px 23px; 
         }
  .servico3{ 
width:200px;
       
         } 
         
        .situacao{
        margin:0px 0px 0px 29px;
         }
        
         .situacao3{
width:189px; 
       
         }
           .numer_revi{
        margin:0px 0px 0px 31px;
         }
        
         .numer_revi3{
width:164px; 
       
         } 
         .mecanico3{
width:161px; 
         }
        .mecanico{ 
          margin:0px 0px 0px 34px; 
        }
        .hora{ 
            margin:0px 0px 0px 32px;  
         }
        
          .hora3{  
width:186px; 
       }
          .operador{ 

          margin:0px 0px 0px 34px; 
          }
         .operador3{   width:180px;
      }
         
 
.data{     margin:0px 0px 0px -3px; 
          
  }
  .data3{ 
          width:160px;
      
    } 
    
    .area{
      width:337px;
       height:35px;transition:.7s;
    }
    .area4{ margin:0px 0px 0px 31px;  
    }
    .area:focus{
      width:411px; 
       height:35px;
    }
  }  
   
   
      @media all and (max-width:1372px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:85%;    
  }
   
  } 
     
     @media all and (max-width:1334px) {body{ margin:0 auto;padding:0;
  }   #opt{  
        padding:64px 0px 833px 0px; 
         position:fixed;
         top:0;
         width:174px;
  }.entidade3{
  width:90%;
    padding:4px 0px 4px 7px;
 }
  .nome3{ 
    width:89%;
    padding:4px 0px 4px 7px;
  }
 .nome{
  margin:0px 0px 0px 0px;
 } .telefone3{
  width:89%;
    padding:4px 0px 4px 7px;
 }.telefone{
  margin:0px 0px 0px 0px;
 }
 .matricula3{
  width:89%;
    padding:4px 0px 4px 7px;
}
.check3{
  
  width:89%;
    padding:4px 0px 4px 7px;
}
.check{
  margin:0px 0px 0px 0px;
}
.Sobrenome3{
  
  width:89%;
    padding:4px 0px 4px 7px;
}
.Sobrenome{
  margin:0px 0px 0px 0px;
}
.revi3{
  
  width:89%;
    padding:4px 0px 4px 7px;
}
.revi{
  margin:0px 0px 0px 0px;
}
.operador{
  margin:0px 0px 0px 0px;
}

.cor3{
  
  width:89%;
    padding:4px 0px 4px 7px;
}
.cor{
  margin:0px 0px 0px 0px;
}
.endereco3{
  
  width:89%;
    padding:4px 0px 4px 7px;
}
.endereco{
  margin:0px 0px 0px 0px;
}
.matricula{
  margin:0 0 0 0;
}
  .km{
    margin:8px 0px 8px 11px;  
  }
  .km3{ width:89%;
    padding:4px 0px 4px 7px;
  }
  .servico{
    margin:0px 0px 0px 0px;
  }
  .servico3{ width:89%;
    padding:4px 0px 4px 7px; 
  }
  
      
 .situacao{
    margin:0 0 0 0 ;
  }
  .situacao3{  width:89%;
    padding:4px 0px 4px 7px; 
  }
  .numer_revi{
    margin:0 0 0 0 ;
  }
  .numer_revi3{  width:89%;
    padding:4px 0px 4px 7px; 
  }
  .mecanico{
    margin:0 0 0 0;
  }
  .mecanico3{ width:89%;
    padding:4px 0px 4px 7px; 
  }
  
    .operador3{ width:89%;
    padding:4px 0px 4px 7px; 
  } 
.data{
  margin:0 0 0 0;
}
.data3{ width:89%;
    padding:4px 0px 4px 7px;
}
  .hora{
  margin:0 0 0 0;
}.hora3{
  width:89%;
    padding:4px 0px 4px 7px;
} .area4{
  margin:0 0 0 0;
}
.area{
  width:89%;
    padding:4px 0px 4px 7px;
}
.area:focus{ 
      width:89%; 
    }

#detalhe{  box-shadow:none;border:none;
  margin:6px 0px 1px 0%;
padding:13px 8px 13px 39px ; 
width:90%; 
          }
  #main{ 
    position:static;
    float:right;height:144%;
    margin-top:76px; margin:0px 0px 27px 0px; 
     padding:0 0 66px 0; 
  }
   #one{margin:0px 0px 0px 0px;
    display:block;
  }
  #manutencao1{
    display:block;
    margin:0px 0px 0px 0px;
  }
  #to{ display:block;
    margin:0px 0px 0px 0px; 
  }
   .km1{
   margin:0px 0px 0px 0px;  
   }
    .btn3{ position:static;float:right;
      margin:37px 0 0 0;  
    }
    .btn4{ position:static;
      margin:-44px 0 0 0;float:right;
    } 
  #te4{
    display:block;
  }
  #te5{
    display:block; margin:0px 0px 0px 0px; 
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
#detalhe{  
  margin:19px 0px 1px 0%; 
padding:0 0 0 0;  
          }#to{ display:block;
    margin:0 0 0 0; padding:0 0 0 0;
  
  }    }

   
    
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
     
  } @media all and (max-width:850px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:76%;    
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

    } 


    nav ul .feat-show.show{

      display: block;

    }

    nav ul .serv-show.show1{

      display: block;

    } 
 </style></head>
  
  <body >    
  <div id="of1">  
<a href='car.php' class="btn1 btn2" title="Histórico"  rel="next" >Víaturas</a>
  
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
    <a href="home" class="ref"  rel="next" >
   
 <span style=" color:#4a7c94 ">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25­-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/> <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> </svg>

 </span>  
 <br> <span  class="ref_none" >Início </span> </a>  
 </li>
 
 <li class="list">
      <a href="man.php" class="ref feat-btn" style="background:#1e1e1e; "  rel="next" > 
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
    <li class="list"><a href="func.php" class="ref_seconde"  rel="next" >Funcionários</a></li>
    <li><a href="func1.php" class="ref_seconde">Novo Registo</a></li>
  </ul>

</li>
 
 
 <li class="list"><a href="car.php"  class="ref"  rel="next" >
 
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
       <?php 

include_once "backend/banc.php";

 if (isset($_GET['id'])) {
  
  $id=mysqli_escape_string($conect, $_GET['id']);

  $sql="SELECT * FROM manutencao WHERE id = '$id'";
  $data=mysqli_query($conect, $sql);
  $dados=mysqli_fetch_array($data);
}
 
  ?>
    
  <div id="func">

    <h3 style=" font-weight:normal;" class="h3"> 
<svg width=".7em" height=".7em" viewBox="0 0 16 16" class="icon3" fill="currentColor"
  xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 
  1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 
  0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.73
  2 0A2 2 0 0 0 12 10V6h1.02a.5.5 0 0 1 .39.188l1.48 1.85a.5.5 0 0 1 .11.313V10.5a.5.5 0 0 1-.5.5h-.768z"/> </svg> Revisão da Viatura</h3>
    
 
<div id="ui">

<form  action="backend/update.php" method="POST">
  <input type="hidden" name="sim" value="<?php echo $dados['id'];?>">
  <nav id="te5">

<br>
  <label class="entidade" >Entidade<br><input type="text"  id="" readonly="readonly"  name="entidade" class="entidade3 data34 all_btn" value="<?php echo $dados['entidade'];?>">

</label> <br><br>
<label class="nome">Nome*<br><input type="text" name="nome" required="*" readonly="readonly" value="<?php echo $dados['nome'];?>" class=" nome3 data34 all_btn" id="" > </label><br><br>
<label class="Sobrenome">Sobrenome <br><input type="text" required="*" readonly="readonly" class="Sobrenome3 data34 all_btn" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" maxlength="50"  id=""> </label> 
 <br><br>
<label class="endereco">Endereço* <br><input type="text" title="mudou de endereço?" required="*" name="local1" class=" endereco3 data34 all_btn" maxlength="44" list="op" id="" placeholder="" > </label>
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
</label>
<br><br><label class="telefone">Telefone <br><input type="text" title="mudou de telefone?" name="telefone" required="*" class=" telefone3 data34 all_btn" placeholder="+244" maxlength="13" id="" ></label>
 
<br><br>
</nav> <div style="border-top:1px solid #e0e0e0"><br><br>
<fieldset id="wells"> 
 &nbsp;&nbsp;&nbsp;<b><h1 id="" style=" font-weight:normal;">
  Checando Viatura</h1>  </b>&nbsp;&nbsp;&nbsp; 
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
<nav id="manutencao1"  ><label class="matricula">Matrícula <br><input title="matricula do veículo" type="numbers" value="<?php echo $dados['matricula'];?>" readonly="readonly" class=" matricula3 data34 all_btn" name="matricula" id="" required="*"> </label></br> <br> 
<label class="check">Revisão<br> <input type="text" list="y" title="digite o problema actual"  id="" name="checagem" class="check3 data34 all_btn">
<datalist id="y">
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
</datalist>
</select>
</label><br><br> <label class="km1">Km Actual<br><input type="number" title="digite o km actual" name="km" class="km3 data34 all_btn" id="" maxlenght="13" required="*" ></label>
<br> <br><label class="cor">Cor <br><input type="text" style="color:black;" name="cor" value="<?php echo $dados['cor'];?>"  title="cor do veículo" class="cor3 data34 all_btn" id="" required="*"></label>
<br><br>
<label class="servico" >Serviço <br><input type="text" id="" list="h" name="servico" value="<?php echo $dados['servico'];?>" readonly="*" class="servico3 data34 all_btn">
<br><br>
<datalist id="h">
<option>Particular</option>
<option>Colectivo</option>
<option>Empresa</option>
</datalist>
</select>
</label>  </nav>  
 
<fieldset id="detalhe" > 
<legend>&nbsp;&nbsp;&nbsp;<b>Detalhes</b>&nbsp;&nbsp;&nbsp;</legend>
<nav id="one"> <br> 
 <label class="revi">Informações acerca<br> <input type="name" style="height:px; text-align:justify;" value=" aqui!" title="O Sr.  efectuou a ultima revisão as <?php echo $dados['hora'];?>" class="revi3 data34 all_btn" readonly="readonly" name="" id="" ></label> 
<br> <br>
<label class="situacao">Situação<br> <input type="text" name="situacao" list="o" id=""  value="<?php echo $dados['situacao'];?>" class="situacao3 data34 all_btn">

<datalist id="o">
<option>Normal</option>
<option>Razoável</option>
<option>Grave</option>
<option>Critíca</option>
</datalist>

</select>
</label><br> 
<br>
 <label class="numer_revi">Nº de Revisões Executadas<br> <input type="text" list="g" id="" title="numero de revisões" value="<?php echo $dados['revisao'];?>" name="revisao" class="numer_revi3 data34 all_btn" maxlength="14">

<datalist id="g">

<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option> 
<option>Cliente regular</option>
</datalist>

</label><br>
 
  <br>
  <label class="area4">Observa­ção</br><input  name="observacao" required="required" title="Detalhes da ultima revisão" id="" class="area  data34 all_btn" maxlength="175" required="*"> </label> <label style="margin-top:23px;margin-left: 12%;letter-spacing:1px;">  
 </label>

 


 </label>
  </nav >
 
</fieldset> 
<nav id="to"> <br>
 <label class="data">Proxíma Revisão<br><input type="date" name="datac" title="ultima revisão executada a <?php echo $dados['datac'];?>" value="" class="data3 data34 all_btn" id="" ></label><br><br>
<label class="hora">Hora<br><input type="time" required="required" name="hora" title="hora da ultima revisão <?php echo $dados['hora'];?> " class="hora3 data34 all_btn" id="" value=""></label>
   <br>
<br>
<label class="mecanico">Mecânico<br> <input type="name" required="required" class="mecanico3 data34 all_btn" title="mecanico responsável - <?php echo $dados['mecanico'];?>" name="mecanico"  id=""></label> 
<br><br>
 <label class="operador"><span >Operador/a<br></span> <input type="name" required="required"  title="Foi atentido pela ultima vez por <?php echo $dados['operador'];?> " class="operador3 data34 all_btn"  value="" name="operador" id="" ></label>
</nav > <br> 

</fieldset> <br> </label>
  <br>  <br>
 <br><br>
<input type="submit" name="updater" class="btn4"  onclick="return confirm('Confirme a operação' ); return false;" value="Efetuar Manutenção ">
<input type="reset" name="" class="btn3" onclick="return confirm('Confirme a operação' ); return false;" value="Limpar Campos">
 <br>
 </form>
</div>
 
 
</section>




<script>
  
  

  $('.serv-btn').click(function(){

    $('nav ul .serv-show').toggleClass("show1");

  });
</script>
  </body>
  </html>