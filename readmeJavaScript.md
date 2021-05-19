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
