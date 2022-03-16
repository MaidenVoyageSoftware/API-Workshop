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
|
| Explanation
| We will use the GET method to indicate that we want to fetch a resource from
| the server. We wimply return a string with the text 'Hello, World' and Laravel
| will take care of formatting the response
*/
Route::get('/helloworld', function () {
    return 'Hello, World!';
});

/*
| Let's send a response containing a list of all our employees
| when a request is made to this endpoint.
|
| What HTTP method is best for sending data?
|
| Explanation
| We will use the GET method to indicate that we want to fetch a resource from
| the server. We follow the REST standard formatting to indicate we want to
| access the 'employees' collection. We use the employee model and call the all()
| method to return a collection of all the employees in the database.
| We simply return the collection and Laravel formats it into a JSON response.
*/
Route::get('/employees', function () {
    $employees = Employee::all();

    return $employees;
});

/*
| Let's send a response containing a single employee
| How are we going to identify this employee?
|
| What HTTP method is best for sending this employee data?
|
| Explanation
| Again we indicate that we want to retrieve data from the server from the Employees
| collection. Laravel recognizes that when text is surrounded with curly brackets
| it means we want that to be a dynamic value that we can access as a variable.
| We use the find() method on the Employee model to pass in the id of the
| requested employee. We then return the employee model which will be again
| formatted as a JSON response.
*/
Route::get('/employees/{id}', function (Request $request) {
    $employee = Employee::find($request->id);

    return $employee;
});

/*
| Let's create a new employee
| What information is required to create a new employee resource?
|
| What HTTP method is best for sending new data to the server?
|
| Explanation
| Here we use the POST method to indicate that we want to create a new resource on the
| server. We use the Employee model to create a new employee. Within our request we send
| key-value pairs containing the properties we want to update and the data that should be used
| to update them. We call the save() method on the employee model to persist the data to the database.
| We then return the employee model which will be formatted as a JSON response.
*/
Route::post('/employees', function (Request $request) {
    $employee = Employee::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone
    ]);

    $employee->save();

    return $employee;
});

/*
| Let's update an existing employee
| How will we identify the employee we want to update?
| What data do we need to send to update this employee?
|
| What HTTP method is best for updating an existing resource?
|
| Explanation
| Here we use the PUT method to indicate that we want to update an existing resource on the
| server. In a similar manner to the POST request, we send along the values we want updated.
| We again save the model to persist the data and return the newly updated model.
*/
Route::put('/employees/{id}', function (Request $request) {

    $employee = Employee::find($request->id);

    $employee->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone
    ]);

    $employee->save();

    return $employee;
});

/*
| Let's delete an existing employee
| How will we indicate which employee we want to delete?
|
| What HTTP method is best to indicate that we want to delete a resource?
|
| Explanation
| We are using the delete method to indicate we want to delete a resource from
| the database. We use the id provided in the route to find the corresponding
| Employee model. We then call the delete method to remove it from the database.
| We return the deleted model back to the client.
*/
Route::delete('/employees/{id}', function (Request $request) {
    $employee = Employee::find($request->id);

    $employee->delete();

    return $employee;
});

/*
| (Bonus)
| Let's grab all of an employees timeclock events and return those event
| How do we indicate which employee we want and how do we indicate we want the timeclock events?
|
| What HTTP method is best for returning this data?
|
| Explanation
| Here we are retrieving employee data so we use the GET method. We indicate the id
| of the employee we want to retrieve. Within the file app/Models/Employee.php we defined a method
| which contains a relationship to the timeclock_events table. We can access the items associated through
| this model by accessing timeclockEvents as a property of the employee variable.
| This gives us the timeclock_events that are associated with the given employee.
| We simply return $employee->timeclockEvents and we now have all the related timeclock_events!
| Pretty cool, huh? This is just one of the many awesome features of Laravel.
*/
Route::get('/employees/{id}/timeclock-events', function (Request $request) {
    $employee = Employee::find($request->id);

    return $employee->timeclockEvents;
});



