<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'subject','namespace' => 'Subject'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('subject.login');
    $router->post('login', 'LoginController@login')->name('subject.login');
    $router->get('logout', 'LoginController@logout');
});

Route::group(['middleware' => 'auth.subject:subject, subject/login', 'prefix' => 'subject','namespace' => 'Subject'],function ($router)
{
  $router->get('competitions', 'CompetitionsController@index')->name('competitions.index');
  $router->post('competitions', 'CompetitionsController@create')->name('competitions.create');
  $router->get('competitionsData', 'CompetitionsController@list')->name('competitions.list');


  $router->get('schools', 'SchoolsController@index')->name('schools.index');
  $router->get('schoolsData', 'SchoolsController@list')->name('schools.list');
});


Route::group(['prefix' => 'instructor','namespace' => 'Instructor'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('instructor.login');
    $router->post('login', 'LoginController@login')->name('instructor.login');
    $router->get('logout', 'LoginController@logout');

    $router->get('register', 'RegisterController@register');
    $router->post('register', 'RegisterController@store');
});

Route::group(['middleware' => 'auth.instructor:instructor, instructor/login', 'prefix' => 'instructor','namespace' => 'Instructor'],function ($router)
{
  $router->get('students', 'StudentsController@index')->name('students.index');
  $router->post('students', 'StudentsController@create')->name('students.create');
  $router->get('studentsData', 'StudentsController@list')->name('students.list');
});
