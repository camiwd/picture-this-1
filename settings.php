<?php

require __DIR__ . '/views/header.php';

if (!userLoggedIn()) {
    redirect('/');
}


?>
<div class="settingsPage">

    <form class="changeBio" action="/app/users/update.php" method="post">
        <h1>Update Bio</h1>
        <label for="changeBio">Bio</label>
        <textarea name="bio" rows="5" cols="32" wrap="hard"><?php echo $_SESSION['user']['biography'] ?></textarea>
        <button type="submit" name="button">Update Bio</button>
    </form>

    <form class="chooseAvatar" action="/app/users/update.php" method="post" enctype="multipart/form-data">
        <h1>Choose/change Avatar Image</h1>
        <label for="avatar">Choose a Avatar Image to upload<br>(You can only use .jpg/.jpeg or .png images)</label>
        <input type="file" accept="image/jpg, image/png" name="avatar" id="avatar" required>
        <button type="submit">Upload Avatar</button>
    </form>


    <form class="changeEmail" action="/app/users/update.php" method="post">
        <h1>Change Email</h1>
        <label for="oldEmail">Old Email</label>
        <input type="email" name="oldEmail" value="" required>
        <label for="newEmail">New Email</label>
        <input type="email" name="newEmail" value="" required>
        <label for="password">Password</label>
        <input type="password" name="password" value="" required>
        <button type="submit" name="button">Change Email</button>
    </form>


    <form class="changePassword" action="/app/users/update.php" method="post">
        <h1>Change Password</h1>
        <label for="oldPassword">Old Password</label>
        <input type="password" name="oldPassword" value="" required>
        <label for="newPassword">New Password</label>
        <input type="password" name="newPassword" value="" required>
        <label for="repeatNewPassword">Repeat New Password</label>
        <input type="password" name="repeatNewPassword" value="" required>
        <button type="submit" name="button">Change Password</button>
    </form>

</div>

<?php

require __DIR__ . '/views/footer.php';

?>
