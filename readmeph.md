
https://www.geeksforgeeks.org/what-is-late-static-bindings-in-php/		

https://stackoverflow.com/questions/38308985/why-is-type-hinting-necessary-in-php


**Data Types in PHP**
```
String.
Integer.
Float (floating point numbers - also called double)
Boolean.
Array.
Object.
NULL.
Resource.
```

**How to declare empty objects variable in php**
```
$obj1 = new \stdClass; // Instantiate stdClass object
$obj2 = new class{}; // Instantiate anonymous class
$obj3 = (object)[]; // Cast empty array to object

var_dump($obj1); // object(stdClass)#1 (0) {}
var_dump($obj2); // object(class@anonymous)#2 (0) {}
var_dump($obj3); // object(stdClass)#3 (0) {}
```

**OPPs**

```
**Object **

Object: is a bundle of data and its behaviour (known as methods).
Objects have two characteristics: They have states and behaviors.

Examples of states and behaviors
Example 1:
Object: House
State: Address, Color, Area
Behavior: Open door, close door
class House {
   String address;
   String color;
   double are;
   void openDoor() {
      //Write code here
   }
   void closeDoor() {
      //Write code here
   }
 ...
 ...
}

Example 2:
Let’s take another example.
Object: Car
State: Color, Brand, Weight, Model
Behavior: Break, Accelerate, Slow Down, Gear change.

**Class**

Class is blueprint using which you can create many objects.
Mainly a class would consist of a properties, methods, fields, constructors, destructors, events, and so on.. 


**OPP's characterristics**
	Abstraction
	Encapsulation
	Polymorphism
	Inheritance

**Abstraction** allows us to expose limited data and functionality of objects publicly and hide the actual implementation.

**Encapsulation** is defined as the process of enclosing one or more details from outside world through access right.

Both Abstraction & Encapsulation works hand in hand because Abstraction says what details 
to be made visible and Encapsulation provides the level of access right to that visible details.

take an example for this Both

Talking about Bluetooth which we usually have it in our mobile. When we switch on a Bluetooth, 

I am able to connect to another mobile or bluetooth enabled devices but 
I'm not able to access the other mobile features like dialing a number, accessing inbox etc. 
This is because, Bluetooth feature is given some level of abstraction.

Another point is when mobile A is connected with mobile B via Bluetooth 
whereas mobile B is already connected to mobile C then A is not allowed to connect C via B.
This is because of accessibility restriction.


**Polymorphism** 
We can say Polymorphism is a design pattern where classes can have same or different functionality when they share a common interfaces.
Real life example.

A person at the same time can have different characteristic. Like a man at the same time is a father, a husband, an employee. So the same person posses different behavior in different situations.

There were 2 of Polymorphism
    1)Compile time (function overloading)Method Overloading: This allows us to have more than one methods with same name in a class that differs in signature.
    But PHP "does not support" compile time polymorphism, which means function overloading and operator overloading.
    class DisplayOverloading
        {
            public void disp(char c)
            {
                System.out.println(c);
            }
            public void disp(char c, int num)  
            {
                System.out.println(c + " "+num);
            }
        }
        public class ExampleOverloading
        {
        public static void main(String args[])
        {
            DisplayOverloading obj = new DisplayOverloading();
            obj.disp('a');
            obj.disp('a',10);
        }
        }

        Output:
        a
        a 10

    2) Run time (function overriding) Method overridding: a function in a derived class with the same signature as a function in its parent class then it is called method overriding.
	
    class Animal{
        public void animalSound(){
            System.out.println("Default Sound");
        }
        }
        public class Dog extends Animal{

        public void animalSound(){
            System.out.println("Woof");
        }
        public static void main(String args[]){
            Animal obj = new Dog();
            obj.animalSound();
        }
        }
why we use polymorphism
	The main idea for the polymorphism is to bring flexibility.
	Let’s imagine you are an experienced car technician at a service shop that can repair any B-class car. If you put this concept in OOP format, you have to 
	create a class called Technician as below:
	class Technician{
	 private String name;
	 private Car car

	 public Technician(String name){
	  this.name = name;
	 }
	  /*
	  ... getters and setters
	  */

	  public void repair(Car theCar){
	    // ... the body of repair method
	  }
	}
	
	The point is here:
	
	The shop manager knows that you can repair any B-class car. Thus, if any customer with car models below comes to the shop and asks for a repair job, the           manager is confident that you can repair them successfully.
	In OOP terms, the manager can call you (instantiate a Technician object) and ask you to repair a car (call you repair() method ). But wait, which type of           car the manager is going to pass as you theCar argument?
	As a technician you are not worried about that. Because you can repair any sort of B-class car. As a result the codes below are all true and make sense:
	{
		Technician hatef = new Technician("Hatef");
		// create several Car instances
		Car yaris = new Toyota();
		Car focus = new Ford();
		Car azera = new Hyundai();
		Renault megane = new Renault();
		// create manager object
		Manager manager = new Manager();
		// now manager calls the technician to start repairing
		hatef.repair(yaris); // hatef is able to repair any Car instances
		hatef.repair(focus); // focus is a Car instance
		hatef.repair(azera); // azera is a Car instance
		// now, watch below code, it is wrong because of polymorphism violation. megane is not an object of Car class.
		hatef.repair(megane);
	}
	But wait, why it is like so? why the code on last line is not right?
	Answer:
	Due to polymorphism objects like yaris, focus, azera are all reference variables of type Car that point to an object of different type. yaris points to a 	  Toyota. focus points to a Ford and azera points to a Hyundai.
	BUT: megane is a reference variable of type Renault that points to a Renault object, so it is wrong to say: megane is a car !!!!
	

**Inheritance**

Is the process by which one class acquires the properties and functionalities of another class.
Inheritance allows us to reuse of code, it improves reusability.
The biggest advantage of Inheritance is that the code in base class need not be rewritten in the child class.
**Types of Inheritance:**
	Single level inheritance
	Multi-level inheritance
	Hierarchical inheritance
	Hybrid inheritance
	Multiple inheritance

**Single inheritance**, there is single base class & a single derived class
 i.e. - A base mobile features is extended by Samsung brand.
 Mobile 
   |
Samsung

**Multilevel inheritance**, there is more than one single level of derivation.
 i.e. - After base features are extended by Samsung brand. 
 Now Samsung brand has manufactured its new model with new added features or advanced OS 
 like Android OS, v4.4.2 (kitkat).
 Mobile 
   |
Samsung
   |
Samsung S8  

**Hierarchical inheritance**, multiple derived class would be extended from base class,
it's similar to single level inheritance but this time along with Samsung, Nokia is also taking part in inheritance.
    Mobile 
   |      |
Samsung   Nokia

Hybrid inheritance - Single, Multilevel, & hierarchal inheritance all together construct a hybrid inheritance.
       Mobile 
   |         |
Samsung      Nokia
   |         |
Samsung S8   Nokia


**Multiple inheritance** where derived class will extend from multiple base classes.

IMobile   ITelephone
      |   |
     Samsung
Multiple inheritance is not supported in PHP but can implement using Interface    
Interface is defined with the keyword 'interface'.
All properties & methods with in the interface should be implemented if it is been used. 

interface IMobile  
{  
   Void Dial();  
}  
  
interface ITelephone  
{  
   void Dial();  
  
}  
  
public class Mobile : IMobile, ITelephone  
  
{  
    public void Dial()  
    {  
            Console.WriteLine("Dial a number");  
    }     
}
```
**What is Namespace**
```
Virtual directory structure for classes in global space.
```

