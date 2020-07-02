<?php
  define('SERVERNAME', 'localhost');
  define('USERNAME', 'admin_andrey');
  define('PASSWORD', 'qqqqqq');
  define('DBNAME', 'admin_excel');

  // define('SERVERNAME', 'localhost');
  // define('USERNAME', 'root');
  // define('PASSWORD', '');
  // define('DBNAME', 'export');

  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

  mysqli_set_charset($conn, "utf8");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM excel_table";
  $result = mysqli_query($conn, $sql);


  $a = array();

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $a[] = $row;
    }
  } 

  echo json_encode($a);
?>