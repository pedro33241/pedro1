<!doctype html><html loc="pt">
<head onload="oi"><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Oficina Office</title>

        <script>
          
              function valores() {

                var v = parseInt(document.getElementById('valor').value);
                tot=v;
                document.getElementById('show').value=tot;


              }



        </script>


  <meta name="viewport" content="width=device-width" />
    <meta name="author" content="TechBrains">
<meta name="robots" content="noindex,follow">
<meta property="og:type" content="article" /> 
<meta name="google" content="notranslate"> 
<meta name="description" content="aqui é cadastrado os fucionários da Empresa">
<meta name="og:description" content="aqui é cadastrado os fucionários da Empresa">
<meta name="og:url" content="http://oficina_office.com/nn/car.php">

<?php 
// Copyright (C) Tech Brains Corporation. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.
 #*
 #* This source code is licensed under the Tech Brains
 #* LICENSE file in the root directory of this source tree
include_once "backend/banc.php";
session_start();

//Verificando se o usuário esta logado, senão redireciona-o para a index!

 ?>
 <?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>
<meta name="og:title" content="Oficina Offce"><link id="favicon" rel="shortcut icon" href="img\return-home-button-png-7.png" type="image/png">
<link rel="stylesheet" type="text/css" href="css/fat.css">
<link rel="stylesheet" href=" "> 
<link href='https://css.gg/redo.css' rel='stylesheet'>  
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<head>

 
 
 
  <style>
    
    
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

   #main1{ background:#fff; right:0;  
 padding: 4px 0px 4px 0px;height:230px;
 position:fixed; width:91%;bottom:0;
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13); 
  } 
     h3 {   
      border-bottom:1px solid #e0e0e0;
      color:#555454;
      font-size: 24px;
      margin: -5px 0 0 0;
      padding: 3px 14px; 
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
  
 
    #main{background: #fff; 
       width:91%;  right:0; 
 padding: 8px 0px 0px 0px;top:76px;
 position:fixed; 
  height:86%; 
       margin: 0px 0 0 0px;
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13); 
        }
   
     .left{
    color:#e9e9e9;
    font-size:1.9em;
    position:fixed;margin:.7% 0px 0px 65px 
   } 
  
  #of1{ 
     box-shadow:4px 3px 6px 1px rgba(0,0,0,0.1);  
       border-bottom:2px solid rgba(0,0,0,0.1); 
       top:0; width:100%;
        position:fixed;
     background-color:rgb(255, 254, 254);
     padding:30px 0% 30px 0%;
  }
  
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
     border:none;
     font-weight:bold;
     padding:2px 3px 0px 3px;
     color:#037db6 ; 
     transition:.9s;
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
     background:#dcdcdc;
     transition:.5s;
   }
   .menu{ 
  margin:-.5px 0px 0px 15px ;
       color:#ffff;
       right:1;
       cursor: pointer;
       position:absolute;
     font-size: 17.5px;
   }
  
   
   .of{
    display: none;
   }

 
  .resultado5{ display: none;right:0;
     background:#fff;
     padding:8px 38px;  width:100%;  position:absolute;   }   
   
