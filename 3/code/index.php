<h1>Authors</h1>
<?php

$dbconn = pg_connect(
    "host=" . getenv("DB_PORT_5432_TCP_ADDR") .
    " dbname=" . getenv("DB_ENV_POSTGRES_DB") .
    " user=" . getenv("DB_ENV_POSTGRES_USER") .
    " password=" . getenv("DB_ENV_POSTGRES_PASSWORD")
) or die('Could not connect: ' . pg_last_error());

$query = 'SELECT * FROM authors';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "<ul>";

while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "<li>" . $line["first_name"] . " " . $line["last_name"] . "</li>";
}
echo "</ul>";

pg_free_result($result);

pg_close($dbconn);
?>
