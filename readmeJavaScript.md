https://github.com/h5bp/Front-end-Developer-Interview-Questions/blob/master/src/questions/coding-questions.md       

```
    1) Program to count all string indivivual character count and it's substraction of upper case and lower case 
    
    var x = "aaaAAAAAbbbBBbCCCCCccDDDDeeeeeEEEEE";
    arr = {a:'A',b:'B',c:'C',d:'D',e:'E',f:'F',g:'G',h:'H','i':'I'};
    var newcount = [];
    for(var index in arr){
        var indexEle = new RegExp(index, "g");
        var str = new RegExp(arr[index], "g");
        var cap = x.match(str)||[].length;
        var lower = x.match(indexEle)||[].length;
        if(typeof lower.length != 'undefined'){ 
            lower = lower.length;
        }else{
            lower = 0;
        }
        newcount[arr[index]+"-"+index] = parseInt(cap.length) - parseInt(lower);
    }
    console.log(newcount);
    
    **ans**:[A-a: 2,B-b: -2,C-c: 3,D-d: 4,E-e: 0,F-f: NaN,G-g: NaN,H-h: NaN,I-i: NaN]
    
    2)
    var x= 10;
    function name(){
        console.log(x);
        var x=5;
    }
    name();
    
    **ans**: undefined
    
    3)console.log("test"+6+16);
     console.log(6+16+"test");
    **ans**: 
            test616 
            22test
    
    4)var promise = new Promise(function(resolve, reject){
                        reject();
                    });
                    promise.then(function(val){
                        console.log("success 1");
                    });
    
    **ans**: Uncaught (in promise) undefined
    
    var promise = new Promise(function(resolve, reject){
                    resolve();
                });
                promise.then(function(val){
                    console.log("success 1");
                });
    **ans**: success 1

    
    
```



**promise states in javascript**
```
Promise has four states:

fulfilled: Action related to the promise succeeded
rejected: Action related to the promise failed
pending: Promise is still pending i.e not fulfilled or rejected yet
settled: Promise has fulfilled or rejected

```

**Explain event delegation**
```
is a simple technique by which you add a single event handler to a parent element,
in order to avoid multiple event handlers to multiple child elements.
```
**What's the difference between a variable that is: null, undefined or undeclared**
```
**undefined** is a variable that has been declared but no value exists and is a type of itself 'undefined'.
**null** is a value of a variable and is a type of object.
**undeclared** variables is a variable that has been declared without 'var' keyword.
```
**What is a closure, and how/why would you use one**
```
A closure is the combination of a function bundled together, with references to its surrounding state. 
In other words, a closure gives you access to an outer function's scope from an inner function.
```
**What language constructions do you use for iterating over object properties and array items?** — for loop,foreach, map etc.

**difference between the Array.forEach() loop and Array.map()**
```
The forEach() method returns undefined and map() returns a new array with the transformed elements.
```
**difference between: function Person(){}, var person = Person(), and var person = new Person()**
```
1. function Person() {}
Declares a function (but does not execute it).
It will usually have some code between the curly brackets.

2. var person = Person()
Declares a variable (person), invokes a function (Person) and sets the value of person to the return of the function.

3. var person = new Person()
Creates a new instance of an object based on the Person function. So the variable (person) is now an Object, not just a string or a number.
```
**Explain "hoisting"**
```
no matter where functions and variables are declared, 
they are moved to the top of their scope regardless of whether their scope is global or local
e.g

x = 5; // Assign 5 to x

elem = document.getElementById("demo"); // Find an element
elem.innerHTML = x;                     // Display x in the element

var x; // Declare x

```
**event bubbling**
```
Bubbling 
    e.g
    <form onclick="alert('form')">FORM
      <div onclick="alert('div')">DIV
        <p onclick="alert('p')">P</p>
      </div>
    </form>

    A click on the inner <p> first runs onclick:

    On that <p>.
    Then on the outer <div>.
    Then on the outer <form>.
    And so on upwards till the document object.

    **To Stopp bubbling**
      event.stopPropagation()
```
Explain =, == and === ?
```
= is used for assigning values to a variable, 
== is used for comparing two variables, but it ignores the datatype of variable.
=== is used for comparing two variables, but this operator also checks datatype and compares two values
```
**Why is it called a Ternary operator, what does the word "Ternary" indicate**

**difference between synchronous and asynchronous functions**
```
**synchronous** 
document.write("Hi");

**asynchronous**
setTimeout(() => {
        document.write("Let us see what happens");
    }, 2000);
```
**differences between variables created using let, var or const**
https://alligator.io/js/var-let-const/

**difference between while and do-while loops in JavaScript**
```
While loop executes the block of code if the condition is True.
Do While executes the statements in the code at least once even if the condition Fails.
```

**What is a promise? Where and how would you use promise**
```
A promise is an object that may produce a single value.

syntax
const wait = ms => new Promise(resolve => setTimeout(resolve, ms)); 
wait(10*1000). then(() => saySomething("10 seconds")). catch(failureCallback); 

async function hello() {
  return greeting = await Promise.resolve("Hello");
};

hello().then(alert);

```

**console.log("hello" || "world")**

hello
undefined

**console.log("foo" && "bar")**

bar
undefined



**Ways to Improve Your Website Performance**

Code your site for mobile-first quality and speed. ...
Reduce image size. ...
Try a CDN. ...
Cache as much as possible. ...
Reduce the number of HTTP requests. ...
Load JavaScript asynchronously. ...
