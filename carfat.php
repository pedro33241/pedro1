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

 <?php 

 #Programando...
if (isset($_POST['search'])) {


  $nome=mysqli_escape_string($conect, $_POST['nome']);
  $sql="SELECT * FROM cliente WHERE nome LIKE '%$nome%'";
  $resultado=mysqli_query($conect, $sql);

 if (mysqli_num_rows($resultado)) {
    
    $data=mysqli_fetch_array($data);

    
  }else {
  echo "Nenhum resultado encontrado!";
  }
}

 ?> <br> 
<div id="conteudo3">

 <?php 
          $sql= "SELECT * FROM cliente ORDER BY id DESC";
          $link= mysqli_query($conect, $sql);
          mysqli_close($conect);

          if (mysqli_num_rows($link) > 0):

          while ($dados = mysqli_fetch_array($link)):
            
         ?>

<?php 

  //conexão com banco de dados//

if (isset($_SESSION['up'])) {

  echo


  $_SESSION['up'];



   ;

}

 ?>
 <?php 

  //conexão com banco de dados//

if (isset($_SESSION['del'])) {

  echo


  $_SESSION['del'];



   ;

}

 ?>


 <?php

session_unset();
 
 

  ?> 
 

   
<div style=" color:#555454;border-bottom:1px solid #dbdfe4;
      font-size: 24px; padding-top:15px;padding-left:39px;
      margin: -15px 0 0 0; 
   padding-bottom:18px; 
  ">Dados do Funcionário </div>
  <div cellspacing="10" style="  margin:-19px 0 0 39px;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; "><br>
<ul class="f" style=" 
        font-size:18px; 
        ">  

 
<li  style="font-size:18px;padding: 33px 0 0 0;list-style:none">
            Entidade: <span style="border:none;color:#a90969;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px; "><?php echo $dados['entidade'];?></span></li>
         <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Nome:  
<span  style="border:none;color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px;font-size:18px;  " ><?php echo $dados['nome'];?></span>
<span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['sobrenome'];?></span></li> 
      <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Cidade: <span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['cidade'];?></span></li>
     <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Endereço: <span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['adress'];?></span></li>
    <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Telefone: <span style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['telefone'];?></span></li>
  <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Telefone(2):  

<span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['telefoni'];?></span></li>
 <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Email: 
<span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['email'];?></span></li>
<li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Marca: <span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['marca'];?></span></li>
<li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Modelo: <span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['modelo'];?></span></li>
<li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Classe:  
<span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['classe'];?></span></li>
<li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Nº do motor:  
<span  style="color:#0086ae;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['motor'];?></span></li>
 <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Matrícula: <span style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px; "><?php echo $dados['matricula'];?></span></li>
   <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Efectivo:   <input type="hidden" name="sim" value="<?php echo $dados['id'];?>"></li>  
    
  </form>

</ul>  </div>
<div style="   margin:-716px 0 0 55%;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; ">
<ul class="f" style=" 
        font-size:18px;  ">
 
 

 
     
<li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Caixa:  
<span  style=";color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px;"><?php echo $dados['caixa'];?></span></li>
<li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Combustível: <span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['combustivel'];?></span></li>
    <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Serviço:  
<span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['servico'];?></span></li>
    <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Cor: <span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['cor'];?></span></li>
     <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Km: <span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['km'];?></span></li>
      <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Manutenção: <span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['checagem'];?></span> </li>
       <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Situação: <span class="ob"  title="pare o mouse!" style="border:none;color:black;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; text-align:center;color: #ba1515;"><?php echo $dados['situacao'];?></span></li>
       <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Nº revisões: <span  style="color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['revisao'];?></span> </li>
        <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Observação:  
 
<span  style="border:none;color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px;text-align: justify; "><?php echo $dados['observacao'];?></span></li>
         <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Proxima Revisão: <span style="border:none;color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px; "><?php echo $dados['data'];?></span></li>
          <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Hora: <span style="border:none;color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px; "><?php echo $dados['hora'];?></span></li>
           <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Mecanico:  
 
<span style="border:none;color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px; "><?php echo $dados['mecanico'];?></span></li>
            <li style="font-size:18px;padding: 33px 0 0 0;list-style:none">Operador/a:<span  style="border:none;color:#395f80;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:17px;"><?php echo $dados['operador'];?></span>
 </li>


 

 
 
 
 
 
 
</ul>

  </table>
 

     <div style="padding-top:10px;
     width:100%;border-top:.8px solid black;position:fixed;right:0;bottom:33px;"><center>
    <span style="font-size:1em;margin:22px 0 0 0">

      Garanti­mos sempre a excelencia dos nossos serviços!<br> Sistema de gestão comercial, desenvolvido pela TechBrains,933434343/95565656</span>
  </center> </div></nav> 
 
 </body>
</html>