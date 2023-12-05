<?php
require('dbConnection.php');
session_start();

$cedula = $_SESSION['cedula'];
$sql = $conn->query("SELECT a.id_jefe_familia, a.nombres, a.apellidos, a.id_genero, a.cedula, a.codigo_carnet, a.serial_carnet, a.numero_celular, a.numero_telefono, a.fecha_nacimiento, 
  a.edad, a.correo, a.id_estado_civil, a.id_sector_trabajo, a.ocupacion, a.pensionado, a.discapacitado, a.incapacitado, a.cne, a.actividad_comercial, a.tipo_actividad, a.cargas_familiares,
  
  c.nombre_carga, c.apellido_carga, c.id_genero, c.cedula_carga, c.fecha_nacimiento_carga, c.discapacitada_carga, c.incapacitado_carga, c.embarazo_temprano_carga, c.id_parentesco,
  c.id_grado_instruccion, c.profesion_carga, c.ingreso_mensual_carga, c.inscrito_cne, c.pensionado_carga, c.carga_carnet, c.codigo_carga_carnet, c.serial_carga_carnet, 
  
  d.id_vivienda, d.condiciones_terreno, d.forma_tenencia, d.tipo_vivienda, d.habitaciones, d.id_condiciones_vivienda, d.tiene_mascotas, d.id_mascotas, d.necesidades_vivienda,
  
  e.id_enfermedades, e.cancer, e.vih, e.sida, e.diabetes, e.hepatitis, e.leucemia, e.epilepsia, e.asma, e.hipertension, e.tuberculosis, e.corazon, 
  
  v.id_condiciones_vivienda, v.aguas_blancas, v.aguas_servidas, v.tanque_agua, v.medidor_agua, v.electricidad, v.medidor_electricidad, v.telefonia_fija, v.internet, v.proveedor_internet, v.cable,
  v.proveedor_cable, v.aseo_urbano, v.gas_directo, v.alumbrado_publico, v.cilindro, v.id_tamano_cilindro, 
  
  p.id_participacion_social, p.organizacion_comunitaria, p.nombre_organizacion, p.carnet_psuv, p.codigo_carnet_psuv, p.clap, p.cantidad_clap, p.bolsa_nutricion, p.cantidad_bolsa_nutricion, p.hogares_patria, p.jose_gregorio_hernandez, 
  p.parto_humanizado, p.lactancia_materna, p.escolarizacion, p.economia_familiar, p.chamba_juvenil, p.amor_mayor, p.otro_benedicio, p.observaciones


  FROM jefe_familia a
  LEFT JOIN genero g ON a.id_genero = g.id_genero
  LEFT JOIN estado_civil ec ON a.id_estado_civil = ec.id_estado_civil
  LEFT JOIN grado_instruccion gi ON a.id_grado_instruccion = gi.id_grado_instruccion
  LEFT JOIN sector_trabajo s ON a.id_sector_trabajo = s.id_sector_trabajo

  LEFT JOIN cargas_familiares c ON a.id_carga_familiar = c.id_carga_familiar
  LEFT JOIN parentesco p ON a.id_parentesco = p.id_parentesco

  LEFT JOIN vivienda d ON a.id_vivienda = d.id_vivienda
  LEFT JOIN materiales_vivienda mv ON a.id_materiales_vivienda = mv.id_materiales_vivienda 
  LEFT JOIN mascotas m ON a.id_mascotas = m.id_mascotas

  LEFT JOIN enfermedades e ON a.id_enfermedes = e.id_enfermedes
  LEFT JOIN condiciones_vivienda v ON a id_condiciones_vivienda = v.id_condiciones_vivienda
  LEFT JOIN tamano_cilindro t ON a.id_tamano_cilindro = t.id_tamano_cilindro

  LEFT JOIN participacion_social p ON a.id_participacion_social = p.id_participacion_social
  
  WHERE a.cedula = '$cedula'");
$result = mysqli_num_rows($sql);

if ($result > 0) {
  while ($data = mysqli_fetch_assoc($result)) {

    //variables REVISAR DE NUEVOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
    //jefe de familia 
    $nombres = $data["nombres"];
    $apellido = $data["apellido"];
    $cedula = $data["cedula"];
    $genero = $data["genero"];
    if ($data['id_genero'] == 1) {      
      $genero = '<option value="1" selected>Masculino</option><option value="2">Femenino</option>';
    }else {
      $genero = '<option value="1">Masculino</option><option value="2" selected>Femenino</option>';
    }

    $numero_celular= $data["numero_celular"];
    $numero_telefono = $data["numero_telefono"];
    $fecha_nacimiento = $data["fecha_nacimiento"];
    $correo = $data["correo"];
    $estado_civil = $data["estado_civil"];
    if ($data['	id_estado_civil '] == 1) {      
      $estado_civil = '<option value="1" selected>Soltero</option><option value="2">Casado</option><option value="3">Divorciado</option><option value="4">Viudo</option><option value="5">Concubinato</option>';
    }else if ($data['	id_estado_civil '] == 2) { 
      $estado_civil = '<option value="1" >Soltero</option><option value="2" selected>Casado</option><option value="3">Divorciado</option><option value="4">Viudo</option><option value="5">Concubinato</option>';
    }else if ($data['	id_estado_civil '] == 3) { 
      $estado_civil = '<option value="1" >Soltero</option><option value="2" >Casado</option><option value="3" selected>Divorciado</option><option value="4">Viudo</option><option value="5">Concubinato</option>';
    }else if ($data['	id_estado_civil '] == 4) { 
      $estado_civil = '<option value="1" >Soltero</option><option value="2" >Casado</option><option value="3">Divorciado</option><option value="4" selected>Viudo</option><option value="5">Concubinato</option>';
    }else if ($data['	id_estado_civil '] == 5) { 
      $estado_civil = '<option value="1" >Soltero</option><option value="2" >Casado</option><option value="3">Divorciado</option><option value="4">Viudo</option><option value="5" selected>Concubinato</option>';
    }

    $grado_instruccion = $data["grado_instruccion"];
    if ($data['	id_grado_instruccion '] == 1) {      
      $grado_instruccion = '<option value="1" selected>Primaria</option><option value="2">Bachillerato</option><option value="3">Técnico Medio</option><option value="4">Técnico Superior</option><option value="5">Pregrado</option><option value="6">Maestría</option><option value="7">Postgrado</option><option value="8">Doctorado</option>';
    }else if ($data['	id_grado_instruccion '] == 2) { 
      $grado_instruccion = '<option value="1" >Primaria</option><option value="2" selected>Bachillerato</option><option value="3">Técnico Medio</option><option value="4">Técnico Superior</option><option value="5">Pregrado</option><option value="6">Maestría</option><option value="7">Postgrado</option><option value="8">Doctorado</option>';
    }else if ($data['	id_grado_instruccion '] == 3) { 
      $grado_instruccion = '<option value="1">Primaria</option><option value="2">Bachillerato</option><option value="3" selected>Técnico Medio</option><option value="4">Técnico Superior</option><option value="5">Pregrado</option><option value="6">Maestría</option><option value="7">Postgrado</option><option value="8">Doctorado</option>';
    }else if ($data['	id_grado_instruccion '] == 4) { 
      $grado_instruccion = '<option value="1">Primaria</option><option value="2">Bachillerato</option><option value="3">Técnico Medio</option><option value="4" selected>Técnico Superior</option><option value="5">Pregrado</option><option value="6">Maestría</option><option value="7">Postgrado</option><option value="8">Doctorado</option>';
    }else if ($data['	id_grado_instruccion '] == 5) { 
      $grado_instruccion = '<option value="1">Primaria</option><option value="2">Bachillerato</option><option value="3">Técnico Medio</option><option value="4">Técnico Superior</option><option value="5" selected>Pregrado</option><option value="6">Maestría</option><option value="7">Postgrado</option><option value="8">Doctorado</option>';
    }else if ($data['	id_grado_instruccion '] == 6) { 
      $grado_instruccion = '<option value="1">Primaria</option><option value="2">Bachillerato</option><option value="3">Técnico Medio</option><option value="4">Técnico Superior</option><option value="5">Pregrado</option><option value="6" selected>Maestría</option><option value="7">Postgrado</option><option value="8">Doctorado</option>';
    }else if ($data['	id_grado_instruccion '] == 7) { 
      $grado_instruccion = '<option value="1">Primaria</option><option value="2">Bachillerato</option><option value="3">Técnico Medio</option><option value="4">Técnico Superior</option><option value="5">Pregrado</option><option value="6">Maestría</option><option value="7" selected>Postgrado</option><option value="8">Doctorado</option>';
    }else if ($data['	id_grado_instruccion '] == 8) { 
      $grado_instruccion = '<option value="1">Primaria</option><option value="2">Bachillerato</option><option value="3">Técnico Medio</option><option value="4">Técnico Superior</option><option value="5">Pregrado</option><option value="6">Maestría</option><option value="7">Postgrado</option><option value="8" selected>Doctorado</option>';
    }

    $sector_trabajo = $data["sector_trabajo"];
    if ($data['	sector_trabajo '] == 1) {      
      $sector_trabajo = '<option value="1" selected>Público</option><option value="2">Privado</option><option value="3"> Privado</option><option value="4">Desempleado</option>';
    }else if ($data['	sector_trabajo '] == 2) { 
      $sector_trabajo = '<option value="1" >Público</option><option value="2" selected>Privado</option><option value="3"> Privado</option><option value="4">Desempleado</option>';
    }else if ($data['	sector_trabajo '] == 3) { 
      $sector_trabajo = '<option value="1">Público</option><option value="2">Privado</option><option value="3" selected>Privado</option><option value="4">Desempleado</option>';
    }else if ($data['	sector_trabajo '] == 4) { 
      $sector_trabajo = '<option value="1">Público</option><option value="2">Privado</option><option value="3">Privado</option><option value="4" selected>Desempleado</option>';
    }

    $ocupacion = $data["ocupacion"];
    $pensionado = $data["pensionado"];
    $discapacitado = $data["discapacitado"];
    $incapacitado = $data["incapacitado"];
    $codigo_carnet = $data["codigo_carnet"];
    $serial_carnet = $data["serial_carnet"];
    $cne = $data["cne"];
    $actividad_comercial = $data["actividad_comercial"];
    $tipo_actividad = $data["tipo_actividad"];
    $cargas_familiares = $data["cargas_familiares"];

    //cargafamiliar
    $nombre_carga = $data["nombre_carga"];
    $apellido_carga = $data["apellido_carga"];
    $genero_carga = $data["genero_carga"];
    $cedula_carga = $data["cedula_carga"];
    $fecha_nacimiento_carga = $data["fecha_nacimiento_carga"];
    $discapacitado_carga = $data["discapacitado_carga"];
    $incapacitado_carga = $data["incapacitado_carga"];
    $embarazo_temprano_carga = $data["embarazo_temprano_carga"];
    $parentesco_carga = $data["parentesco_carga"];
    if ($data['	id_grado_instruccion '] == 1) {      
      $parentesco_carga = '<option value="1" selected>Hermano/a</option><option value="2">Hijo/a</option><option value="3"> Esposo/a</option><option value="4">Madre</option><option value="5">Padre</option><option value="6">Tío/a</option><option value="7">Sobrino/a</option><option value="8">Otro</option>';
    }else if ($data['	parentesco_carga '] == 2) { 
      $parentesco_carga = '<option value="1" >Hermano/a</option><option value="2" selected>Hijo/a</option><option value="3">Esposo/a</option><option value="4">Madre</option><option value="5">Padre</option><option value="6">Tío/a</option><option value="7">Sobrino/a</option><option value="8">Otro</option>';
    }else if ($data['	parentesco_carga '] == 3) { 
      $parentesco_carga = '<option value="1">Hermano/a</option><option value="2">Hijo/a</option><option value="3" selected>Esposo/a</option><option value="4">Madre</option><option value="5">Padre</option><option value="6">Tío/a</option><option value="7">Sobrino/a</option><option value="8">Otro</option>';
    }else if ($data['	parentesco_carga '] == 4) { 
      $parentesco_carga = '<option value="1">Hermano/a</option><option value="2">Hijo/a</option><option value="3">Esposo/a</option><option value="4" selected>Madre</option><option value="5">Padre</option><option value="6">Tío/a</option><option value="7">Sobrino/a</option><option value="8">Otro</option>';
    }else if ($data['	parentesco_carga '] == 5) { 
      $parentesco_carga = '<option value="1">Hermano/a</option><option value="2">Hijo/a</option><option value="3">Esposo/a</option><option value="4">Madre</option><option value="5" selected>Padre</option><option value="6">Tío/a</option><option value="7">Sobrino/a</option><option value="8">Otro</option>';
    }else if ($data['	parentesco_carga '] == 6) { 
      $parentesco_carga = '<option value="1">Hermano/a</option><option value="2">Hijo/a</option><option value="3">Esposo/a</option><option value="4">Madre</option><option value="5">Padre</option><option value="6" selected>Tío/a</option><option value="7">Sobrino/a</option><option value="8">Otro</option>';
    }else if ($data['	parentesco_carga '] == 7) { 
      $parentesco_carga = '<option value="1">Hermano/a</option><option value="2">Hijo/a</option><option value="3">Esposo/a</option><option value="4">Madre</option><option value="5">Padre</option><option value="6">Tío/a</option><option value="7" selected>Sobrino/a</option><option value="8">Otro</option>';
    }else if ($data['	parentesco_carga '] == 8) { 
      $parentesco_carga = '<option value="1">Hermano/a</option><option value="2">Hijo/a</option><option value="3">Esposo/a</option><option value="4">Madre</option><option value="5">Padre</option><option value="6">Tío/a</option><option value="7">Sobrino/a</option><option value="8" selected>Otro</option>';
    }
    $grado_instruccion_carga = $data["grado_instruccion_carga"];
    $profesion_carga = $data["profesion_carga"];
    $ingreso_carga = $data["ingreso_carga"];
    $inscrito_cne = $data["inscrito_cne"];
    $pensionado_carga = $data["pensionado_carga"];
    $carnet_carga = $data["carnet_carga"];
    $codigo_carnet_carga = $data["codigo_carnet_carga"];
    $serial_carnet_carga = $data["serial_carnet_carga"];

    //vivienda
    $condiciones_terreno = $data["condiciones_terreno"];
    $forma_tenencia = $data["forma_tenencia"];
    $tipo_vivienda = $data["tipo_vivienda"];
    $habitaciones = $data["habitaciones"];
    $materiales_vivienda = $data["materiales_vivienda"];
    $id_materiales_vivienda = $data["id_materiales_vivienda"];
    if ($data['	id_materiales_vivienda '] == 1) {      
      $id_materiales_vivienda = '<option value="1" selected>De Bloque</option><option value="2">De Lata</option><option value="3"> De Madera</option><option value="4">De Barro</option>';
    }else if ($data['	id_materiales_vivienda '] == 2) { 
      $id_materiales_vivienda = '<option value="1" >De Bloque</option><option value="2" selected>De Lata</option><option value="3"> De Madera</option><option value="4">De Barro</option>';
    }else if ($data['	id_materiales_vivienda '] == 3) { 
      $id_materiales_vivienda = '<option value="1">De Bloque</option><option value="2">De Lata</option><option value="3" selected>De Madera</option><option value="4">De Barro</option>';
    }else if ($data['	id_materiales_vivienda '] == 4) { 
      $id_materiales_vivienda = '<option value="1">De Bloque</option><option value="2">De Lata</option><option value="3">De Madera</option><option value="4" selected>De Barro</option>';
    }

    $tiene_mascotas = $_POST["tiene_mascotas"];
    $id_mascotas = $_POST["id_mascotas"];
    if ($data['	id_mascotas '] == 1) {      
      $id_mascotas = '<option value="1" selected>Perro</option><option value="2">Gato</option><option value="3"> Conejo</option><option value="4">Ave</option><option value="5">Morrocoy</option><option value="6">Acuatico</option><option value="7">Otro</option>';
    }else if ($data['	id_mascotas '] == 2) { 
      $id_mascotas = '<option value="1" >Perro</option><option value="2" selected>Gato</option><option value="3"> Conejo</option><option value="4">Ave</option><option value="5">Morrocoy</option><option value="6">Acuatico</option><option value="7">Otro</option>';
    }else if ($data['	id_mascotas '] == 3) { 
      $id_mascotas = '<option value="1">Perro</option><option value="2">Gato</option><option value="3" selected>Conejo</option><option value="4">Ave</option><option value="5">Morrocoy</option><option value="6">Acuatico</option><option value="7">Otro</option>';
    }else if ($data['	id_mascotas '] == 4) { 
      $id_mascotas = '<option value="1">Perro</option><option value="2">Gato</option><option value="3">Conejo</option><option value="4" selected>Ave</option><option value="5">Morrocoy</option><option value="6">Acuatico</option><option value="7">Otro</option>';
    }else if ($data['	id_mascotas '] == 5) { 
      $id_mascotas = '<option value="1">Perro</option><option value="2">Gato</option><option value="3">Conejo</option><option value="4">Ave</option><option value="5" selected>Morrocoy</option><option value="6">Acuatico</option><option value="7">Otro</option>';
    }else if ($data['	id_mascotas '] == 6) { 
      $id_mascotas = '<option value="1">Perro</option><option value="2">Gato</option><option value="3">Conejo</option><option value="4">Ave</option><option value="5">Morrocoy</option><option value="6" selected>Acuatico</option><option value="7">Otro</option>';
    }else if ($data['	id_mascotas '] == 7) { 
      $id_mascotas = '<option value="1">Perro</option><option value="2">Gato</option><option value="3">Conejo</option><option value="4">Ave</option><option value="5">Morrocoy</option><option value="6">Acuatico</option><option value="7" selected>Otro</option>';
    }

    $necesidades_vivienda = $_POST["necesidades_vivienda"];

    //enfermedades
    $cancer = $data["cancer"];
    $vih = $data["vih"];
    $sida = $data["sida"];
    $diabetes = $data["diabetes"];
    $hepatitis = $data["hepatitis"];
    $leucemia = $data["leucemia"];
    $epilepsia = $data["epilepsia"];
    $asma = $data["asma"];
    $hipertension = $data["hipertension"];
    $tuberculosis = $data["tuberculosis"];
    $corazon = $data["corazon"];
    $otra_enfermedad = $data["otra_enfermedad"];

    //condiciones de la vivienda
    $aguas_blancas = $data["aguas_blancas"];
    $aguas_servidas = $data["aguas_servidas"];
    $tanque_agua = $data["tanque_agua"];
    $medidor_agua = $data["medidor_agua"];
    $electricidad = $data["electricidad"];
    $medidor_electricidad = $data["medidor_electricidad"];
    $telefonia_fija = $data["telefonia_fija"];
    $internet = $data["internet"];
    $proveedor_internet = isset($data["proveedor_internet"]) && $data["internet"] === "si" ? $data["proveedor_internet"] : '';
    $cable = $data["cable"];
    $proveedor_cable = isset($data["proveedor_cable"]) && $data["cable"] === "si" ? $data["proveedor_cable"] : '';
    $aseour_bano = $data["aseo_urbano"];
    $gas_directo = $data["gas_directo"];
    $alumbrado_publico = $data["alumbrado_publico"];
    $cilindro = $data["cilindro"];
    $tamano_cilindro = isset($data["cilindro"]) && $data["cilindro"] === "si" ? $data["tamano_cilindro"]:'';
    if ($data['	tamano_cilindro '] == 1) {      
      $tamano_cilindro = '<option value="1" selected>10</option><option value="2">18</option><option value="3"> 27</option><option value="4">43</option>';
    }else if ($data['	tamano_cilindro '] == 2) { 
      $tamano_cilindro = '<option value="1" >10</option><option value="2" selected>18</option><option value="3"> 27</option><option value="4">43</option>';
    }else if ($data['	tamano_cilindro '] == 3) { 
      $tamano_cilindro = '<option value="1">10</option><option value="2">18</option><option value="3" selected>27</option><option value="4">43</option>';
    }else if($data['	tamano_cilindro '] == 4) { 
      $tamano_cilindro = '<option value="1">10</option><option value="2">18</option><option value="3">27</option><option value="4" selected>43</option>';
    }


    //participacion social
    $organizacion_comunitaria = $data["organizacion_comunitaria"];
    $nombre_organizacion = $data["nombre_organizacion"];
    $carnet_psuv = $data["carnet_psuv"];
    $codigo_carnet_psuv = $data["codigo_carnet_psuv"];
    $clap = $data["clap"];
    $cantidad_clap= isset($data["clap"]) && $data["clap"] === "si" ? $data["cantidad_clap"] : '';
    $bolsa_nutricion = $data["bolsa_nutricion"];
    $cantidad_bolsa_nutricion = isset($data["bolsa_nutricion"]) && $data["bolsa_nutricion"] === "si" ? $data["cantidad_bolsa_nutricion"] : '';
    $hogares_patria = $data["hogares_patria"];
    $jose_gregorio_hernandez = $data["jose_gregorio_hernandez"];
    $parto_humanizado = $data["parto_humanizado"];
    $lactancia_materna = $data["lactancia_materna"];
    $escolarizacion = $data["escolarizacion"];
    $economia_familiar = $data["economia_familiar"];
    $chamba_juvenil = $data["chamba_juvenil"];
    $amor_mayor = $data["amor_mayor"];
    $otro_beneficio = $data["otro_beneficio"];
    $observaciones = $data["observaciones"];

    $cont = 1;
  }
} else {
  $cont = 0;
};

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Consulta </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <header class="header">
    <div class="logo">
      <img src="logo.jpg" alt="Logo de la marca">
    </div>
    <nav>
    <?php include('nav_login.php'); ?>
  </header>
  <body>
    <div class="container">

   <!--AQUI VA CODIGO PHP PAL FINAL-->
      
        <header>Consejo Comunal<br></bt>Jose Leonardo Chirinos<br>Consultas</header>
        <div class="progress-bar">
          <div class="step">
            <p class="previ-1 prev">Jefe de familia</p> 
            <div class="bullet">
              <span>1</span>
            </div>
            <div class="check fas fa-check"></div>
          </div>
          <div class="step">
            <p class="previ-2 prev">Cargas Familiares</p>
            <div class="bullet">
              <span>2</span>
            </div>
            <div class="check fas fa-check"></div>
          </div>
          <div class="step">
            <p class="previ-3 prev">Datos de la Vivienda</p>
            <div class="bullet">
              <span>3</span>
            </div>
            <div class="check fas fa-check"></div>
          </div>
          <div class="step">
            <p class="previ-4 prev">Enfermedades</p>
            <div class="bullet">
              <span>4</span>
            </div>
            <div class="check fas fa-check"></div>
          </div>
          <div class="step">
            <p class="previ-5 prev">Condiciones de la vivienda</p>
            <div class="bullet">
              <span>5</span>
            </div>
            <div class="check fas fa-check"></div>
          </div>
          <div class="step">
            <p class="nexti-4 next">Participación Social</p>
            <div class="bullet">
              <span>6</span>
            </div>
            <div class="check fas fa-check"></div>
          </div>
        </div>
        <!-- form-->
        <div class="form-outer">
          <form action="" method="post" class="consulta-form" id="consulta-form">
            <div class="page slide-page">
              <div class="title">Jefe de Familia</div>

              <div class="field">
                <div class="label">Nombres</div>
                <input type="text" id="nombres" name="nombres" value="<?php echo $data['nombres']; ?>" autofocus>
              </div>

              <div class="field">
                <div class="label">Apellidos</div>
                <input type="text" id="apellidos"  name="apellidos" value="<?php echo $data['apellidos']; ?>">
              </div>

              <div class="field">
                <div class="label">Número de Cédula</div>
                <input type="number" id="cedula"  name="cedula" value="<?php echo $data['cedula']; ?>">
              </div>

              <div class="field">
                <div class="label">Género</div>
                <select name="nombre_genero" id="nombre_genero">
                  <?php echo $data['genero']; ?>
                </select>
              </div>

              <div class="field">
                <div class="label">Código del Carnet de la patria</div>
                <input type="number" id="codigo_carnet" name="codigo_carnet" value="<?php echo $data['codigo_carnet']; ?>">
              </div>

              <div class="field">
                <div class="label">Serial del Carnet de la patria </div>
                <input type="number" id="serial_carnet" name="serial_carnet" value="<?php echo $data['serial_carnet']; ?>">
              </div>

              <div class="field">
                <div class="label">Número de Celular</div>
                <input type="tel" id="numero_celular" name="numero_celular" value="<?php echo $data['numero_celular']; ?>">
              </div>

              <div class="field">
                <div class="label">Número de Teléfono de Habitación</div>
                <input type="tel" id="numero_telefono" name="numero_telefono" value="<?php echo $data['numero_telefono']; ?>">
              </div>

              <div class="field">
                <div class="label">Fecha de Nacimiento</div>
                <input type="datetime-local" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $data['fecha_nacimiento']; ?>">
              </div>

              <div class="field">
                <div class="label">Correo electrónico</div>
                <input type="email" id="correo" name="correo" value="<?php echo $data['correo']; ?>">
              </div>

              <div class="field">
                <div class="label">Estado Civil</div>
                <select name="estado_civil" id="estado_civil">    
                  <?php echo $data['estado_civil']; ?>
                </select>
              </div>

              <div class="field">
                <div class="label">Grado de Instrucción</div>
                <select id="grado_instruccion" name="grado_instruccion">
                  <?php echo $data['grado_instruccion']; ?>
                </select>
              </div>

              <div class="field">
                <div class="label">Sector donde trabaja</div>
                <select id="sector_trabajo" name="sector_trabajo">
                  <?php echo $data['sector_trabajo']; ?>
                </select>
              </div>

              <div class="field">
                <div class="label">Ocupación</div>
                <input type="text" id="ocupacion" name="ocupacion" value="<?php echo $data['ocupacion']; ?>">
              </div>

              <div class="field">
                <div class="label">¿Es pensionado/a?</div>
                  <input type="text" id="pensionado" name="pensionado" value="<?php echo $data['pensionado']; ?>">
              </div>

              <div class="field">
                <div class="label">¿Es discapacitado/a?</div>
                <input type="text" id="discapacitado" name="discapacitado" value="<?php echo $data['discapacitado']; ?>">
              </div>

              <div class="field">
                <div class="label">¿Es incapacitado/a?</div>
                <input type="text" id="incapacitado" name="incapacitado" value="<?php echo $data['incapacitado']; ?>">
              </div>

              <div class="field">
                <div class="label">¿Se encuentra inscrito en el CNE?</div>
                <input type="text" id="cne" name="cne" value="<?php echo $data['cne']; ?>">
              </div>

              <div class="field">
                <div class="label">¿Realiza actividad comercial en la vivienda?</div>
                <input type="text" id="actividad_comercial" name="actividad_comercial" value="<?php echo $data['actividad_comercial']; ?>">
              </div>

              <div class="field" id="showactividadvivienda" style="display: none;">
                <div class="label">¿Qué tipo de actividad realiza?</div>
                <input type="text" id="tipo_actividad" name="tipo_actividad" value="<?php echo $data['tipo_actividad']; ?>">
              </div>

              <div class="field">
                <div class="label">¿Cuántas cargas familiares tiene?</div>
                <input type="number" id="cargas_familiares" class="cargasfamiliares" name="cargas_familiares" alue="<?php echo $data['tipo_actividad']; ?>">
              </div>

              <div class="field">
                <button class="firstNext next">Siguiente</button>
              </div>

            </div>
            <!--pag2-->
            <div class="page">
              <div id="primeracargapage" style="display: none;">
                <div class="title">Primera Carga Familiar</div>

                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombre_carga" name="nombre_carga" value="<?php echo $data['nombre_carga']; ?>">
                </div>

                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellido_carga" name="apellido_carga" value="<?php echo $data['apellido_carga']; ?>">
                </div>

                <div class="field">
                  <div class="label">Género</div>
                  <select name="nombre_genero" id="nombre_genero">
                      <?php echo $data['genero']; ?>
                  </select>
                </div>

                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedula_carga"name="cedula_carga" value="<?php echo $data['cedula_carga']; ?>">
                </div>

                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fecha_nacimiento_carga" name="fecha_nacimiento_carga" value="<?php echo $data['fecha_nacimiento_carga']; ?>">
                </div>

                <div class="field">
                  <div class="label">Discapacidad</div>
                  <input type="text" id="discapacitado_carga" Name="discapacitado_carga" value="<?php echo $data['discapacitado_carga']; ?>">
                </div>
      <!-- agregar en variables-->
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <input type="text" id="incapacitado_carga"name="incapacitado_carga" value="<?php echo $data['incapacitado_carga']; ?>">
                </div>

                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <input type="text" id="embarazo_temprano_carga" name="embarazo_temprano_carga" value="<?php echo $data['embarazo_temprano_carga']; ?>">
                </div>

                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="nombre" name="nombre">
                      <?php echo $data['nombre_parentesco']; ?>
                  </select>
                </div>

                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="grado"name="grado">
                      <?php echo $data['grado']; ?>
                  </select>
                </div>

                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesion_carga" value="<?php echo $data['profesion_carga']; ?>">
                </div>

                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingreso_mensual_carga" name="ingreso_mensual_carga"  value="<?php echo $data['ingreso_mensual_carga']; ?>">
                </div>

                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <input type="text" id="inscrito_cne" name="inscrito_cne" value="<?php echo $data['inscrito_cne']; ?>">
                </div>

                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <input type="text" id="pensionado_carga" name="pensionado_carga" value="<?php echo $data['pensionado_carga']; ?>">
                </div>
  <!--agregar  a variables-->
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <input type="text" id="carga_carnet" name="carga_carnet" value="<?php echo $data['carga_carnet']; ?>">
                </div>

                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label">Código del Carnet de la patria</div>
                  <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga" value="<?php echo $data['codigo_carnet_carga']; ?>">
                </div>

                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" >Serial del Carnet de la patria </div>
                  <input type="number" id="serial_carnet_carga" name="serial_carnet_carga" value="<?php echo $data['serial_carnet_carga']; ?>">
                </div>
              </div>
  <!--hasta aqui-->
              <div id="segundacargapage" style="display: none;">
                <div class="title">Segunda Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga2">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga2">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga2" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga2">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga2">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga2">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga2">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga2">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga2">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga2">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga2">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga2">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga2">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga2pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga2carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga2">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga2">
                </div>
              </div>

              <div id="terceracargapage" style="display: none;">
                <div class="title">Tercera Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga3">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga3">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga3" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga3">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga3">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga3">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga3">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga3">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga3">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga3">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga3">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga3">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga3">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga3pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga3carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga3">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga3">
                </div>
              </div>

              <div id="cuartacargapage" style="display: none;">
                <div class="title">Cuarta Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga4">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga4">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga4" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga4">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga4">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga3">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga4">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga4">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga4">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga4">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga4">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga4">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga4">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga4pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga4carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga4">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga4">
                </div>
              </div>

              <div id="quintacargapage" style="display: none;">
                <div class="title">Quinta Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga5">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga5">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga5" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga5">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga5">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga5">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga5">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga5">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga5">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga5">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga5">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga5">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga5">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga5pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga5carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga5">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga5">
                </div>
              </div>

              <div id="sextacargapage" style="display: none;">
                <div class="title">Sexta Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga6">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga6">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga6" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga6">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga6">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga6">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga6">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga6">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga6">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga6">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga6">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga6">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga6">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga6pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga6carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga6">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga6">
                </div>
              </div>

              <div id="septimacargapage" style="display: none;">
                <div class="title">Séptima Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga7">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga7">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga7" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga7">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga7">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga7">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga7">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga7">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga7">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga7">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga7">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga7">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga7">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga7pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga7carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga7">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga7">
                </div>
              </div>
              
              <div id="octavacargapage" style="display: none;">
                <div class="title">Octava Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga8">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga8">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga8" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga8">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga8">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga8">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga8">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga8">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga8">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga8">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga8">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga8">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga8">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga8pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga8carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga8">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga8">
                </div>
              </div>
              
              <div id="novenacargapage" style="display: none;">
                <div class="title">Novena Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga9">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga9">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga9" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga9">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga9">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga9">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga9">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga9">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga9">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga9">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga9">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga9">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga9">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga9pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga9carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga9">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga9">
                </div>
              </div>

              <div id="decimacargapage" style="display: none;">
                <div class="title">Décima Carga Familiar</div>
                <div class="field">
                  <div class="label">Nombre(s)</div>
                  <input type="text" id="nombrecarga10">
                </div>
                <div class="field">
                  <div class="label">Apellido(s)</div>
                  <input type="text" id="apellidocarga10">
                </div>
                <div class="field">
                  <div class="label">Género</div>
                  <select id="generocarga10" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Número de Cédula</div>
                  <input type="number" id="cedulacarga10">
                </div>
                <div class="field">
                  <div class="label">Fecha de Nacimiento</div>
                  <input type="datetime-local" id="fechanaccarga10">
                </div>
                <div class="field">
                  <div class="label">Discapacidad</div>
                  <select id="discapacitadocarga10">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Incapacidad</div>
                  <select id="incapacitadocarga10">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Embarazo Temprano?</div>
                  <select id="embarazotempranocarga10">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Parentesco</div>
                  <select id="parentescocarga10">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="hermana/o">Hermana/o</option>
                    <option value="hija/o">Hija/o</option>
                    <option value="esposa/o">Esposa/o</option>
                    <option value="madre">Madre</option>
                    <option value="padre">Padre</option>
                    <option value="sobrina/o">Sobrina/o</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Grado de Instrucción</div>
                  <select id="instruccioncarga10">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Profesión?</div>
                  <input type="text" id="profesioncarga10">
                </div>
                <div class="field">
                  <div class="label">Ingreso Mensual</div>
                  <input type="number" id="ingresocarga10">
                </div>
                <div class="field">
                  <div class="label">Inscrita/o en el CNE?</div>
                  <select id="cnecarga10">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Pensionada/o?</div>
                  <select id="carga10pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field">
                  <div class="label">Posee carnet de la Patria?</div>
                  <select id="carga10carnet">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="field" id="showcargacarnetcod" style="display: none;">
                  <div class="label" name="codigo_carnet">Código del Carnet de la patria</div>
                  <input type="number" id="codigocarnetcarga10">
                </div>
                <div class="field" id="showcargacarnetser" style="display: none;">
                  <div class="label" name="serial_carnet_carga">Serial del Carnet de la patria </div>
                  <input type="number" id="serialcarnetcarga10">
                </div>
              </div>
              
              <div class="field btns">
                <button class="prev-1 prev">Atrás</button>
                <button class="next-1 next">Siguiente</button>
              </div>
            </div>

            <!--pag3-->
            <div class="page">
              <div class="title">Datos de la Vivienda</div>
              <div class="field">
                <div class="label">Condiciones del Terreno</div>
                <input type="text" id="condiciones_terreno" name="condiciones_terreno" value="<?php echo $data['condiciones_terreno']; ?>">
              </div>

              <div class="field">
                <div class="label">Forma de Tenencia</div>
                <input type="text" id="forma_tenencia" name="forma_tenencia" value="<?php echo $data['forma_tenencia']; ?>">
              </div>

              <div class="field">
                <div class="label">Tipo de Vivienda</div>
                <input type="text" id="tipo_vivienda" name="tipo_vivienda" value="<?php echo $data['tipo_vivienda']; ?>">
              </div>

              <div class="field">
                <div class="label">Cuántas habitaciones tiene?</div>
                <input type="number" id="habitaciones" name="habitaciones" value="<?php echo $data['habitaciones']; ?>">
              </div>

  <!--CAMBIAR CONDICIONES POR MATERIALES EN LA BD-->
              <div class="field">
                <div class="label">Materiales de la Vivienda</div>
                <select id="materiales_vivienda" name="materiales_vivienda" value="<?php echo $data['materiales_vivienda']; ?>">
                <?php echo $data['materiales_vivienda']; ?>
                </select>
              </div>

              <div class="field">
                <div class="label">Tienes mascotas?</div>
                <input type="text" id="masc" name="tiene_mascotas" value="<?php echo $data['tiene_mascotas']; ?>">
              </div>
  <!-- CAMBIAR NOMBRE -->
              <div class="field" id="showmascotas" style="display: none;">
                <div class="label">Tipo de Mascota(s)</div>
                <input type="text" id="masc" name="tiene_mascotas" value="<?php echo $data['tiene_mascotas']; ?>">
              </div>

              <div class="field" id="showotrasmascotas" style="display: none;">
                <div class="label">¿Cuál?</div>
                <input type="text" id="" name="">
              </div>

              <div class="field" style="height: 100px;">
                <div class="label">Necesidades de la Vivienda</div>
                <input type="text" id="necesidades_vivienda" name="necesidades_vivienda" value="<?php echo $data['numero_telefono']; ?>"style="width: 100%;">
              </div>

              <div class="field btns">
                <button class="prev-2 prev">Atrás</button>
                <button class="next-2 next">Siguiente</button>
              </div>
          </div>
            <!--pag4-->
            <div class="page">
              <div class="title">Existe alguno de estos padecimientos en su núcleo familiar?</div>
              <div class="field">
                <div class="label">Cáncer</div>
                <input type="text" id="cancer" name="cancer" value="<?php echo $data['pensionado']; ?>">
              </div>

              <div class="field">
                <div class="label">VIH</div>
                <input type="text" id="vih" name="vih" value="<?php echo $data['vih']; ?>">
              </div>

              <div class="field">
                <div class="label">Sida</div>
                <input type="text" id="sida" name="Sida" value="<?php echo $data['sida']; ?>">
              </div>

              <div class="field">
                <div class="label">Diabetes</div>
                <input type="text" id="diabetes" name="diabetes" value="<?php echo $data['diabetes']; ?>">
              </div>

              <div class="field">
                <div class="label">Hepatitis</div>
                <select id="hepatitis" name="hepatitis" value="<?php echo $data['hepatitis']; ?>">
              </div>

              <div class="field">
                <div class="label">Leucemia</div>
                <input type="text" id="leucemia" name="leucemia" value="<?php echo $data['leucemia']; ?>">
              </div>

              <div class="field">
                <div class="label">Epilepsia</div>
                <input type="text" id="epilepsia" name="epilepsia" value="<?php echo $data['epilpepsia']; ?>">
              </div>

              <div class="field">
                <div class="label">Asma</div>
                <input type="text"  id="asma" name="asma" value="<?php echo $data['asma']; ?>">
              </div>

              <div class="field">
                <div class="label">Hipertensión</div>
                <input type="text" id="hipertension" name="hipertension" value="<?php echo $data['hipertension']; ?>">
              </div>

              <div class="field">
                <div class="label">Tuberculosis</div>
                <input type="text"id="tuberculosis" name="tuberculosis" value="<?php echo $data['tuberculosis']; ?>">
              </div>

              <div class="field">
                <div class="label">Corazón</div>
                <input type="text" id="corazon" name="corazon" value="<?php echo $data['corazon']; ?>">
              </div>

              <div class="field">
                <div class="label">Otra</div>
                <input type="text" id="otra_enfermedad" name="otra_enfermedad" value="<?php echo $data['otra_enfermedad']; ?>">
              </div>

              <div class="field btns">
                <button class="prev-3 prev">Atrás</button>
                <button class="next-3 next">Siguiente</button>
              </div>
            </div>

            <!--pag5-->
            <div class="page">
              <div class="title">Su vivienda cuenta con...</div>
              <div class="field">
                <div class="label">Aguas Blancas</div>
                <input type="text" id="aguas_blancas" name="aguas_blancas" value="<?php echo $data['aguas_blancas']; ?>">
              </div>

              <div class="field">
                <div class="label">Aguas Servidas</div>
                <input type="text" id="aguas_servidas" name="aguas_servidas" value="<?php echo $data['aguas_servidas']; ?>">
              </div>

              <div class="field">
                <div class="label">Tanque de Agua</div>
                <input type="text" id="tanque_agua" name="tanque_agua" value="<?php echo $data['tanque_agua']; ?>">
              </div>

              <div class="field">
                <div class="label">Medidor de Agua</div>
                <select id="medidor_agua" name="medidor_agua" value="<?php echo $data['medidor_agua']; ?>">
              </div>

              <div class="field">
                <div class="label">Electricidad</div>
                <input type="text" id="electricidad" name="electricidad" value="<?php echo $data['electricidad']; ?>">
              </div>

              <div class="field">
                <div class="label">Medidor de Electricidad</div>
                <input type="text" id="medidor_electricidad" name="medidor_electricidad" value="<?php echo $data['medidor_electricidad']; ?>">
              </div>

              <div class="field">
                <div class="label">Telefonía Fija</div>
                <input type="text" id="telefonia_fija" name="telefonia_fija" value="<?php echo $data['telefonia_fija']; ?>">
              </div>

              <div class="field">
                <div class="label">Internet</div>
                <input type="text" id="internet" name="internet" value="<?php echo $data['internet']; ?>">
              </div>

              <div class="field" id="showinternet" style="display: none;">
                <div class="label">Con que proveedor?</div>
                <input type="text" name="proveedor_internet" id="proveedor_internet" value="<?php echo $data['proveedor_internet']; ?>">
              </div>

              <div class="field">
                <div class="label">Cable</div>
                <input type="text" id="cable" name="cable" value="<?php echo $data['cable']; ?>">
              </div>

              <div class="field" id="showcable" style="display: none;">
                <div class="label">Con que proveedor?</div>
                <input type="text" id="proveedor_cable" name="proveedor_cable" value="<?php echo $data['proveedor_cable']; ?>">
              </div>

              <div class="field">
                <div class="label">Aseo Urbano</div> 
                <input type="text" id="aseo_urbano" name="aseo_urbano" value="<?php echo $data['aseo_urbano']; ?>">
              </div>

              <div class="field">
                <div class="label">Gas Directo</div>
                <input type="text" id="gas_directo" name="gas_directo" value="<?php echo $data['gas_directo']; ?>">
              </div>

              <div class="field">
                <div class="label">Cilíndro</div>
                <input type="text" id="cilindro" name="cilindro" value="<?php echo $data['cilindro']; ?>">
              </div>
              
              <div class="field" id="showcilindro" style="display: none;">
                <div class="label">Tamaño del Cilíndro</div>
                <input type="text" id="tamano_cilindro" name="tamano_cilindro" value="<?php echo $data['tamano_cilindro']; ?>">
              </div>

              <div class="field">
                <div class="label">Alumbrado Público</div>
                <input type="text" id="alumbrado" name="alumbrado" value="<?php echo $data['alumbrado']; ?>">
              </div>

              <div class="field btns">
                <button class="prev-4 prev">Atrás</button>
                <button class="next-4 next">Siguiente</button>
              </div>
            </div>

            <!--ultima pag-->
            <div class="page">
              <div class="title">Participación Social</div>
              <div class="field">
                <div class="label">Participa en alguna organizacion comunitaria?</div>
                <input type="text" name="participacion_comunitaria" id="participacion_comunitaria" value="<?php echo $data['participacion_comunitaria']; ?>">
              </div>
              <div class="field">
                <div class="label">Cual?</div>
                <input type="text" id="organizacion_comunitaria" name="organizacion_comunitaria " value="<?php echo $data['organizacion_comunitaria']; ?>">
              </div>
              <div class="field">
                <div class="label">Posee carnet del PSUV?</div>
                <input type="text"name="carnet_psuv" id="carnet_psuv" value="<?php echo $data['carnet_psuv']; ?>">
              </div>
              <div class="field">
                <div class="label">Introduzca su número de carnet</div>
                <input type="number" name="numero_carnet_psuv" id="numero_carnet_psuv" value="<?php echo $data['numero_carnet_psuv']; ?>"> 
              </div>

              <div class="title">Recibe alguno de estos beneficios?</div>

              <div class="field">
                <div class="label">CLAP</div>
                <input type="text" id="divclap" name="clap" value="<?php echo $data['clap']; ?>">
              </div>

              <div class="field" id="showclap" style="display: none;">
                <div class="label">Que cantidad recibe?</div>
                <select name="cantidad_clap" id="cantidad_clap" value="<?php echo $data['cantidad_clap']; ?>">

                </select>
              </div>

              <div class="field">
                <div class="label">Bolsa de Nutrición</div>
                <input type="text" id="bolsa_nutri" name="bolsa_nutri" value="<?php echo $data['bolsa_nutri']; ?>">
              </div>

              <div class="field" id="showbolsanutri" style="display: none;">
                <div class="label">Que cantidad recibe?</div>
                <input type="number" name="cantidad_bolsa_nutri" id="cantidad_bolsa_nutri" value="<?php echo $data['cantidad_bolsa_nutri']; ?>">
              </div>

              <div class="field">
                <div class="label">Hogares de la Patria</div>
                <input type="text" name="hogares_patria" id="hogares_patria" value="<?php echo $data['hogares_patria']; ?>">
              </div>

              <div class="field">
                <div class="label">José Gregorio Hernández</div>
                <input type="text" name="jose_gregorio_hernandez" id="jose_gregorio_hernandez" value="<?php echo $data['jose_gregorio_hernandez']; ?>">
              </div>

              <div class="field">
                <div class="label">Parto Humanizado</div>
                <input type="text" name="parto_humanizado" id="parto_humanizado" value="<?php echo $data['parto_humanizado']; ?>">
              </div>

              <div class="field">
                <div class="label">Lactancia Materna</div>
                <input type="text" id="lactancia_materna" name="lactancia_materna" value="<?php echo $data['lactancia_materna']; ?>">
              </div>

              <div class="field">
                <div class="label">Escolarización</div>
                <input type="text" id="escolarizacion" name="escolarizacion" value="<?php echo $data['escolarizacion']; ?>">
              </div>

              <div class="field">
                <div class="label">Economía Familiar</div>
                <input type="text" id="economia_familiar" name="economia_familiar" value="<?php echo $data['economia_familiar']; ?>">
              </div>

              <div class="field">
                <div class="label">Chamba Juvenil</div>
                <input type="text"id="chamba_juvenil" name="chamba_juvenil" value="<?php echo $data['chamba_juvenil']; ?>">
              </div>

              <div class="field">
                <div class="label">Amor Mayor</div>
                <input type="text" id="amor_mayor" name="amor_mayor" value="<?php echo $data['amor_mayor']; ?>">
              </div>
              <div class="field">
                <div class="label">Otro</div>
                <input type="text" id="otro_beneficio" name="otro_beneficio" value="<?php echo $data['otro_beneficio']; ?>">
              </div>
              <div class="field">
                <div class="label">Observaciones</div>
                <input type="text" style="height: 50px;" id="observaciones_beneficio" name="observaciones_beneficio" value="<?php echo $data['observaciones_beneficio']; ?>"> <br>
              </div>

              <div class="field btns">
                <button class="prev-5 prev">Atrás</button>
                <button class="submit">Guardar</button>
              </div>
            </div>
          </form>
        </div>
        <!--AQUI VA CODIGO DE ELSE IF NOT THE CEDULA-->

    </div>    

    <script src="script.js"></script>
  </body>
</html>