**Difference between Inheritance and Polymorphism**
```
Main diff I can say is Inheritance mainly work with classes and Polymorphism work with the functions in side classes
```
**What is Dependency Injection**


**Difference between Inheritance and Dependency Injection **
```
Inheritance make code more tight couple where Dependency Injection make our code loosly couple
```


**Call By Value**
``` 
In this method, only values of actual parameters are passing to the function. So there are two addresses stored in memory. Making changes in the passing parameter does not affect the actual parameter.
 
Example
<?php  
function increment($var){  
    $var++;  
    return $var;  
}  
$a = 5;  
$b = increment($a);  
echo $a; //Output: 5  
echo $b; //Output: 6   
?>   
```

**Call by Reference**
```
In this method, the address of actual parameters is passing to the function. So any change made by function affects actual parameter value.
 
Example
<?php  
function increment(&$var){  
    $var++;  
    return $var;  
}  
$a = 5;  
$b = increment($a);  
echo $a; //Output: 6  
echo $b; //Output: 6   
?>  
```

10 Tips for 10x Application Performance
```
Tip 1 – Accelerate and Secure Applications with a Reverse Proxy Server
	If your web application runs on a single machine instance, then it obvious to have performance problems. 
	just get a faster machine, with more processor, more RAM, a fast disk array, and for all these AWS provide us to add EC2 at any point of contact.
	we can use of 
	Load balancing, 
	Caching static files, 
	Securing your site from getting called by spam user,
	Compress Data
	
```

