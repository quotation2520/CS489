<?php

function login()
{
    echo '
    <form action="home.php" method="post">
        <div class="form-group row">
            <div class="col-sm-2 col-sm-offset-7">
                <input class="form-control" name="id" placeholder="ID">
            </div>
            <div class="col-sm-2">
                <input type="password" class="form-control col-sm-3" name="passwd" placeholder="Password">
            </div>
            <div class="col-sm-1">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </div>
    </form>';
}

function verify_id()
{
    $conn = mysqli_connect(
        '110.76.74.76',
        'remote',
        'quotation2520',
        'forus',
        '3306'
    );
    $query = "SELECT pw FROM userinfo WHERE username = '{$_POST['id']}'";
    $result = mysqli_fetch_row(mysqli_query($conn, $query));
    if ($result == NULL) return 0;
    if ($result[0] != $_POST['passwd']) return -1;
    return 1;
}

function insert_new_id()
{
    $conn = mysqli_connect(
        '110.76.74.76',
        'remote',
        'quotation2520',
        'forus',
        '3306'
    );
    $insert = "INSERT INTO userinfo
    (username, pw) VALUES('{$_POST['id']}', '{$_POST['passwd']}')";
    mysqli_query($conn, $insert);
}

if (isset($_POST['id'])) {

    # Check if it is in the server
    if (verify_id() == -1) {
        login();
        echo '
    <p style="text-align:end;color:red">
        Wrong Password'.$_POST['passwd'].'</p>';
    } else {
        if (verify_id() == 0) {
            insert_new_id();
        }
        echo '
    <p style="text-align:end">
        Welcome ' . $_POST["id"] .
            '</p>';
    }
} else {
    login();
}
