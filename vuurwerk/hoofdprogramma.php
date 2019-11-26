<?php

include "create_database";
echo $conn;
include "Create_table";
echo $Naam, $Datum, $Tijd, $Met_wie;
include "insert_into";
echo $sql;
include "Print_tabel";
echo $result;







?>