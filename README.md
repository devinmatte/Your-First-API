Your First API, in C#
======================

Dependencies
------------

- .NET Core 2.0+

Tutorial
--------

Full tutorial can be found on [devinmatte.me](https://devinmatte.me/tutorial/2018/02/24/intro-to-apis/)


### Getting Started

Let's start with simply making a root route that returns "Hello World!" to the body of the response.

<ul>
<li>Edit <code>Controllers/Controller.cs</code> and add the following route, then run <code>dotnet run</code> to test.</li>
</ul>

```csharp
// GET /
[HttpGet]
public ActionResult<string> Get()
{
    return "Hello World!";
}
```

### Multiple Request Types

Not every request in an API is **GET** in most cases. Often an API allows for you to make requests to change the underlying data in the system. In order to do this, you're going to want to take advantage of **POST**, **PUT** and **DELETE**. Doing so in each framework is fairly easy to define.

```csharp
// GET /
[HttpGet]
public ActionResult<string> Get()
{
    return "Hello World!";
}

// POST /
[HttpPost]
public ActionResult<string> Post()
{
    return "Got a POST request at /";
}

// PUT /
[HttpPut]
public ActionResult<string> Put()
{
    return "Got a PUT request at /";
}

// DELETE /
[HttpDelete]
public ActionResult<string> Delete()
{
    return "Got a DELETE request at /";
}
```

### Using Status Codes

HTTP requests are made up of two parts, the payload, and the status code. The status code tells whether a request was successful, or failed. It also allows for you handle the results of requests based on the code that it provides. Status codes are generally pretty consistent, so if you're confused what code to return, just reference the [spec](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status).

```csharp
// Return a 205
[HttpGet("success")]
public ActionResult<string> GetSuccess()
{
    HttpContext.Response.StatusCode = 205;
    return "This will return a 205 Status Code";
}

// Return a 404
[HttpGet("fail")]
public ActionResult<string> GetFail()
{
    HttpContext.Response.StatusCode = 404;
    return "This will return a 404 Status Code";
}
```

### Get Data to Return

Often APIs are stateless, meaning that they get the data from somewhere. You aren't going to be storing data in data structures as your long term storage. Because of that you'll often interact with Databases. Each language works really well with a number of frameworks. I will recommend some good ORMs for each language below, but you should do your research to find one that works for your use case.
Typically, you will create your object as a class, then the library you use for database interaction will handle serialization for that.
<b>Recommended ORMs:</b>
<ul>
<li><a href="https://docs.mongodb.com/ecosystem/drivers/csharp/">NoSQL: MongoDB</a></li>
<li><a href="https://docs.microsoft.com/en-us/aspnet/entity-framework">Entity Framework</a></li>
</ul>

### Continue Learning

If you want to learn more about APIs or any of these frameworks, there are plenty of good resources available.

- [ASP.NET](https://docs.microsoft.com/en-us/aspnet/core/)
