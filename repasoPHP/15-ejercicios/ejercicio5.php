<?php 

$tabla = array(
    'ACCION' => array('GTA5','HEROES','BATTLEFIELD'),
    'AVENTURA' => array('PIRAGUISMO','PARACAIDISMO','EXPEDICION'),
    'DEPORTES' => array('TENIS','BALONCESTO','FUTBOL'),
);

$categorias = array_keys($tabla);
;?>

<table border='1'>

    <tr>
        <?php foreach ($categorias as $categoria):?>
            <th><?php echo $categoria ;?></th>
        <?php endforeach;?>
    </tr>
    <tr>
        <td><?php echo $tabla['ACCION']['0'] ;?></td>
        <td><?php echo $tabla['AVENTURA']['0'] ;?></td>
        <td><?php echo $tabla['DEPORTES']['0'] ;?></td>
    </tr>
    <tr>
        <td><?php echo $tabla['ACCION']['1'] ;?></td>
        <td><?php echo $tabla['AVENTURA']['1'] ;?></td>
        <td><?php echo $tabla['DEPORTES']['1'] ;?></td>
    </tr>
    <tr>
        <td><?php echo $tabla['ACCION']['2'] ;?></td>
        <td><?php echo $tabla['AVENTURA']['2'] ;?></td>
        <td><?php echo $tabla['DEPORTES']['2'] ;?></td>
    </tr>

</table>