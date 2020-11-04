<?php

function ConsultarMinimo(){

  $sql = "SELECT bodega.id_producto,producto.nom_produc,SUM(can_dispo) AS cantidad_disponible,producto.can_min_bod
  FROM bodega,producto where bodega.id_producto = producto.id_producto
  GROUP BY id_producto
  HAVING sum(can_dispo)<=producto.can_min_bod";

  return $sql;
}

?>
