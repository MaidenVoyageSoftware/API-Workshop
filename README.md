# How to Build Awesome Web API's
##### Presented by Maiden Voyage Software

In this workshop you will be learning the basics of building a REST API using the Laravel Framework. APIs allow developers all over the world to create incredible interconnected applications.

## Getting Started

You will first want to start by installing the software required for our follow along demo. Can't/Don't want to right now? You can come back later and complete the demo later. The solution is available by changing the branch from 'master' to 'solution'

### Documentation References
* [Laravel](https://laravel.com/docs/9.x/installation)
* [Postman](https://learning.postman.com/docs/getting-started/introduction/)
* [REST API guide](https://www.restapitutorial.com/)

### Things you'll need

* Docker
* Postman
* Your favorite code editor
* The sample project code

### Installation & setup

1. [Docker](https://www.docker.com/products/docker-desktop) (Download and install for your system)
2. [Postman](https://www.postman.com/downloads/) (Used to send requests to your API)
3. Clone the master branch
4. Run in terminal ```./vendor/bin/sail up -d```
5. Docker will now initialize the PHP container and your server should be up and running!

## Creating an API

Now that your web server is not set up, head over to ```routes/api.php``` fo find the file in which we'll be working.

Here is where all of the routes related to your API are housed.

There is already some template code to help you get started. We will be building a simple API to perform some tasks related to the ```Employee``` table in the database. Laravel has a built-in tool called Eloquent, that provides a simple way to access your database.

When considering the naming conventions for your API remember the REST convention:

``` www.example.com/(resource)/(identifier)/(modifier) ```

* Your resource is usually in plural for such as Employees, Tasks, Reports, Sales, etc.
* Your identifier is usually the id of your resource such as 1,2,334, 543345, etc. Oftentimes it is also in a UUID format such as 4633c165-8c23-4f75-8126-b8292bd620eb. The identifier is unique to the resource and therefore ensures you can access the exact resource over and over when providing the same id.
* Lastly your modifier may indicate a relationship between your resource and another related resource such as employees/1/sales to retrieve the sales associated with your employee.


With this in mind you are ready to tackle the problems laid out in ```routes/api.php```. If you are ever stuck refer to the 'solution' branch which will provide the solutions to each problem.

### Good luck!

## What to do next?

There is much more to learn about creating an API. You can learn more about the Laravel Framework by reading the [Laravel Documentation](https://laravel.com/docs/9.x/installation) and the [REST API guide](https://www.restapitutorial.com/). 

Some topics to learn more about:
* Validation
* Authentication
* Query parameters
* MVC Architecture
* Middleware
* Cookies

These are just a few topics to expand and what you've learned! Web APIs provide exciting ways to build applications.

## Already got a start in web development?

You may be a great fit for our team! [Submit an application](https://yourmaidenvoyage.com/who-we-are#apply), we'd love to see you join our team!
