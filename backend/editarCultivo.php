<?php
    include ('./connect.php');
    $con=conectar();

    $ID_CULTIVO= $_POST['ID_CULTIVO'];
    $NOMBRE= $_POST['NOMBRE'];
    $TEMPERATURAMAX= $_POST['TEMPERATURAMAX'];
    $TEMPERATURAMIN= $_POST['TEMPERATURAMIN'];
    $HUMEDADMAX= $_POST['HUMEDADMAX'];
    $HUMEDADMIN= $_POST['HUMEDADMIN'];
    $TEMPERATURAAGUAMAX= $_POST['TEMPERATURAAGUAMAX'];
    $TEMPERATURAAGUAMIN= $_POST['TEMPERATURAAGUAMIN'];
    $CO2MAX= $_POST['CO2MAX'];
    $CO2MIN= $_POST['CO2MIN'];
    
    $sql="UPDATE cultivo SET  NOMBRE='$NOMBRE', TEMPERATURAMAX='$TEMPERATURAMAX', TEMPERATURAMIN='$TEMPERATURAMIN', HUMEDADMAX='$HUMEDADMAX', HUMEDADMIN='$HUMEDADMIN', TEMPERATURAAGUAMAX='$TEMPERATURAAGUAMAX', TEMPERATURAAGUAMIN='$TEMPERATURAAGUAMIN', CO2MAX='$CO2MAX', CO2MIN='$CO2MIN' WHERE ID_CULTIVO='$ID_CULTIVO' ";
    $query = mysqli_query($con, $sql);
    if ($query) {
        Header("Location: https://proyectosw.cl/cultivo2.php");
    };
    
?>
