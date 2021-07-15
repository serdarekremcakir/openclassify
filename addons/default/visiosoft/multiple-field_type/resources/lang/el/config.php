<?php

return [
    'related'    => [
        'label'        => 'Σχετική ροή',
        'instructions' => 'Καθορίστε τις σχετικές καταχωρήσεις ροής που θα εμφανίζονται στο αναπτυσσόμενο μενού.',
    ],
    'mode'       => [
        'label'  => 'Λειτουργία εισαγωγής',
        'option' => [
            'tags'       => 'Ετικέτες',
            'lookup'     => 'Ψάχνω',
            'checkboxes' => 'Πλαίσια ελέγχου',
        ],
    ],
    'min'        => [
        'label'        => 'Ελάχιστες επιλογές',
        'instructions' => 'Καθορίστε τον ελάχιστο αριθμό επιτρεπόμενων επιλογών.',
    ],
    'max'        => [
        'label'        => 'Μέγιστες επιλογές',
        'instructions' => 'Καθορίστε τον μέγιστο αριθμό επιτρεπόμενων επιλογών.',
    ],
    'title_name' => [
        'label'        => 'Πεδίο τίτλου',
        'placeholder'  => 'όνομα',
        'instructions' => 'Καθορίστε το πεδίο <strong>slug</strong> για εμφάνιση για αναπτυσσόμενες επιλογές / επιλογές αναζήτησης.<br>Μπορείτε να καθορίσετε αναλύσιμους τίτλους όπως <strong>{entry.first_name} {entry.last_name}</strong><br>Η στήλη τίτλου της σχετικής ροής θα χρησιμοποιηθεί από προεπιλογή.',
    ],
];