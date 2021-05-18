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
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <style>
    
 *,
   *:before,
   *:after{
   margin:0;
   scroll-behavior: smooth;
   padding:0;  
   } 
      #at{  color:#077798;
cursor:pointer;position:static;margin:4px 0 0 0;
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
 position:fixed;  height:86%;
       margin: 0px 0 0 0px;
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13); 
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
     h3 { 
      padding-bottom: 9px 14px; 
      border-bottom:1px solid #e0e0e0;
      color:#555454;
      font-size: 24px;
      margin: -5px 0 0 0;
      padding: 0 14px; 
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

   
  #of2{background:#0096dd; 
           position:fixed;padding:19.3px 0 19.3px 47px; width:145px;
        left:0 ;  top:0 ;     
    }
  
    #of1{ 
     box-shadow:4px 3px 6px 1px rgba(0,0,0,0.1);  
       border-bottom:2px solid rgba(0,0,0,0.1); 
       top:0; width:100%;
        position:fixed;
     background-color:#fff;
     padding:31.5px 0% 30.7px 0%;
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
   #sub-of{  
  margin:.5px 0px 0px -18px ;
  font-size: 17px; text-align:center;
    color:rgb(255, 255, 255); 
  float:left;}
   
   .data34:focus{  
  border: 2.3px solid rgba(0, 115, 170, 0.8); 
} #func{padding:0% 1%; 
            margin:1% 1%;
            width:95%; 
} 
  
  .btn1 { 
      color: rgba(0, 115, 170, 0.8);
      display: inline-block;
      text-decoration: none;
      font-size: 16px;   
      cursor: pointer;
      -webkit-border-radius: 3px;
      border-radius: 3.3px;
    transition:.8s;
            outline: none;  right:109px;    position:fixed;
      margin:-15.5px 0 0 0px;
      padding:7px 13px;
    }.btn2:hover{  
    background:#dcdcdc;
   }
         .btn4{
      background:#fafafa;
      border: 1.3px solid rgba(0, 115, 170, 0.8);
      color:rgba(0, 115, 170, 0.8);
      display: inline-block; 
      font-size: 13.3px;   
      cursor: pointer;
      outline:none;  
      -webkit-border-radius: 3px;
      border-radius: 3.3px;   float:right;
      margin:-28px 9px 15px 0px ;
    padding:13px 18px;transition:1.3s;
    }
         .btn3{
      background:#fafafa;
      border: 1.3px solid rgba(0, 115, 170, 0.8);
      color:rgba(0, 115, 170, 0.8);
      display: inline-block; 
      font-size: 13.3px;   
      cursor: pointer;
      outline:none;  
      -webkit-border-radius: 3px;
      border-radius: 3.3px;   float:right;
      margin:-28px 9px 15px 0px ;
    padding:13px 18px;transition:1.3s;
    }
    .btn3:hover{  
    color:#fff; 
    border: 1.3px solid #fff;
    transition:.7s;
    background:red; 
   } .btn4:hover{  
    color:#fff; 
    border: 1.3px solid #fff;
    transition:.7s;
    background: #09c0c0; 
   }
   .bi-caret-left{
    color:#4a7c94;
    font-size:1.3em;
    position:fixed;
      transform: rotate(-90deg);
     margin:6px 0px 0px 35px; 
   }
    .data34:focus{  
  border: 1.3px solid #037db6; -webkit-box-shadow: 0 1px 3px #037db6;
        box-shadow: 0 0px 1px .4px #037db6; 
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
   @media screen and (max-width:9999px) {body{ margin:0 auto;padding:0;
  }  #wells{ 
    width:99%;border:none;
    margin:5px 0px 0px -19px;
  }
  #field_ontato{ 
    border:none; width:66%;
    margin:44px 0px 1px 73px;
  } 
  #main{   
    width:95%;
     } 
   #fieldset_detalhe{
      -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.13);
border:1px solid rgba(202, 202, 202, 0.55);padding:30px 5px 30px 18px; width:94%;
    margin:-33px 0px 4px 18px;
         }
          #info_client3{
display:flex;
 margin:14px 0px 0px 54px;
} 
 #detalhe{
  display:flex;
 margin:-3px 0px 0px -17px;
}
  
