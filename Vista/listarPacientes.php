<?php
  require "../Modelo/conexionBaseDatos.php";
  require "../modelo/paciente.php";
  $objPaciente = New Paciente();
  $pacientes=$objPaciente->ListarPacientes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MeDSyS</title>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
   <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="js/sweetalert/sweetalert2.min.css">
 </head>
<body>
</head>
<body>
  <div class="container-fluid">
    <h1 align="center" class="mt-5">Información de los registro de Pacientes</h1>
    <table class="table table-hover text-center">
      <h2><tr align="center" bgcolor="#ffc800"></h2>
            <th class="text-center">Identificación</th>
            <th class="text-center">Nombres</th>
            <th class="text-center">Apellidos</th>
            <th class="text-center">Fecha de Nacimiento</th>
            <th class="text-center">Sexo</th>   
    <?php
      while($paciente= $pacientes->fetch_object()){?>
        <tr>
          <td><?php echo $paciente->pacIdentificacion?></td>
          <td><?php echo $paciente->pacNombres?></td>
          <td><?php echo $paciente->pacApellidos?></td>
          <td><?php echo $paciente->pacFechaNacimiento?></td>
          <td><?php echo $paciente->pacSexo?></td>         
        </tr>
     <?Php   
      }
    ?>      
    </table>
  </div> 
</body>

  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>

