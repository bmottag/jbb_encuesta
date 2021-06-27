<script type="text/javascript" src="<?php echo base_url("assets/js/validate/formulario/encuesta.js"); ?>"></script>

<script>
$(document).ready(function () {
    $("#discapacidad").on("click", function() {
        var condiciones = $("#discapacidad").is(":checked");
        if (condiciones) {
            $("#div_cual").css("display", "inline");
            $('#cual').val("");
        } else {
            $("#div_cual").css("display", "none");
            $('#cual').val("");
        }
    }); 

    $("#otro_servicio").on("click", function() {
        var condiciones = $("#otro_servicio").is(":checked");
        if (condiciones) {
            $("#div_cual_servicio").css("display", "inline");
            $('#cual_servicio').val("");
        } else {
            $("#div_cual_servicio").css("display", "none");
            $('#cual_servicio').val("");
        }
    }); 

     $("#genero1").on("click", function() {
        $("#div_otro").css("display", "none");
        $('#otro').val("");
    }); 

     $("#genero2").on("click", function() {
        $("#div_otro").css("display", "none");
        $('#otro').val("");
    }); 

     $("#genero3").on("click", function() {
        $("#div_otro").css("display", "none");
        $('#otro').val("");
    }); 

     $("#genero4").on("click", function() {
        $("#div_otro").css("display", "inline");
        $('#otro').val("");
    }); 
});

function valid_field() 
{
    if(document.getElementById('ninguna').checked ){
        document.getElementById('discapacidad').checked=0;
        document.getElementById('desplazado').checked=0;
        document.getElementById('victima').checked=0;
        document.getElementById('rom').checked=0;
        document.getElementById('indigena').checked=0;
        document.getElementById('raizal').checked=0;
    }
}

function valid_field2() 
{
    if(document.getElementById('discapacidad').checked || document.getElementById('desplazado').checked || document.getElementById('victima').checked || document.getElementById('rom').checked || document.getElementById('indigena').checked || document.getElementById('raizal').checked){
        document.getElementById('ninguna').checked=0;
    }
}






</script>

