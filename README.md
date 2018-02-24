Your First API, in Java
======================

Dependencies
------------

- Java
- Gradle
- Maven

Tutorial
--------

Full tutorial can be found on [devinmatte.me](https://devinmatte.me/tutorial/2018/02/24/intro-to-apis/)


### Getting Started

Let's start with simply making a root route that returns "Hello World!" to the body of the response.

<ul>
<li>I recommend using an IDE for all Java Development</li>
<ul>
<li>I also recommend using <a href="https://www.jetbrains.com/idea/">Intellij</a></li>
</ul>
<li>Add <code>build.gradle</code> and <code>pom.xml</code> to the <a href="https://gradle.org/">gradle</a>/<a href="https://maven.apache.org/">maven</a> portions of your IDE</li>
<li>Make sure to mark <code>src</code> as the sources directory</li>
<li>Run <code>Application.java</code> to run/test your application
</ul>

```java
@RequestMapping("/")
public String root() {
    return "Hello World!";
}
```

### Multiple Request Types

Not every request in an API is **GET** in most cases. Often an API allows for you to make requests to change the underlying data in the system. In order to do this, you're going to want to take advantage of **POST**, **PUT** and **DELETE**. Doing so in each framework is fairly easy to define.

```java
// GET Request
@RequestMapping(value = "/", method = RequestMethod.GET)
public String rootGET() {
    return "Hello World!";
}

// POST Request
@RequestMapping(value = "/", method = RequestMethod.POST)
public String rootPOST() {
    return "Got a POST request at /";
}

// PUT Request
@RequestMapping(value = "/", method = RequestMethod.PUT)
public String rootPUT() {
    return "Got a PUT request at /";
}

// DELETE Request
@RequestMapping(value = "/", method = RequestMethod.DELETE)
public String rootDELETE() {
    return "Got a DELETE request at /";
}
```

### Using Status Codes

HTTP requests are made up of two parts, the payload, and the status code. The status code tells whether a request was successful, or failed. It also allows for you handle the results of requests based on the code that it provides. Status codes are generally pretty consistent, so if you're confused what code to return, just reference the [spec](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status).

```java
// Return a 205
@RequestMapping(value = "/success", method = RequestMethod.GET)
public ResponseEntity returnSuccess() {
    return ResponseEntity.status(205).body("This will return a 205 Status Code");
}

// Return a 404
@RequestMapping(value = "/fail", method = RequestMethod.GET)
public ResponseEntity returnFail() {
    return ResponseEntity.status(404).body("This will return a 404 Status Code");
}
```

### Get Data to Return

Often APIs are stateless, meaning that they get the data from somewhere. You aren't going to be storing data in data structures as your long term storage. Because of that you'll often interact with Databases. Each language works really well with a number of frameworks. I will recommend some good ORMs for each language below, but you should do your research to find one that works for your use case.

<b>Recommended ORMs:</b>
<ul>
<li><a href="http://hibernate.org/orm/">Hibernate</a></li>
</ul>

### Continue Learning

If you want to learn more about APIs or any of these frameworks, there are plenty of good resources available.

- [Spring](https://spring.io/)
