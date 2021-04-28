https://www.interviewbit.com/angular-interview-questions/
https://www.edureka.co/blog/interview-questions/top-angularjs-interview-questions-2016/#intermediate
https://dzone.com/articles/50-top-angular-interview-questions-amp-answers
https://github.com/sudheerj/angular-interview-questions

https://www.techgeeknext.com/angular/angular-interview-questions
https://www.javatpoint.com/rxjs-interview-questions

Question: What is Angular?
```
  Answer: 
    Angular is a TypeScript-based open-source web application framework, developed and maintained by Google. 
    It offers an easy and powerful way of building front end web-based applications.
    Angular integrates a range of features like declarative templates, dependency injection, 
    end-to-end tooling, etc. that facilitates web application development.
    
```
Question: Define the ng-content Directive? Know more about the ng-content directive https://blog.angular-university.io/angular-ng-content/
```
  Answer: 
    Conventional HTML elements have some content between the tags. 
    For instance:

    <p>Put your paragraph here</p>
    Now consider the following example of having custom text between angular tags:

    <app-work>This won’t work like HTML until you use ng-content Directive</app-work>
    
    However, doing so won’t work the way it worked for HTML elements. In order to make it work just like the HTML example mentioned above,
    we need to use the ng-content Directive. Moreover, it is helpful in building reusable components.
    
    The HTML elements like p (paragraph) or h1 (heading) have some content between the tags. For example,
    <p>this is a paragraph</p> and <h1>this is a heading</h1>.
    Now, similar to this, what if we want to have some custom text or content between the angular tags like 
    <app-tax>some tax-related content</app-tax> This will not work the way it worked for HTML elements.  
    Now, in such cases, the <ng-content> tag directive is used. 
    
```
Question: Which of the Angular life cycle component execution happens when a data-bound input value updates?
```
Answer: 
  ngOnChanges is the life cycle hook that gets executed whenever a change happens to the data that was bound to an input. 
```
Question: Differentiate between Components and Directives in Angular 5.
```
Answer: 
  Components break up the application into smaller parts; whereas, Directives add behavior to an existing DOM element. 
```
Question: What is the use of @Input and @Output? 
```
Answer: 
  When it comes to the communication of Angular Components, which are in Parent-Child Relationship; 
  we use @Input in Child Component when we are passing data from Parent to Child Component 
  and @Output is used in Child Component to receive an event from Child to Parent Component. 
  
```
Question: What does a router.navigate do?
```
When we want to route to a component we use router.navigate.  Syntax: this.router.navigate([‘/component_name’]); 
```

Question: Please explain the various features of Angular.
```
  Accessibility Applications
  Angular allows creating accessible applications using ARIA-enabled components, built-in a11y test infrastructure, and developer guides.

  Angular CLI
  Angular provides support for command-line interface tools. These tools can be used for adding components, testing, instant deploying, etc.

  Animation Support
  Angular’s intuitive API allows the creation of high-performance, complex animation timelines with very little code.

  Cross-Platform App Development
  Angular can be used for building an efficient and powerful desktop, native, and progressive web apps. 
  Angular provides support for building native mobile applications using Cordova, Ionic, or NativeScript.

  Angular allows creating high performance, offline, and zero-step installation progressive web apps using modern web platform capabilities. 
  The popular JS framework can also be used for building desktop apps for Linux, macOS, and Windows.

  Code Generation
  Angular is able to convert templates into highly-optimized code for modern JavaScript virtual machines.

  Code Splitting
  With the new Component Router, Angular apps load quickly. 
  The Component Router offers automatic code-splitting so that only the code required to render the view that is requested by a user is loaded.

  Synergy with Popular Code Editors and IDEs
  Angular offers code completion, instant errors, etc. with popular source code editors and IDEs.

  Templates
  Allows creating UI views with a simple and powerful template syntax.

  Testing
  Angular lets you carry out frequent unit tests using Karma. 
  The Protractor allows running faster scenario tests in a stable way.

```

