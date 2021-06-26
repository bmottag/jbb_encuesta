<script type="text/javascript" src="<?php echo base_url("assets/js/validate/formulario/candidato.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/validate/settings/ajaxMcpio.js"); ?>"></script>

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
                    <p class="text-left"><strong>Rango de edad del encuestado:</strong></p>

                    <div class="form-group">
                        <div class="col-sm-3">
                            <input type="checkbox" id="desplazado" name="desplazado" value=1 onclick="valid_field()"> 18 a 26 años
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" id="rom" name="rom" value=1 onclick="valid_field()"> 27 a 59 años
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" id="raizal" name="raizal" value=1 onclick="valid_field()"> Mayor de 60 años
                        </div>
                    </div>
                    <br><br>
                    <p class="text-left"><strong>Población:</strong></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="checkbox" id="discapacidad" name="discapacidad" value=1 onclick="valid_field()"> Condición de discapacidad<br>                            
                        </div>

                        <div class="col-sm-3">
                            <input type="checkbox" id="desplazado" name="desplazado" value=1 onclick="valid_field()"> Desplazado<br>
                            <input type="checkbox" id="conflicto" name="conflicto" value=1 onclick="valid_field()"> Víctima de conflicto armado
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" id="rom" name="rom" value=1 onclick="valid_field()"> Rom<br>
                            <input type="checkbox" id="indigena" name="indigena" value=1 onclick="valid_field()"> Indígena
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" id="raizal" name="raizal" value=1 onclick="valid_field()"> Raizal<br>
                            <input type="checkbox" id="ninguna" name="ninguna" value=1 onclick="valid_field()"> Ninguna
                        </div>
                    </div>

                    <br><br><br><br>
                    <p class="text-left"><strong>Género:</strong></p>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input type="checkbox" id="desplazado" name="desplazado" value=1 onclick="valid_field()"> Hombre<br>
                            <input type="checkbox" id="desplazado" name="desplazado" value=1 onclick="valid_field()"> Otro
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" id="rom" name="rom" value=1 onclick="valid_field()"> Mujer
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" id="raizal" name="raizal" value=1 onclick="valid_field()"> No responde
                        </div>
                    </div>

                    <br><br><br>
                    <p class="text-left"><strong>Nacionalidad:</strong></p>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input type="checkbox" id="desplazado" name="desplazado" value=1 onclick="valid_field()"> Colombiano
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" id="desplazado" name="desplazado" value=1 onclick="valid_field()"> Extranjero
                        </div>
                        <div class="col-sm-4"></div>
                    </div>

                    <br><br>
                    <div class="col-sm-6">
                        <p class="text-left"><strong>Localidad:</strong></p>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Localidad" required >
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
                    <br><br><br><br>
                    <div class="col-sm-12">
                        <p class="text-left"><strong>¿Que servicio utilizó durante su visita?</strong></p>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Localidad" required >
                            </div>
                        </div>
                    </div>

                    <br><br><br><br>
                    <p class="text-left"><strong>¿Cómo se enteró de los servicios que ofrece el Jardín Botánico de Bogotá</strong></p>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <input type="checkbox" id="desplazado" name="desplazado" value=1 onclick="valid_field()"> Página Web<br>
                            <input type="checkbox" id="conflicto" name="conflicto" value=1 onclick="valid_field()"> Volante/Plegable
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" id="rom" name="rom" value=1 onclick="valid_field()"> Televisión<br>
                            <input type="checkbox" id="indigena" name="indigena" value=1 onclick="valid_field()"> Redes Sociales
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" id="raizal" name="raizal" value=1 onclick="valid_field()"> Amigo/Familiar<br>
                            <input type="checkbox" id="ninguna" name="ninguna" value=1 onclick="valid_field()"> Correo electrónico
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" id="raizal" name="raizal" value=1 onclick="valid_field()"> Prensa<br>
                            <input type="checkbox" id="ninguna" name="ninguna" value=1 onclick="valid_field()"> Radio
                        </div>
                    </div>

                    <br><br><br><br>
                    <p class="text-left"><strong>Califique su grado de satisfacción en una escala de 1 a 5, siendo uno (1) Insatisfecho y cinco (5) totalmente satisfecho o N/A en caso de ser necesario:</strong></p>

                    <div class="row">
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
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-5">
                                Profesionalismo y claridad de la información
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="1" id="1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="1" id="2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="1" id="3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="1" id="4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="1" id="5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="1" id="6">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-5">
                                Amabilidad y actitud de servicio
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="2" id="6">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-5">
                                Orientación y guianza
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="2" id="6">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-5">
                                Estado de las colecciones de la entidad
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="2" id="6">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-5">
                                Estado de la infraestructura e instalaciones
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="1">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="2">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="3">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="4">
                            </div>
                            <div class="col-sm-1">
                                <input type="radio" name="2" id="5">
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="2" id="6">
                            </div>
                        </div>
                    </div>

                    <br>
                    <p class="text-left">
                        <strong>
                            ¿Cuál es su prercepción frente al servicio? Por favor escríbalo aquí:
                        </strong>
                    </p>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea id="observacion" name="observacion" placeholder="Observación" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-sm-12">
                        <p class="text-left"><strong>Nombre del Servidor Público que le atendió:</strong></p>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Localidad" required >
                            </div>
                        </div>
                    </div>

                </div>
            </div>
		</div>			

	</div>
</div>