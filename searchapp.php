 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="lyrics";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM lyrics WHERE name='$_POST[Name]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<!DOCTYPE html>
      <html>
      <head>
          <title>Welcome</title>
              <link rel="stylesheet" type="text/css" href="style1.css">
      
      </head>
      <body>
           <ul>
                <li><a href=http://localhost/GaanaLyricsSearch/index.html>Home</a></li>
                <li><a href=http://sudhanshu.cf>Contact</a></li>
                <li><a href=#>Search</a></li>'.
          '</ul> 
          <div class="Chorus1"><div class="spaced">'. ucfirst($row["name"])."<br><br>". $row["lyrics"]. "<br>". 
          '</h1>'.'</div></div>

          <footer class="footer">
                  <p>Copyright &copy: 2017| Sudhanshu Mishra</p>
          </footer>';
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>
