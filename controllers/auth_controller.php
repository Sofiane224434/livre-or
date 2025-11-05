<?php

function auth_login()
{
    if (is_logged_in()) {
        redirect('home');
    }

    if (is_post()) {
        $login = trim(post('login', ''));
        $password = post('password', '');

        if (empty($login) || empty($password)) {
            set_flash('error', 'Veuillez remplir tous les champs.');
        } else {
            $user = function_exists('get_user_by_login') ? get_user_by_login($login) : null;

            if (!$user || !password_verify($password, $user['password'])) {
                set_flash('error', 'Identifiants invalides.');
            } else {
                // Connexion réussie
                $_SESSION['id'] = $user['id'];
                $_SESSION['login'] = $user['login'];
                set_flash('success', 'Connexion réussie.');
                redirect('home');
            }
        }
    }

    $data = [
        'title' => 'Connexion'
    ];
    load_view_with_layout('auth/login', $data);
}

function auth_register()
{
    if (is_logged_in()) {
        redirect('home');
    }

    if (is_post()) {
        $login = trim(post('login', ''));
        $password = post('password', '');
        $confirm_password = post('confirm_password', '');

        if (empty($login) || empty($password) || empty($confirm_password)) {
            set_flash('error', 'Veuillez remplir tous les champs.');
        } elseif (strlen($login) < 3) {
            set_flash('error', 'Le login doit contenir au moins 3 caractères.');
        } elseif (strlen($password) < 8) {
            set_flash('error', 'Le mot de passe doit contenir au moins 8 caractères.');
        } elseif (!preg_match('/[A-Z]/', $password)) {
            set_flash('error', 'Le mot de passe doit contenir au moins 1 lettre majuscule.');
        } elseif (!preg_match('/[a-z]/', $password)) {
            set_flash('error', 'Le mot de passe doit contenir au moins 1 lettre minuscule.');
        } elseif (!preg_match('/[0-9]/', $password)) {
            set_flash('error', 'Le mot de passe doit contenir au moins 1 chiffre.');
        } elseif ($password !== $confirm_password) {
            set_flash('error', 'Les mots de passe ne correspondent pas.');
        } else {
            $exists = null;
            if (function_exists('get_user_by_login')) {
                $exists = get_user_by_login($login);
            } elseif (function_exists('user_exists')) {
                $exists = user_exists($login);
            }

            if ($exists) {
                set_flash('error', 'Ce login est déjà utilisé. Veuillez en choisir un autre.');
            } else {
                $user_id = create_user($login, $password);
                if ($user_id) {
                    set_flash('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
                    redirect('auth/login');
                } else {
                    set_flash('error', "Une erreur est survenue lors de l'inscription. Veuillez réessayer.");
                }
            }
        }
    }

    $data = [
        'title' => "Inscription"
    ];
    load_view_with_layout('auth/register', $data);
}

function auth_logout()
{
    session_unset();
    session_destroy();
    session_start();
    set_flash('success', 'Vous avez été déconnecté.');
    redirect('auth/login');
}

