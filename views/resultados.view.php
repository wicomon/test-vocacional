<?php 
require 'views/header.php';
?>

<div class="col-lg-12 text-center">
        <h1 class="mt-5">
        Informe Vocacional Test UNFV
        </h1>
</div><br><br>
<!--
<div class="col-lg-12 text-center">
        <h1 class="mt-5">Realista : <?php echo $realista;?><br>
    investigador : <?php echo $investigador;?><br>
    artistico : <?php echo $artistico;?><br>
    social : <?php echo $social;?><br>
    emrpendedor : <?php echo $emrpendedor;?><br>
    convencional : <?php echo $convencional;?><br></h1>
    Resultado : <?php echo $mostrar;?>
</div>-->
<div class="container table">
<p class="h4">El presente informe es el resultado de la aplicacion del Test Vocacional UNFV,  un test valido y confiable que ubica tu nivel de 
        fortalezas vocacionales de acuerdo a tus respuestas en la siguiente(s) area(s): </p>
</div><br>
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" ><center>Realista</center></th>
      <th scope="col"><center>Investigación</center></th>
      <th scope="col"><center>Artístico</center></th>
      <th scope="col"><center>Social</center></th>
      <th scope="col"><center>Emprendedor</center></th>
      <th scope="col"><center>Convencional</center></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><center><?php echo $realista;?></center></td>
      <td><center><?php echo $investigador;?></center></td>
      <td><center><?php echo $artistico;?></center></td>
      <td><center><?php echo $social;?></center></td>
      <td><center><?php echo $emrpendedor;?></center></td>
      <td><center><?php echo $convencional;?></center></td>
    </tr>
    <tr >
      <td><center><p ><?php echo $n_realista;?></p></center></td>
      <td><center><p><?php echo $n_investigacion;?></p></center></td>
      <td><center><p><?php echo $n_artistico;?></p></center></td>
      <td><center><p><?php echo $n_social;?></p></center></td>
      <td><center><p><?php echo $n_emprendedor;?></p></center></td>
      <td><center><p><?php echo $n_convencional;?></p></center></td>
    </tr>
    
  </tbody>
</table>
</div>
<div class="container"><div class="container">
        <canvas id="myChart" width="400" hight="400"></canvas>
</div></div><br><br><br>


<?php if ($mostrar=='1') {?>
<div class="container table">
  <p class="h4">Tienes un interés por trabajar con objetos reales como herramientas máquinas, vehículos, equipos, y seres vivos (animales, peces, vegetales).</b></p><br>
</div>
<div class="container table">
  <p class="h4">Tienes interés por algunas de estas opciones: </b></p>
</div>
  
<div class="container table-bordered">
        <div class="row">
                <div class="col-sm">
                        Area 1: AGRIULTURA Y NATURALEZA
                        </div>
                        <div class="col-sm">
                        Area 2: MECANICAS Y CONSTRUCCIÓN
                        </div>
                        <div class="col-sm">
                        Area 3: MILITARES Y TRABAJOS MANUALES
                </div>
        </div><br>
        <div class="row">
                <div class="col-sm">     
                        <li>ING. AGROINDUSTRIAL</li>
                        <li>ING. ACUICOLA</li>
                        <li>ING. AMBIENTAL</li>
                        <li>ING. PESQUERA</li>
                        <li>ING. AGRICOLA</li>
                        <li>ING. GEOLOGICA</li>
                        <li>ING. ING. AGRONOMA</li>
                        <li>ING. FORESTAL</li>
                        <li>ING. GEOGRAFICA</li>
                        <li>ING. DE MINAS</li>
                        <li>ING. DE PETROLEO</li>
                        <li>ZOOTECNIA</li>    
                </div>
                <div class="col-sm">
                        <li>ING. CIVIL</li>
                        <li>ING.INDUSTRIAL</li>
                        <li>ING.METALURGICA</li>
                        <li>ING. NAVAL</li>
                        <li>ING. ALIMENTARIA</li>
                        <li>ING. TEXTIL</li>
                        </div>
                <div class="col-sm">
                        <li>ING. DE TRANSPORTES</li>
                        <li>CHOFER PROFESIONAL</li>
                        <li>EDUCACION FISICA</li>
                        <li>SUBOFICIALES FAP-EP-MGP</li>
                        <li>POLICIA NACIONAL</li>
                </div>
        </div>
</div><br>
<?php } ?>

