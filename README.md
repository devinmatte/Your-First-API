Your First API, in PHP
======================

Dependencies
------------

- PHP
- Composer

Tutorial
--------

Full tutorial can be found on [devinmatte.me](https://devinmatte.me/tutorial/2018/02/24/intro-to-apis/)


### Getting Started

Let's start with simply making a root route that returns "Hello World!" to the body of the response.

<ul>
<li>First run <code>composer install</code></li>
<ul>
<li>If you don't have composer, <a href="https://getcomposer.org/">install it</a></li>
</ul>
<li>Edit <code>routes.php</code> and add the following route, then run <code>php -S localhost:3000 -t index.php</code> to test.</li>
</ul>

```php
$app->get('/', function (Request $request, Response $response) {
    return $response->write("Hello World!");
});
```

### Multiple Request Types

Not every request in an API is **GET** in most cases. Often an API allows for you to make requests to change the underlying data in the system. In order to do this, you're going to want to take advantage of **POST**, **PUT** and **DELETE**. Doing so in each framework is fairly easy to define.

```php
// GET Request
$app->get('/', function (Request $request, Response $response) {
    return $response->write("Hello World!");
});

// POST Request
$app->post('/', function (Request $request, Response $response) {
    return $response->write("Got a POST request at /");
});

// PUT Request
$app->put('/', function (Request $request, Response $response) {
    return $response->write("Got a PUT request at /");
});

// DELETE Request
$app->delete('/', function (Request $request, Response $response) {
    return $response->write("Got a DELETE request at /");
});
```

### Using Status Codes

HTTP requests are made up of two parts, the payload, and the status code. The status code tells whether a request was successful, or failed. It also allows for you handle the results of requests based on the code that it provides. Status codes are generally pretty consistent, so if you're confused what code to return, just reference the [spec](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status).

```php
// Return a 205
$app->get('/success', function (Request $request, Response $response) {
    return $response->write("This will return a 205 Status Code")->withStatus(205);
});

// Return a 404
$app->get('/fail', function (Request $request, Response $response) {
    return $response->write("This will return a 404 Status Code")->withStatus(404);
});
```

### Get Data to Return

Often APIs are stateless, meaning that they get the data from somewhere. You aren't going to be storing data in data structures as your long term storage. Because of that you'll often interact with Databases. Each language works really well with a number of frameworks. I will recommend some good ORMs for each language below, but you should do your research to find one that works for your use case.

<b>Recommended ORMs:</b>
<ul>
<li><a href="http://www.doctrine-project.org/projects/orm.html">Doctrine ORM</a></li>
<li><a href="https://redbeanphp.com/">RedBeanPHP</a></li>
</ul>

### Continue Learning

If you want to learn more about APIs or any of these frameworks, there are plenty of good resources available.

- [Slim](https://www.slimframework.com/)