Why Nginx is needed?
```

NGINX is open source software for web serving, reverse proxying, caching, load balancing, media streaming, and more. ... 
In addition to its HTTP server capabilities, NGINX can also function as a proxy server for email (IMAP, POP3, and SMTP) and a reverse proxy and load balancer for HTTP, TCP, and UDP servers.
```
Why reverse proxy is called reverse?
```
For example, a corporation may run a dozen different web sites behind a firewall. 
A reverse proxy would be programmed so that incoming requests for "site1.corporate.example.com" will be forwarded to the real web server for that site. ... 
The phrase "nginx reverse proxy" means the nginx server configured as a reverse proxy

```

Is reverse proxy secure?
```
A reverse proxy can be used to secure multiple web servers in an organization from web application vulnerabilities. 
The reverse proxy also provides additional benefits including hiding of the web servers and improved performance.
```
What is a reverse proxy vs proxy?
```
How is a reverse proxy different? A reverse proxy is a server that sits in front of one or more web servers, intercepting requests from clients. 
This is different from a forward proxy, where the proxy sits in front of the clients.
```
**Must go through**

1.https://chartio.com/learn/databases/how-does-indexing-work/
2.https://arc.dev/interview/php-interview-questions-and-answers
3.https://www.toptal.com/php/interview-questions

How Apache communicate with PHP?
```
Step 1 The user enters https://stackoverflow.com into their browser and taps/hits 'enter'.

Step 2 The browser sends the page request over the Internet to the web server.

Step 3 The web server gets the request and analyzes the request information. 
Apache realizes that we didn't specify a file, so it looks for a directory index and finds index.php.

Step 4 Since Apache knows to send files that end with the .php file extension to the PHP interpreter, it asks PHP to execute the file. 
This knowledge of Apache is specified in the httpd.conf file, it tells Apache exactly what to do when it find the .php files.

Step 5 PHP Interpreter is executing the code contained in the index.php file from the request.
During this step, PHP may interact with databases, the file system or make external API calls, amongst other things.

Step 6 After PHP Interpreter has finished executing the index.php file, it sends the output back to Apache. 
Note that the output will be HTML.

Step 7 Apache receives the output from PHP and sends it back over the Internet to a user's web browser. 
This is called the response.

Step 8 The user's web browser receives the response from the server, and renders the web page on a computer or device.
```

HTTP
```
request-response protocol, HTTP gives users a way to interact 
with web resources by transmitting messages between clients and servers. 
```
TCP
```
 Transmission Control Protocol (TCP) is a communications standard that enables application programs 
 and computing devices to exchange messages over a network.
 ```
 
PHP-FPM
```
PHP-FPM is faster than traditional CGI-based methods, for multi-user PHP environments. 
It does not overload a system's memory with PHP from Apache processes.
```
TDD (Test Driven Development)
```
	The simple concept of TDD is to write and correct the failed tests before writing new code.
	Test Driven Development (TDD) is software development approach in which test cases are developed to specify and validate what the code will do. In simple terms, test cases for each functionality are created and tested first and if the test fails then the new code is written in order to pass the test and making code simple and bug-free.

	Test-Driven Development starts with designing and developing tests for every small functionality of an application. TDD instructs developers to write new code only if an automated test has failed. This avoids duplication of code. The full form of TDD is Test-driven development.

```
DD data-driven platform


**PHP**
	https://www.guru99.com/php-interview-questions-answers.html

