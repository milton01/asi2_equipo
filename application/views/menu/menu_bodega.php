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
            Reportes
            </span>
        </a>
        <ul class="children">
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
</ul>