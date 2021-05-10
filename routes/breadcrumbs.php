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
    $trail->push('Profile', route('profile'));
});

// Inicio > List
Breadcrumbs::for('myList', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('myList', route('mylist'));
});

// Inicio > PublicList
Breadcrumbs::for('publicList', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('publicList', route('publiclist'));
});

// Inicio > Friend
Breadcrumbs::for('Friend', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Friend', route('friend'));
});


// Inicio > Request
Breadcrumbs::for('Request', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Request', route('request'));
});

// Inicio > Petition
Breadcrumbs::for('Petition', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Petition', route('petition'));
});


// Inicio > CreateGame
Breadcrumbs::for('Create', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Create', route('create'));
});