```

Array sort function
	Sort() sort array ascending order
	rsort() sort array descending order
	Asort sort array ascending order, by array values
	KSort sort array ascending order, by array key
	Arsort sort array descending order, by array value
	Krsort sort array descending order, by array key
Array function
	array_combine
	array_diff
	array_filter
	array_values
	array_key_exists
	count
String function
	explode()
	implode()
	str_split()
	trim()
	ltrim()
	rtrim()
	strlen()
How to add multiple repo inside a repo using git — submodule
What is Static Key, Final
	Static Keyword:

	* Static keyword is used to do better memory management.
	* You can use static keyword with variable, method, class.
	* If you declare method using static keyword then you don't need to create an object to call that method.
	* If you declare variable as a static then only once memory is created for that variable in class area and not every time when object is created. e.g. in student database you can declare "collage name" as because it common for all students.

	Final Keyword:

	* Final Keyword is used to restrict the user. It means:
	* If you declare variable as Final then you cannot change its value.
	* If you declare method as Final then you cannot override that method.
	* If you make any class as final, you cannot extend it.
OPPs
Abstract, Interface, traits
	Abstract Class and methods
	Abstract method

	1 Abstract method that is declared but not defined. Only method signature no body. 
	2 Declared using the abstract keyword
	3 These cannot be abstract
	    Constructors
	    Static methods
	    Private methods
	    Methods that are declared “final”

	Abstract Class

	An abstract class outlines the methods but not necessarily implements all the methods.

	1 Abstract class cannot be instantiated which means you cannot create the object of abstract class. 
	To use this class, you need to create another class that extends this abstract class provides 
	the implementation of abstract methods, then you can use the object of that child class 
	to call non-abstract parent class methods as well as implemented methods(those that were abstract in parent
	but implemented in child class).

	2 If a child does not implement all the abstract methods of parent class(the abstract class), 
	then the child class must need to be declared abstract.
	
	Interface
	An interface is a blueprint of a class, which can be declared by using interface keyword. 
	Interfaces can contain only constants and abstract methods (methods with only signatures no body).
	Like abstract classes, Interfaces cannot be instantiated, they can only be implemented by classes or extended by other interfaces.
	Interface is a common way to achieve full abstraction
	
	Abstract class / Interface
	1)Interfaces cannot have properties, while abstract classes can
        2)All interface methods must be public, while abstract class methods is public or protected
	3)All methods in an interface are abstract where aleast one method needs to abstract in abstract class
	4)Abstract class can extend another class and implement multiple interfaces.Interface can't provide the implementation of abstract class.
	
	when to use both
	1) If we are designing small, concise bits of functionality, use interfaces. If we are designing large functional units, use an abstract class.
	2) An abstract class is a good choice if we are using the inheritance concept since it provides a common base class implementation to derived classes.
	3) If we want to add new methods in the future, then an abstract class is a better choice. Because if we add new methods to an interface, then all of the classes that already implemented that interface will have to be changed to implement the new methods.


	Traits 
	Laravel traits are a group of functions that you include within another class. 
	A trait is like an abstract class. You cannot instantiate directly, but its methods can be used in concreate class.
	
	- to achieve multiple inheritance in languages like PHP.
	- reuse of code.
	
	Use keyword to use Traits
	(three dots ...) and is referred to as either the splat operator or the scatter operator
	function bar(...$arguments) to achieve method overloading in php


Error types in php
What are the new trends in PHP
What is pear?
What is psr?
what is mvc?
Difference between CURL and ajax?
how can you handle errors in php? 
how to send a http request in php? 
How to call Curl
Session n cookies
Sql injection 
	A malicious code injected in SQL statements, via user input, can destroy your database.
	example
	1. 105 OR 1=1
	2. 105; DROP table user;
	
how do you prevent them
	1. we should always check & escape all user input.
	2. use prepared statements everywhere consistently
	
what are the best practices
	use PDO
	
composer is dependency tool or not
Git commands 
gitHub
Php unit
Send a mail with attachment using phpmailer 

The MD5 cryptographic algorithm is not reversible or not
Difference btwn Encryption and Hashing
Encryption is a two-way function; what is encrypted can be decrypted with the proper key. 
Hashing, however, is a one-way function that scrambles plain text to produce a unique message digest. With a properly designed algorithm, there is no way to reverse the hashing process to reveal the original password

How to write text case 
Rebase and merge 
Continuous integration CI CD pipeline  - I know Jenkins

Design patterns
Observer Pattern
Singleton Design
Decorator Pattern
Facade Design Pattern

designing php architecture
Difference between REST API and SOAP API
How will I increase security in a Contact form using PHP
Php error handling questions

```