Question: Could you explain the concept of templates in Angular?
```
  Answer: 
    Written with HTML, templates in Angular contains Angular-specific attributes and elements. 
    Combined with information coming from the controller and model, templates are then further rendered to cater the user with the dynamic view.
    
```
Question: Explain the difference between an Annotation and a Decorator in Angular?
```
  Answer: 
  In Angular, annotations are used for creating an annotation array. They are only metadata set of the class using the Reflect Metadata library.

  Decorators in Angular are design patterns used for separating decoration or modification of some class without changing the original source code.
```
Question: What is the code for creating a decorator?
```
Answer: We create a decorator called Dummy:

 function Dummy(target) {
 dummy.log('This decorator is Dummy', target);
 }
``` 
Question: What are directives in Angular?
```
  Answer: 
  Directives are one of the core features of Angular. They allow an Angular developer to write new, application-specific HTML syntax. 
  In actual, directives are functions that are executed by the Angular compiler when the same finds them in the DOM. Directives are of three types:

  Attribute Directives
  Component Directives
  Structural Directives
```
Question: What are the building blocks of Angular?
```
  Answer: There are essentially 9 building blocks of an Angular application. These are:

    Components – 
        A component controls one or more views. Each view is some specific section of the screen. 
        Every Angular application has at least one component, known as the root component. 
        It is bootstrapped inside the main module, known as the root module. 
        A component contains application logic defined inside a class. 
        This class is responsible for interacting with the view via an API of properties and methods.
    Data Binding – 
        The mechanism by which parts of a template coordinates with parts of a component is known as data binding. 
        In order to let Angular know how to connect both sides (template and its component), the binding markup is added to the template HTML.
        
        Data binding can be done in 3 ways: 
        (i) Property Binding (ii) Event Binding (iii) Two-Way Data Binding. 

    Dependency Injection (DI) – 
        Angular makes use of DI to provide required dependencies to new components. 
        Typically, dependencies required by a component are services. 
        A component’s constructor parameters tell Angular about the services that a component requires. 
        So, a dependency injection offers a way to supply fully-formed dependencies required by a new instance of a class.
    Directives – 
        The templates used by Angular are dynamic in nature. 
        Directives are responsible for instructing Angular about how to transform the DOM when rendering a template. 
        Actually, components are directives with a template. Other types of directives are attribute and structural directives.
    Metadata – 
        In order to let Angular know how to process a class, metadata is attached to the class. For doing so decorators are used.
    Modules – 
        Also known as NgModules, a module is an organized block of code with a specific set of capabilities. 
        It has a specific application domain or a workflow. Like components, any Angular application has at least one module. 
        This is known as the root module. Typically, an Angular application has several modules.
    Routing – 
        An Angular router is responsible for interpreting a browser URL as an instruction to navigate to a client-generated view. 
        The router is bound to links on a page to tell Angular to navigate the application view when a user clicks on it.
    Services – 
        A very broad category, a service can be anything ranging from a value and function to a feature that is required by an Angular app. 
        Technically, a service is a class with a well-defined purpose.
    Template – 
        Each component’s view is associated with its companion template. 
        A template in Angular is a form of HTML tags that lets Angular know that how it is meant to render the component.
```

