<?php

function goldbook_index()
{
    if (!is_logged_in()) {
        redirect('auth/login');
    }

    $entries = function_exists('get_goldbook_entries') ? get_goldbook_entries() : [];

    $data = [
        'title' => 'Livre d\'or',
        'entries' => $entries
    ];
    load_view_with_layout('gold_book/index', $data);
}

function goldbook_add()
{
    if (!is_logged_in()) {
        redirect('auth/login');
    }

    $user_id = $_SESSION['id'];

    // Si le formulaire est soumis (POST)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $content = $_POST['content'] ?? '';

        if (!empty(trim($content))) {
            // Ajouter le message
            if (add_goldbook_entry($user_id, $content)) {
                $_SESSION['success'] = 'Message ajouté avec succès !';
                redirect('goldbook/index');
            } else {
                $_SESSION['error'] = 'Erreur lors de l\'ajout du message.';
            }
        } else {
            $_SESSION['error'] = 'Le message ne peut pas être vide.';
        }
    }

    $data = [
        'title' => 'Ajouter un message'
    ];
    load_view_with_layout('gold_book/add', $data);
}