**Mysql**
```
Mysql Engines?
Primary Key, foreign key, Indexes
How indexes works? https://chartio.com/learn/databases/how-does-indexing-work/
Group by VS order by main Difference ?
Joins? and Type of joins?
Where and having by main Difference ?
Get the last thee max salaried person from table via sql
Query to get the 31st highest salary.
SELECT DISTINCT(Salary) FROM table ORDER BY Salary DESC LIMIT n,1
What is difference between stored procedures and functions 
what is current version of mysql
Difference b/w SQL and NoSql	

Data Definition Language (DDL) commands:

CREATE to create a new table or database.
ALTER for alteration.
Truncate to delete data from the table.
DROP to drop a table.
RENAME to rename a table.
Data Manipulation Language (DML) commands:

INSERT to insert a new row.
UPDATE to update an existing row.
DELETE to delete a row.
MERGE for merging two rows or two tables.
Data Control Language (DCL) commands:

COMMIT to permanently save.
ROLLBACK to undo the change.
SAVEPOINT to save temporarily.

```

**find the number of employee of each department**

```
SELECT emp_dept, COUNT(*) FROM emp_details GROUP BY emp_dept;
```

**find the sum of salary of emp where number of employees greater than 5. **

```
select * from (select dept as dept, sum(salary) as sumofSalary, count(name) as emp_count from scientist  GROUP BY dept) AS T where emp_count > 2
```

**find max salary of emp of each department**

```
SELECT max(salary),name  FROM emp Group by dept_id;
```

**how to delete duplicate records in mysql keeping one record**

```
Delete from emp where id Not in (SELECT max(id) as id FROM emp group by emailId having count(*) >1);
```

**Joins for many to many relationship**
```
CREATE TABLE emp (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  emailId TEXT NOT NULL
);

INSERT INTO emp VALUES (1,'sonal','sonalp@gmail.com');
INSERT INTO emp VALUES (2,'sonal123','sonaddvdlp@gmail.com');
INSERT INTO emp VALUES (3,'sonal23456','sonalssdp@gmail.com');

CREATE TABLE project (
  id INTEGER PRIMARY KEY,
  project_name TEXT NOT NULL
);

INSERT INTO project VALUES (1,'UPN');
INSERT INTO project VALUES (2,'UDLA');
INSERT INTO project VALUES (3,'MOOX');

CREATE TABLE emp_project (
  empId INTEGER NOT NULL,
  projectId INTEGER NOT NULL,
  FOREIGN KEY (empId) REFERENCES user (id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (projectId) REFERENCES role (id) ON DELETE RESTRICT ON UPDATE CASCADE,
  PRIMARY KEY (empId, projectId)
);

INSERT INTO emp_project VALUES (1,1);
INSERT INTO emp_project VALUES (1,2);
INSERT INTO emp_project VALUES (1,3);
INSERT INTO emp_project VALUES (2,1);
INSERT INTO emp_project VALUES (2,2);
INSERT INTO emp_project VALUES (3,2);
INSERT INTO emp_project VALUES (3,3);

-- fetch some values
SELECT emp.id, emp.emailId, emp.name, project.id AS project_id, project.project_name
FROM emp JOIN emp_project on (emp.id=emp_project.empId) 
JOIN project on (project.id=emp_project.projectId);

```

**Can you tell the order of SQL SELECT statement?**
```
SELECT, FROM, WHERE, GROUP BY, HAVING, and ORDER BY
```

**What is the order of query execution in subqueries?**

SQL executes innermost sub query first, and then the next level. The results of the sub query are the query conditions of the primary query.

**SELECT statement find the version of the server you are running and print the name of the current database?**
```
SELECT VERSION(), DATABASE();
```


