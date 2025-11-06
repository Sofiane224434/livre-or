<?php

function get_goldbook_entries($limit = 20, $offset = 0)
{
    $query = "SELECT 
                c.id,
                c.commentaire as content,
                c.id_utilisateur,
                c.date,
                u.login as user_name
              FROM commentaires c
              JOIN utilisateurs u ON c.id_utilisateur = u.id
              ORDER BY c.date DESC
              LIMIT ? OFFSET ?";
    return db_select($query, [$limit, $offset]);
}

function count_goldbook_entries()
{
    $query = "SELECT COUNT(*) as total FROM commentaires";
    $result = db_select($query);
    return $result[0]['total'] ?? 0;
}

function add_goldbook_entry($user_id, $content)
{
    $query = "INSERT INTO commentaires (id_utilisateur, commentaire, date) VALUES (?, ?, NOW())";
    return db_execute($query, [$user_id, $content]);
}