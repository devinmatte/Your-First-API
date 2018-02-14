Your First API, in Node.js
======================

Dependencies
------------

- Nodejs


Tutorial
--------

Full tutorial can be found on [devinmatte.me](https://devinmatte.me/tutorial/2018/02/24/intro-to-apis/)


### Getting Started

Let's start with simply making a root route that returns "Hello World!" to the body of the response.

<ul>
<li>First run <code>npm install</code></li>
<ul>
<li>If you don't have node, <a href="https://nodejs.org/">install it</a></li>
</ul>
<li>Edit <code>app.js</code> and add the following route, then run <code>node app.js</code> to test.</li>
</ul>

```javascript
app.get('/', (req, res) => res.send('Hello World!'));
```

### Multiple Request Types

Not every request in an API is **GET** in most cases. Often an API allows for you to make requests to change the underlying data in the system. In order to do this, you're going to want to take advantage of **POST**, **PUT** and **DELETE**. Doing so in each framework is fairly easy to define.

```javascript
// GET Request
app.get('/', function (req, res) {
    res.send('Hello World!');
});

// POST Request
app.post('/', function (req, res) {
    res.send('Got a POST request at /');
});

// PUT Request
app.put('/', function (req, res) {
    res.send('Got a PUT request at /');
});

// DELETE Request
app.delete('/', function (req, res) {
    res.send('Got a DELETE request at /');
});
```

### Using Status Codes

HTTP requests are made up of two parts, the payload, and the status code. The status code tells whether a request was successful, or failed. It also allows for you handle the results of requests based on the code that it provides. Status codes are generally pretty consistent, so if you're confused what code to return, just reference the [spec](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status).

```javascript
// Return a 205
app.get('/success', function (req, res) {
    res.status(205);
    res.send('This will return a 205 Status Code');
});

// Return a 404
app.get('/fail', function (req, res) {
    res.status(404);
    res.send('This will return a 404 Status Code');
});
```

### Get Data to Return

Often APIs are stateless, meaning that they get the data from somewhere. You aren't going to be storing data in data structures as your long term storage. Because of that you'll often interact with Databases. Each language works really well with a number of frameworks. I will recommend some good ORMs for each language below, but you should do your research to find one that works for your use case.

<b>Recommended ORMs:</b>
<ul>
<li><a href="http://docs.sequelizejs.com/">Sequelize</a></li>
</ul>

### Continue Learning

If you want to learn more about APIs or any of these frameworks, there are plenty of good resources available.

- [Express](https://expressjs.com/)