#sub-of{  
  margin:.5px 0px 0px -18px ;
  font-size: 17px; text-align:center;
    color:rgb(255, 255, 255); 
  float:left;}
  .btn{  
    color: #ffffff;
    background:#109cd3;   right:8px;bottom:15px; 

      border: 1.3px solid rgba(0, 115, 170, 0.8); 
      display: inline-block; 
      font-size: 13.3px;  
      position:absolute; 
      cursor: pointer; 
      outline:none;  
      -webkit-border-radius: 3px;
      border-radius: 3.3px;  
    padding:13px 18px;transition:1.3s;
   
    }
    .btn3:hover{  

    color:#fff; 
    border: .6px solid #fff;
    transition:.5s;
    background:#1ba4a4;
  }
  .data34:focus{  
    border: 1.3px solid #037db6; -webkit-box-shadow: 0 1px 3px #037db6;
        box-shadow: 0 0px 1px .4px #037db6; transition:.3s;
} 
.bi-caret-left{
    color:#4a7c94;
    font-size:1.3em;
    position:fixed;
      transform: rotate(-90deg);
     margin:6px 0px 0px 35px; 
   }

  .oi1{
display:flex;
 margin:50px 0px 0px 0%;
}
#o3{ margin:60px 0px 0px 0%;
  display:flex; 
}
#o34{
  margin:60px 0px 0px 0%;
  display:flex; 
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
        @media all  and (max-height:3007px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:87%;
  }
        }
         @media all  and (max-height:2707px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:85%;
  }
        }
          @media all  and (max-height:2322px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:83%;
  }
        }
          @media all  and (max-height:1876px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:81%;
  }
        }
  @media all  and (max-height:1684px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:78%;
  }
        }
           @media all  and (max-height:1599px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:76%;
  }
        }  @media all  and (max-height:1476px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:74%;
  }
        }  @media all  and (max-height:1379px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:72%;
  }
        }
        @media all  and (max-height:1269px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:70%;
  }
        } @media all  and (max-height:1169px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:68%;
  }
        }
         @media all  and (max-height:1092px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:66%;
  }
        } 

        @media all  and (max-height:1082px) {body{ margin:0 auto;padding:0;
  } 
  #wells{padding:0px 0 10% 0px;
  } 
  
        }    @media all  and (max-height:1015px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:64%;
  }
        }
         @media all  and (max-height:969px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:62%;
  }
        } @media all  and (max-height:964px) {body{ margin:0 auto;padding:0;
  } 
  #wells{padding:0px 0 7% 0px;
  } 
  
        }  
         @media all  and (max-height:923px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:60%;
  }
        }
           @media all  and (max-height:877px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:58%;
  }
        }
         @media all  and (max-height:864px) {body{ margin:0 auto;padding:0;
  } #wells{padding:0px 0 4% 0px;
  } 
        }   @media all  and (max-height:823px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:56%;
  }
        } 
            @media all  and (max-height:799px) {body{ margin:0 auto;padding:0;
  }  #wells{padding:0px 0 0% 0px;
  }       } 
   @media all  and (max-height:785px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:54%;
  }
        }  
   @media all  and (max-height:776px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:51.6%;
  }
  .oi1{
display:flex;
 margin:13px 0px 0px 0%;
}
#o3{ margin:19px 0px 0px 0%;
  display:flex; 
}
#o34{
  margin:19px 0px 0px 0%;
  display:flex; 
}  
      
        }
      @media all  and (max-height:702px) {body{ margin:0 auto;padding:0;
  } #wells{padding:0px 0 -44% 0px;
  }        } 
   @media all  and (max-height:693px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:48%;
  }
        } 

   @media all  and (max-height:656px) {body{ margin:0 auto;padding:0;
  } 
 
#fatura{
  display:none; 
}   }
        @media all  and (max-height:653px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:45%;
  } 
        } 
   @media all  and (max-height:615px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:42%;
  } 
        }   @media all  and (max-height:590px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:37%;
  }   
  
  .oi1{
display:flex;
 margin:-10px 0px 0px 0%;
}
#o3{ margin:0px 0px 0px 0%;
  display:flex; 
}
#o34{
  margin:0px 0px 0px 0%;
  display:flex; 
}  } 

           @media all  and (max-height:584px) {body{ margin:0 auto;padding:0;
  } 
  #main{
    height:40%;
  }  }  

    @media screen and (max-width:9999px) {body{ margin:0 auto;padding:0;
  }  #main{   
       width:95%;  
  } #main1{   
       width:95%;  
  }
   
  .valor_entregue{ padding:0 307px 0 15px; 
    }
    .dec{
      padding:0 375px 0 15px; 
    }
    .troco{
       padding:0 386px 0 25px;
    }
    .total1{ 
       padding:0 177px 0 17px;
    }
    .val{
     padding:0 21px 0 5px; 
    }
