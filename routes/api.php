<?php

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* (Laravel generated comment)
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
|--------------------------------------------------------------------------
| Getting Started
|--------------------------------------------------------------------------
| Here is where we will be creating our api, in api.php, this is where all
| your routes live that are associated with your api rather than request made
| to other web resources such as html, css, and images. The design of your API
| is up to you although it is best to follow REST principles as well as the
| Laravel conventions and best practices.
|
| Here are some resources that may be helpful to you
| https://laravel.com/docs/9.x/routing
| https://docs.microsoft.com/en-us/azure/architecture/best-practices/api-design
|
*/

/*
| All routes in this file should follow the pattern: http://(domain.com)/api/(your route)
|
| Let's consider the conventions of building a REST API when choosing our endpoints. Here
| (Refer to the Microsoft docs above)
*/

/*
| To fetch data from our database we will use Laravel Eloquent, which provides
| a simple way to query the database.
| Documentation: https://laravel.com/docs/eloquent
| Solutions are all provided on the 'solution' branch of the respository.
*/

/*
| Let's create our first endpoint, let's return a simple string that says, 'Hello, World!'
| When a request is made to this endpoint.
|
| What HTTP method is best for sending data?
*/
Route::___('', function () {
    return 'Hello, World!';
});

/*
| Let's send a response containing a list of all our employees
| when a request is made to this endpoint.
|
| What HTTP method is best for sending data?
*/
Route::___('', function () {

});

/*
| Let's send a response containing a single employee
| How are we going to identify this employee?
|
| What HTTP method is best for sending this employee data?
*/
Route::___('', function (Request $request) {

});

/*
| Let's create a new employee
| What information is required to create a new employee resource?
|
| What HTTP method is best for sending new data to the server?
*/
Route::___('', function (Request $request) {

});

/*
| Let's update an existing employee
| How will we identify the employee we want to update?
| What data do we need to send to update this employee?
|
| What HTTP method is best for updating an existing resource?
*/
Route::___('', function (Request $request) {

});

/*
| Let's delete an existing employee
| How will we indicate which employee we want to delete?
|
| What HTTP method is best to indicate that we want to delete a resource?
*/
Route::___('', function (Request $request) {

});

/*
| (Bonus)
| Let's grab all of an employees timeclock events and return those event
| How do we indicate which employee we want and how do we indicate we want the timeclock events?
|
| What HTTP method is best for returning this data?
*/
Route::___('', function (Request $request) {

});



