<?php

include"../lib/php/functions.php";


$file = "../data/user.json";
$users = file_get_json($file);

$message = "";

$id = isset($_GET['id']) ? (int) $_GET['id'] : -1;





function showUserPage($user, $id, $message) {

    $name = htmlspecialchars($user->name ?? "");
    $type = htmlspecialchars($user->type ?? "");
    $email = htmlspecialchars($user->email ?? "");
    $hobbies = htmlspecialchars(
        implode(", ", $user->hobbies ?? [])
    );

    echo "<h2>Edit User</h2>";

    if ($message !== "") {
        echo "<p>" . htmlspecialchars($message) . "</p>";
    }

    echo <<<HTML
    <form method="POST" action="users.php?id=$id">

        <input type="hidden" name="id" value="$id">

        <div class="form-control">
            <label for="name">Name</label>
            <input
                class="form-input"
                type="text"
                id="name"
                name="name"
                value="$name"
                required
            >
        </div>

        <div class="form-control">
            <label for="type">User Type</label>
            <input
                class="form-input"
                type="text"
                id="type"
                name="type"
                value="$type"
                required
            >
        </div>

        <div class="form-control">
            <label for="email">Email</label>
            <input
                class="form-input"
                type="email"
                id="email"
                name="email"
                value="$email"
                required
            >
        </div>

        <div class="form-control">
            <label for="hobbies">Hobbies</label>
            <input
                class="form-input"
                type="text"
                id="hobbies"
                name="hobbies"
                value="$hobbies"
            >
        </div>

        <button class="form-button" type="submit">
            Save Changes
        </button>

        <a href="users.php">Cancel</a>

    </form>
    HTML;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>User Admin Page</title>

    <?php include "../parts/meta.php"; ?>
</head>

<body>

<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>User Admin</h1>
        </div>

        <div class="flex-stretch"></div>

        <nav class="nav nav-flex flex-none">
            <ul>
                <li><a href="users.php">User List</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container">

    <div class="card soft">

        <?php if (isset($users[$id])): ?>

            <?php showUserPage($users[$id], $id, $message); ?>

        <?php else: ?>

            <h2>User List</h2>

            <nav class="nav">
                <ul>
                    <?php foreach ($users as $i => $user): ?>
                        <li>
                            <a href="users.php?id=<?= $i ?>">
                                <?= htmlspecialchars($user->name) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

        <?php endif; ?>

    </div>

</main>

</body>
</html>