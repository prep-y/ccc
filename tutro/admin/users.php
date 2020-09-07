<?php 
require_once '../core/init.php';
if(!is_logged_in()){
    login_error_redirect();
}
if(!has_permission('admin')){
    permission_error_redirect('index.php');
}
include 'includes/head.php';
include 'includes/navigation.php';
if(isset($_GET['delete'])){
    $delete_id = sanitize($_GET['delete']);
    $mysqli->query("DELETE FROM users WHERE id ='$delete_id'");
    $_SESSION['success_flash'] = 'User has been deleted';
    header('Location: users.php');
}
if(isset($_GET['add'])){
    $name = ((isset($_POST['name']))?sanitize($_POST['name']):'');
    $email = ((isset($_POST['email']))?sanitize($_POST['email']):'');
    $password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
    $confirm = ((isset($_POST['confirm']))?sanitize($_POST['confirm']):'');
    $permissions = ((isset($_POST['permissions']))?sanitize($_POST['permissions']):'');
    $errors = array();
    if($_POST){
        $required = array('name', 'email', 'password', 'confirm', 'permissions');
        foreach($required as $f){
            if(!empty($_POST[$f])){
                $errors[] = 'You must fill out all feilds';
            break;
            }
        }

        //Checking if password is less than 6 char
        if(strlen($password < 6)){
            $errors[] = 'Your password must be at least 6 characters long';
        }

        //Checking if password and confirm password match
        if($password != $confirm){
            $errors[] = 'Your passwords do not match';
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = 'You must enter a valid email';
        }

        if(!empty($errors)){
            echo display_errors($errors);
        }else{
            //add user to database
        }
    }

    ?>
    <h2 class="text-center">Add a new user</h2><hr>
    <form action="form-group">
    <div class="form-group">
        <label for="name">Full name:</label>
        <input type="text" name="name" id="name" class="form-control" value="<?=$name;?>">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="<?=$email;?>">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" value="<?=$password;?>">
    </div>
    <div class="form-group">
        <label for="confirm">Confirm password:</label>
        <input type="password" name="confirm" id="confirm" class="form-control" value="<?=$confirm;?>">
    </div>
    <div class="form-group">
        <label for="name">Permissions:</label>
        <select class="form-control">
            <option value=""<?=(($permissions == '')?' selected':'') ?>></option>
            <option value="editor"<?=(($permissions == 'editor')?' selected':'') ?>>Editor</option>
            <option value="admin,editor"<?=(($permissions == 'admin,editor')?' selected':'') ?>>Admin</option>
        </select>
    </div>
    <div class="form-group">
        <a href="users.php" class="btn btn-danger">Cancel</a>
        <input type="submit" value="Add User" class="btn btn-primary">
    </div>
    <?php

}else{
$userQuery = $mysqli->query("SELECT * FROM users ORDER BY full_name");

?>
<h2>Users</h2>
<a href="users.php?add=1" class="btn btn-success pull-right" id = "add_product_btn" >Add new user</a>
<hr>
<table class="table table-bordered table-striped table-condesed">
    <thead><th></th><th>Name</th><th>Email</th><th>Join Date</th><th>Last Login</th><th>Permissions</th></thead>
    <tbody>
    <?php while($user = mysqli_fetch_assoc($userQuery)): ?>
        <tr>
            <td>
                <?php if($user['id'] != $user_data['id']): ?>

                    <a href="users.php?delete=<?=$user['id'];?>" class="btn btn-danger btn-xs"><i class="large material-icons">cancel</i></a>

                <?php endif;?>
            </td>
            <td><?=$user['full_name']; ?></td>
            <td><?=$user['email']; ?></td>
            <td><?=pretty_date($user['join_date']);?></td>
            <td><?=pretty_date($user['join_date']);?></td>
            <td><?=$user['permissions']; ?></td>
        </tr>
    <?php endwhile;?>
    </tbody>


<?php } include 'includes/footer.php'; ?>