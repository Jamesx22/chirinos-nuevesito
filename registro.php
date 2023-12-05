<?php
  require('dbConnection.php');

  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $cedula = $_POST["cedula"];
  $genero = $_POST["genero"];
  $numero_celular= $_POST["numero_celular"];
  $numero_telefono = $_POST["numero_telefono"];
  $fecha_nacimiento = $_POST["fecha_nacimiento"];
  $correo = $_POST["correo"];
  $estado_civil = $_POST["estado_civil"];
  $grado_instruccion = $_POST["grado_instruccion"];
  $sector_trabajo = $_POST["sector_trabajo"];
  $ocupacion = $_POST["ocupacion"];
  $pensionado = $_POST["pensionado"];
  $discapacitado = $_POST["discapacitado"];
  $incapacitado = $_POST["incapacitado"];
  $codigo_carnet = $_POST["codigo_carnet"];
  $serial_carnet = $_POST["serial_carnet"];
  $cne = $_POST["cne"];
  $actividad_comercial = $_POST["actividad_comercial"];
  $tipo_actividad = $_POST["tipo_actividad"];
  $cargas_familiares = $_POST["cargas_familiares"];

  //cargafamiliar
  $nombre_carga = $_POST["nombre_carga"];
  $apellido_carga = $_POST["apellido_carga"];
  $genero_carga = $_POST["genero_carga"];
  $cedula_carga = $_POST["cedula_carga"];
  $fecha_nacimiento_carga = $_POST["fecha_nacimiento_carga"];
  $discapacitado_carga = $_POST["discapacitado_carga"];
  $incapacitado_carga = $_POST["incapacitado_carga"];
  $embarazo_temprano_carga = $_POST["embarazo_temprano_carga"];
  $parentesco_carga = $_POST["parentesco_carga"];

  $grado_instruccion_carga = $_POST["grado_instruccion_carga"];
  $profesion_carga = $_POST["profesion_carga"];
  $ingreso_carga = $_POST["ingreso_carga"];
  $inscrito_cne = $_POST["inscrito_cne"];
  $pensionado_carga = $_POST["pensionado_carga"];
  $carnet_carga = $_POST["carnet_carga"];
  $codigo_carnet_carga = $_POST["codigo_carnet_carga"];
  $serial_carnet_carga = $_POST["serial_carnet_carga"];

  //vivienda
  $condiciones_terreno = $_POST["condiciones_terreno"];
  $forma_tenencia = $_POST["forma_tenencia"];
  $tipo_vivienda = $_POST["tipo_vivienda"];
  $habitaciones = $_POST["habitaciones"];
  $materiales_vivienda = $_POST["materiales_vivienda"];
  $id_materiales_vivienda = $_POST["id_materiales_vivienda"];
  $tiene_mascotas = $_POST["tiene_mascotas"];
  $id_mascotas = $_POST["id_mascotas"];
  $necesidades_vivienda = $_POST["necesidades_vivienda"];

  //enfermedades
  $cancer = $_POST["cancer"];
  $vih = $_POST["vih"];
  $sida = $_POST["sida"];
  $diabetes = $_POST["diabetes"];
  $hepatitis = $_POST["hepatitis"];
  $leucemia = $_POST["leucemia"];
  $epilepsia = $_POST["epilepsia"];
  $asma = $_POST["asma"];
  $hipertension = $_POST["hipertension"];
  $tuberculosis = $_POST["tuberculosis"];
  $corazon = $_POST["corazon"];
  $otra_enfermedad = $_POST["otra_enfermedad"];

  //condiciones de la vivienda
  $aguas_blancas = $_POST["aguas_blancas"];
  $aguas_servidas = $_POST["aguas_servidas"];
  $tanque_agua = $_POST["tanque_agua"];
  $medidor_agua = $_POST["medidor_agua"];
  $electricidad = $_POST["electricidad"];
  $medidor_electricidad = $_POST["medidor_electricidad"];
  $telefonia_fija = $_POST["telefonia_fija"];
  $internet = $_POST["internet"];
  $proveedor_internet = isset($_POST["proveedor_internet"]) && $_POST["internet"] === "si" ? $_POST["proveedor_internet"] : '';
  $cable = $_POST["cable"];
  $proveedor_cable = isset($_POST["proveedor_cable"]) && $_POST["cable"] === "si" ? $_POST["proveedor_cable"] : '';
  $aseo_urbano = $_POST["aseo_urbano"];
  $gas_directo = $_POST["gas_directo"];
  $alumbrado_publico = $_POST["alumbrado_publico"];
  $cilindro = $_POST["cilindro"];
  $tamano_cilindro = isset($_POST["cilindro"]) && $_POST["cilindro"] === "si" ? $_POST["tamano_cilindro"]:'';


  //participacion social
  $organizacion_comunitaria = $_POST["organizacion_comunitaria"];
  $nombre_organizacion = $_POST["nombre_organizacion"];
  $carnet_psuv = $_POST["carnet_psuv"];
  $codigo_carnet_psuv = $_POST["codigo_carnet_psuv"];
  $clap = $_POST["clap"];
  $cantidad_clap= isset($_POST["clap"]) && $_POST["clap"] === "si" ? $_POST["cantidad_clap"] : '';
  $bolsa_nutricion = $_POST["bolsa_nutricion"];
  $cantidad_bolsa_nutricion = isset($_POST["bolsa_nutricion"]) && $_POST["bolsa_nutricion"] === "si" ? $_POST["cantidad_bolsa_nutricion"] : '';
  $hogares_patria = $_POST["hogares_patria"];
  $jose_gregorio_hernandez = $_POST["jose_gregorio_hernandez"];
  $parto_humanizado = $_POST["parto_humanizado"];
  $lactancia_materna = $_POST["lactancia_materna"];
  $escolarizacion = $_POST["escolarizacion"];
  $economia_familiar = $_POST["economia_familiar"];
  $chamba_juvenil = $_POST["chamba_juvenil"];
  $amor_mayor = $_POST["amor_mayor"];
  $otro_beneficio = $_POST["otro_beneficio"];
  $observaciones = $_POST["observaciones"];


  $sql = "INSERT INTO jefe_familia(nombres, apellidos, id_genero, cedula, codigo_carnet, serial_carnet, numero_celular, numero_telefono, fecha_nacimiento, edad, correo, id_estado_civil, id_sector_trabajo, ocupacion, pensionado, discapacitado, incapacitado, cne, actividad_comercial, tipo_actividad, cargas_familiares) VALUES ('$nombres','$apellidos','$cedula','$nombre_genero','$cedula','$serial_carnet','$numero_celular','$numero_telefono','$fecha_nacimiento','$correo','$estado_civil','$grado_instruccion','$sector_trabajo','$ocupacion','$pensionado','$discapacitado','$incapacitado','$codigo_carnet','$serial_carnet','$cne','$actividad_comercial','$tipo_actividad','$cargas_familiares')";

  $sql1 = "INSERT INTO cargas_familiares(nombre_carga, apellido_carga, id_genero, cedula_carga, fecha_nacimiento_carga, discapacitada_carga, incapacitado_carga, embarazo_temprano_carga, id_parentesco, id_grado_instruccion, profesion_carga, ingreso_mensual_carga, inscrito_cne, pensionado_carga, carga_carnet, codigo_carga_carnet, serial_carga_carnet) VALUES ('$nombre_carga','$apellido_carga','$genero','$cedula_carga','$fecha_nacimiento_carga','$discapacitada_carga','$incapacitado_carga','$embarazo_temprano_carga', '$id_parentesco', '$id_grado_instruccion', '$profesion_carga', '$ingreso_mensual_carga', '$inscrito_cne', '$pensionado_carga', '$carga_carnet', '$codigo_carga_carnet', '$serial_carga_carnet')";

  $sql2 = "INSERT INTO vivienda(condiciones_terreno, forma_tenencia, tipo_vivienda, habitaciones, id_condiciones_vivienda, tiene_mascotas, id_mascotas, necesidades_vivienda) VALUES ('$condiciones_terreno', '$forma_tenencia', '$tipo_vivienda', '$habitaciones', '$id_condiciones_vivienda', '$tiene_mascotas', '$id_mascotas', '$necesidades_vivienda')";

  $sql3 = "INSERT INTO enfermedades(cancer, vih, sida, diabetes, hepatitis, leucemia, epilepsia, asma, hipertension, tuberculosis, corazon) VALUES ('$cancer', '$vih', '$sida', '$diabetes', '$hepatitis', '$leucemia', '$epilepsia', '$asma', '$hipertension', '$tuberculosis', '$corazon')";

  $sql4 = "INSERT INTO condiciones_vivienda(aguas_blancas, aguas_servidas, tanque_agua, medidor_agua, electricidad, medidor_electricidad, telefonia_fija, internet, proveedor_internet, cable, proveedor_cable, aseo_urbano, gas_directo, alumbrado_publico, cilindro, tamano_cilindro,) VALUES ('$aguas_blancas', '$aguas_servidas', '$tanque_agua', '$medidor_agua', '$electricidad', '$medidor_electricidad', '$telefonia_fija', '$internet', '$proveedor_internet', '$cable', '$proveedor_cable', '$aseo_urbano', '$gas_directo', '$alumbrado_publico', '$cilindro', '$tamano_cilindro') ";

  $sql5 = "INSERT INTO participacion_social(organizacion_comunitaria, nombre_organizacion, carnet_psuv, codigo_carnet_psuv, clap, cantidad_clap, bolsa_nutricion, cantidad_bolsa_nutricion, hogares_patria, jose_gregorio_hernandez, parto_humanizado, lactancia_materna, escolarizacion, economia_familiar, chamba_juvenil, amor_mayor, otro_beneficio, observaciones,) VALUES ('$organizacion_comunitaria', '$nombre_organizacion', '$carnet_psuv', '$codigo_carnet_psuv', '$clap', '$cantidad_clap', '$bolsa_nutricion', '$cantidad_bolsa_nutricion', '$hogares_patria', '$jose_gregorio_hernandez', '$parto_humanizado', '$lactancia_materna', '$escolarizacion', '$economia_familiar', '$chamba_juvenil', '$amor_mayor', '$otro_beneficio', '$observaciones') ";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<header class="header">
  <?php include('nav_login.php'); ?>
