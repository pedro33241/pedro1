 <!doctype html><html loc="pt">
<head><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Oficina Office</title>
    <meta name="author" content="TechBrains">
<meta name="robots" content="noindex,follow">
<meta property="og:type" content="article" /> 
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="página inicial do sistema">
<meta name="og:description" content=" página inicial do sistema">
<meta name="og:url" content="http://oficina_office.com/nn/fat3.html"><meta name="og:title" content="Oficina Offce">
<link id="favicon" rel="shortcut icon" href=" " type="image/png">
<link rel="stylesheet" href=" "> 
<link href='https://css.gg/redo.css' rel='stylesheet'>  
<head>

 
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
 
  <style>
    *,
 *:before,
 *:after{
   margin:0;
   scroll-behavior: smooth;
   padding:0;  
 }  body{ margin:0;
	 scroll-behavior: smooth;
	 padding:0;  
        font-weight: normal;  
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
			color: #23282d;
   } 
	  #img{
     width:2.6em;
     height:2.6em;
     margin:2% 0px 0px 3.4%;	
    }      
    #off{
      margin:2% 0px 0px 1.5%;
      font-size:1.4em;color: rgba(0,0,0,0.6);
      font-weight:bold; 
    }
 </style> 

</head>
                
  <body> 
<label style="position:absolute;top:0;right:15px"> Data: <script><!--
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
 </script></label> <center> <div style="padding-bottom:10px; ">
<img src="img/w-logo-blue.png" id="img"><br><label id="off">Oficina Office</label></div>
  </center>


 
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
 
<div id="conteudo3">

  <?php 

          $sql= "SELECT * FROM  faturamento ORDER BY id DESC";

          $link= mysqli_query($conect, $sql);
          mysqli_close($conect);

          if (mysqli_num_rows($link) > 0):

          while ($dados = mysqli_fetch_array($link)):
            
         ?>
 
 
<div style=" color:#555454;border-bottom:1px solid #dbdfe4;
      font-size: 24px; padding-top:15px;padding-left:39px;
      margin:15px 0 0 0; 
   padding-bottom:23px; 
  ">Relatório de Fatura</div>
 <div cellspacing="10" style="  margin:47px 0 0 39px;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; "><br>
    
<ul class="f" style=" 
        font-size:18px;  "> 
  

         <li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Pagamento: <span style="border:none;color:#a90969;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px; "><?php echo $dados['pagamento'];?></span></li>
        <li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Valor Entregue:  
<span  style="border:none;color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px;font-size:18px; "><?php echo $dados['valor_entregue'];?></span></li>
      <li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Valor a Pagar: <span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['valor_pagar'];?></span></li>
     <li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Nif: 
<span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['nif'];?></span></li>
    <li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Morada da Fatura: 
  
<span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['morada'];?></span></li>
  <li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Entidade: 
<span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['entidade'];?></span></li>


</ul>  </div>
<div style="   margin:-463px 0 0 55%;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; ">
<ul class="f" style=" 
        font-size:18px;  ">
 
<li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Nome: 
<span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['nome'];?></span></li>
<li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Manutenção: 
<span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['checagem'];?></span></li>
<li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Efectivo: <span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['efectivo'];?></span></li>
<li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Data da Factura: <span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['datac'];?></span></li>
<li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Code: <span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['codi'];?></span></li>
<li style="font-size:18px;padding: 55px 0 0 0;list-style:none">Operador/a:  
<span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['operador'];?></span></li>
 
  
 
 
 


 
</ul>

 
  </div>
 

     <div style="padding-top:10px;
     width:100%;border-top:1px solid #dbdfe4;position:fixed;right:0;bottom:33px;"><center>
    <span style="font-size:1em;margin:22px 0 0 0">

      Garanti­mos sempre a excelencia dos nossos serviços!<br> Sistema de gestão comercial, desenvolvido pela TechBrains,933434343/95565656</span>
  </center> </div></nav> 
 
 </body>
</html>