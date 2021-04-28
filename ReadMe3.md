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
Polymorphism describes a pattern in Object Oriented Programming in which a class has varying functionality while sharing a common interfaces.

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

    2) Run time (function overriding) Method overridding:
    	The Runtime polymorphism means that a decision is made at runtime (not compile time) or we can say we can have multiple subtype implements for a super 	           class,function overloading is an example of runtime polymorphism . I will first describe function overloading. When we create a function in a derived class         with the same signature (in other words a function has the same name, the same number of arguments and the same type of arguments) as a function in its             parent class then it is called method overriding.
	
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

**Must go through**

1.https://chartio.com/learn/databases/how-does-indexing-work/
2.https://arc.dev/interview/php-interview-questions-and-answers
3.https://www.toptal.com/php/interview-questions

```
TDD (Test Driven Development)
DD data-driven platform
```

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
	
	Traits are a mechanism that provides some of the reuse advantages of multiple inheritance in languages like PHP where multiple inheritance is not 		supported. Traits enable developers to reuse combinations of methods from different class hierarchies.
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
**Laravel **
	https://www.guru99.com/laravel-interview-questions.html

```
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