Question: What is Angular Material?
```
Answer: It is a UI component library. Angular Material helps in creating attractive, consistent, 
and fully functional web pages as well as web applications. 
It does so while following modern web design principles, including browser portability and graceful degradation.
```
Question: What is AOT (Ahead-Of-Time) Compilation? What are its advantages?
```
Answer: 
  An angular application consists of components and templates which a browser cannot understand. 
  Therefore, every Angular application needs to be compiled before running inside the browser. 
  The Angular compiler takes in the JS code, compiles it, and then produces some JS code. 
  It is known as AOT compilation and happens only once per occasion per user. There are two kinds of compilation that Angular provides:

  **JIT(Just-in-Time)** compilation: 
      The application compiles inside the browser during runtime
      By default, angular builds and serves the application using JIT compiler:
      ng build
      ng serve
    
  **AOT(Ahead-of-Time)** compilation: 
      The application compiles during the build time.
      For using AOT compiler following changes should be made:
      ng build --aot
      ng serve --aot
  
  Advantages of AOT compilation:

  Fast Rendering: The browser loads the executable code and renders it immediately as the application is compiled before running inside the browser.
  Fewer Ajax Requests: The compiler sends the external HTML and CSS files along with the application, eliminating AJAX requests for those source files.
  Minimizing Errors: Easy to detect and handle errors during the building phase.
  Better Security: Before an application runs inside the browser, the AOT compiler adds HTML and templates into the JS files, 
  so there are no extra HTML files to be read, 
  thus providing better security for the application.
```
Question: What is Data Binding? How many ways it can be done?
```
Answer: In order to connect application data with the DOM (Data Object Model), data binding is used. 
It happens between the template (HTML) and component (TypeScript). There are 3 ways to achieve data binding:
Event Binding – Enables the application to respond to user input in the target environment
Property Binding – Enables interpolation of values computed from application data into the HTML
Two-way Binding – Changes made in the application state gets automatically reflected in the view and vice-versa.
The ngModel directive is used for achieving this type of data binding.
```
Question: Can you draw a comparison between the service() and the factory() functions?
```
Answer: Used for the business layer of the application, the service() function operates as a constructor function.
The function is invoked at runtime using the new keyword.

Although the factory() function works in pretty much the same way as the service() function does, the former is more flexible and powerful. 
In actual, the factory() function are design patterns that help in creating objects.
```
Question: Please explain the digest cycle in Angular?
```
Answer: The process of monitoring the watchlist in order to track changes in the value of the watch variable is termed the digest cycle in Angular.
The previous and present versions of the scope model values are compared in each digest cycle.

Although the digest cycle process gets triggered implicitly, it is possible to start it manually by using the $apply() function.
```
Question: Could you explain the various types of filters in AngularJS.
```
Answer: In order to format the value of expression so that it can be displayed to the user, AngularJS has filters.
It is possible to add these filters to the controllers, directives, services, or templates. AngularJS also provides support for creating custom filters.

Organizing data in such a way so that it is displayed only when certain criteria are fulfilled is made possible using filters. 
Filters are added to the expressions using the pipe ‘|’ character. Various types of AngularJS filters are enumerated as follows:

currency – Formats a number to the currency format
date – Formats a data to some specific format
filter – Selects a subset of items from an array
json – Formats an object to a JSON string
limitTo – Limits an array or string into a specified number of characters or elements
lowercase – Formats a string to lowercase
number – Formats a number to a string
orderBy – Orders an array by an expression
```

Question: What is SPA (Single Page Application) in Angular? Contrast SPA technology with traditional web technology?
```
Answer: In the SPA technology, only a single page, which is index.HTML, is maintained although the URL keeps on changing.
Unlike traditional web technology, SPA technology is faster and easy to develop as well.

In conventional web technology, as soon as a client requests a webpage, the server sends the resource. 
However, when again the client requests for another page, the server responds again with sending the requested resource. 
The problem with this technology is that it requires a lot of time.
```

Question: What is the process called by which TypeScript code is converted into JavaScript code?
```
Answer: It is called Transpiling. Even though TypeScript is used for writing code in Angular applications, 
it gets internally transpiled into equivalent JavaScript.
```
Question: What is ViewEncapsulation and how many ways are there do to do it in Angular?
```
Answer: To put simply, ViewEncapsulation determines whether the styles defined in a particular component will affect the entire application or not. 
Angular supports 3 types of ViewEncapsulation:

Emulated – Styles used in other HTML spread to the component
Native – Styles used in other HTML doesn’t spread to the component
None – Styles defined in a component are visible to all components of the application
```
Question: What are Services in Angular and what command is used to create a service?
```
Services help us in not repeating the code. With the creation of services, we can use the same code from different components. 
Here is the command to create a service in angular, ng g service User (a UserService is created when this command is used). 
```