<?php if ($mostrar=='2') {?>
<div class="container table">
  <p class="h4">Tienes un interés por trabajar  investigando científicamente los fenómenos físicos, biológicos y/o culturales para comprenderlos.</b></p><br>
</div>
<div class="container table">
  <p class="h4">Tienes interés por algunas de estas opciones: </b></p>
</div>
<div class="container table-bordered">
        <div class="row">
                <div class="col-sm">
                        Area 4: CIENCIAS DE BIO-SALUD
                        </div>
                        <div class="col-sm">
                        Area 5: CIENCIAS EXACTAS
                        </div>
                        <div class="col-sm">
                        Area 6: INFORMÁTICA
                </div>
        </div><br>
        <div class="row">
                <div class="col-sm">
                        <li>MEDICINA HUMANA</li>
                        <li>MEDICINA VETERINARIA</li>
                        <li>OBSTETRICIA</li>
                        <li>ODONTOLOGIA</li>
                        <li>BIOLOGIA </li>
                        <li>NUTRICION</li>
                        </div>
                <div class="col-sm">     
                        <li>MATEMATICA PURA</li>
                        <li>QUIMICA</li>
                        <li>FISICA</li>
                        <li>QUIMICOFARMACEUTICO</li>
                        <li>ING.QUIMICA</li>
                        <li>ING. PETROQUIMICA</li>  
                </div>
                <div class="col-sm">
                        <li>ING. INFORMATICA</li>
                        <li>ING.ELECTRONICA</li>
                        <li>ING.DE SISTEMAS</li>
                        <li>ING.MECATRONICA</li>
                        <li>ING.TELECOMUNICACIONES</li>
                </div>
        </div>
</div><br>
<?php } ?>
<?php if ($mostrar=='3') {?>
<div class="container table">
  <p class="h4">Tienes un interés por trabajar con materiales físicos, verbales y/o humanos para crear productos armoniosos, atractivos y  artísticos.</b></p><br>
</div>
<div class="container table">
  <p class="h4">Tienes interés por algunas de estas opciones: </b></p>
</div> 
<div class="container table-bordered">
        <div class="row">
                <div class="col-sm">
                        Area 7: ARTES ESCENICAS
                        </div>
                        <div class="col-sm">
                        Area 8: ARTES PLASTICAS
                        </div>
                        <div class="col-sm">
                        Area 9: ARTES LITERARIAS Y MUSICALES
                </div>
        </div><br>
        <div class="row">
                <div class="col-sm">     
                        <li>DANZA FOLKLORICAS</li>
                        <li>DANZA MODERNAS</li>
                        <li>BALLET</li>
                        <li>COREOGRAFIA</li>
                        <li>ARTEA DRAMATICO</li>
                        <li>ACTOR-ACTRIZA</li>
                        <li>CANTANTE O SOLISTA</li>
                        <li>TOCAR UN INSTRUMENTO</li>
                        <li>PRODUCCION DE CINE</li>
                        <li>RADIO y TV</li>
                        <li>EDUCACION</li>
                        <li>ARTISTICO-MUSICAL</li>    
                </div>
                <div class="col-sm">
                        <li>ARTE: ESCULTURA</li>
                        <li>DIBUJO, PINTURA,GRABADO</li>
                        <li>ARQUITECTURA</li>
                        <li>DISEÑO GRÁFICO</li>
                        <li>DISEÑO PUBLICITARIO</li>
                        <li>DISEÑO DE INTERIORES</li>
                        <li>DISEÑO DE JOYAS</li>
                        </div>
                <div class="col-sm">
                        <li>NOVELISTA, LITERATURA</li>
                        <li>GUIONISTA DE TV</li>
                        <li>GUIONISTA TEATRAL</li>
                        <li>COMPOSITOR MUSICAL</li>
                </div>
        </div>
</div><br>
<?php } ?>

