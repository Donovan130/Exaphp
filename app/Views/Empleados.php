<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Examen PHP</title>
            <meta name="description" content="The small framework with powerful features">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="image/png" href="/favicon.ico">
            <link rel="stylesheet" href="./css/Normalize.css" type="text/css" />
            <link rel="stylesheet" href="./css/bs/bootstrap.css" type="text/css" />
            <link rel="stylesheet" href="./css/bs/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="./css/bs/responsive.bootstrap4.css">            
            <link rel="stylesheet" href="./css/sweetalert2.css" type="text/css" />
        </head>
        <body>
            <!-- HEADER -->
            <header>
            </header>
            <br/><br/><br/>
            <!-- CONTENT -->

            <div class="row container mx-auto align-items-center">
                <div class="col col-12">
                    <div class="form-group d-flex flex-row justify-content-center mt-0 mb-0 pb-2">
                        <label id="LblSuc" class="pr-4">SUCURSAL:</label>                                    
                        <select id="Suc" name="Suc" value="" placeholder="«Seleccione una sucursal. . . . : »" tabindex="1" class="pl-4 w-25">
                            <option value="0" selected>«Seleccione una sucursal. . . . : »</option>
                            <?php
                                foreach($Suc as $Sucur) {
                                    $i = $Sucur['Idsucursal'];
                                    if ($i < 5) {
                            ?>
                                <option value="<?php echo $Sucur['Idsucursal']?>"><?php echo $Sucur['Nomsucursal'];?></option><?php
                                    } else if ($i > 4) {}
                            ?>
                            <?php                                            
                                    next($Sucur);
                                }
                            ?>
                        </select>                                                          
                    </div>
                    <br/>

                    <div class="table-responsive">
                        <table id="TabEmpleados" class="table table-bordered table-striped table-hover">
                            <thead class="thead-light">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">NOMBRE</th>
                                <th class="text-center">EDAD</th>
                                <th class="text_center">SEXO</th>
                                <th class="text-center">PUESTO</th>
                                <th class="text-center d-none">SUCURSAL</th>

                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($Empl as $Trab) { ?>                                
                                    <tr class="">                                    
                                        <td id="Consec" class="text-center align-middle"><?php echo $Trab['Idempleado']; ?></td>
                                        <td class="text-center align-middle"><?php echo $Trab['Nombre']; ?></td>
                                        <td class="text-center align-middle"><?php echo $Trab['Edad']; ?></td>
                                        <td class="text-center align-middle"><?php echo $Trab['Sexo']; ?></td>
                                        <td class="text-center align-middle"><?php echo $Trab['Nompuesto']; ?></td>
                                        <td class="text-center align-middle d-none"><?php echo $Trab['Nomsucursal']; ?></td>
                                    </tr>
                                <?php } ?>                                    
                            </tbody>
                        </table>
                    </div>

                    <form id="FrmEmple" name="FrmEmple" action="" method="" class="">
                        <br/>

                        <div class="form-group d-flex flex-row justify-content-center mt-0 mb-0 pb-2">
                            <label id="LblNombre" class="">NOMBRE:&nbsp;</label>
                            <input id="TexNombre" type="text" name="TexNombre" value="" required="required" tabindex="3" class="w-25 text-center" autofocus/>
                        </div>
                        <div class="form-group d-flex flex-row justify-content-center mt-0 mb-0 pb-2">
                            <label id="LblEdad" class="pr-4">EDAD:&nbsp;</label>
                            <input id="TexEdad" type="text" name="TexEdad" value="" required="required" tabindex="4" class="pl-4 w-25 text-center"/>
                        </div>
                        <div class="form-group d-flex flex-row justify-content-center mt-0 mb-0 pb-2">
                            <label id="LblSexo" class="pr-4">SEXO:</label>                                    
                            <select id="Sexo" name="Sexo" value="" placeholder="«Seleccione un genero. . . . : »" tabindex="5" class="pl-4 w-25">
                                <option value="0" selected>«Seleccione un genero. . . . : »</option>
                                <option value="H">Masculino</option>
                                <option value="M">Femenino</option>                                
                            </select>
                        </div>
                        <div class="form-group d-flex flex-row justify-content-center mt-0 mb-0 pb-2">
                            <label id="LblPuesto" class="pr-4">PUESTO:</label>                                    
                            <select id="Puesto" name="Puesto" value="" placeholder="«Seleccione un puesto. . . . : »" tabindex="6" class="pl-4 w-25">
                                <option value="0" selected>«Seleccione un puesto. . . . : »</option>
                                <?php
                                    foreach($Ptos as $Puesto) {
                                        $i = $Puesto['Idpuesto'];
                                        if ($i < 5) {
                                ?>
                                    <option value="<?php echo $Puesto['Idpuesto']?>"><?php echo $Puesto['Nompuesto'];?></option><?php
                                        } else if ($i > 4) {}
                                ?>
                                <?php                                            
                                        next($Puesto);
                                    }
                                ?>                                 
                            </select>
                        </div>
                        <div class="form-group d-flex flex-row justify-content-center mt-0 mb-0 pb-2">
                            <label id="LblSuc2" class="pr-2">SUCURSAL:</label>                                    
                            <select id="Suc2" name="Suc2" value="" placeholder="«Seleccione una sucursal. . . . : »" tabindex="7" class="pl-4 w-25">
                                <option value="0" selected>«Seleccione una sucursal. . . . : »</option>                                
                                <?php
                                    foreach($Suc as $Sucur) {
                                        $i = $Sucur['Idsucursal'];
                                        if ($i < 5) {
                                ?>
                                    <option value="<?php echo $Sucur['Idsucursal']?>"><?php echo $Sucur['Nomsucursal'];?></option><?php
                                        } else if ($i > 4) {}
                                ?>
                                <?php                                            
                                        next($Sucur);
                                    }
                                ?>                                
                            </select>
                        </div>
                        <div class="form-group d-flex flex-row justify-content-center mt-0 mb-0 pb-2">
                            <button id="Guardar" type="submit" tabindex="8" class="btn btn-primary w-25 h-100">&nbsp;&nbsp; Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button id="Cancel" type="reset" tabindex="9" class="btn btn-secondary w-25 h-100">&nbsp;&nbsp; Cancelar</button>
                        </div>
                    </form> 
                </div>

            </div>

            <!-- FOOTER: COPYRIGHTS -->

            <footer>                
            </footer>

            <!-- SCRIPTS -->
            <script src="./js/jquery.min.js"></script>
            <script src="./js/popper.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <script src="./js/jquery.dataTables.js"></script>
            <script src="./js/dataTables.bootstrap4.js"></script>
            <script src="./js/dataTables.responsive.js"></script>
            <script src="./js/responsive.bootstrap4.js"></script>
            <script src="./js/sweetalert2.js"></script>
            <script src="./js/exa.js"></script>
            <script src="./js/GestMessage.js"></script>
        </body>
    </html>
