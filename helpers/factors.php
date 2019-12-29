<?php
// DB table to use
$table = 'bnm_subscribers';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => 'id', 'dt' => 'id' ),
    array( 'db' => 'name', 'dt' => 'name' ),
    array( 'db' => 'f_name', 'dt' => 'f_name' ),
    array( 'db' => 'telephone', 'dt' => 'telephone' ),
    array( 'db' => 'telephone_hamrah', 'dt' => 'telephone_hamrah' ),
    array( 'db' => 'shenase_hoviati', 'dt' => 'shenase_hoviati' )
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'saharertebat',
    'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );
$where="noe_moshtarak='real'";
echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns,$where )
);