<div id="page-wrapper">
	<br>
	
	<!-- /.row -->
	<div class="row">

		<div class="col-lg-2">

		</div>

		<div class="col-lg-8">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-7">  
                            <i class="fa fa-edit"></i> <strong>ENCUESTA DE PERCEPCIÓN Y SATISFACCIÓN </strong><br>
                            ATENCIÓN A LA CIUDADANÍA<br>
                            <small><strong>Código:</strong> DOC.PR.09.F.02 <strong>Versión 6</strong></small>
                        </div>

                    </div>
                </div>
                <div class="panel-body">
                    <p>
                        Apreciado(a) ciudadano(a) su opinión es muy importante para el mejoramiento de nuestro servicio. Por favor diligencie el siguiente cuestionario sobre la atención recibida.
                    </p>
                    <p class="text-danger text-left">Los campos con * son obligatorios.</p>

                    <p class="text-left"><strong>Rango de edad del encuestado: *</strong></p>

                    <form  name="form" id="form" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="radio" name="rango_edad" id="rango_edad1" value=1 >18 a 26 años
                            </div>
                            <div class="col-sm-3">
                                <input type="radio" name="rango_edad" id="rango_edad2" value=2 > 27 a 59 años
                            </div>
                            <div class="col-sm-3">
                                <input type="radio" name="rango_edad" id="rango_edad3" value=3 > Mayor de 60 años
                            </div>
                        </div>

                        <p class="text-left"><strong>Población: *</strong></p>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input type="checkbox" name="discapacidad" id="discapacidad" value=1 onclick="valid_field2()"> Condición de discapacidad
                            </div>

                            <div class="col-sm-8" id="div_cual" style="display: none">
                                <input type="text" id="cual" name="cual" class="form-control" placeholder="¿Cuál?" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" name="desplazado" id="desplazado" value=1 onclick="valid_field2()"> Desplazado<br>
                                <input type="checkbox" name="victima" id="victima" value=1 onclick="valid_field2()"> Víctima de conflicto armado
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="rom" id="rom" value=1 onclick="valid_field2()"> Rom<br>
                                <input type="checkbox" name="indigena" id="indigena" value=1 onclick="valid_field2()"> Indígena
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="raizal" id="raizal" value=1 onclick="valid_field2()"> Raizal<br>
                                <input type="checkbox" name="ninguna" id="ninguna" value=1 onclick="valid_field()"> Ninguna
                            </div>
                        </div>

                        <p class="text-left"><strong>Género: *</strong></p>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="radio" name="genereo" id="genero1" value=1 > Hombre<br>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="genereo" id="genero2" value=2 > Mujer
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="genereo" id="genero3" value=3 > No responde
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="radio" name="genereo" id="genero4" value=4 > Otro
                            </div>
                            <div class="col-sm-8" id="div_otro" style="display: none">
                                <input type="text" id="otro" name="otro" class="form-control" placeholder="¿Cuál?" >
                            </div>
                        </div>

                        <p class="text-left"><strong>Nacionalidad:</strong></p>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="radio" id="nacionalidad" name="nacionalidad1" value=1 > Colombiano
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" id="nacionalidad" name="nacionalidad2" value=2 > Extranjero
                            </div>
                            <div class="col-sm-4"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <p class="text-left"><strong>Localidad:</strong></p>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad" required >
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <p class="text-left"><strong>Barrio:</strong></p>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" id="barrio" name="barrio" class="form-control" placeholder="Barrio" required >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p class="text-left"><strong>¿Que servicio utilizó durante su visita? *</strong></p>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" id="servicio" name="servicio" class="form-control" placeholder="¿Que servicio utilizó durante su visita?" required >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-left">
                            <strong>¿Cómo se enteró de los servicios que ofrece el Jardín Botánico de Bogotá?</strong>
                        </p>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" id="pagina_web" name="pagina_web" value=1 > Página Web<br>
                                <input type="checkbox" id="volante" name="volante" value=1 > Volante/Plegable
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" id="television" name="television" value=1 > Televisión<br>
                                <input type="checkbox" id="redes" name="redes" value=1 > Redes Sociales
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" id="amigo" name="amigo" value=1 > Amigo/Familiar<br>
                                <input type="checkbox" id="correo" name="correo" value=1 > Correo electrónico
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" id="prensa" name="prensa" value=1 onclick="valid_field()"> Prensa<br>
                                <input type="checkbox" id="radio" name="radio" value=1 onclick="valid_field()"> Radio
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" name="otro_servicio" id="otro_servicio" value=1 > Otro
                            </div>

                            <div class="col-sm-8" id="div_cual_servicio" style="display: none">
                                <input type="text" id="cual_servicio" name="cual_servicio" class="form-control" placeholder="¿Cuál?" >
                            </div>
                        </div>

                        <p class="text-left">
                            <strong>Califique su grado de satisfacción en una escala de 1 a 5, siendo uno (1) Insatisfecho y cinco (5) totalmente satisfecho o N/A en caso de ser necesario:</strong>
                        </p>
                        <div class="form-group">
                            <div class="col-sm-5">
                                <p class="text-center"><strong> Ítem</strong></p>
                            </div>
                            <div class="col-sm-1"><strong>1</strong></div>
                            <div class="col-sm-1"><strong>2</strong></div>
                            <div class="col-sm-1"><strong>3</strong></div>
                            <div class="col-sm-1"><strong>4</strong></div>
                            <div class="col-sm-1"><strong>5</strong></div>
                            <div class="col-sm-2"><strong>No Sabe /<br> No responde</strong></div>
                        </div>
             
                        <div class="form-group">
                            <div class="col-sm-5">
                                Profesionalismo y claridad de la información
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_1" id="calificacion_1_1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_1" id="calificacion_1_2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_1" id="calificacion_1_3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_1" id="calificacion_1_4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_1" id="calificacion_1_5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="calificacion_1" id="calificacion_1_6">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-5">
                                Amabilidad y actitud de servicio
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_2" id="calificacion_2_1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_2" id="calificacion_2_2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_2" id="calificacion_2_3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_2" id="calificacion_2_4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_2" id="calificacion_2_5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="calificacion_2" id="calificacion_2_6">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-5">
                                Orientación y guianza
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_3" id="calificacion_3_1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_3" id="calificacion_3_2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_3" id="calificacion_3_3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_3" id="calificacion_3_4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_3" id="calificacion_3_5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="calificacion_3" id="calificacion_3_6">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-5">
                                 Estado de las colecciones de la entidad
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_4" id="calificacion_4_1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_4" id="calificacion_4_2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_4" id="calificacion_4_3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_4" id="calificacion_4_4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_4" id="calificacion_4_5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="calificacion_4" id="calificacion_4_6">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-5">
                                Estado de la infraestructura e instalaciones
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_5" id="calificacion_5_1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_5" id="calificacion_5_2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_5" id="calificacion_5_3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_5" id="calificacion_5_4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="calificacion_5" id="calificacion_5_5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="calificacion_5" id="calificacion_5_6">
                            </div>
                        </div>

                        <p class="text-left">
                            <strong>
                                ¿Cuál es su percepción frente al servicio? Por favor escríbalo aquí:
                            </strong>
                        </p>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea id="percepcion" name="percepcion" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <p class="text-left"><strong>Nombre del Servidor Público que le atendió:</strong></p>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" id="nombre_servidor" name="nombre_servidor" class="form-control" placeholder="Nombre del Servidor" >
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <div class="row" align="center">
                                <div style="width:100%;" align="center">                            
                                    <button type="button" id="btnSubmit" name="btnSubmit" class='btn btn-success'>
                                        Guardar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <br>
                    <div class="col-lg-12">
                        <div class="row" align="center">
                            <div style="width:50%;" align="center">
                                Línea telefónica Jardín Botánico de Bogotá para presentar <br>
                                Peticiones, Quejas, Reclamos, Sugerencias <br>
                                4377060 Ext. 1012 <br>
                            </div>
                        </div>  
                    </div>

                </div>
            </div>
		</div>			
	</div>
</div>