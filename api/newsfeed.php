<?php
    include '../libraries/http.php';
    include '../libraries/database.php';

    ($_SERVER['REQUEST_METHOD'] ===  'GET') or error();

    // Gets the courses from the database, and displays them in a format the app will understand
    $posts = get_all_posts();
    success('post', mysqli_fetch_all($posts, MYSQLI_ASSOC));
?>