Question: Explain the usage of {{}}?
```
The set of brackets {{}} when used with an HTML tag, represent data from a component.
For example, on a HTML page which has 
<h1>{{variableName}}</h1>, here the ‘variableName’ is actually typescript (component) data representing its value on the template;
HTML. This entire concept is called String Interpolation. 
```

Question: Discuss the lifecycle designed for directive and components in Angular JS especially for the newly introduced version 6.0?
```
Answer:

Components and directive of Angular JS follow the following typical lifecycle.

nhOnInit
ngDoCheck
ngOnDestroy
Constructor
ngOnChanges
ngAfterContentInit (only for components)
ngAfterContentChecked (only for components)
ngAfterViewInit (only for components)
ngAfterViewChecked (only for components)
```

Question: Why was Angular introduced as a client-side framework?
```
Answer: Traditionally, VanillaJS and jQuery were used by developers to develop dynamic websites.
As the websites became more complex with added features and functionality, it was hard for the developers to maintain the code. Moreover, 
there was no provision of data handling facilities across the views by jQuery. 
So, Angular was built to address these issues, 
thus, making it easier for the developers by dividing code into smaller bits of information that are known as Components in Angular. 
Client-side frameworks permit the development of advanced web applications like SPAs which, if developed by VanillaJS, is a slower process.

```
Question: What are Lifecycle hooks in Angular? Explain some life cycles hooks.
```
Answer: Angular components enter its lifecycle from the time it is created to the time it is destroyed. 
Angular hooks provide ways to tap into these phases and trigger changes at specific phases in a lifecycle.

  OnChange()  -  OnInit()  -  DoCheck()  -  AfterContentInit()  -  AfterContentChecked()  -  AfterViewInit()  -  AfterViewChecked()  -  OnDestroy().
  
  ngOnChanges(): This method is called whenever one or more input properties of the component changes. 
  The hook receives a SimpleChanges object containing the previous and current values of the property.
  ngOnInit(): This hook gets called once, after the ngOnChanges hook.
  It initializes the component and sets the input properties of the component.
  ngDoCheck(): It gets called after ngOnChanges and ngOnInit and is used to detect and act on changes that cannot be detected by Angular.
  We can implement our change detection algorithm in this hook.
  ngAfterContentInit(): It gets called after the first ngDoCheck hook. This hook responds after the content gets projected inside the component.
  ngAfterContentChecked(): It gets called after ngAfterContentInit and every subsequent ngDoCheck. It responds after the projected content is checked.
  ngAfterViewInit(): It responds after a component's view, or a child component's view is initialized.
  ngAfterViewChecked(): It gets called after ngAfterViewInit, and it responds after the component's view, or the child component's view is checked.
  ngOnDestroy(): It gets called just before Angular destroys the component. This hook can be used to clean up the code and detach event handlers.
```

Question: What is the purpose of using package.json in the angular project?
```
With the existence of package.json, it will be easy to manage the dependencies of the project. 
If we are using typescript in the angular project then we can mention the typescript package and version of typescript in package.json.
```
Question: Could we make an angular application to render on the server-side?
```
  Answer: Yes, we can, with Angular Universal, a technology provided by Angular capable of rendering applications on the server-side.
  The benefits of using Angular Universal are:

  Better User Experience: Allows users to see the view of the application instantly.
  Better SEO: Universal ensures that the content is available on every search engine leading to better SEO.
  Loads Faster: Render pages are available to the browsers sooner, so the server-side application loads faster.
```
Question: Explain Dependency Injection?
```
Answer: Dependency injection is an application design pattern that is implemented by Angular and forms the core concepts of Angular. 
Let us understand in a detailed manner. Dependencies in Angular are services which have a functionality. 
Various components and directives in an application can need these functionalities of the service. 
Angular provides a smooth mechanism by which these dependencies are injected into components and directives.
```
Question: Describe the MVVM architecture.
```
Answer: MVVM architecture removes tight coupling between each component. The MVVM architecture comprises of three parts:
Model
View
ViewModel
The architecture allows the children to have reference through observables and not directly to their parents.

Model: It represents the data and the business logic of an application, or we may say it contains the structure of an entity. 
It consists of the business logic - local and remote data source, model classes, repository.
View: View is a visual layer of the application, and so consists of the UI Code(in Angular- HTML template of a component.). 
It sends the user action to the ViewModel but does not get the response back directly. 
It has to subscribe to the observables which ViewModel exposes to it to get the response.
ViewModel: It is an abstract layer of the application and acts as a bridge between the View and Model(business logic). 
It does not have any clue which View has to use it as it does not have a direct reference to the View.
View and ViewModel are connected with data-binding so, any change in the View the ViewModel takes note and changes the data inside the Model.
It interacts with the Model and exposes the observable that can be observed by the View.

```
Question: What is Component in Angular Terminology? 
```
Answer: A web page in Angular has many components involved in it.
A Component is basically a block in which the data can be displayed on HTML using some logic usually written in typescript. 
```
Question: What are ngModel and how do we represent it? 
```
Answer:
ngModel is a directive which can be applied on a text field. This a two-way data binding. ngModel is represented by [()] 
```

