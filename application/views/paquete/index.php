<h1 align="center">Paquetes registrados o incompletos</h1>
<br>
<div class="jumbotron">
  <div class="container">
        <!--<label for="kwd_search">Search:</label> <input type="text" id="kwd_search" value=""/>-->
        <div class="row">
            <div class="col-xs-7 col-sm-7 col-md-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    <input id="kwd_search" type="text" class="form-control" name="msg" placeholder="Buscar Paquete">
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-3" align="right">
            </div>
        </div>
        
        <br>
        <div class="table-responsive">
            <table id="my-table" border="1" style="border-collapse:collapse" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Ancho(centimetros)</th>
                        <th>Largo(centimetros)</th>
                        <th>Alto(centimetros)</th>
                        <th>Nivel de Fragilidad</th>
                        <th>Peso</th>
                        <th>Observaciones</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($getAll as $row) {
                    ?>     
                    <tr>
                        <td>
                            <?= $row->cliente; ?>
                        </td>
                        <td>
                            <?= $row->fecha; ?>
                        </td>
                        <td>
                            <?= $row->Ancho; ?>
                        </td>
                        <td>
                            <?= $row->Largo; ?>
                        </td>
                        <td>
                            <?= $row->Alto; ?>
                        </td>
                         <td>
                            <?= $row->NivelFragilidad; ?>
                        </td>
                         <td>
                            <?= $row->Peso; ?>
                        </td>
                         <td>
                            <?= $row->Observaciones; ?>
                        </td>
                        <td align="center">
                            <a href="<?php echo base_url('Paquete/modification/')?><?= $row->codPaquete; ?>">
                                <button class='btn btn-warning btn-xs'>
                                <span class='glyphicon glyphicon-edit'></span>
                                </button>
                            </a>
                        </td>
                        <?php
                        if($row->Estado == 'Incompleto'){
                        ?> 
                        <td align="center">
                            <a href="<?php echo base_url('Paquete/delete/')?><?= $row->codPaquete; ?>">
                                <button class='btn btn-danger btn-xs'>
                                <span class='glyphicon glyphicon-remove'></span>
                                </button>
                            </a>
                        </td>
                        <?php
                        }
                        ?> 
                    </tr>
                    <?php        
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>