#info_client{
  margin:14px 0px 0px 54px;
  display:flex; 
}
#contato{ margin:6px 0px 0px -19px ;
  display:flex; border-top:1px solid #e0e0e0;padding:18px 0px;
}
 .nome3{font-size:15px; padding:5px 0px 5px 9px;  
     outline: none; 
      border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
 width:243px;;
   -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
    }
          .data_nascimento3{  font-size:15px;padding:3px 0px 3px 9px; 
    outline: none;  
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:144%;
 -webkit-border-radius: 3px;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
 }
         .data_nascimento{ margin:0px 0px 0px 28px;
 }
         .sobrenome3{font-size:15px; padding:5px 0px 5px 9px;  outline: none;
        border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
background:   rgba(255, 255, 255, 0.5);  
width:249px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
    box-shadow: 0 .4px 0 #ccc;
  }
         .sobrenome{ 
  margin:0px 0px 0px 28px; }
          .telefone2{
  font-size:15px; padding:6px 0px 6px 9px;  
   outline: none; 
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:240px; 
 -webkit-border-radius: 3px;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
     }
        .telefone{ 
  margin:0px 0px 0px 0px }
        .cidade2{ 
           font-size:15px; padding:5px 0px 5px 9px; 
            outline: none; 
              border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:257px; 
 -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
         }
         .tel{
 margin:0px 0px 0px 29px;
}
        .cidade{
         margin:0px 0px 0px 31px;
         }
         .bairro3{ font-size:15px; padding:5px 0px 5px 9px;  
          outline: none;
             border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;rgba(255, 255, 255, 0.5); 
width:231px; 
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
    }
         .bairro{   margin:0px 0px 0px 29px;
          }
.municipio3{ font-size:15px; padding:5px 0px 5px 9px;  
   outline: none;  
    border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:224px;  
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
      }
         .municipio{  margin:0px 0px 0px 33px; 
         }

.logradouro3{font-size:15px;  padding:5px 0px 5px 9px; 
     outline: none;   
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:236px;  
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
        }
         .logradouro{
          margin:0px 0px 0px 35px;
       }
         .hora3{ font-size:15px;padding:4px 0px 4px 9px; outline: none; 
               border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:238px; 
 -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       }
      
         .hora{
margin:0px 0px 0px 34px; }
          
         .estado2{ font-size:15px;  padding:5px 0px 5px 9px; 
     outline: none; 
      border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
 width:250px;
   -webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
     }

.telefone4{
  font-size:15px;padding:5px 0px 5px 9px; 
   outline: none; 
     border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:246px; 
 -webkit-border-radius: 3px;
 border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
}
.genero3{
           font-size:15px; padding:5px 0px 5px 9px; 
           outline: none;  
            border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:253px;
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
       
         } 



         .estado{ 
margin:0px 0px 0px 33px;  }
 .cargo3{ font-size:15px;padding:5px 0px 5px 9px;  
          outline: none;
             border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:rgba(0,0,0,.1); 
width:253px; 
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
     }
        .email2{
  font-size:15px; padding:5px 0px 5px 9px;
   outline: none;
      border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5); width:225px; 
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
  }