**HTML**
```
Symantic element  - meaningful and readable
API used in html 5
Html 5 tags classification 
Optimal capacity the browser can store -10mb
empty div and span is the related with each other
Sudo class n element
```
**Javascirpt**
```
CDN - content domain network hosted across the multiple geographical location.
Why JSON is Better Than XML
Cross browser compatibility
Javascript Inline function 
What is difference between real DOM and virtual DOM

```
 sessionStorage is similar to localStorage but the diff
```
the difference is that while data in localStorage doesn't expire, data in sessionStorage is cleared when the page session ends.
```

**Laravel **
	https://www.guru99.com/laravel-interview-questions.html

**The Front Controller Design Pattern?**
```
The front controller (index.php)

```
What is Rate limit?
```
Rate limiting is the control of the number of requests per unit time. It can be applied to ports, IPs, routes, etc.
```

How can I increase my request limit in laravel?
```
Laravel simplifies the process of limiting the number of requests a client could make for a particular action.
Eg.
Laravel Docs: 
Route::middleware('auth:api', 'throttle:60,1')->group(function () { Route::get('/user', function () { // }); });
```

What is no rate limit?
```
No rate limit means their is no mechanism to protect against the requests you made in a short frame of time.
```
**JWT- **
```
	header.payload.signature
	header  - algo for token generation + the type of token
	payload - authenticated user details + issued timestamp + exp timestamp (when the token will be expired)
	signature - this is use to check the token is not modified after securing signatured by the server with secret key.

	Client side we needs to store it, but on server side we don't need to store.

	JWT have all the claims in itself and is signed by the server as well. 
	On receipt, server checks for the signature and reads the claims. 
	It does not match it against a stored value. 
	That is the whole point of using JWT against access tokens.


(Life cycle of laravel, What happens when you make a request to Laravel)
What are migrations in Laravel ,how to create migrations
What is a csrf token 
How to call a static method 
What is PHP artisan. List out some artisan commands
How o change timestamp in Laravel? 
What are routes in Laravel 
Basic of packages in Laravel 
What is middleware and example of middleware? 
Basic of API 
What is vendor folder. 
What is contract and facades in Laravel? 
What is service providers in Laravel? 
How to disable CSRF protection in Laravel? 
Event handling and Event binding in Laravel?
Advantages and Disadvantages of Laravel? 
what is the view composer?

Lumen vs Node.js: What are the differences?
	Lumen: The stunningly fast PHP micro-framework by Laravel. Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with 		expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of 	    development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching; Node.js: A platform         built on Chrome's JavaScript runtime for easily building fast, scalable network applications. Node.js uses an event-driven, non-blocking I/O model that             makes it lightweight and efficient, perfect for data-intensive real-time applications that run across distributed devices.
	Lumen can be classified as a tool in the "Microframeworks (Backend)" category, while Node.js is grouped under "Frameworks (Full Stack)".
	"API" is the top reason why over 16 developers like Lumen, while over 1320 developers mention "Npm" as the leading cause for choosing Node.js.
	Lumen and Node.js are both open source tools. Node.js with 35.5K GitHub stars and 7.78K forks on GitHub appears to be more popular than Lumen                       with 6.29K GitHub stars and 833 GitHub forks.
	
	According to the StackShare community, Node.js has a broader approval, being mentioned in 4055 company stacks & 3897 developers stacks; compared to Lumen,         which is listed in 24 company stacks and 24 developer stacks.


	NodeJS: Talking about Node JS, it is not a framework but a server also. Based on JS, it embeds all the features above, meaning that no more multi-threading         and not meant for the beginners. So, NodeJS is a fundamental sense of a JS server that primarily acts as server-side browsing. It is open-source and eases         the development of cross-platform web applications. The primary reason why developers like working on Node JS is the fact that it works on a single thread.         The entire server is event-based and causes on receiving callbacks. This enables the server to come back every time it is called and prevents it from being         a pause or in a sleep state. 
	
	Advantages: 
	* The performance of an app developed using NodeJS is higher than others.
	* It comes along with an excellent package manager.
	* NodeJS has extended support in the form of libraries.
	* Works best when you need to build APIs.
	* It provides quick and easy handling of users concurrent requests.

```
