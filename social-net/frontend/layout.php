<?php
/**
 * @var string $page
 * @var array $users
 * @var array $articles
 * @var object $user
 * @var bool $auth
 * @var array $articlesUser
 * @var string $userLogin
 * @var object $currentUser
 * @var array $articlesCurrentUser
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Социальная сеть</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<div id="page" class="page"></div>

<script>
    let page = <?= $page ?>;
    let users = <?= $users ?>;
    let articles = <?= $articles ?>;
    let user = <?= $user ?>;
    let articlesUser = <?= $articlesUser ?>;
    let auth = <?= $auth ?>;
    let currentUser = <?= $currentUser ?>;
    let articlesCurrentUser = <?= $articlesCurrentUser ?>;
</script>

<script src="build/build.js"></script>

</body>
</html>