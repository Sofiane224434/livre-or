<?php

function create_user($login, $password)
{
    $hashed_password = hash_password($password);
    $query = "INSERT INTO utilisateurs (login, password) VALUES (?, ?)";

    if (db_execute($query, [$login, $hashed_password])) {
        return db_last_insert_id();
    }

    return false;
}

function get_user_by_login($login)
{
    $query = "SELECT * FROM utilisateurs WHERE login = ? LIMIT 1";
    return db_select_one($query, [$login]);
}

function get_login_by_id($id)
{
    $query = "SELECT login FROM utilisateurs WHERE id = ? LIMIT 1";
    $result = db_select_one($query, [$id]);

    return $result ? $result['login'] : null;
}

function get_user_by_id($id)
{
    $query = "SELECT * FROM utilisateurs WHERE id = ? LIMIT 1";
    return db_select_one($query, [$id]);
}

function update_user_login($id, $new_login)
{
    $query = "UPDATE utilisateurs SET login = ? WHERE id = ?";
    return db_execute($query, [$new_login, $id]);
}

function update_user_password($id, $new_password)
{
    $hashed_password = hash_password($new_password);
    $query = "UPDATE utilisateurs SET password = ? WHERE id = ?";
    return db_execute($query, [$hashed_password, $id]);
}
