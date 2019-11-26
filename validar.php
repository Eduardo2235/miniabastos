<?php
require_once "conexion/conexion_sql.php";
$sql = "SELECT * FROM SCT_Vigilancia WHERE Folio_Guia = '5758'";
$resultado=sqlsrv_query($conn, $sql) or die (sqlsrv_errors()); 
if (sqlsrv_fetch_array($resultado) >= 1) { 
    echo '<script>alert("Folio ya registrado en sistema")</script>'; 
}else{
    //echo '<script>alert("INSERTADO")</script>';
    $sqlInsert="INSERT INTO SCT_Vigilancia (Folio_Guia,TipoEmbarque,FechaSalida,KmsInicial,StatusUnidadSalida,ObservacionesSalida,ObservacionesChofer,SellosEmbarque, Documentos, fec_alt, hra_alt, usr_alt, CONDICIONESUNIDAD) 
                            VALUES ('5758','T','2019-11-24 14:05:00.000', '125500','1','TODO BIEN', 'ALIENTO ALCOHOLICO', 'PB001', '12', '20181125', '125801', 'ADM','12345')";
    $stmt = sqlsrv_query( $conn, $sqlInsert);
	/*if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
    }*/
    echo '<script>alert("Incidencia insertada, Gracias")</script>';
}

?>