.li{
   padding: 11px 0 11px 3px;
     border-left:1px solid rgba(0,0,0,0.4);
  display:inline-block;color:#fff;  
}
.ul{background:#24282e; 
  width:100%;border-radius:2px 2px 2px 2px;
position:absolute; 
top:0;left:0;
}
  .resultado{padding:8px 38px;  width:100%;background:#ebedf0; position:absolute; 
 
bottom:151px; } #wells{
    width:90%;border:none;
    margin:16px auto;  
  } 
  
.dtf{
  padding:0px 0%;
} 
.valortotal3{ font-size:17px; padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
width:377px;  -webkit-border-radius: 3px; background:rgba(221, 221, 221, 0.55);border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
        }
        #ut{padding:8px 38px; width:100%;background:#ebedf0; position:absolute; 
bottom:58px;   
        
        } 
        #ut1{padding:8px 38px;  width:100%; background:#FFF;position:absolute; 
bottom:105px; 
        }
        .valortotal{
          margin:0px 0px 0px 44px; 
        }
         .moeda3{font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:377px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
        }
         .nome3{font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:377px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
        }
          
         .vd{
          margin:0px 0px 0px 15px; 
          
         }
         .efectivo{
          margin:19px 0px 0px 66px; 
         } 
         .vd1{
          font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.1);
margin:0px 0px 0px 0%; background: #fff; 
width:411px; border-radius: 3px; 
         }
        
         .valor{
         font-size:15px;padding:5px 0px 5px 9px;outline: none;  
margin:0px 0px 0px 0%;  background:none;
width:400px;  border-radius: 3px; 
       }
         .valor11{
         font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.1);
margin:0px 0px 0px 0%;  
width:399px;  border-radius: 3px;
       
         }

         .vt{
          margin:0% 0px 0px 44px;
         }
         .total{
          font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.1);
margin:0px 0px 0px -54px; background:#fff;  border-radius: 3px;
width:411px;   }
        
           .code3{font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;    
width:373px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
        
}
.nn{
  margin:0% 0px 0px 86px;
}
.moeda{
  margin:0% 0px 0px 55px;
}
.vd34{
 margin:0% 0px 0px 86px;
}
.vd44{
 margin:0% 0px 0px 25px;
}
.vl333{
  margin:0% 0px 0px 25px; 
}
 
.vt5{
  margin:0% 0px 0px 13px;
}
.vl{
  margin:0% 0px 0px 13px;
}
.vl3{
  margin:0px 0px 0px 266px;
}
   
.code{
              margin:0px 0px 0px 60px;       
            }
            .form{
              margin:0px 0px 0px 62px;
            }
           .form2{  font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:399px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
 }
 .vl2{
              font-size:15px;padding:3px 0px 3px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:374px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
        
}
.entidade{
  margin:0px 0px 0px 48px; 
}
.entidade3{font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:386px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
        
}
 .nome{
          margin:0px 0px 0px 59px;
         }
         .nif{
          margin:0px 0px 0px 66px;  
         }
         .nif3{font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:407px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
        
         }

          .check{
          margin:0px 0px 0px 67px;  
         }
         .check3{font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:413px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
        
         }
         .morada{
          margin:0px 0px 0px 63px;   
         }
         .morada3{
          font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:383px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
         
         } 
         .operador3{
          font-size:15px;padding:5px 0px 5px 9px;outline: none;   border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; background:   rgba(255, 255, 255, 0.5);  
width:398px;  -webkit-border-radius: 3px;border-radius: 3px;  box-shadow: 0 .4px 0 #ccc;
           
        
         } 
         .operador{
          margin:0px 0px 0px 71px;    
         }
       
      }
        
    @media all and (max-width:4723px) {body{ margin:0 auto;padding:0;
  }   #main{ 
       width:93%;
      }
        #main1{ 
       width:93%;
      }
    }
  @media all and (max-width:2826px) {body{ margin:0 auto;padding:0;
  }   #main{ 
       width:91%;
      }
       #main1{ 
       width:91%;
      }
    }


  @media all and (max-width:2175px) {body{ margin:0 auto;padding:0;
  } 
    #main{ 
       width:88%;
      }
       #main1

       { 
       width:88%;
      }
     } 
      @media all and (max-width:2073px) {body{ margin:0 auto;padding:0;
      }
       
      
  .vd{
          margin:0px 0px 0px 22px; 
          
         } 
          .vl{
          margin:0px 0px 0px 5px; 
          
         }
          .vt5{
          margin:0px 0px 0px 5px; 
          
         }
        .resultado{ 
bottom:154px;  
        padding:8px 38px; 
         }
  #ut{padding:8px 38px; 
bottom:65px; 
        
        } 
        #ut1{padding:8px 38px; 
