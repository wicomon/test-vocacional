<?php 
require 'views/header.php';
?>
<div class="container ">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Test Vocacional Ceprevi</h1>
      </div>
</div>


<div class="container ">
    <form action="resultados.php" method="post">  
    <br>
    
    <span class="border-left-0">
        <p class="h6">A CONTINUACION ENCONTRARAS TRES PREGUNTAS EN LAS QUE TENDRAS QUE 
        RESPONDER DE ACUERDO A TU PREFERENCIA, RECUERDA QUE NO HAY PREGUNTA BUENA O MALA.</p>
    </span><br>
    <p class="h3">A. ¿TE GUSTARÍA TRABAJAR EN ESTOS AMBIENTES LABORALES?</p>
    <p class="h4">Imagina un ambiente de trabajo  <b class="text-danger">no una profesión</b> - Imagina una empresa excelente  <b class="text-danger">no una en crisis.</b></p><br>
    <div class="container table">
        <div class="row"><!--Fila 1-->
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>1. Taller de Mecánica Automotriz:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_1" id="1_1_1" value="5" required>
                        <label class="form-check-label" for="1_1_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_1" id="1_1_2" value="3" required>
                        <label class="form-check-label" for="1_1_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_1" id="1_1_3" value="1" required>
                        <label class="form-check-label" for="1_1_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>2. Fábrica de Muebles:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_2" id="1_2_1" value="5" required>
                        <label class="form-check-label" for="1_2_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_2" id="1_2_2" value="3" required>
                        <label class="form-check-label" for="1_2_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_2" id="1_2_3" value="1" required>
                        <label class="form-check-label" for="1_2_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>3. Empresa Minera:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_3" id="1_3_1" value="5" required>
                        <label class="form-check-label" for="1_3_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_3" id="1_3_2" value="3" required>
                        <label class="form-check-label" for="1_3_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_3" id="1_3_3" value="1" required>
                        <label class="form-check-label" for="1_3_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            
        </div><br>
        <div class="row"><!--Fila 2-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>4. Hacienda Ganadera:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_4" id="1_4_1" value="5" required>
                            <label class="form-check-label" for="1_4_1"> <?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_4" id="1_4_2" value="3" required>
                            <label class="form-check-label" for="1_4_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p1_4" id="1_4_3" value="1" required>
                            <label class="form-check-label" for="1_4_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>5. Hacienda Agrícola:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_5" id="1_5_1" value="5" required>
                            <label class="form-check-label" for="1_5_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_5" id="1_5_2" value="3" required>
                            <label class="form-check-label" for="1_5_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p1_5" id="1_5_3" value="1" required>
                            <label class="form-check-label" for="1_5_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>6. Panificadora o Panadería:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_6" id="1_6_1" value="5" required>
                            <label class="form-check-label" for="1_6_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_6" id="1_6_2" value="3" required>
                            <label class="form-check-label" for="1_6_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p1_6" id="1_6_3" value="1" required>
                            <label class="form-check-label" for="1_6_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 3-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>7. Central Hidroeléctrica:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_1" id="2_1_1" value="5" required>
                            <label class="form-check-label" for="2_1_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_1" id="2_1_2" value="3" required>
                            <label class="form-check-label" for="2_1_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_1" id="2_1_3" value="1" required>
                            <label class="form-check-label" for="2_1_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>8. Laboratorio de Análisis Químico:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_2" id="2_2_1" value="5" required>
                            <label class="form-check-label" for="2_2_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_2" id="2_2_2" value="3" required>
                            <label class="form-check-label" for="2_2_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_2" id="2_2_3" value="1" required>
                            <label class="form-check-label" for="2_2_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>9. Hospital o Clínica:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_3" id="2_3_1" value="5" required>
                            <label class="form-check-label" for="2_3_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_3" id="2_3_2" value="3" required>
                            <label class="form-check-label" for="2_3_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_3" id="2_3_3" value="1" required>
                            <label class="form-check-label" for="2_3_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 4-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>10. Taller de Reparación de Computadoras:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_4" id="2_4_1" value="5" required>
                            <label class="form-check-label" for="2_4_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_4" id="2_4_2" value="3" required>
                            <label class="form-check-label" for="2_4_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_4" id="2_4_3" value="1" required>
                            <label class="form-check-label" for="2_4_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>11. Farmacia o Botica:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_5" id="2_5_1" value="5" required>
                            <label class="form-check-label" for="2_5_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_5" id="2_5_2" value="3" required>
                            <label class="form-check-label" for="2_5_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_5" id="2_5_3" value="1" required>
                            <label class="form-check-label" for="2_5_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>12. Instituto Geofísico:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_6" id="2_6_1" value="5" required>
                            <label class="form-check-label" for="2_6_1"> <?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_6" id="2_6_2" value="3" required>
                            <label class="form-check-label" for="2_6_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_6" id="2_6_3" value="1" required>
                            <label class="form-check-label" for="2_6_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 5-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>13. Compañía de Teatro:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_1" id="3_1_1" value="5" required>
                            <label class="form-check-label" for="3_1_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_1" id="3_1_2" value="3" required>
                            <label class="form-check-label" for="3_1_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_1" id="3_1_3" value="1" required>
                            <label class="form-check-label" for="3_1_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>14. Banda u Orquesta Musical:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_2" id="3_2_1" value="5" required>
                            <label class="form-check-label" for="3_2_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_2" id="3_2_2" value="3" required>
                            <label class="form-check-label" for="3_2_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_2" id="3_2_3" value="1" required>
                            <label class="form-check-label" for="3_2_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>15.Casa de Modas y Modelos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_3" id="3_3_1" value="5" required>
                            <label class="form-check-label" for="3_3_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_3" id="3_3_2" value="3" required>
                            <label class="form-check-label" for="3_3_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_3" id="3_3_3" value="1" required>
                            <label class="form-check-label" for="3_3_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 6-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>16. Estudios de Arquitectos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_4" id="3_4_1" value="5" required>
                            <label class="form-check-label" for="3_4_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_4" id="3_4_2" value="3" required>
                            <label class="form-check-label" for="3_4_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_4" id="3_4_3" value="1" required>
                            <label class="form-check-label" for="3_4_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>17. Galería de Artes:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_5" id="3_5_1" value="5" required>
                            <label class="form-check-label" for="3_5_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_5" id="3_5_2" value="3" required>
                            <label class="form-check-label" for="3_5_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_5" id="3_5_3" value="1" required>
                            <label class="form-check-label" for="3_5_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>18. Estudio de grabaciones musicales:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_6" id="3_6_1" value="5" required>
                            <label class="form-check-label" for="3_6_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_6" id="3_6_2" value="3" required>
                            <label class="form-check-label" for="3_6_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_6" id="3_6_3" value="1" required>
                            <label class="form-check-label" for="3_6_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 7-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>19. Estudio de Abogados:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_1" id="4_1_1" value="5" required>
                            <label class="form-check-label" for="4_1_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_1" id="4_1_2" value="3" required>
                            <label class="form-check-label" for="4_1_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_1" id="4_1_3" value="1" required>
                            <label class="form-check-label" for="4_1_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>20. Estación de Bomberos y Ambulancias:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_2" id="4_2_1" value="5" required>
                            <label class="form-check-label" for="4_2_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_2" id="4_2_2" value="3" required>
                            <label class="form-check-label" for="4_2_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_2" id="4_2_3" value="1" required>
                            <label class="form-check-label" for="4_2_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>21. Corte Suprema de Justicia:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_3" id="4_3_1" value="5" required>
                            <label class="form-check-label" for="4_3_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_3" id="4_3_2" value="3" required>
                            <label class="form-check-label" for="4_3_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_3" id="4_3_3" value="1" required>
                            <label class="form-check-label" for="4_3_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 8-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>22. Asilo u orfanato:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_4" id="4_4_1" value="5" required>
                            <label class="form-check-label" for="4_4_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_4" id="4_4_2" value="3" required>
                            <label class="form-check-label" for="4_4_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_4" id="4_4_3" value="1" required>
                            <label class="form-check-label" for="4_4_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>23. Movimiento misionero religioso:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_5" id="4_5_1" value="5" required>
                            <label class="form-check-label" for="4_5_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_5" id="4_5_2" value="3" required>
                            <label class="form-check-label" for="4_5_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_5" id="4_5_3" value="1" required>
                            <label class="form-check-label" for="4_5_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>24. Alcaldía de un distrito:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_6" id="4_6_1" value="5" required>
                            <label class="form-check-label" for="4_6_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_6" id="4_6_2" value="3" required>
                            <label class="form-check-label" for="4_6_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_6" id="4_6_3" value="1" required>
                            <label class="form-check-label" for="4_6_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 9-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>25. Cadena de Empresas Hoteleras:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_1" id="5_1_1" value="5" required>
                            <label class="form-check-label" for="5_1_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_1" id="5_1_2" value="3" required>
                            <label class="form-check-label" for="5_1_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_1" id="5_1_3" value="1" required>
                            <label class="form-check-label" for="5_1_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>26. Agencias de Noticias(tv/radio):</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_2" id="5_2_1" value="5" required>
                            <label class="form-check-label" for="5_2_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_2" id="5_2_2" value="3" required>
                            <label class="form-check-label" for="5_2_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_2" id="5_2_3" value="1" required>
                            <label class="form-check-label" for="5_2_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>27. Cadena de supermercados:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_3" id="5_3_1" value="5" required>
                            <label class="form-check-label" for="5_3_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_3" id="5_3_2" value="3" required>
                            <label class="form-check-label" for="5_3_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_3" id="5_3_3" value="1" required>
                            <label class="form-check-label" for="5_3_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 10-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>28. Periódico/Seminario/Revista:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_4" id="5_4_1" value="5" required>
                            <label class="form-check-label" for="5_4_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_4" id="5_4_2" value="3" required>
                            <label class="form-check-label" for="5_4_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_4" id="5_4_3" value="1" required>
                            <label class="form-check-label" for="5_4_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>29. Estación de radio y tv:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_5" id="5_5_1" value="5" required>
                            <label class="form-check-label" for="5_5_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_5" id="5_5_2" value="3" required>
                            <label class="form-check-label" for="5_5_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_5" id="5_5_3" value="1" required>
                            <label class="form-check-label" for="5_5_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>30. Promotora de ventas de automóviles y casas:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_6" id="5_6_1" value="5" required>
                            <label class="form-check-label" for="5_6_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_6" id="5_6_2" value="3" required>
                            <label class="form-check-label" for="5_6_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_6" id="5_6_3" value="1" required>
                            <label class="form-check-label" for="5_6_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 11-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>31. Banco de ahorro y créditos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_1" id="6_1_1" value="5" required>
                            <label class="form-check-label" for="6_1_1"> <?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_1" id="6_1_2" value="3" required>
                            <label class="form-check-label" for="6_1_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_1" id="6_1_3" value="1" required>
                            <label class="form-check-label" for="6_1_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>32. INFOCORP (Oficina Informes Antecedentes Bancarios) :</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_2" id="6_2_1" value="5" required>
                            <label class="form-check-label" for="6_2_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_2" id="6_2_2" value="3" required>
                            <label class="form-check-label" for="6_2_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_2" id="6_2_3" value="1" required>
                            <label class="form-check-label" for="6_2_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>33. Estudios de contadores:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_3" id="6_3_1" value="5" required>
                            <label class="form-check-label" for="6_3_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_3" id="6_3_2" value="3" required>
                            <label class="form-check-label" for="6_3_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_3" id="6_3_3" value="1" required>
                            <label class="form-check-label" for="6_3_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 12-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>34. SUNAT (Superintendencia Nacional de Administración Tributaria) :</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_4" id="6_4_1" value="5" required>
                            <label class="form-check-label" for="6_4_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_4" id="6_4_2" value="3" required>
                            <label class="form-check-label" for="6_4_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_4" id="6_4_3" value="1" required>
                            <label class="form-check-label" for="6_4_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>35. Notaría Pública:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_5" id="6_5_1" value="5" required>
                            <label class="form-check-label" for="6_5_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_5" id="6_5_2" value="3" required>
                            <label class="form-check-label" for="6_5_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_5" id="6_5_3" value="1" required>
                            <label class="form-check-label" for="6_5_3">N<?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>36. Casa de cambio de moneda extranjera:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_6" id="6_6_1" value="5" required>
                            <label class="form-check-label" for="6_6_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_6" id="6_6_2" value="3" required>
                            <label class="form-check-label" for="6_6_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_6" id="6_6_3" value="1" required>
                            <label class="form-check-label" for="6_6_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
    </div>              
     <br>
    <p class="h3">B. ¿TE GUSTARÍA SEGUIR ESTOS ESTUDIOS?</p>
    <p class="h4">Imagina los cursos y asignaturas que vas a estudiar - imagina que los estudios son técnicos o universitarios.</b></p><br>
    <div class="container table">
        <div class="row"><!--Fila 1-->
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>1. Industrias Alimentarias:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_7" id="1_7_1" value="5" required>
                        <label class="form-check-label" for="1_7_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_7" id="1_7_2" value="3" required>
                        <label class="form-check-label" for="1_7_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_7" id="1_7_3" value="1" required>
                        <label class="form-check-label" for="1_7_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>2. Electricidad Industrial:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_8" id="1_8_1" value="5" required>
                        <label class="form-check-label" for="1_8_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_8" id="1_8_2" value="3" required>
                        <label class="form-check-label" for="1_8_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_8" id="1_8_3" value="1" required>
                        <label class="form-check-label" for="1_8_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>3. Ingeniería Agroindustrial:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_9" id="1_9_1" value="5" required>
                        <label class="form-check-label" for="1_9_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_9" id="1_9_2" value="3" required>
                        <label class="form-check-label" for="1_9_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_9" id="1_9_3" value="1" required>
                        <label class="form-check-label" for="1_9_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            
        </div><br>
        <div class="row"><!--Fila 2-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>4. Ingeniería Industrial:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_10" id="1_10_1" value="5" required>
                            <label class="form-check-label" for="1_10_1"> <?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_10" id="1_10_2" value="3" required>
                            <label class="form-check-label" for="1_10_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p1_10" id="1_10_3" value="1" required>
                            <label class="form-check-label" for="1_10_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>5. Piloto de Aeronaves:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_11" id="1_11_1" value="5" required>
                            <label class="form-check-label" for="1_11_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_11" id="1_11_2" value="3" required>
                            <label class="form-check-label" for="1_11_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p1_11" id="1_11_3" value="1" required>
                            <label class="form-check-label" for="1_11_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>6. Medicina Humana:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_7" id="2_7_1" value="5" required>
                            <label class="form-check-label" for="2_7_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_7" id="2_7_2" value="3" required>
                            <label class="form-check-label" for="2_7_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_7" id="2_7_3" value="1" required>
                            <label class="form-check-label" for="2_7_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 3-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>7. Física:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_8" id="2_8_1" value="5" required>
                            <label class="form-check-label" for="2_8_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_8" id="2_8_2" value="3" required>
                            <label class="form-check-label" for="2_8_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_8" id="2_8_3" value="1" required>
                            <label class="form-check-label" for="2_8_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>8. Ingeniería Informática:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_9" id="2_9_1" value="5" required>
                            <label class="form-check-label" for="2_9_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_9" id="2_9_2" value="3" required>
                            <label class="form-check-label" for="2_9_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_9" id="2_9_3" value="1" required>
                            <label class="form-check-label" for="2_9_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>9. Odontología:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_10" id="2_10_1" value="5" required>
                            <label class="form-check-label" for="2_10_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_10" id="2_10_2" value="3" required>
                            <label class="form-check-label" for="2_10_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_10" id="2_10_3" value="1" required>
                            <label class="form-check-label" for="2_10_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 4-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>10. Biología:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_11" id="2_11_1" value="5" required>
                            <label class="form-check-label" for="2_11_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_11" id="2_11_2" value="3" required>
                            <label class="form-check-label" for="2_11_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_11" id="2_11_3" value="1" required>
                            <label class="form-check-label" for="2_11_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>11. Arquitectura:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_7" id="3_7_1" value="5" required>
                            <label class="form-check-label" for="3_7_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_7" id="3_7_2" value="3" required>
                            <label class="form-check-label" for="3_7_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_7" id="3_7_3" value="1" required>
                            <label class="form-check-label" for="3_7_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>12. Diseño Gráfico:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_8" id="3_8_1" value="5" required>
                            <label class="form-check-label" for="3_8_1"> <?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_8" id="3_8_2" value="3" required>
                            <label class="form-check-label" for="3_8_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_8" id="3_8_3" value="1" required>
                            <label class="form-check-label" for="3_8_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 5-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>13. Bellas Artes:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_9" id="3_9_1" value="5" required>
                            <label class="form-check-label" for="3_9_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_9" id="3_9_2" value="3" required>
                            <label class="form-check-label" for="3_9_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_9" id="3_9_3" value="1" required>
                            <label class="form-check-label" for="3_9_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>14. Literatura:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_10" id="3_10_1" value="5" required>
                            <label class="form-check-label" for="3_10_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_10" id="3_10_2" value="3" required>
                            <label class="form-check-label" for="3_10_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_10" id="3_10_3" value="1" required>
                            <label class="form-check-label" for="3_10_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>15. Arte Cinematográfico:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_11" id="3_11_1" value="5" required>
                            <label class="form-check-label" for="3_11_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_11" id="3_11_2" value="3" required>
                            <label class="form-check-label" for="3_11_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_11" id="3_11_3" value="1" required>
                            <label class="form-check-label" for="3_11_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 6-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>16. Psicología:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_7" id="4_7_1" value="5" required>
                            <label class="form-check-label" for="4_7_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_7" id="4_7_2" value="3" required>
                            <label class="form-check-label" for="4_7_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_7" id="4_7_3" value="1" required>
                            <label class="form-check-label" for="4_7_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>17. Derecho:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_8" id="4_8_1" value="5" required>
                            <label class="form-check-label" for="4_8_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_8" id="4_8_2" value="3" required>
                            <label class="form-check-label" for="4_8_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_8" id="4_8_3" value="1" required>
                            <label class="form-check-label" for="4_8_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>18. Trabajo Social:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_9" id="4_9_1" value="5" required>
                            <label class="form-check-label" for="4_9_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_9" id="4_9_2" value="3" required>
                            <label class="form-check-label" for="4_9_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_9" id="4_9_3" value="1" required>
                            <label class="form-check-label" for="4_9_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 7-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>19. Educación:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_10" id="4_10_1" value="5" required>
                            <label class="form-check-label" for="4_10_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_10" id="4_10_2" value="3" required>
                            <label class="form-check-label" for="4_10_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_10" id="4_10_3" value="1" required>
                            <label class="form-check-label" for="4_10_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>20. Sociología:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_11" id="4_11_1" value="5" required>
                            <label class="form-check-label" for="4_11_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_11" id="4_11_2" value="3" required>
                            <label class="form-check-label" for="4_11_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_11" id="4_11_3" value="1" required>
                            <label class="form-check-label" for="4_11_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>21. Negocios Internacionales:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_7" id="5_7_1" value="5" required>
                            <label class="form-check-label" for="5_7_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_7" id="5_7_2" value="3" required>
                            <label class="form-check-label" for="5_7_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_7" id="5_7_3" value="1" required>
                            <label class="form-check-label" for="5_7_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 8-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>22. Guía Oficial de Turismo:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_8" id="5_8_1" value="5" required>
                            <label class="form-check-label" for="5_8_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_8" id="5_8_2" value="3" required>
                            <label class="form-check-label" for="5_8_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_8" id="5_8_3" value="1" required>
                            <label class="form-check-label" for="5_8_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>23. Ciencias de la Comunicación:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_9" id="5_9_1" value="5" required>
                            <label class="form-check-label" for="5_9_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_9" id="5_9_2" value="3" required>
                            <label class="form-check-label" for="5_9_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_9" id="5_9_3" value="1" required>
                            <label class="form-check-label" for="5_9_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>24. Administración de Empresas:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_10" id="5_10_1" value="5" required>
                            <label class="form-check-label" for="5_10_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_10" id="5_10_2" value="3" required>
                            <label class="form-check-label" for="5_10_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_10" id="5_10_3" value="1" required>
                            <label class="form-check-label" for="5_10_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 9-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>25. Marketing Empresarial:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_11" id="5_11_1" value="5" required>
                            <label class="form-check-label" for="5_11_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_11" id="5_11_2" value="3" required>
                            <label class="form-check-label" for="5_11_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_11" id="5_11_3" value="1" required>
                            <label class="form-check-label" for="5_11_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>26. Contabilidad:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_7" id="6_7_1" value="5" required>
                            <label class="form-check-label" for="6_7_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_7" id="6_7_2" value="3" required>
                            <label class="form-check-label" for="6_7_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_7" id="6_7_3" value="1" required>
                            <label class="form-check-label" for="6_7_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>27. Cajero de Banco:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_8" id="6_8_1" value="5" required>
                            <label class="form-check-label" for="6_8_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_8" id="6_8_2" value="3" required>
                            <label class="form-check-label" for="6_8_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_8" id="6_8_3" value="1" required>
                            <label class="form-check-label" for="6_8_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 10-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>28. Estadística:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_9" id="6_9_1" value="5" required>
                            <label class="form-check-label" for="6_9_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_9" id="6_9_2" value="3" required>
                            <label class="form-check-label" for="6_9_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_9" id="6_9_3" value="1" required>
                            <label class="form-check-label" for="6_9_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>29. Asistente Logístico:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_10" id="6_10_1" value="5" required>
                            <label class="form-check-label" for="6_10_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_10" id="6_10_2" value="3" required>
                            <label class="form-check-label" for="6_10_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_10" id="6_10_3" value="1" required>
                            <label class="form-check-label" for="6_10_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>30. Operaciones Bancarias y Financieras:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_11" id="6_11_1" value="5" required>
                            <label class="form-check-label" for="6_11_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_11" id="6_11_2" value="3" required>
                            <label class="form-check-label" for="6_11_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_11" id="6_11_3" value="1" required>
                            <label class="form-check-label" for="6_11_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
    </div>              
     <br>
     <p class="h3">C. ¿TE GUSTARÍA TRABAJAR EN ESTOS EMPLEOS?</p>
    <p class="h4">Imagina que has sido entrenado y eres experto en todo - imagina un trabajo de nivel técnico o universitario.</b></p><br>
    <div class="container table">
        <div class="row"><!--Fila 1-->
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>1. Construir Edificios:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_12" id="1_12_1" value="5" required>
                        <label class="form-check-label" for="1_12_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_12" id="1_12_2" value="3" required>
                        <label class="form-check-label" for="1_12_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_12" id="1_12_3" value="1" required>
                        <label class="form-check-label" for="1_12_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>2. Sembrar y Cosechar:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_13" id="1_13_1" value="5" required>
                        <label class="form-check-label" for="1_13_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_13" id="1_13_2" value="3" required>
                        <label class="form-check-label" for="1_13_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_13" id="1_13_3" value="1" required>
                        <label class="form-check-label" for="1_13_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm">
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label "><b>3. Reparar Máquinas Industriales:</b> </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_14" id="1_14_1" value="5" required>
                        <label class="form-check-label" for="1_14_1"><?php echo $option1; ?></label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="p1_14" id="1_14_2" value="3" required>
                        <label class="form-check-label" for="1_14_2"><?php echo $option2; ?></label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="p1_14" id="1_14_3" value="1" required>
                        <label class="form-check-label" for="1_14_3"><?php echo $option3; ?></label>
                        </div>
                    </div>
                    </div>
                </fieldset>
            </div>
            
        </div><br>
        <div class="row"><!--Fila 2-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>4. Ensamblar Automóviles:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_15" id="1_15_1" value="5" required>
                            <label class="form-check-label" for="1_15_1"> <?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1_15" id="1_15_2" value="3" required>
                            <label class="form-check-label" for="1_15_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p1_15" id="1_15_3" value="1" required>
                            <label class="form-check-label" for="1_15_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>5. Investigar Nuevas Vacunas:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_12" id="2_12_1" value="5" required>
                            <label class="form-check-label" for="2_12_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_12" id="2_12_2" value="3" required>
                            <label class="form-check-label" for="2_12_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_12" id="2_12_3" value="1" required>
                            <label class="form-check-label" for="2_12_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>6. Diagnosticar Enfermedades:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_13" id="2_13_1" value="5" required>
                            <label class="form-check-label" for="2_13_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_13" id="2_13_2" value="3" required>
                            <label class="form-check-label" for="2_13_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_13" id="2_13_3" value="1" required>
                            <label class="form-check-label" for="2_13_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 3-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>7. Hacer Experimentos Químicos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_14" id="2_14_1" value="5" required>
                            <label class="form-check-label" for="2_14_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_14" id="2_14_2" value="3" required>
                            <label class="form-check-label" for="2_14_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_14" id="2_14_3" value="1" required>
                            <label class="form-check-label" for="2_14_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>8. Resolver Operaciones Matemáticas:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_15" id="2_15_1" value="5" required>
                            <label class="form-check-label" for="2_15_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2_15" id="2_15_2" value="3" required>
                            <label class="form-check-label" for="2_15_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p2_15" id="2_15_3" value="1" required>
                            <label class="form-check-label" for="2_15_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>9. Actuar en Teatro:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_12" id="3_12_1" value="5" required>
                            <label class="form-check-label" for="3_12_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_12" id="3_12_2" value="3" required>
                            <label class="form-check-label" for="3_12_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_12" id="3_12_3" value="1" required>
                            <label class="form-check-label" for="3_12_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 4-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>10. Redactar Novelas para TV:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_13" id="3_13_1" value="5" required>
                            <label class="form-check-label" for="3_13_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_13" id="3_13_2" value="3" required>
                            <label class="form-check-label" for="3_13_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_13" id="3_13_3" value="1" required>
                            <label class="form-check-label" for="3_13_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>11. Diseñar Planos Arquitectónicos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_14" id="3_14_1" value="5" required>
                            <label class="form-check-label" for="3_14_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_14" id="3_14_2" value="3" required>
                            <label class="form-check-label" for="3_14_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_14" id="3_14_3" value="1" required>
                            <label class="form-check-label" for="3_14_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>12. Construir Monumentos o Estatuas:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_15" id="3_15_1" value="5" required>
                            <label class="form-check-label" for="3_15_1"> <?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3_15" id="3_15_2" value="3" required>
                            <label class="form-check-label" for="3_15_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p3_15" id="3_15_3" value="1" required>
                            <label class="form-check-label" for="3_15_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 5-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>13. Defender los Derechos de los Ciudadanos Indefensos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_12" id="4_12_1" value="5" required>
                            <label class="form-check-label" for="4_12_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_12" id="4_12_2" value="3" required>
                            <label class="form-check-label" for="4_12_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_12" id="4_12_3" value="1" required>
                            <label class="form-check-label" for="4_12_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>14. Educar a Jóvenes Escolares:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_13" id="4_13_1" value="5" required>
                            <label class="form-check-label" for="4_13_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_13" id="4_13_2" value="3" required>
                            <label class="form-check-label" for="4_13_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_13" id="4_13_3" value="1" required>
                            <label class="form-check-label" for="4_13_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>15.Cuidar Pacientes Enfermos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_14" id="4_14_1" value="5" required>
                            <label class="form-check-label" for="4_14_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_14" id="4_14_2" value="3" required>
                            <label class="form-check-label" for="4_14_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_14" id="4_14_3" value="1" required>
                            <label class="form-check-label" for="4_14_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 6-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>16. Coordinar Ayuda en su Distrito:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_15" id="4_15_1" value="5" required>
                            <label class="form-check-label" for="4_15_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4_15" id="4_15_2" value="3" required>
                            <label class="form-check-label" for="4_15_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p4_15" id="4_15_3" value="1" required>
                            <label class="form-check-label" for="4_15_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>17. Liderar Obreros y Empleados:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_12" id="5_12_1" value="5" required>
                            <label class="form-check-label" for="5_12_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_12" id="5_12_2" value="3" required>
                            <label class="form-check-label" for="5_12_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_12" id="5_12_3" value="1" required>
                            <label class="form-check-label" for="5_12_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>18. Organizar la Selección de Personal:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_13" id="5_13_1" value="5" required>
                            <label class="form-check-label" for="5_13_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_13" id="5_13_2" value="3" required>
                            <label class="form-check-label" for="5_13_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_13" id="5_13_3" value="1" required>
                            <label class="form-check-label" for="5_13_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 7-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>19. Vender y Promocionar Productos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_14" id="5_14_1" value="5" required>
                            <label class="form-check-label" for="5_14_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_14" id="5_14_2" value="3" required>
                            <label class="form-check-label" for="5_14_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_14" id="5_14_3" value="1" required>
                            <label class="form-check-label" for="5_14_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>20. Entrenar y Capacitar Empresarios:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_15" id="5_15_1" value="5" required>
                            <label class="form-check-label" for="5_15_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5_15" id="5_15_2" value="3" required>
                            <label class="form-check-label" for="5_15_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p5_15" id="5_15_3" value="1" required>
                            <label class="form-check-label" for="5_15_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>21. Pagar Sueldos y Salarios:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_12" id="6_12_1" value="5" required>
                            <label class="form-check-label" for="6_12_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_12" id="6_12_2" value="3" required>
                            <label class="form-check-label" for="6_12_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_12" id="6_12_3" value="1" required>
                            <label class="form-check-label" for="6_12_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
        <div class="row"><!--Fila 8-->
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>22. Manejar una Caja Registradora:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_13" id="6_13_1" value="5" required>
                            <label class="form-check-label" for="6_13_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_13" id="6_13_2" value="3" required>
                            <label class="form-check-label" for="6_13_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_13" id="6_13_3" value="1" required>
                            <label class="form-check-label" for="6_13_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>23. Archivar y Digitar Documentos:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_14" id="6_14_1" value="5" required>
                            <label class="form-check-label" for="6_14_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_14" id="6_14_2" value="3" required>
                            <label class="form-check-label" for="6_14_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_14" id="6_14_3" value="1" required>
                            <label class="form-check-label" for="6_14_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-sm">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label "><b>24. Revisar las Operaciones Contables:</b> </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_15" id="6_15_1" value="5" required>
                            <label class="form-check-label" for="6_15_1"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6_15" id="6_15_2" value="3" required>
                            <label class="form-check-label" for="6_15_2"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="p6_15" id="6_15_3" value="1" required>
                            <label class="form-check-label" for="6_15_3"><?php echo $option3; ?></label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </div>
        </div><br>
    </div>              
     <br>
        <center><input class="btn btn-success btn-lg" type="submit" value="Enviar Respuestas" /><br><br><br><br><br></center>
    </form>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo RUTA;?>vendor/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo RUTA;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php require 'footer.php'; ?>
</body>
</html>