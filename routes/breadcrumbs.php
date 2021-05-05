<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// Inicio
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('ControlPanel', route('dashboard'));
});
// Inicio > Ranking
Breadcrumbs::for('ranking', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Ranking', route('ranking'));
});

// Inicio > Profile
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Profile', route('profile'));
});

// Inicio > List
Breadcrumbs::for('list', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('List', route('list'));
});


// Inicio > Request
Breadcrumbs::for('request', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Request', route('request'));
});