Question: What does a Subscribe method do in Angular 4? 
```
It is a method which is subscribed to an observable. Whenever the subscribe method is called, an independent execution of the observable happens.  
```
Question: Differentiate between Observables and Promises.
```
Answer: Observables are lazy, which means nothing happens until a subscription is made. 
Whereas Promises are eager; which means as soon as a promise is created, the execution takes place. 
Observable is a stream in which passing of zero or more events is possible and the callback is called for each event. Whereas, promise handles a single event. 
```
Question:  What is an AsyncPipe in Angular? 
```
Answer: When an observable or promise returns something, we use a temporary property to hold the content. 
Later, we bind the same content to the template. 
With the usage of AsyncPipe, the promise or observable can be directly used in a template and a temporary property is not required. 
```
Question: Explain Authentication and Authorization.
```
Answer:
Authentication: The user login credentials are passed to an authenticate API (on the server). On the server side validation of the credentials happens and a JSON Web Token (JWT) is returned. JWT is a JSON object that has some information or attributes about the current user.  Once the JWT is given to the client, the client or the user will be identified with that JWT.

Authorization: After logging in successfully, the authenticated or genuine user does not have access to everything. The user is not authorized to access someone else’s data,  he/she is authorized to access some data. 
```
Question: What is Redux? 
```
Answer:
It is a library which helps us maintain the state of the application. Redux is not required in applications that are simple with the simple data flow, it is used in Single Page Applications that have complex data flow. 
```
Question: What are the Pipes? 
```
Answer:
This feature is used to change the output on the template; something like changing the string into uppercase and displaying it on the template. It can also change Date format accordingly. 
```
Question:  Differentiate between ng-Class and ng-Style.
```
Answer: 
In ng-Class, loading of CSS class is possible; whereas, in ng-Style we can set the CSS style.
```