bottom:109px;  
        } 
         .valor_entregue{  padding:0 185px 0 5px; 
    }
    .dec{
      padding:0 228px 0 15px; 
    }
    .troco{
       padding:0 246px 0 21px;
    }
   .vl333{
      margin:0% 0px 0px 24px;
   }
     .vd44{
      margin:0% 0px 0px 24px;
   }
       
 .vd1{  width:261px; 
         }
 .valor{ width:261px;  
       }
         .valor11{  
width:269px;
         } 
         .total{   
width:269px; }        
        
        
         .valortotal3{width:269px;    
               }
               .moeda3{width:269px;  
               }
               .nome3{width:265px;   
               }
              
               
                 .code3{width:263px; 
      }
      .valortotal{
        margin:0% 0px 0px 26px;
      }
      .moeda{
        margin:0% 0px 0px 26px;
      }.vl3{
        margin:0px 0px 0px 125px;
      } 
      .code{
                    margin:0px 0px 0px 33px;       
                  }
                  .form{
                    margin:0px 0px 0px 33px;
                  }
                 .form2{width:269px; 
                  }
                  .vl2{width:263px; 
      }
      .entidade{
        margin:0px 0px 0px 29px; 
      }
      .entidade3{width:276px; 
      } .nome{
                margin:0px 0px 0px 31px;
               }
               .nif{
                margin:0px 0px 0px 33px;  
               }
               .nif3{width:269px; 
               }
                .check{
                margin:0px 0px 0px 35px;  
               }
               .check3{width:279px; 
               }
               .morada{
                margin:0px 0px 0px 33px;   
               }
               .morada3{width:256px;  
               } 
               .operador3{width:266px;     
              
               }.efectivo{
                margin:19px 0px 0px 30px;
               }
               .operador{
                margin:0px 0px 0px 36px;    
               }
      } 
        @media all and (max-width:1716px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:87%;    
  }
  #main1{ 
       width:87%;    
  } 
  } 
   @media all and (max-width:1428px) {body{ margin:0 auto;padding:0;
  } 
.valor_entregue{  padding:0 113px 0 11px; 
    }
    .dec{
      padding:0 177px 0 15px; 
    }
    .troco{
       padding:0 205px 0 15px;
    }
    .nn{
  margin:0% 0px 0px 86px;
}
   .vd34{
  margin:0% 0px 0px 81px;
} 
 .vd34{ 
} .vd44{
          margin:0px 0px 0px 31px;  
         }
.vl333{
          margin:0px 0px 0px 31px;  
         }
         .valor{
        width:211px;  
         }  
    .vl{
  margin:0% 0px 0px 6px;    
    }
    .vd{
  margin:0% 0px 0px 25px;   
    }   
    .vt5{
  margin:0% 0px 0px 6px;    
    }  
 .vd1{ width:210px; 
         }
  
         .valor11{  
width:200px;
         } 
         .total{   
width:220px; }        
        

  .sr4{
    width:91%;
         }  #wells{
    width:95%;
  }  
  .valortotal3{
      
width:211px;   
         }
         .moeda3{ 
width:222px;
         }
         .nome3{
   
width:222px;
         }
        .efectivo{
          margin:19px 0px 0px 33px;   
        }
         
           .code3{ 
            width:218px; 
}
.moeda{
  margin:0% 0px 0px 26px;
}.vl3{
  margin:0px 0px 0px 63px;
} 
.code{
              margin:0px 0px 0px 34px;       
            }
            .form{
              margin:0px 0px 0px 33px;
            }
           .form2{
      width:211px; 
            }.vl2{
           width:205px;  
}
.entidade{
  margin:0px 0px 0px 30px; 
}
.entidade3{
 width:218px; 
} .nome{
          margin:0px 0px 0px 31px;
         }
         .nif{
          margin:0px 0px 0px 31px;  
         }
         .nif3{
        width:223px;  
         }
         .check{
          margin:0px 0px 0px 31px;  
         }
         .check3{
        width:233px;   
         }
         .morada{
          margin:0px 0px 0px 31px;   
         }
         .morada3{
        width:198px; 
         } 
         .operador3{  
     width:219px;     
        
         }
         .operador{
          margin:0px 0px 0px 34px;    
         }    }   
      @media all and (max-width:1372px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:85%;    
  }
   #main1{ 
       width:85%;    
  } 
  } 
    
          @media all and (max-width:1274px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:84%;    
  } 
  #main1{ 
       width:83%;    
  }   
  }  
  
  @media all and (max-width:1274px) {body{ margin:0 auto;padding:0;
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
  
          
    
    #main{ 
    position:static;
    float:right; 
    margin-top:76px; 
  }
    
    #main1{ margin-top:64px; 
       width:84.4%;  
    position:static; background:#fff; 
    float:right;   
  }
  .oi1{
display:block; 
}
#o3{  
  display:block; 
}
#o34{ 
  display:block; 
}  
.valortotal3{ 
        width:88%;   
    margin:6px 0px 0px 0px;
         }
         .moeda3{ 
        width:88%; 
    margin:6px 0px 0px 0px;
         }
         
         .nome3{
      width:88%; 
    margin:6px 0px 0px 0px; 
         }.efectivo{
          margin:0% 0px 0px 0px;
         }
        
         
           .code3{ 
width:88%; 
    margin:6px 0px 0px 0px;
}
.moeda{
  margin:0% 0px 0px 0px;
}
.valortotal{
   margin:0% 0px 0px 0px;
}
.vl3{
  margin:0px 0px 0px 0px;
} 
.code{
              margin:0px 0px 0px 0px;       
            }
            .form{
              margin:0px 0px 0px 0px;
            }
           .form2{ 
      width:90%; 
    margin:6px 0px 0px 0px;
            }
            .vl2{ 
           width:88%; 
    margin:6px 0px 0px 0px;
}
.entidade{
  margin:0px 0px 0px 0px; 
}
.entidade3{ 
 width:88%;
    margin:6px 0px 0px 0px;
} 
.nome{
          margin:0px 0px 0px 0px;
         }
         .nif{
          margin:0px 0px 0px 0px;  
         }
         .nif3{ 
    margin:6px 0px 0px 0px;
        width:88%;  
         }
          .check{
          margin:0px 0px 0px 0px;  
         }
         .check3{ 
        width:88%; 
    margin:6px 0px 0px 0px; 
         }
         .morada{
          margin:0px 0px 0px 0px;   
         }
         .morada3{ 
        width:88%;  
    margin:6px 0px 0px 0px; 
         } 
         .operador3{ 
     width:88%;   
    margin:6px 0px 0px 0px;  
        
         }
          .resultado5{padding:16px 0 31px 0px ;display:block; 
       position:static; margin:0px 0 0 8.6%; 
       }   
   
         .operador{
          margin:0 0 0 0;    
         }
         .nn{
  margin:3% 0 0 0;
}

