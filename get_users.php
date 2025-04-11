{\rtf1\ansi\ansicpg1252\cocoartf2821
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh6260\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
// Database connection parameters\
$host = 'cloudixdb.cdbi18gwc20.eu-north-1.rds.amazonaws.com';\
$port = 3306;\
$username = 'MigrationAdmin';\
$password = \'91950620862Vv\'92; // Replace with your RDS password\
$dbname = 'cloudixdb';\
\
// Create connection\
$conn = new mysqli($host, $username, $password, $dbname, $port);\
\
// Check connection\
if ($conn->connect_error) \{\
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));\
\}\
\
// Query to fetch users\
$sql = "SELECT name, email FROM users";\
$result = $conn->query($sql);\
\
$users = [];\
if ($result->num_rows > 0) \{\
    while ($row = $result->fetch_assoc()) \{\
        $users[] = $row;\
    \}\
\}\
\
// Close connection\
$conn->close();\
\
// Return data as JSON\
header('Content-Type: application/json');\
echo json_encode($users);\
?>}