<?php if ($mostrar=='4') {?>
<div class="container table">
  <p class="h4">Tienes un interés por trabajar con personas a las cuales puedas informar, educar, proteger, ayudar o  servir a tu prójimo.</b></p><br>
</div>
<div class="container table">
  <p class="h4">Tienes interés por algunas de estas opciones: </b></p>
</div>
<div class="container table-bordered">
        <div class="row">
                <div class="col-sm">
                        Area 10: LETRAS Y CIENCIAS SOCIALES
                        </div>
                        <div class="col-sm">
                        Area 11: EDUCATIVAS Y CUIDADO DE SALUD
                        </div>
                        <div class="col-sm">
                        Area 12: SERVICIOS A PERSONAS
                </div>
        </div><br>
        <div class="row">
                <div class="col-sm">     
                        <li>FILOSOFIA</li>
                        <li>LINGÜÍSTICA</li>
                        <li>HISTORIA</li>
                        <li>SOCIOLOGIA</li>
                        <li>TRADUCCION</li>
                        <li>INTERPRETACION</li>
                </div>
                <div class="col-sm">
                        <li>EDUCACION</li>
                        <li>INICIAL-PRIMARIA</li>
                        <li>EDUCACION SECUNDARIA</li>
                        <li>EDUCACION FISICA</li>
                        <li>PSICOLOGÍA EDUCATIVA</li>
                        <li>ENFERMERIA</li>
                        <li>TECNOLOGIA MEDICA</li>
                        </div>
                <div class="col-sm">
                        <li>DERECHO</li>
                        <li>CIENCIAS POLITICAS</li>
                        <li>DIPLOMACIA</li>
                        <li>TRABAJO SOCIAL</li>
                        <li>TEOLOGO</li>
                        <li>SACERDOTES</li>
                        <li>RELIGIOSAS</li>
                        <li>PASTORES</li>
                </div>
        </div>
</div><br>
<?php } ?>

<?php if ($mostrar=='5') {?>
<div class="container table">
  <p class="h4">Tienes un interés por trabajar con personas las cuales pueda organizar y posteriormente obtener un beneficio empresarial, económico u otras ganancias. </b></p><br>
</div>
<div class="container table">
  <p class="h4">Tienes interés por algunas de estas opciones: </b></p>
</div>
<div class="container table-bordered">
        <div class="row">
                <div class="col-sm">
                        Area 13: ADMINISTRACIÓN RECURSOS HUMANOS
                        </div>
                        <div class="col-sm">
                        Area 14: GERENCIA Y SUPERVISIÓN
                        </div>
                        <div class="col-sm">
                        Area 15: COMUNICACIONES Y MARKETING
                </div>
        </div><br>
        <div class="row">
                <div class="col-sm">     
                        <li>ADMINISTRACIÓN DE EMPRESAS</li>
                        <li>ADMINISTRACIÓN PUBLICA</li>
                        <li>ADMINISTRACIÓN HOTELERA</li>
                        <li>ADMINISTRACIÓN RESTAURANTE</li>
                        <li>ADMINISTRACIÓN DE TURISMO</li>
                        <li>PSICOLOGÍA ORGANIZACIONAL</li>
                </div>
                <div class="col-sm">
                        <li>ADMINISTRACIÓN DE EMPRESAS</li>
                        <li>NEGOCIOS INTERNACIONALES</li>
                        <li>OFICIALES EN LA FAP-EMCH</li>
                        <li>MGP o PNP</li>
                        <li>INGENIERÍA INDUSTRIAL</li>
                        <li>INGENIERÍA DE SISTEMAS</li>
                        <li>RELACIONES INDUSTRIALES</li>
                        </div>
                <div class="col-sm">
                        <li>CIENCIAS DE LA COMUNICACIÓN</li>
                        <li>TV, RADIO, PRENSA</li>
                        <li>PUBLICIDAD</li>
                        <li>LOCUTORES DE RADIO</li>
                        <li>LOCUTORES DE TV</li>
                        <li>MARKETING</li>
                </div>
        </div>
</div><br>
<?php } ?>

