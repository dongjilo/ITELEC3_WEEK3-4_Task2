<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['x'])) {
    echo "This is value is from another page " . $_SESSION['name'];
    echo "<br>" . $_SESSION['x'];
}
else {
    echo "This is value is from another page " . $_SESSION['name'];
    echo "<br>" . $_SESSION['x'];
}