Question: State some advantages of Angular over other frameworks.
```
Out of box Features: 
Several built-in features like routing, state management, rxjs library, and HTTP services are straight out of the box services 
provided by Angular. So, one does not need to look for the above-stated features separately.

Declarative UI: Angular uses HTML to render the UI of an application as it is a declarative language and is much easier to use than JavaScript.

Long-term Google Support: Google plans to stick with Angular and further scale up its ecosystem as it has offered its long term support to Angular. 

```
Question: What is the difference between Angular and AngularJS.
```
Architecture - AngularJS supports the MVC design model. Angular relies on components and directives instead
Dependency Injection (DI) - Angular supports a hierarchical Dependency Injection with unidirectional tree-based change detection. AngularJS doesn’t support DI
Expression Syntax - In AngularJS, a specific ng directive is required for the image or property and an event. 
                    Angular, on the other hand, use () and [] for blinding an event and accomplishing property binding, respectively
Mobile Support - AngularJS doesn’t have mobile support while Angular does have
Recommended Language - While JavaScript is the recommended language for AngularJS, TypeScript is the recommended language for Angular
Routing - For routing, AngularJS uses $routeprovider.when() whereas Angular uses @RouteConfig{(…)}
Speed - The development effort and time are reduced significantly thanks to support for two-way data binding in AngularJS. Nonetheless, Angular is faster thanks to upgraded features
Structure - With a simplified structure, Angular makes the development and maintenance of large applications easier. Comparatively, AngularJS has a less manageable structure
Support - No official support or updates are available for the AngularJS. On the contrary, Angular has active support with updates rolling out every now and then

```
Question: Please explain the differences between Angular and jQuery?
```
Answer: 
  The single biggest difference between Angular and jQuery is that while the former is a JS frontend framework,
  the latter is a JS library. Despite this, there are some similarities between the two, such as both features DOM manipulation and provides support for animation.

  Nonetheless, notable differences between Angular and jQuery are:

  Angular has two-way data binding, jQuery does not
  Angular provides support for RESTful API while jQuery doesn’t
  jQuery doesn’t offer deep linking routing though Angular supports it
  There is no form validation in jQuery whereas it is present in Angular
  Question: Could you explain the difference between Angular expressions and JavaScript expressions?
  Answer: Although both Angular expressions and JavaScript expressions can contain literals, operators, 
  and variables, there are some notable dissimilarities between the two. 
  Important differences between Angular expressions and JavaScript expressions are enlisted below:

  Angular expressions support filters while JavaScript expressions do not
  It is possible to write Angular expressions inside the HTML tags. JavaScript expressions, contrarily, can’t be written inside the HTML tags
  While JavaScript expressions support conditionals, exceptions, and loops, Angular expressions don’t
```
Question: What is new in Angular 6?
```
Answer: Here are some of the new aspects introduced in Angular 6:

Angular Elements – It allows converting Angular components into web components and embeds the same in some non-Angular application
Tree Shakeable Provider – Angular 6 introduces a new way of registering a provider directly inside the @Injectable() decorator.
It is achieved by using the providedIn attribute
RxJS 6 – Angular 6 makes use of RxJS 6 internally
i18n (internationalization) – Without having to build the application once per locale, any Angular application can have “runtime i18n”
Question: What is ngOnInit()? How to define it?
Answer: ngOnInit() is a lifecycle hook that is called after Angular has finished initializing all data-bound properties of a directive. 
  It is defined as:

  Interface OnInit {
   ngOnInit() : void
  }
```

Question: Why prioritize TypeScript over JavaScript in Angular?
```
Answer: TypeScript is a superset of Javascript as it is Javascript + Types or extra features like typecasting for variables, annotations, 
variable scope and much more. The typescript is designed in a way to overcome Javascript shortcomings 
like typecasting of variables, classes, decorators, variable scope and many more. 
Moreover, Typescript is purely object-oriented programming that offers a "Compiler" that can convert to Javascript-equivalent code. 
```
Question: Write the features for Angular 6 over Angular 5.
```
Answer: Following are the features:

1. Added ng update

CLI command updates angular project dependencies to their latest versions. 
The ng update is a normal package manager tool to identify and update in normal package manager tools to identify and update other dependencies. 

2. Uses RxJS6

This is the third party library (RxJS) and introduces two important changes as compared to RxJS5.

Introduces a new internal package structure.
Operator concept
To update of RxJS6, run the following command:

npm install --save rxjs@6
To update your existing Angular Project, run the following:

npm install --save rxjs-compat
3. The <ng-template>

Angular 6 uses <ng-template> instead of <template>

4. Service Level Changes 

If in an earlier version, the user wanted to provide a service to the entire application, 
the user was required to add it to providers in the AppModule but it is not required in the case of Angular6. 

5. Renamed Operators

Angular 6 has renamed following operators:

do() => tap()
catch() => catchError()
finally() => finalize()
switch()=>switchAll()
throw() => throwError
```