.btn{  margin:28px 0 0 8.6%; float:right;position:static;}
.vt{
          margin:3% 0px 0px 0px;
         } 
         .vd{
          margin:0px 0px 0px 0%; 
          
         } 
         .data34:focus{ -webkit-box-shadow: 0 0px 0px #037db6;
        box-shadow: 0 0px 0px .0px #037db6;  background:#fff;
}


.resultado{margin:44.6px 0 0 8.6%;padding:16px 0px; position:static; }
 #ut{padding:16px 0px; position:static; margin:0px 0 0 8.6%;
        } 

     .valor_entregue{ 
       padding:0 0px 0 0px; 
    }
    .dec{ 
       padding:0 0px 0 0px; 
    }
    .troco{ 
       padding:0 0px 0 0px; 
    }
    .total1{  border:none;  
       padding:6px 0px 6px 0;
    }
    
        #ut1{padding:16px 0px ;
       position:static; margin:0px 0 0 8.6%;  }
   .li{ 
  display:block;text-align:center;padding:15px 0px ;
      border-bottom:1px solid #373941; border-left:none;    
} 
.ul{  padding:0px 0 81px 3px; border-radius:0;border-left:none;
  width:33%; float:left;position:static; margin:-48.9px 0 0 0;  
}
 
.vd446{display:none;  
}
.tty{display:none;  
}

