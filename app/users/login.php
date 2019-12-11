<?php

declare(strict_types=1);

require __DIR__.'/../autoload.php';

if (isset($_POST['email'], $_POST['password'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $statement = $pdo->prepare('Select * from users WHERE email = :email');
    $statement->execute([
        ':email' => $email
    ]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        redirect('/login.php');
    }
    if (password_verify($password, $user['password']) !== false) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        ];
        unset($_SESSION['errors']);
    } else {
      $_SESSION['errors'][] = 'Seems like you got the wrong email/password';
      redirect('/login.php');
    }


}

redirect('/');