Question: What Are ngIf and ngFor? Can You Show a Small Example to Use Them?
```
Answer: Just like if and for in other languages, ngIf and ngFor are used as control statements. Example –

<p *ngIf="display">Show this only if the Boolean "display" is true</p>

Where the display is a boolean with the value true or false. Learn more about ngIf.

ngFor is used to loop through and display elements of an array (set of data).

<tr *ngFor="let student of students; let i = index"> <td>{{student.name}}

</td> <td>{{i}}</td> </tr>

The second part (i=index) is optional and only needed if you want to display the index.
```

Question: Explain How You Can Chain Pipes
```
Answer: We can add any number of filters using pipes -

<p>Average is {{ average | uppercase | number}}</p> 
```
Question: Is It Possible to Create a Custom Pipe? How?
```
Answer: Yes, we can create custom pipes.

Pipe metadata @Pipe decorator can be imported from core Angular library
Pipe is a class that is decorated with the above metadata (@Pipe({name: 'myCustomPipe'}))
The next step is to define the transformation. For this, the pipe class should implement the method transform() of the PipeTransform class.
Specify the pipe name in the main code
<p>Size: {{number | myCustomPipe: 'Error'}}</p> 
```
Question: What Is the Purpose of an Async Pipe?
```
Answer: Async pipe subscribes to a promise or an observable, and returns the latest value. 
If a new value is emitted, the pipe marks the component that needs to be checked for any changes.

<code>observable|async</code>
```
Question: Explain the Importance of HttpClient.
```
Answer: HttpClient is a simplified Http API for Angular applications. 
It gives better observable APIs, better error handling mechanisms, testability, request and response interception, typed request and response objects. 
The HttpClientAPI rests on the XMLHttpRequest interface exposed by the browsers.
```
Question: How Does Angular Router Work?
```
Answer: Angular router interprets a browser URL as commands to navigate to a client-generated view. 
The router is bound to the links on a page. This way Angular knows to navigate the application view to the required page when a user clicks on it.
```
Question: What Are the Router Navigation Events?
```
Answer: Router navigation events help track the lifecycle of a route. These are –

NavigationStart,
RouteConfigLoadStart,
RouteConfigLoadEnd,
RoutesRecognized,
GuardsCheckStart,
ChildActivationStart,
ActivationStart,
GuardsCheckEnd,
ResolveStart,
ResolveEnd,
ActivationEnd
ChildActivationEnd
NavigationEnd,
NavigationCancel,
NavigationError
Scroll
```
Question: Is the Routing Module Mandatory for an Application?
```
Answer: No, routing module can be totally skipped if there are simple configurations.
```
Question: What Is a Wildcard Route?
```
Answer: Wildcard route has the path that consists of two asterisks (**) that can match any URL. It is helpful when a URL doesn’t match any of the predefined routes. Instead of throwing error, we can use a wildcard route and defining a component for the same.
```
Question: What Are the Special Transition States?
```
Answer: Special transition states are wildcard (*) and void. Wildcard matches any animation state. The void state is used to configure transitions for elements entering or leaving a page.
```
Question: How Can You Disable All the Animations in Angular?
```
Answer: To disable all the animations, place the @.disabled host binding on the topmost Angular component.

Explain the steps to create a reusable animation.
To create an animation that can be reused, use the animation() method and define the animation in a separate .ts file. 
Declare this animation as a const export variable. This can be then imported and reused in any app components that use the useAnimation() API. 
```
Question: Mention Some of the Functions That Help Control Complex Animation Sequences
```
Answer:

query()	finds one or more inner HTML elements within the current element being animated in the sequence
stagger()	applies a cascading delay (timing gap) after each animation
group()	runs multiple animation steps in parallel.
sequence()	runs animation steps one after another (sequentially)
```
Question: Explain the Features of Forms in Angular.
```
Answer: There are two approaches to handle form data (user inputs) – reactive and template-driven.

Reactive forms can be used when you are using reactive patterns in your application and forms are a key part of your application. These forms are scalable, robust and testable.

Template-driven forms are used to add simple forms, for example, a sign-up page. These are not as scalable as reactive forms and should be used only if your form requirements are simple and minimal.
```

Question: Which Is the Latest Version of Angular? What Are the New Features in It?
```

```
