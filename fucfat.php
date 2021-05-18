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
<label style="position:absolute;top:5px;right:15px"> Data: <script><!--
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
 </script></label> <center> <div style="padding-top:10px; ">
<img src="img/w-logo-blue.png" id="img"><br><label id="off">Oficina Office</label></div>
  </center>


 
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<div id="conteudo3">



  <?php 

          $sql= "SELECT * FROM  funcionarios ORDER BY id";
          $link= mysqli_query($conect, $sql);
          if (mysqli_num_rows($link) > 0):
          while ($dados = mysqli_fetch_array($link)):
            
         ?>

 <?php

if (isset($_SESSION['say'])) {

  echo '<p class="ui" >'. $_SESSION['say'].'</p>';

}

 ?></label>


 <?php

session_unset();
 
 

  ?>

<div style=" color:#555454;border-bottom:1px solid #dbdfe4;
      font-size: 24px; padding-top:15px;padding-left:25px;
      margin: 31px 0 0 0; 
   padding-bottom:24px; 
  ">Funcionário Cadastrado</div>
<br><br>
 
  <div cellspacing="10" style="  margin:-47px 0 0 25px;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; "><br>
    
<ul class="f" style=" 
        font-size:18px;  ">  

         <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Nome : 
<span style="border:none;color:#a90969;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px; "><?php echo $dados['nome'];?></span>
<span style="border:none;color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px;font-size:18px;  " ><?php echo $dados['sobrenome'];?></span></li>
   
      <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Nacionalidade:  
<span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['nacionalidade'];?></span></li>
     <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Naturalidade:<span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['naturalidade'];?></span></li>
    <li style="font-size:18px;padding: 39px 0 0 0;list-style:none">Data de nascimento:  <span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['data'];?></span>
 </li>
  <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Genéro:   
<span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['genero'];?></span>
 </li>
 <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Cidade: 
<span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['cidade'];?></span>
</li>
<li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Município:  
<span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['municipio'];?></span></li>
<li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Bairro:  
<span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['bairro' ];?></span>
 </li> 

<style type="text/css"> 

.p span a{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: white;
    text-decoration: none;
  } 

.k span a{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: white;
    text-decoration: none;
  ;

} 
</style>
        <input type="hidden" name="sim" value="<?php echo $dados['id'];?>">
 
  </form>


 
 
 
 

<li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Rua:  
<span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['rua'];?></span></li>

</ul>  </div>
<div style="   margin:-588px 0 0 55%;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; ">
<ul class="f" style=" 
        font-size:18px;  ">
<li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Telefone:  
<span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['telefone'];?></span>
</li>
<li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Telefone(2): <span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['telefone2'];?></span></li>

    <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Email:  
<span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['text'];?></span></li>
    <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Estado: <span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['estado'];?></span></li>
     <li style="font-size:18px;padding: 39px 0 0 0;list-style:none">Posição:  
<span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['cargo'];?></span></li>
      <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Situação de trabalhador:  
<span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['trabalhador'];?></span></li>
       <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Data de admissão:  
<span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['admissao'];?></span></li>
        <li style="font-size:18px;padding: 44px 0 0 0;list-style:none">Hora:  
<span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['hora'];?></span></li>
         

 
 
 
 



</ul></div>
           
  
 

     <div style="padding-top:10px;
     width:100%;border-top:.8px solid black;position:fixed;right:0;bottom:33px;"><center>
    <span style="font-size:1em;margin:22px 0 0 0">

      Garanti­mos sempre a excelencia dos nossos serviços!<br> Sistema de gestão comercial, desenvolvido pela TechBrains,933434343/95565656</span>
  </center> </div></nav> 
 
 </body>
</html>