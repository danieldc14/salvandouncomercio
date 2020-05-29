<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>Nombre Comercial</th>
							<th>Nombre de Contacto</th>
							<th>Tel&eacutefono</th>
							<th>Observación</th>
				
						
						</tr>';

	$query = "SELECT * FROM comercio_milagro where categoria_neg='Inmobiliaria'";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				
				<td>'.$row['nombres_neg'].'</td>
				<td>'.$row['nombres'].'</td>
				<td>'.$row['telefono'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id_comercio'].')" class="btn btn btn-outline-success"><i class="fas fa-eye"></i></button>
				</td>
				
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">No hay registros!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>