.tyu{display:none;  
}
.yu{display:none;  
}
.ju{display:none;  
}
.ii{display:none;  
}
.io{display:none;  
}
.pp{display:none;  
}
.oo{display:none;  
}
 .yh{display:none;  
}
 
.valor11{ float:right;border:none;
  background:none ; width:30%; 
}
.vd1{ float:right;border:none;
  background:none;   width:30%;
}
.total{ float:right;
  background:none;  width:30%; border:none;
}
 .Y7{ float:right; 
  background:none;  width:30%;border:none;
}
   
   } 
  @media all and (max-width:1210px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:80%;    
  } 
   #main1{ 
       width:80%;    
  } 
  }
   
    
   @media all and (max-width:938px) {body{  margin:0 auto;padding:0;
  } 
  #main{  
       width:78%;   
  } 
   #main1{  
       width:78%;   
  } 
  }
  @media all and (max-width:850px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:76%;    
  }
  #main1{ 
       width:76%;    
  }
   } 
  @media all and (max-width:782px) {body{ margin:0 auto;padding:0;
  }  
 #main{ 
       width:85%;    
  } 
   #main1{ 
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
   #main1{ 
       width:82%;    
  } 
  }
  @media all and (max-width:458px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:79%;    
  } 
    #main1{ 
       width:79%;    
  }
  }
    @media all and (max-width:432px) {body{ margin:0 auto;padding:0;
  } 
  
    .resultado{ padding:25px 0;    
  }
  }@media all and (max-width:391px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:76%;    
  } 
   #main1{ 
       width:76%;    
  } 
  }@media all and (max-width:335px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:73%;    
  } 
  #main1{ 
       width:73%;    
  } 
  }@media all and (max-width:304px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:70%;    
  } 
   #main1{ 
       width:70%;    
  } 
  } 
  @media all and (max-width:263px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:67%;    
  } 
   #main1{ 
       width:67%;    
  }

.ul{ display:none}
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

.pace .pace-progress {background:#0096dd;
  position:absolute;  
  top: 0;
  right: 100%;
  z-index:1;
  width: 100%;
  height: 3px;
  margin-left:80%;
}
 </style>

</head>
   
  <body>    
  <div id="of1">  
    <a href='JavaScript:window.location.reload()' name="" id="exit3" title="Atualizar" onclick="fec()" > 
    <i class="gg-redo"></i> </a> 
<!--exit button -->
    <button type="submit" name="" id="exit" value="" title=" Sair" onclick="fec()" >  
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
   <script src="javascript/pace.min.js"></script>  
      <a href="man.php" class="ref feat-btn"  rel="next" > 
 <span   style=" color:#4a7c94   "><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/> <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/> </svg>
 
 </span><br><span class="ref_none">Manutenção </span>
 
      </a>

      
    

    </li>

    
 <li class="list"><a href="fat.php" style="background:#1e1e1e;"  rel="next"  class="ref" >
  
 <span  style=" color:  #00b7ff">  
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon5" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/> </svg>

 </span>    <svg width="1em" class="left" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.7­53l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1­ 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