</header>

<body>
  <div class="container">
    <header>Consejo Comunal<br></bt>Jose Leonardo Chirinos</header>
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
      <div class="page slide-page">
        <form action="#" name="jose_leonardo_chirino" method="post">
          <div class="title">Jefe de Familia</div>
          <div class="field">
            <div class="label" >Nombre(s)</div>
            <input type="text" name="nombre" id="nombre" autofocus>
          </div>
          <div class="field">
            <div class="label" >Apellido(s)</div>
            <input type="text" name="apellido" id="apellido">
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" name="cedula" id="cedula">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero" name="genero" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Código del Carnet de la patria</div>
            <input type="number" name="codigo_carnet" id="codigo_carnet">
          </div>
          <div class="field">
            <div class="label">Serial del Carnet de la patria </div>
            <input type="number" name="serial_carnet" id="serial_carnet">
          </div>
          <div class="field">
            <div class="label" >Número de Teléfono</div>
            <input type="tel" name="numero_telefono" id="numero_telefono">
          </div>
          <div class="field">
            <div class="label">Número de Teléfono de Habitación</div>
            <input type="tel" name="numero_telefonocasa">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" name="fecha_nacimiento" id="fecha_nacimiento">
          </div>
          <div class="field">
            <div class="label">Correo electrónico</div>
            <input type="email" name="correo" id="correo">
          </div>
          <div class="field">
            <div class="label">Estado Civil</div>
            <select id="estado_civil" name="estado_civil" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="grado_instruccion" name="grado_instruccion" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Sector donde trabaja</div>
            <select id="sector_trabajo" name="sector_trabajo" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Ocupación</div>
            <input type="text" name="ocupacion" id="ocupacion">
          </div>
          <div class="field">
            <div class="label">¿Es pensionado/a?</div>
            <select id="pensionado" name="pensionado">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Si</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">¿Es discapacitado/a?</div>
            <select id="discapacitado" name="discapacitado">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Si</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">¿Es incapacitado/a?</div>
            <select id="incapacitado" name="incapacitado">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Si</option>
              <option value="no">No</option>
            </select>
          </div>

          <div class="field">
            <div class="label">¿Se encuentra inscrito en el CNE?</div>
            <select id="cne" name="cne">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Si</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">¿Realiza actividad comercial en la vivienda?</div>
            <select id="actividad_vivienda" name="actividad_vivienda">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Si</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showactividadvivienda" style="display: none;">
            <div class="label">¿Qué tipo de actividad realiza?</div>
            <input type="text" name="tipo_actividad" id="tipo_actividad">
          </div>
          <div class="field">
            <div class="label">¿Cuántas cargas familiares tiene?</div>
            <sinput type="number" id="cargas_familiares" class="cargas_familiares" name="cargas_familiares">
          </div>
          <div class="field">
            <button type="submit" class="firstNext next" name="reg-jefe.php">Siguiente</button>
          </div>
        </form>
      </div>
      <!--pag2
      <div class="page"> 
        <div id="primeracargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
            <div class="title">Primera Carga Familiar</div>
            <div class="field">
              <div class="label">Nombre(s)</div>
              <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
            </div>
            <div class="field">
              <div class="label">Apellido(s)</div>
              <input type="text" id="apellido_carga" name="apellido_carga">
            </div>
            <div class="field">
              <div class="label">Género</div>
              <select id="genero_carga" name="genero_carga">
                <option selected="true" disabled="disabled">Seleccione</option>
                <option value="femenino">Femenino</option>
                <option value="masculino">Masculino</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Número de Cédula</div>
              <input type="number" id="cedula_carga"name="cedula_carga">
            </div>
            <div class="field">
              <div class="label">Fecha de Nacimiento</div>
              <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
            </div>
            <div class="field">
              <div class="label">Discapacidad</div>
              <select id="discapacitado_carga"Name="discapacitado_carga">
                <option selected="true" disabled="disabled">Seleccione</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Incapacidad</div>
              <select id="incapacitado_carga"name="incapacitado_carga">
                <option selected="true" disabled="disabled">Seleccione</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Embarazo Temprano?</div>
              <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
                <option selected="true" disabled="disabled">Seleccione</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Parentesco</div>
              <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

              </select>
            </div>
            <div class="field">
              <div class="label">Grado de Instrucción</div>
              <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

              </select>
            </div>
            <div class="field">
              <div class="label">Profesión?</div>
              <input type="text" id="profesion_carga"name="profesion_carga">
            </div>
            <div class="field">
              <div class="label">Ingreso Mensual</div>
              <input type="number" id="ingreso_carga"name="ingreso_carga">
            </div>
            <div class="field">
              <div class="label">Inscrita/o en el CNE?</div>
              <select id="cne_carga"name="cne_carga">
                <option selected="true" disabled="disabled">Seleccione</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Pensionada/o?</div>
              <select id="pensionado_carga" name="pensionado_carga">
                <option selected="true" disabled="disabled">Seleccione</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Posee carnet de la Patria?</div>
                <select id="carnet_carga" name="carnet_carga">
                <option selected="true" disabled="disabled">Seleccione</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="field" id="showcargacarnetcod" style="display: none;">
              <div class="label" ">Código del Carnet de la patria</div>
              <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
            </div>
            <div class="field" id="showcargacarnetser" style="display: none;">
              <div class="label" >Serial del Carnet de la patria </div>
              <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
            </div>
            <div class="field btns">
              <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
            </div>
          </form>   
        </div>

        <div id="segundacargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="title">Segunda Carga Familiar</div>
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label" ">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
          </form>
        </div>

        <div id="terceracargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="title">Tercera Carga Familiar</div>
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label" ">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
          </form>
        </div>

        <div id="cuartacargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label" ">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
          </form>
        </div>

        <div id="quintacargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="title">Quinta Carga Familiar</div>
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label" ">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
          </form>
        </div>

        <div id="sextacargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="title">Sexta Carga Familiar</div>
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label" ">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
          </form>
        </div>

        <div id="septimacargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="title">Séptima Carga Familiar</div>
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label" ">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
          </form>
        </div>

        <div id="octavacargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="title">Octava Carga Familiar</div>
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label" ">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
        </form>
        </div>

        <div id="novenacargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="title">Novena Carga Familiar</div>
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label" ">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
          </form>
        </div>

        <div id="decimacargapage" style="display: none;">
          <form action="reg-carga.php" method="post">
          <div class="title">Décima Carga Familiar</div>
          <div class="field">
            <div class="label">Nombre(s)</div>
            <input type="text" id="nombre_carga" name="nombre_carga" autofocus>
          </div>
          <div class="field">
            <div class="label">Apellido(s)</div>
            <input type="text" id="apellido_carga" name="apellido_carga">
          </div>
          <div class="field">
            <div class="label">Género</div>
            <select id="genero_carga" name="genero_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Número de Cédula</div>
            <input type="number" id="cedula_carga"name="cedula_carga">
          </div>
          <div class="field">
            <div class="label">Fecha de Nacimiento</div>
            <input type="datetime-local" id="fecha_nacimiento_carga"name="fecha_nacimiento_carga">
          </div>
          <div class="field">
            <div class="label">Discapacidad</div>
            <select id="discapacitado_carga"Name="discapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Incapacidad</div>
            <select id="incapacitado_carga"name="incapacitado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Embarazo Temprano?</div>
            <select id="embarazo_temprano_carga" name="embarazo_temprano_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parentesco</div>
            <select id="parentesco_carga"name="parentesco_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Grado de Instrucción</div>
            <select id="instruccion_carga"name="instruccion_carga" multiple multiselect-search="true">

            </select>
          </div>
          <div class="field">
            <div class="label">Profesión?</div>
            <input type="text" id="profesion_carga"name="profesion_carga">
          </div>
          <div class="field">
            <div class="label">Ingreso Mensual</div>
            <input type="number" id="ingreso_carga"name="ingreso_carga">
          </div>
          <div class="field">
            <div class="label">Inscrita/o en el CNE?</div>
            <select id="cne_carga"name="cne_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Pensionada/o?</div>
            <select id="pensionado_carga" name="pensionado_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Posee carnet de la Patria?</div>
              <select id="carnet_carga" name="carnet_carga">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcargacarnetcod" style="display: none;">
            <div class="label">Código del Carnet de la patria</div>
            <input type="number" id="codigo_carnet_carga" name="codigo_carnet_carga">
          </div>
          <div class="field" id="showcargacarnetser" style="display: none;">
            <div class="label" >Serial del Carnet de la patria </div>
            <input type="number" id="serial_carnet_carga" name="serial_carnet_carga">
          </div>
          <div class="field btns">
            <button type="submit" name="reg-carga.php" class="save-carga">Guardar</button>
          </div>
          </form>
        </div>
        
        <div class="field btns">
          <button class="prev-1 prev">Atrás</button>
          <button type="submit" class="next-1 next">Siguiente</button>
        </div>
      </div>
        <!--pag3-->
        <!--<div class="page">
        <form action="reg-vivienda.php" method="post">
          <div class="title">Datos de la Vivienda</div>
          <div class="field">
            <div class="label">Condiciones del Terreno</div>
            <input type="text" required autofocus>
          </div>
          <div class="field">
            <div class="label">Forma de Tenencia</div>
            <input type="text" required>
          </div>
          <div class="field">
            <div class="label">Tipo de Vivienda</div>
            <input type="text" required>
          </div>
          <div class="field">
            <div class="label">Cuántas habitaciones tiene?</div>
            <select id="habitaciones" name="habitaciones" required>
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Condiciones de la Vivienda</div>
            <select id="condiciones_vivienda" name="condiciones_vivienda" required>
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="bloque">De Bloque</option>
              <option value="lata">De Lata </option>
              <option value="madera">De Madera</option>
              <option value="barro">De Barro</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Tienes mascotas?</div>
            <select id="masc" required>
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showmascotas" style="display: none;">
            <div class="label">Tipo de Mascota(s)</div>
            <!--<select id="mascotas" name="mascotas" multiple>
              <label style="font-size: 18px;"><input type="checkbox" style="height: 12px; width: 12px;margin-right: 4px;" name="perro" value="perro">Perro</label>
              <label style="font-size: 18px;"><input type="checkbox" style="height: 12px; width: 12px;margin-right: 4px;" name="gato" value="gato">Gato</label>
              <label style="font-size: 18px;"><input type="checkbox" style="height: 12px; width: 12px;margin-right: 4px;" name="conejo" value="conejo">Conejo</label>
              <label style="font-size: 18px;"><input type="checkbox" style="height: 12px; width: 12px;margin-right: 4px;" name="ave" value="ave">Ave</label>
              <label style="font-size: 18px;"><input type="checkbox" style="height: 12px; width: 12px;margin-right: 4px;" name="morrocoy" value="morrocoy">Morrocoy</label>
              <label style="font-size: 18px;"><input type="checkbox" style="height: 12px; width: 12px;margin-right: 4px;" name="acuatico" value="acuatico">Acuático</label>
              <label style="font-size: 18px;"><input type="checkbox" style="height: 12px; width: 12px;margin-right: 4px;" name="otro" value="otro">Otro</label>
            <!--</select>
          </div>
          <div class="field" id="showotrasmascotas" style="display: none;">
            <div class="label">¿Cuál?</div>
            <input type="text" id="otramascota">
          </div>
          <div class="field" style="height: 100px;">
            <div class="label">Necesidades de la Vivienda</div>
            <input type="text" style="width: 100%;">
          </div>
          <div class="field btns">
            <button class="prev-2 prev">Atrás</button>
            <button type="submit" class="next-2 next" name="reg-vivienda.php">Siguiente</button>
          </div>
        </form>
        </div>
        <!--pag4-->
        <!--
        <div class="page">
          <form action="reg-enfermedades.php" method="post">
          <div class="title">Existe alguno de estos padecimientos en su núcleo familiar?</div>
          <div class="field">
            <div class="label">Cáncer</div>
            <select id="cancer" name="cancer">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">VIH</div>
            <select id="vih" name="vih">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Sida</div>
            <select id="sida" name="sida">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Diabetes</div>
            <select id="diabetes" name="diabetes">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Hepatitis</div>
            <select id="hepatitis" name="hepatitis">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Leucemia</div>
            <select id="leucemia" name="leucemia">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Epilepsia</div>
            <select id="epilepsia" name="epilepsia">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Asma</div>
            <select id="asma" name="asma">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Hipertensión</div>
            <select id="hipertension" name="hipertension">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Tuberculosis</div>
            <select id="tuberculosis" name="tuberculosis">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Corazón</div>
            <select id="corazon" name="corazon">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Otra Enfermedad</div>
              <input type="text" id="otra_enfermedad" name="otra_enfermedad">
          </div>
          <div class="field btns">
            <button class="prev-3 prev">Atrás</button>
            <button type="submit" class="next-3 next" name="reg-enfermedades.php">Siguiente</button>
          </div>
        </form>
        </div>
        <!--pag5-->
        <!--<div class="page">
          <form action="reg-condiciones-vivienda.php" method="post">
          <div class="title">Su vivienda cuenta con...</div>
          <div class="field">
            <div class="label">Aguas Blancas</div>
            <select id="aguas_blancas" name="aguas_blancas">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Aguas Servidas</div>
            <select id="aguas_servidas" name="aguas_servidas">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Tanque de Agua</div>
            <select id="tanque_agua" name="tanque_agua">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Medidor de Agua</div>
            <select id="medidor_agua" name="medidor_agua">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Electricidad</div>
            <select id="electricidad" name="electricidad">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Medidor de Electricidad</div>
            <select id="medidor_electricidad" name="medidor_electricidad">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Telefonía Fija</div>
            <select id="telefonia_fija" name="telefonia_fija">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Internet</div>
            <select id="internet" name="internet">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showinternet" style="display: none;">
            <div class="label">Con que proveedor?</div>
            <input type="text" name="proveedor_internet" id="proveedor_internet">
          </div>
          <div class="field">
            <div class="label">Cable</div>
            <select id="cable" name="cable">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcable" style="display: none;">
            <div class="label">Con que proveedor?</div>
            <input type="text" id="proveedor_cable" name="proveedor_cable">
          </div>
          <div class="field">
            <div class="label">Aseo Urbano</div>
            <select id="aseo_urbano" name="aseo_urbano">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Gas Directo</div>
            <select id="gas_directo" name="gas_directo">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Cilíndro</div>
            <select id="cilindro" name="cilindro">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showcilindro" style="display: none;">
            <div class="label">Tamaño del Cilíndro</div>
            <select id="tamanio_cilindro" name="tamanio_cilindro">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="10">10</option>
              <option value="18">18</option>
              <option value="27">27</option>
              <option value="43">43</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Alumbrado Público</div>
            <select id="alumbrado_publico" name="alumbrado_publico">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field btns">
            <button class="prev-4 prev">Atrás</button>
            <button type="submit" class="next-4 next" name="reg-condiciones-vivienda.php">Siguiente</button>
          </div>
        </form>
        </div>
        <!--ultima pag-->
        <!--<div class="page">
          <form action="reg-participacion-social.php" method="post" >
          <div class="title">Participación Social</div>
          <div class="field">
            <div class="label">Participa en alguna organizacion comunitaria?</div>
            <select name="participacion_comunitaria" id="participacion_comunitaria">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label" name="organizacion_comunitaria" id="organizacion_comunitaria">Cual?</div>
            <input type="text">
          </div>
          <div class="field">
            <div class="label">Posee carnet del PSUV?</div>
            <select name="carnet_psuv" id="carnet_psuv">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Introduzca su número de carnet</div>
            <input type="number" name="numero_carnet_psuv" id="numero_carnet_psuv">
          </div>
          <div class="title">Recibe alguno de estos beneficios?</div>
          <div class="field">
            <div class="label">CLAP</div>
            <select id="divclap" name="clap" id="clap">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showclap" style="display: none;">
            <div class="label">Que cantidad recibe?</div>
            <select name="clap" id="clap">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Bolsa de Nutrición</div>
            <select id="bolsanutri">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field" id="showbolsanutri" style="display: none;">
            <div class="label">Que cantidad recibe?</div>
            <select name="clap" id="clap">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Hogares de la Patria</div>
            <select name="hogares_patria" id="hogares_patria">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">José Gregorio Hernández</div>
            <select name="jose_gregorio_hernandez" id="jose_gregorio_hernandez">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Parto Humanizado</div>
            <select name="parto_humanizado" id="parto_humanizado">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Lactancia Materna</div>
            <select id="lactancia_materna" name="lactancia_materna">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Escolarización</div>
            <select id="escolarizacion" name="escolarizacion">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Economía Familiar</div>
            <select id="economia_familiar" name="economia_familiar">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Chamba Juvenil</div>
            <select id="chamba_juvenil" name="chamba_juvenil">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Amor Mayor</div>
            <select id="amor_mayor" name="amor_mayor">
              <option selected="true" disabled="disabled">Seleccione</option>
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Otro Beneficios</div>
            <input type="text" id="otro_beneficio" name="otro_beneficio">
          </div>
          <div class="field">
            <div class="label">Observaciones</div>
            <input type="text" style="height: 50px;" id="observaciones" name="observaciones"> <br>
          </div>

          <div class="field btns">
            <button class="prev-5 prev">Atrás</button>
            <button class="" type="submit" name="reg-participacion-social.php">Guardar</button>
          </div>
        </form>
      </div>-->
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>