Your First API, in Python
======================

Dependencies
------------

- Python
- pip

Tutorial
--------

Full tutorial can be found on [devinmatte.me](https://devinmatte.me/tutorial/2018/02/24/intro-to-apis/)


### Getting Started

Let's start with simply making a root route that returns "Hello World!" to the body of the response.

<ul>
<li>First run <code>pip install -r requirements.txt</code></li>
<ul>
<li>Make sure you're using Python3, you may need to use <code>pip3</code> instead of <code>pip</code> on some systems.</li>
</ul>
<li>Edit <code>__init__.py</code> and add the following route, then run <code>app.py</code> to test.</li>
</ul>

```python
@app.route("/", methods=["GET"])
def root():
    return "Hello World!"
```

### Multiple Request Types

Not every request in an API is **GET** in most cases. Often an API allows for you to make requests to change the underlying data in the system. In order to do this, you're going to want to take advantage of **POST**, **PUT** and **DELETE**. Doing so in each framework is fairly easy to define.

```python
# GET Request
@app.route("/", methods=["GET"])
def root_get():
    return "Hello World!"

# POST Request
@app.route("/", methods=["POST"])
def root_post():
    return "Got a POST request at /"

# PUT Request
@app.route("/", methods=["PUT"])
def root_put():
    return "Got a PUT request at /"

# DELETE Request
@app.route("/", methods=["DELETE"])
def root_delete():
    return "Got a DELETE request at /"
```

### Using Status Codes

HTTP requests are made up of two parts, the payload, and the status code. The status code tells whether a request was successful, or failed. It also allows for you handle the results of requests based on the code that it provides. Status codes are generally pretty consistent, so if you're confused what code to return, just reference the [spec](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status).

```python
# Return a 205
@app.route("/success", methods=["GET"])
def return_success():
    return "This will return a 205 Status Code", 205

# Return a 404
@app.route("/fail", methods=["GET"])
def return_fail():
    return "This will return a 404 Status Code", 404
```

### Get Data to Return

Often APIs are stateless, meaning that they get the data from somewhere. You aren't going to be storing data in data structures as your long term storage. Because of that you'll often interact with Databases. Each language works really well with a number of frameworks. I will recommend some good ORMs for each language below, but you should do your research to find one that works for your use case.

<b>Recommended ORMs:</b>
<ul>
<li><a href="https://www.sqlalchemy.org/">SqlAlchemy</a> (<a href="http://flask-sqlalchemy.pocoo.org/">Flask SqlAlchemy</a>)</li>
<li><a href="https://www.djangoproject.com/">Django</a></li>
</ul>

### Continue Learning

If you want to learn more about APIs or any of these frameworks, there are plenty of good resources available.

- [Flask](http://flask.pocoo.org/)