<?php if ($mostrar=='6') {?>
<div class="container table">
  <p class="h4">Tienes un interés por trabajar con datos escritos o numéricos de acuerdo a un orden  contable, jurídico, estadístico o cualquier otro.</b></p><br>
</div>
<div class="container table">
  <p class="h4">Tienes interés por algunas de estas opciones: </b></p>
</div>
<div class="container table-bordered">
        <div class="row">
                <div class="col-sm">
                        Area 16: CALCULO Y TRANSACCIONES FINANCIERAS
                        </div>
                        <div class="col-sm">
                        Area 17: EMPLEOS ADMINISTRATIVOS
                        </div>
                        <div class="col-sm">
                        Area 18: DISTRIBUCION Y DESPACHO
                </div>
        </div><br>
        <div class="row">
                <div class="col-sm">
                        <li>ECONOMIA</li>
                        <li>CONTABILIDAD GENERAL</li>
                        <li>ESTADISTICA</li>
                        <li>ADMINISTRACION BANCARIA</li>
                        <li>CAJERO DE BANCO</li>
                        <li>AGENTE DE SEGURIDAD</li>
                        <li>AGENTE DE ADUANA</li>
                        </div>
                <div class="col-sm">     
                        <li>AUXILIAR CONTABLE</li>
                        <li>AUXILIAR ADMINISTRATIVO</li>
                        <li>ASISTENTE DE GERENCIA</li>
                        <li>SECRETARIADO EJECUTIVO</li>
                        <li>SECRETARIADO BILINGÜE</li>
                        <li>OPERADORA TELEFONICA</li>
                        <li>TRADUCTOR OFICIAL</li>
                </div>
                <div class="col-sm">
                        <li>ALMACEN Y KARDEX</li>
                        <li>MENSAJERIA Y CORREO</li>
                        <li>ASISTENTE LOGISTICO</li>
                        <li>BIBLIOTECOLOGIA</li>
                </div>
        </div>
</div><br>
<?php } ?>

<div class="container">
        <a href="fin.php"><button type="button" class="btn btn-info btn-lg btn-block">Finalizar Test</button></a>
</div><br><br>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo RUTA;?>vendor/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo RUTA;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <?php require 'footer.php'; ?>
</body>
<script>
        var ctx= document.getElementById("myChart").getContext("2d");
        var myChart= new Chart(ctx,{
            type:"bar",
            data:{
                labels:['Realista','Investigación','Artístico','Social','Emprendedor','Convencional'],
                datasets:[{
                        label:'Informe Vocacional',
                        data:[<?php echo $realista;?>,<?php echo $investigador;?>,<?php echo $artistico;?>,<?php echo $social;?>,<?php echo $emrpendedor;?>,<?php echo $convencional;?>],
                        backgroundColor:[
                            'rgb(66, 134, 244,0.5)',
                            'rgb(74, 135, 72,0.5)',
                            'rgb(229, 89, 50,0.5)',
                            'rgb(230, 230, 0)',
                            'rgb(153, 0, 0)',
                            'rgb(46, 184, 46)'
                        ]
                }]
            },
            options:{
                scales:{
                    yAxes:[{
                            ticks:{
                                beginAtZero:true
                            }
                    }]
                }
            }
        });
    </script>
</html>