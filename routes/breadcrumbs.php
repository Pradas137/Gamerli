<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// Inicio
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('ControlPanel', route('dashboard'));
});

Breadcrumbs::for('adminDashboard', function ($trail) {
    $trail->push('ControlPanel', route('adminDashboard'));
});

// Inicio > Ranking
Breadcrumbs::for('Ranking', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Ranking', route('ranking'));
});

// Inicio > Profile
Breadcrumbs::for('Profile', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Profile', route('Profile'));
});

// Inicio > List
Breadcrumbs::for('List', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('List', route('List'));
});

// Inicio > Friend
Breadcrumbs::for('Friend', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Friend', route('Friend'));
});


// Inicio > Request
Breadcrumbs::for('request', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Request', route('request'));
});

// Inicio > CreateGame
Breadcrumbs::for('Create', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Create', route('create'));
});