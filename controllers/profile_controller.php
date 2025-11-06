<?php

/**
 * Affiche la page de profil de l'utilisateur
 */
function profile_index()
{
    // Vérifier si l'utilisateur est connecté
    if (!is_logged_in()) {
        get_flash_messages('Vous devez être connecté pour accéder à votre profil.');
        redirect('auth/login');
    }

    // Récupérer les informations de l'utilisateur
    $user = get_user_by_id($_SESSION['id']);

    if (!$user) {
        get_flash_messages('Utilisateur introuvable.');
        redirect('');
    }

    // Afficher la vue du profil
    render('profile/index', [
        'title' => 'Mon Profil',
        'user' => $user
    ]);
}

/**
 * Affiche le formulaire de modification du login
 */
function edit_login()
{
    // Vérifier si l'utilisateur est connecté
    if (!is_logged_in()) {
        get_flash_messages('Vous devez être connecté pour accéder à cette page.');
        redirect('auth/login');
    }

    // Récupérer les informations de l'utilisateur
    $user = get_user_by_id($_SESSION['id']);

    if (!$user) {
        get_flash_messages('Utilisateur introuvable.');
        redirect('');
    }

    // Afficher le formulaire de modification du login
    render('profile/change_profile', [
        'title' => 'Modifier mon login',
        'user' => $user
    ]);
}

/**
 * Wrapper compatible router: profile_edit_login
 */
function profile_edit_login()
{
    return edit_login();
}

/**
 * Traite la modification du login
 */
function update_login()
{
    // Vérifier si l'utilisateur est connecté
    if (!is_logged_in()) {
        get_flash_messages('Vous devez être connecté pour effectuer cette action.');
        redirect('auth/login');
    }

    // Vérifier que c'est une requête POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        redirect('profile/edit_login');
    }

    // Récupérer et nettoyer les données
    $new_login = trim($_POST['login'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validation
    $errors = [];

    if (empty($new_login)) {
        $errors[] = 'Le login ne peut pas être vide.';
    } elseif (strlen($new_login) < 3) {
        $errors[] = 'Le login doit contenir au moins 3 caractères.';
    }

    if (empty($password)) {
        $errors[] = 'Veuillez entrer votre mot de passe pour confirmer la modification.';
    }

    // Vérifier si le login existe déjà
    if (empty($errors)) {
        $existing_user = get_user_by_login($new_login);
        if ($existing_user && $existing_user['id'] != $_SESSION['id']) {
            $errors[] = 'Ce login est déjà utilisé par un autre utilisateur.';
        }
    }

    // Vérifier le mot de passe actuel
    if (empty($errors)) {
        $user = get_user_by_id($_SESSION['id']);
        if (!verify_password($password, $user['password'])) {
            $errors[] = 'Le mot de passe est incorrect.';
        }
    }

    // S'il y a des erreurs, les afficher et rediriger
    if (!empty($errors)) {
        foreach ($errors as $error) {
            get_flash_messages($error);
        }
        redirect('profile/edit_login');
    }

    // Mettre à jour le login
    if (update_user_login($_SESSION['id'], $new_login)) {
        get_flash_messages('Votre login a été modifié avec succès.');
        redirect('profile');
    } else {
        get_flash_messages('Une erreur est survenue lors de la modification du login.');
        redirect('profile/edit_login');
    }
}

/**
 * Wrapper compatible router: profile_update_login
 */
function profile_update_login()
{
    return update_login();
}

/**
 * Affiche le formulaire de modification du mot de passe
 */
function edit_password()
{
    // Vérifier si l'utilisateur est connecté
    if (!is_logged_in()) {
        get_flash_messages('Vous devez être connecté pour accéder à cette page.');
        redirect('auth/login');
    }

    // Récupérer les informations de l'utilisateur
    $user = get_user_by_id($_SESSION['id']);

    if (!$user) {
        get_flash_messages('Utilisateur introuvable.');
        redirect('');
    }

    // Afficher le formulaire de modification du mot de passe
    render('profile/change_password', [
        'title' => 'Modifier mon mot de passe',
        'user' => $user
    ]);
}

/**
 * Wrapper compatible router: profile_edit_password
 */
function profile_edit_password()
{
    return edit_password();
}

/**
 * Traite la modification du mot de passe
 */
function update_password()
{
    // Vérifier si l'utilisateur est connecté
    if (!is_logged_in()) {
        get_flash_messages('Vous devez être connecté pour effectuer cette action.');
        redirect('auth/login');
    }

    // Vérifier que c'est une requête POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        redirect('profile/edit_password');
    }

    // Récupérer les données
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validation
    $errors = [];

    if (empty($current_password)) {
        $errors[] = 'Veuillez entrer votre mot de passe actuel.';
    }

    if (empty($new_password)) {
        $errors[] = 'Veuillez entrer un nouveau mot de passe.';
    } elseif (strlen($new_password) < 6) {
        $errors[] = 'Le nouveau mot de passe doit contenir au moins 6 caractères.';
    }

    if ($new_password !== $confirm_password) {
        $errors[] = 'Les mots de passe ne correspondent pas.';
    }

    // Vérifier le mot de passe actuel
    if (empty($errors)) {
        $user = get_user_by_id($_SESSION['id']);
        if (!verify_password($current_password, $user['password'])) {
            $errors[] = 'Le mot de passe actuel est incorrect.';
        }
    }

    // S'il y a des erreurs, les afficher et rediriger
    if (!empty($errors)) {
        foreach ($errors as $error) {
            get_flash_messages($error);
        }
        redirect('profile/edit_password');
    }

    // Mettre à jour le mot de passe
    if (update_user_password($_SESSION['id'], $new_password)) {
        get_flash_messages('Votre mot de passe a été modifié avec succès.');
        redirect('profile');
    } else {
        get_flash_messages('Une erreur est survenue lors de la modification du mot de passe.');
        redirect('profile/edit_password');
    }
}

/**
 * Wrapper compatible router: profile_update_password
 */
function profile_update_password()
{
    return update_password();
}