.emissao2{font-size:15px; padding:3px 0px 3px 9px; 
    outline: none;   
    border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:225px; 
-webkit-border-radius: 3px;
border-radius: 3px;
  box-shadow: 0 .4px 0 #ccc;
      
    }
        .emissao{
          margin:0px 0px 0px 33px;
        }
        .email{
          margin:0px 0px 0px 35px;
        }
        .nacionalidade3{font-size:15px;  padding:5px 0px 5px 9px;
   outline: none;  
    border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;
 background:   rgba(255, 255, 255, 0.5);  
width:232px;
 -webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
      
}
        .cargo{
          margin:0px 0px 0px 33px;  
        }
        .naturalidade3{font-size:15px; padding:5px 0px 5px 9px; outline: none;
        border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%; 
background:   rgba(255, 255, 255, 0.5);  
width:230px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
    box-shadow: 0 .4px 0 #ccc;
   }
        .situação_empregado3{  font-size:15px;  padding:5px 0px 5px 9px;  
          outline: none;
             border: 1.3px solid rgba(0,0,0,.2);
margin:0px 0px 0px 0%;rgba(255, 255, 255, 0.5); 
width:231px; 
-webkit-border-radius: 3px;
border-radius: 3px; 
box-shadow: 0 .4px 0 #ccc;
      }
         .situação_empregado{
        margin:0px 0px 0px 40px;
          }
        .nacionalidade{ margin:0px 0px 0px 28px; }
        .naturalidade{ margin:0px 0px 0px 28px; }
       
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
     @media all and (max-width:1716px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:87%;    
  }
  }
   
         @media all and (max-width:1663px) {body{ margin:0 auto;padding:0;
  } 
   .nome3{   width:186px; } 
  .data_nascimento3{ 
width:187px; }
    .genero3{   width:197px; }
         .sobrenome3{ 
width:198px; }
   .sobrenome{  
  margin:0px 0px 0px 18px; }
           .telefone2{ width:188px;  } 
        .cidade2{  width:211px;  } 
        .bairro3{  width:169px;  }
    .cidade{
  margin:0px 0px 0px 18px;
    }
.logradouro3{ 
width:187px; }
      .logradouro{
  margin:0px 0px 0px 31px;
      } 
      .tel{
  margin:0px 0px 0px 2.3%; 
}   
.bairro{
  margin:0px 0px 0px 18px;
}
.estado{
        margin:0px 0px 0px 31px;
       }
         .estado2{    width:197px;  } 
 .cargo3{   width:209px;  }.email2{ width:198px;  }
       .cargo{
        margin:0px 0px 0px 23px;
       } .email{
          margin:0px 0px 0px 18px;
        }
        .nacionalidade{
  margin:0px 0px 0px 18px; 
        }
        .naturalidade{
  margin:0px 0px 0px 18px; 
        }
        .nacionalidade3{
width:171px; }
        .naturalidade3{ 
width:196px;   }
.situação_empregado{
  margin:0px 0px 0px 18px;  }
        .situação_empregado3{  width:180px;  }
       .municipio3{  width:192px; 
        }
          .telefone4{ 
width:195px;
       
}
        .municipio{ 
  margin:0px 0px 0px 21px;
        }
        .emissao2{  width:188px; 
        
        }
         .hora3{  width:181px; 
        
        }
         .emissao{
        
  margin:0px 0px 0px 18px;
        }
    }
       
       
     
      @media all and (max-width:1372px) {body{ margin:0 auto;padding:0;
  } 
  #main{ 
       width:85%;    
  }
    
  } @media all and (max-width:1343px) {body{ margin:0 auto;padding:0;
  }  #wells{
    width:94%;  
  }
  #main{ 
    position:static;
  padding:0px 0 31px 0px; 
    float:right; margin:0px 0px 27px 0px; 
    margin-top:76px; 
  } #info_client3{
  margin:14px 0px 0px 31px;
display:block; 
display:block; 
}#detalhe{  
  display:block; 
}
 
  #field_ontato{ 
  margin:14px 0px 0px 50px;
  } 
   
 
#info_client{ 
  margin:14px 0px 0px 31px;
  display:block; 
} 
#dte{  
  margin:14px 0px 0px -1px;
}
#contato{
  display:block; 
}#fieldset_detalhe{
  padding:31px 0 31px 31px; 
        box-shadow:none; 
 border-bottom:none;
 border-left:none;
 border-right:none;
 
    width:80%; 
         }  
       .sobrenome{
        margin:10px 0px 0px 0px 
       }
       .data_nascimento{
        margin:10px 0px 0px 0px 
       }
       .naturalidade{
        margin:10px 0px 0px 0px  
       }
       .telefone{
        margin:10px 0px 0px 0px
       }
       .municipio{
           margin:140px 0px 0px 0px
       }
       .bairro{
        margin:10px 0px 0px 0px
       }
       .estado{
        margin:10px 0px 0px 0px
       }
       .emissao{
        margin:10px 0px 0px 0px 
       }
       .hora{
        margin:10px 0px 0px 0px
       }
       .operador{
        margin:10px 0px 0px 0px 
       }
       .cargo{
        margin:10px 0px 0px 0px  
       }
       .logradouro{
        margin:10px 0px 0px 0px 
       }
       .nacionalidade{
        margin:10px 0px 0px 0px 
       }
       .situação_empregado{
        margin:10px 0px 0px 0px   
       }
       .cidade{
        margin:10px 0px 0px 0px  
       }
       .telefone4{ 
   width:93.3% 
  }
       .tel{
    margin:0 0 0 0; 
  }
       .genero3{  
width:90%; }
       .nome3{   
width:90%; }.sobrenome3{ width:90%; }
         .telefone2{   width:90%;  } 
      .cidade2{ width:90%;  } .bairro3{  width:90%;  }
      .data_nascimento3{  width:90%;  }