</svg>
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
    <li><a href="func1.php" class="ref_seconde"  rel="next" >Novo Registo</a></li>
  </ul>

</li>
 
<li class="list"><a href="car.php" class="ref"  rel="next" >
 
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

  
<li class="list"><a href="rel.php" class="ref"  rel="next" >
   <span style=" color:#4a7c94">
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
<span style=" color:#4a7c94">   
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

    <h3 style=" font-weight:normal;">  <svg width=".7em" height=".7em" viewBox="0 0 16 16" class="icon5" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/> </svg>
Faturamento</h3>
    
           <label style="border:none; letter-spacing:;position:absolute;right:3%;margin:-25px 0 0 0"><?php 

  //conexão com banco de dados//

if (isset($_SESSION['sms'])) {

  echo $_SESSION['sms'];

}

 ?></label>


 <?php

session_unset();
 
 

  ?>
 
<fieldset id="wells" >

<label  style="  
      color:#555454;
      font-size: 18px; 
      padding: 0 25px;"  id="fatura">&nbsp;&nbsp;&nbsp;<b> Nova Fatura</b>&nbsp;&nbsp;&nbsp; </label>


<div id="ui">

 

<form method="POST" id="" name="" action="backend/conexao3.php" oninput="calc();" oninput="valore();"> 
  <span class="oi1"><br>
<span class="form">Pagamento: <br>  
   <select id=" " name="pagamento" class="form2 data34 all_btn" > 
<option>Cash</option>
<option>Mult­icaixa</option>

</select>  </span ><br><br>
<label class="valortotal" for="qtt">Valor Entregue<br><input  type="number" name="valor_entregue" title="Valor" class="valortotal3 data34 all_btn" required="*"  id="qtt"></label>
<br><br><label class="moeda" for="qt">Valor a Pagar<br><input type="number" id="qt"  name="valor_pagar" title="Moeda" class="moeda3 data34 all_btn"  required="*" > 
 </label> 
 <br><br><label class="nif">Nif*<br><input type="number" name="nif" class="nif3 data34 all_btn" id="" title="NIF" required="*" ></label> 
 
</span >
<nav id="o3"><br><label class="morada">Morada da Fatura*<br><input type="text" name="morada" value="Endereço da empresa" class="morada3 data34 all_btn" id="" value="" title="Morada da Fatura" readonly="*"></label> 
<br><br>
<label class="entidade">Entidade<br><select id="" name="entidade" class="entidade3 data34 all_btn" > 
<option>Cliente</option>
<option>Empresa</option>

</select></label> 
<br><br><label class="nome">Nome<br>
<input type="text" name="nome" class="nome3 data34 all_btn" title="Cliente/Empresa"   id="" ></label> 
 <br><br>
 
 <label class="check">Check<br> <select id="" name="checagem" class="check3 data34 all_btn"> 
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
</select>
</label>

</nav><nav id="o34"> 
<br>
<span class="efectivo"  value="Não selecionado!"><strong>Efectivo</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="s" class="all_btn">Sim</label> <input type="radio" name="efectivo" value="Sim" id="s"  >&nbsp;&nbsp;&nbsp;
<label for="n" class="all_btn">Não</label> <input type="radio" name="efectivo" value="Não" id="n"></span ><br>
<br>
<label class="vl3">Data da Fatura*<br><input type="date" name="datac" class="vl2 data34 all_btn" title="id do cliente" required="*" id="" z></label> 
   <br><br>
   <label class="code">Code*<br><input type="number" name="codi" class="code3 data34 all_btn" id="" title="código da fatura" required="*" ></label> 
 <br>
<br><label class="operador">Operador/a*<br><input type="text" name="operador"  title="Operador/a" class="operador3 data34 all_btn" id="" required="*" ></label>  <br> <br>  <br>  <br>  <br> 
  </nav>
 
  </section> </div> <div><section id="main1"> 
  <nav style=" width:92.1%; background:#fff; 
        ">

