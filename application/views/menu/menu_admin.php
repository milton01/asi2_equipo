<ul class="nav nav-pills nav-stacked nav-bracket">
    <li class="active">
        <a href="index.html">
            <i class="fa fa-home">
            </i>
            <span>
            Inicio
            </span>
        </a>
    </li>
    <li>
        <a href="usuarios.html">
            <i class="fa fa-user">
            </i>
            
            <span>
            Confirmacion de clientes
            </span>
        </a>
    </li>
    <li>
        <a href="transportes.html">
            <i class="fa fa-truck">
            </i>
            
            <span>
            Carrito de compras
            </span>
        </a>
    </li>
    <li>
        <?php echo anchor('pedido','<i class="fa fa-suitcase"></i><span>Ver pedidos</span>');?>
    </li>
    <li>
        <a href="clientes.html">
            <i class="fa fa-suitcase">
            </i>
            <span>
            Registrar compras
            </span>
        </a>
    </li>
    <li>
        <a href="clientes.html">
            <i class="fa fa-suitcase">
            </i>
            <span>
            Liquidacion de rutas
            </span>
        </a>
    </li>
    <li class="nav-parent">
        <a href="tables.html">
            <i class="fa fa-th-list">
            </i>
            
            <span>
            Llenar transporte
            </span>
        </a>
        <ul class="children">
            <li>                
                <?php echo anchor('ruta','<i class="fa fa-caret-right"></i>Agregar pedidos a la ruta');?>                                    
            </li>
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Facturación de pedidos
                </a>
            </li>
            
        </ul>
    </li>
    <li class="nav-parent">
        <a href="tables.html">
            <i class="fa fa-th-list">
            </i>
            
            <span>
            Ventas directas
            </span>
        </a>
        <ul class="children">
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Agregar pedido
                </a>
            </li>
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Facturación de pedido
                </a>
            </li>
            
        </ul>
    </li>
    <li class="nav-parent">
        <a href="tables.html">
            <i class="fa fa-th-list">
            </i>
            
            <span>
            Reportes
            </span>
        </a>
        <ul class="children">
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Ventas
                </a>
            </li>
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Compras
                </a>
            </li>
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Inventario
                </a>
            </li>
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Productos escasos
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-parent">
        <a href="tables.html">
            <i class="fa fa-th-list">
            </i>
            
            <span>
            Estado crediticio
            </span>
        </a>
        <ul class="children">
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Creditos otorgados
                </a>
            </li>
            <li>
                <a href="#.html">
                    <i class="fa fa-caret-right">
                    </i>
                    Facturas pendientes
                </a>
            </li>
            
        </ul>
    </li>
    <li class="nav-parent">
        <a href="tables.html">
            <i class="fa fa-th-list">
            </i>
            
            <span>
            Mantenimientos
            </span>
        </a>
        <ul class="children">
            
            <li> <?php echo anchor('welcome/mantto_cliente','Registro de Cliente');?>  </li>
            
            <li> <?php echo anchor('welcome/mantto_empleado','Registro de Empleado');?> </li>
            
            <li> <?php echo anchor('welcome/mantto_proveedor','Registro de Proveedor');?> </li>
            
            <li> <?php echo anchor('welcome/mantto_estados','Registro de Estados');?> </li>
            
            <li> <?php echo anchor('welcome/mantto_movimiento','Registro de Tipo Movimientos');?> </li>
            
        </ul>
    </li>
    
</ul>