.logradouro3{  width:90%; }
       .hora3{ width:90%;  }
      
       .estado2{  width:90%;  } 
.cargo3{ width:90%;  }.email2{  width:90%;  }
      .email{
        margin:0px 0px 0px 11px;
      }
      .nacionalidade3{  width:90%;  }
      .naturalidade3{ width:90%;  }
      .situação_empregado3{ width:90%;  }
     .municipio3{  width:90%; 
      }
      .emissao2{  width:90%; 
      
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
   .btn3{ position:static; 
      margin:11px 0 0 55%;  
    }
    .btn4{ position:static;
      margin:-120px 0 0 1px;  
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
     
  }@media all and (max-width:850px) {body{ margin:0 auto;padding:0;
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
  } 

    @media all and (max-width:530px) {body{ margin:0 auto;padding:0;
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
  }
  @media all and (max-width:335px) {body{ margin:0 auto;padding:0;
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

    }   </style>
    
</head>
  
  <body >   
  <div id="of1">  <a href="func.php" class="btn1 btn2" title="Histórico" rel="next" >Histórico</a>
  
    <a href='JavaScript:window.location.reload()' name="" id="exit3" title="Atualizar" onclick="fec()" > 
    <i class="gg-redo"></i> </a> 
<!--exit button -->


   </div>  
     
   <div id="of2">  
     <label id="sub-of" style=" font-weight:normal;">Oficina
      <b style="font-size: 20px;color:#fff; font-weight:normal;">O</b>
     ffice</label><label class="of" style="font-size: 20px;color:#fff;font-weight:normal;" >
     <b style="font-size: 20px;color:#fff;">O</b>ffice</label>
     <span class="menu" style="color:#fff" title="Menu"><big>☰ 
  </big>
  </span>  
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
    <a href="home.php"  rel="next"  class="ref" >
   
 <span style=" color:#4a7c94 ">
 <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon" fill="currentColor" xmlns="http://www.w3.org/­2000/svg"> <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25­-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/> <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> </svg>

 </span>  
 <br> <span  class="ref_none" >Início </span> </a>  
 </li>
 
 <li class="list">
      <a href="man.php" class="ref feat-btn"  rel="next" > 
 <span   style=" color:#4a7c94   "><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="icon2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/> <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/> </svg>
 
 </span>
</svg><br><span class="ref_none">Manutenção </span>
 
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
    <li class="list"><a href="func.php" class="ref_seconde"  rel="next" >Funcionários</a></li>
    <li><a href="func1.php" class="ref_seconde"  rel="next" >Novo Registo</a></li>
  </ul>

</li>
<li class="list"><a href="car.php"  rel="next"  class="ref" >
 
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
  

  
<li class="list"><a href="rel.php"  class="ref"  rel="next" >
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
  
  <div id="func">

    <h3 style=" font-weight:normal;"> <svg width=".7em" title="Relatório" class="icon7" height=".7em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/­2000/svg">
<path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg >Cadastro de Funcionários</h3>
    
 
<fieldset  id="wells" >
 
 
<label style=" font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b style="
    color: #555454;
    font-size: 18px;
    padding: 0 25px;
">  Formúlario</b>&nbsp;&nbsp;&nbsp;</label><br>
<div id="cadastro">
<form method="POST" id="" name="" action="backend/conexao2.php">

<nav id="info_client">
 <label class="nome">Nome </br><input type="text" name="nome" class="nome3 data34 all_btn" id="" required="*"></label> </br>
<br><label class="sobrenome">Sobrenome</br> <input type="text" name="sobrenome"  class="sobrenome3 data34 all_btn" id="" required="*"></label> 
</br><br>
<label class="nacionalidade">Nacionalidade</br><input type="text" name="nacionalidade" class="nacionalidade3 data34 all_btn"id="" maxlength="19"  required="*"></label></br>
<br> <label class="naturalidade">Naturalidade</br><input type="text" name="naturalidade" class="naturalidade3 data34 all_btn" id=""   required="*"></label>
    
  </br><br>
 <label class="data_nascimento">Data de nascimento</br> <input type="date" name="datac" class="data_nascimento3 data34 all_btn" id="" ></label> 
   
  </nav><nav id="info_client3">
 <br>
 <label class="genero">Genéro <br>
<select id="" class="genero3 all_btn" name="genero">

<option>Masculino</­option>
<option>Feminino</­option>

</select>
</label></br><br>
<label class="cidade">Cidade</br> <select id="" class="cidade2 data34 all_btn" name="cidade" >

<option>Luanda</­option>
<option>Outro</­option>

</select></label><br>
<br>
 
<label class="bairro">Município</br> <input type="text" name="municipio"  class="bairro3 data34 all_btn"  id="" required="*"></label>
<br>
<br>
<label class="municipio">Bairro</br> <input type="text" name="bairro"  class="municipio3 data34 all_btn" required="required" id="" ></label>
 <br><br><label class="logradouro">Logradouro</br><input type="text"  class="logradouro3 data34 all_btn" name="rua" id="" required="*"></label>
   </nav> 
 <fieldset id="field_ontato">
  
 <legend>&nbsp;&nbsp;&nbsp;Contacto&nbsp;&nbsp;&nbsp;</legend> <nav id="contato">
 <label class="telefone">Telefone </br><input type="number" name="telefone" class="telefone2 data34 all_btn" id="" maxlength="13" placeholder="+244" required="*"></label> <br><br><label class="tel">Telefone(opcional) </br><input type="number" name="telefone2" class="telefone4 data34 all_btn"id="" maxlength="9" placeholder="+244" ></label>
<br><br> <label class="email">E-mail</br><input type="text" name="email" placeholder="@Gmail" class="email2 data34 all_btn" id="" ></label>  
 <label style="border:none; letter-spacing:;position:absolute;right:5%;margin:25px 0 0 0"><?php 

  //conexão com banco de dados//

if (isset($_SESSION['sms'])) {

  echo '<p class="ui" >'. $_SESSION['sms'].'</p>';

}

 ?></label>


 <?php

session_unset();
 
 

  ?>


 </nav></fieldset >  
 </br><br>
<fieldset id="fieldset_detalhe">

<legend id="dte">&nbsp;&nbsp;&nbsp;Detalhes&nbsp;&nbsp;&nbsp;</legend>
<nav id="detalhe">
 
<label class="estado">Estado</br> <select id="" name="estado" class="estado2 data34 all_btn" >

<option>Solteiro</option>
<option>Numa relação</option>
<option>Casado</option>

</select></label><br><br>
<label class="cargo">Posição</br> <select class="cargo3 data34 all_btn" name="cargo" id="" >

<option>Mestre</option>
<option>Ajudante</option>
<option>Secretaria</option>
<option>Gerente</option>

</select></label></br><br>
<label class="situação_empregado">Situação de trabalhador</br> <select class="situação_empregado3 data34 all_btn" name="trabalhador" id="" required="*">
 
<option>Efectivo</option>
<option>Não Efectivo</option>
</select></label> 
</br><br>
<label class="emissao">Data de admissão</br><input type="date"  class="emissao2 data34 all_btn" name="admissao" required="required" id="" ></label>
  </br>  <br>
<label class="hora">Hora</br><input type="time"  class="hora3 data34 all_btn" name="hora" required="required" id="" ></label>
</nav>  
 </fieldset>
 <br><br><br><br>
<input type="reset" name="" class="btn3" onclick="return confirm('confirme a operação') return false"  value="Limpar Campos">
<input type="submit" name="func1" class="btn4" onclick="return confirm('confirme a operação') return false" value="Cadastrar">
</form> 
  </div> 
</section>
<script>
  
$('.serv-btn').click(function(){

    $('nav ul .serv-show').toggleClass("show1");
    $('.first').toggleClass("rotate");

  });
</script>
 
  </body>
  </html>