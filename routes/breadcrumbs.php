<?php
use App\Models\User;
use App\Models\Employee;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});
// Home > User Listing
Breadcrumbs::for('employee.index', function (BreadcrumbTrail $trail):void {
    $trail->parent('home');
    $trail->push('Employee Listing', route('employee.index'));
});

Breadcrumbs::for('employee.show', function (BreadcrumbTrail $trail, Employee $employee) {
    $trail->parent('employee.index');
    $trail->push($employee->id, route('employee.show', $employee));
});

Breadcrumbs::for('employee.create', function (BreadcrumbTrail $trail) {
    $trail->parent('employee.index');
    $trail->push('Create User', route('employee.create'));
});

Breadcrumbs::for('employee.edit', function (BreadcrumbTrail $trail,Employee $employee) {
    $trail->parent('employee.index');
    $trail->push('Edit User', route('employee.edit',$employee));
});





//////User 
Breadcrumbs::for('user.index', function (BreadcrumbTrail $trail):void {
    $trail->parent('home');
    $trail->push('User Listing', route('user.index'));
});

Breadcrumbs::for('user.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user.index');
    $trail->push($user->id, route('user.show', $user));
});

Breadcrumbs::for('user.create', function (BreadcrumbTrail $trail) {
    $trail->parent('user.index');
    $trail->push('Create User', route('user.create'));
});

Breadcrumbs::for('user.edit', function (BreadcrumbTrail $trail,User $user) {
    $trail->parent('user.index');
    $trail->push('Edit User', route('user.edit',$user));
});




Breadcrumbs::after(function (BreadcrumbTrail $trail) {
    $page = (int) request('page', 1);
    
    if ($page > 1) {
        $trail->push("Page {$page}", null, ['current' => false]);
    }
});