<ul class="ul"> 
<li class="li"><span class="val"> </span></li>
<li class="li">
<span class="valor_entregue">Valor Entregue*</span></li> 
<li class="li"><span class="dec">Desc%*</span></li> 
<li class="li"><span class="troco">Troco*</span> </li> 
<li class="li" ><span class="total1" >Total</span> </li>    
</ul >   
<nav class="resultado">  
  
 <label class="vl" for="f1" ><input type="number" name="" id="f1"  class="valor11 er vs3" readonly="*"  placeholder="$" ></label >


<label class="vd" for="f3" ><input type="number" name="" id="f3" class="vd1 vd446 vd3" readonly="*" placeholder="$" oninput="valore();" ></label>


<label class="vd34" for="f4" ><input type="number" name="tot" id="f4" class="total tty vd3" readonly="*" placeholder="$" ></label>

 <label class="vl333" for="show" ><input type="number" name="tot" id=""  style="border:none" class="valor tyu vs3"   readonly="*" placeholder="$" ></label>

 </nav> <nav id="ut1">
 <label class="vt5" for="f6" ><input type="number" name="tot" id="f6" class="valor11 yu vt3" readonly="*"  placeholder="$" ></label>

 
<label class="vd" for="f7" ><input type="number" name="tot" id="f7"  class="vd1 ui vd3" readonly="*" placeholder="$" ></label> 




<label class="vd34" for="f8" ><input type="number" name="tot" id="f8" class="total ju vd3" readonly="*" placeholder="$" ></label>



<label class="vd44" for="show"  ><input type="number" nname="tot" id="" class="valor ii vd3" style="border:none" readonly="*"   placeholder="$" ></label>  
</nav>


<nav id="ut" >
 <label class="vt5" for="f10" ><input type="number" name="tot" id="f10" class="valor11 io vt3" readonly="*"  placeholder="$" ></label>


 
<label class="vd" for="f11" ><input type="number" name="tot" id="f11" class="vd1 oo vd3"   readonly="*" placeholder="$" ></label> 



<label class="vd34" for="f13" ><input type="number" name="" id="f13" class="total opp vd3"  readonly="*" placeholder="$" ></label>


 
<label class="vd44" for="ttl"><input type="number" name="tot" id="ttl" class="valor yh vd3"  style="border:none"  readonly="*"  placeholder="$" ></label > 


 </nav>
<nav class="resultado5"><label class="" for="ttl1">
 <input type="number" name="" id="ttl1" class="valor Y7"  readonly="*"  placeholder="$" >
 </label> 
  
 </nav>   </nav><input type="submit" name="fat" id="il" onclick="return confirm('Confirme a operação' ); return false;"  class="btn3 btn" value="Efectuar Pagamento"></label> 
 
</form>

       
  <script>
       
       function calc (){

            var qtd =parseInt(document.getElementById('qt').value);
            total= qtd;
            document.getElementById('ttl').value=total+'.000';
  document.getElementById('ttl1').value=total+'.000';
 
   var qtd4 =parseInt(document.getElementById('qtt').value);
            total4= qtd4;
            document.getElementById('f1').value=total4+'.000';
  document.getElementById('f6').value=total4+'.000';
  document.getElementById('f10').value=total4+'.000';
 
  var qtd43 =parseInt(document.getElementById('qtt').value);
            total44= qtd43*0; 
  document.getElementById('f8').value=total44+'.00';
  document.getElementById('f13').value=total44+'.00' ;
 
   var qtd =parseInt(document.getElementById('qtt').value);

   var qtd4 =parseInt(document.getElementById('qt').value);
            total444= qtd-qtd4; 
  document.getElementById('f3').value=total444+'.00';
  document.getElementById('f7').value=total444+'.00';
  document.getElementById('f11').value=total444+'.00';
 
       }

    </script>


</section>
</div><script>
 
  $('.serv-btn').click(function(){

    $('nav ul .serv-show').toggleClass("show1");

  });
</script>
  </body>
  </html>