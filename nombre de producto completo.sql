									SELECT
                                    dp.id AS dp_id,
                                    pr.codigo AS pr_codigo,
                                    concat (cat.descripcion,' ',                                     
                                    mar.nombre,' ', 
                                    pr.descripcion) AS nombre_prod,
                                    dp.cantidad AS dp_cantidad
									FROM 
                                    detalle_pedido dp, producto pr, marca mar, categoriap cat 
									WHERE
                                    dp.codigoprod = pr.codigo AND
                                    mar.id = pr.marcaid AND
                                    cat.id = pr.categoriaid AND                                    
                                    dp.pedido_id = '1'