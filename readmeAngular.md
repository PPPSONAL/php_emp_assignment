https://github.com/h5bp/Front-end-Developer-Interview-Questions

https://www.interviewbit.com/angular-interview-questions/
https://www.edureka.co/blog/interview-questions/top-angularjs-interview-questions-2016/#intermediate
https://dzone.com/articles/50-top-angular-interview-questions-amp-answers
https://github.com/sudheerj/angular-interview-questions

https://www.techgeeknext.com/angular/angular-interview-questions
https://www.javatpoint.com/rxjs-interview-questions

Interview Q

What is use of angular / why we use angular / what is angular
```
Angular is Javascript UI binding framework, which helps us to bind data in between Views and the Models 
Before Angular comes in picture we have to write lengthy lines of code for data binding but now Angular make it easy for us.
Adding to this, it also helps you to build Single page App, It also has boasts of other features like Routing, Http, Dependency injections.
```

Is the Routing Module Mandatory for an Application?
``` 
No, routing module can be totally skipped if there are simple configurations.
```

What are Lifecycle hooks in Angular? Explain some life cycles hooks.
```
Angular components enter its lifecycle from the time it is created to the time it is destroyed. 
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
Explain the Features of Forms in Angular.
``` 
There are two approaches to handle form data (user inputs) – reactive and template-driven.
1)Template-driven forms make use of the "FormsModule", while reactive forms are based on "ReactiveFormsModule".
2)Template-driven forms are asynchronous in nature, whereas Reactive forms are mostly synchronous.
3)In a template-driven approach, most of the logic is writen into the template, whereas in reactive-driven approach, 
  the logic writer mainly in the component or typescript code. 

4) Template-driven forms are used to add simple forms. 
   These are not as scalable as reactive forms and should used if form requirements are very simple and minimal.for example, a sign-up page.
   We should Reactive forms when we are using reactive patterns in the application forms. 
   These forms are scalable, robust and testable.

```
What is the difference between RouterModule forRoot () and RouterModule forChild ()?
```
forRoot creates a module that contains all the directives, the given routes, and the router service itself. 
forChild creates a module that contains all the directives and the given routes, but does not include the router service. 
It registers the routers and uses the router service created at the root level.
```
Diffrentiates between AngularJS and Angular 
```
So very first difference is language, While JavaScript is the recommended language for AngularJS, TypeScript is the recommended language for Angular
Then the Architecture
In AngularJs we have MVC structure same like Angular but in AngularJS View use to loads first in to the DOM and then View loads the Controller 
and if you look at the Angular architecture it is more into component based.
So Component is central point and have all controls in it to loads the templates, css, and data binding.

So yes AngularJs has Controller based and Angular has Component based architecture.
Third is  AngularJS doesn’t have mobile support while Angular does have, by using react native + Angular we can make Mobile Application.

Fourth is  AngularJs we don’t have angular cli but in Angular we have cli by it using we can easily create components, services, module etc.

Fifth is Routing - For routing, AngularJS uses $routeprovider.when() whereas Angular uses @RouteConfig{(…)} also ActivatedRoute  which provides access to information about a route associated with a component that is loaded in an outlet. 	
```
What are directives in Angular?
```
Directives helps us to attached behavior to HTML DOM, 
or in simplified words, Directives are angular syntax writer inside HTML which go and change the behavior of HML DOM, example ngModel, hidden, disabled etc.
```
Explain Different types of directive?
```
There 3 types of directive,
Structural - change the DOM layout by adding and removing elements. Structural directive actually change the structure of html DOM eg. ngFor, ngIf 
Attribute - change the appearance and behavior of HTML element eg. hide, show disabled 
Component - is a Custom User control, in which it has it own UI, templates, components. Eg Child components or we can add dynamic components to HTML DOM.
```
Differentiate between Components and Directives in Angular 5.
```
Components break up the application into smaller parts; whereas, Directives add behavior to an existing DOM element.
```

What is the use of @Input and @Output?
``` 
When it comes to the communication of Angular Components.
```

What does a router.navigate do
``` 
In typescript class to navigate to the different url.
```


Explain importance of NPM and node_modules folder?
```
NPM stands for Node package manager which helps us to install and update the javascript package. Generic cmd is npm install package name
node_modules is the folder where all the packages are installed.
In my current working project Have used ng2-charts, ngx-toastr, froala-editor, bootstrap

```
What is the importance package.json file in angular?
```
Project Metadata
Metadata contains information about your application.
"name"	"my-first-angular-app"	Your project name
"version"	"0.0.1"	Your project version
"private"	true	Project is private and can't be published in npm

Scripts
This section describes Node scripts that you can run in your application. all scripts uses Angular CLI to run.

Dependencies
The list of packages installed as dependencies for this project are required at runtime.

Development Dependencies
The list of packages that are required only for development. This packages are installed only on developer's machine and will not be run for production build.
```

What is Typescript and why do we need it?
```
Typescript is superset of Javascript, it add types to Javascript.  It’s also follow Oops which finally transpiles and converts to javascript.
Typescript helps speed up in development, good quality product as it follows Opps.
```
What is the importance Angular CLI?
```
CLI stands for command line interface, which help us to create initials project setup with basic source code, package.json etc. rather that starting from the scratch we can kick start from base code that helps us to increase productivity.
```
What is the importance  of Components and Modules?
```
Components - Components are the main building block for Angular applications 
Each component consists of:
* An HTML template that declares what renders on the page
* A Typescript class that defines behavior
* A CSS selector that defines how the component is used in a template
* Optionally, CSS styles applied to the template
So Component is central point and have all controls in it to loads the templates, css, and data binding btw view and model,
Now in large enterprise application, we can have lots of views, components and models, so to come across this problem we can group the components with called Modules.
So in simplified words, Modules are containers for a block of code dedicated to an application workflow, they can contain components, service providers, and other code files.

@NgModule() decorator is a function that takes a single metadata object, whose properties describe the module.
* declarations: The components, directives, and pipes that belong to this NgModule.
* exports: subset of declarations that should be visible and usable in the component templates of other NgModules
* imports: Other modules whose exported classes are needed by component templates declared in this NgModule.
* providers: this contributes to the global collection of services; they become accessible in all parts of the app. (We can also specify providers at the component level.)
* bootstrap: The main application view, called the root component, which hosts all other app views. Only the root NgModule should set the bootstrap property.
```
What is decorator, Annotation and metadata in Angular?
```
It defines what kind of angular class it is. eg. If we decorate @component then it says it is an angular component, if we decorate @NgModule it becomes angular Module if we decorate @Directive the it becomes Directive class
```
What are the Pipes?
```
This feature is used to change the output on the template; something like changing the string into uppercase and displaying it on the template. It can also change Date format accordingly.
```

Is It Possible to Create a Custom Pipe? How?
```
Yes, we can create custom pipes.

Pipe metadata @Pipe decorator can be imported from core Angular library
Pipe is a class that is decorated with the above metadata (@Pipe({name: 'myCustomPipe'}))
The next step is to define the transformation. For this, the pipe class should implement the method transform() of the PipeTransform class.
Specify the pipe name in the main code
<p>Size: {{number | myCustomPipe: 'Error'}}</p> 
```

What is template in Angular?
```
template are nothing but html code, In components we can define template inline or as separate HTML file.
```
  
What are the type of Data binding in Angular?
```
Data binding defines how the view and component communicate with each other.
There are 4 types of data bindings
1 Expression or Text interpolation -  In this case the data flows from component to view and which can be dynamic 	 eg {{ }}
2 Property Binding - In this case also the data flows from component to view and which can be dynamic 	
Eg
<button [disabled]="isUnchanged">Disabled Button</button>
<p [ngClass]="classes">binding to the classes property making this blue</p>
<app-item-detail [childItem]="parentItem"></app-item-detail>
<img [src]="itemImageUrl">
3 Events binding - when you want to send event from view to component
<button (click)="onClickMe()">Click me!</button>
4 two-way binding - In this case the data flows from view to component as well as component to view
Example [(ngModel)]
```

Explain the angular Architecture or the main building blocks in Angular? Please explain the various features of Angular?
```
1 Template - Html view in Angular
2 Components - Bind the view and model
3 Data binding - defines how view and components communicates with each other.
4 Directives - changes the HTML DOM behavior 
5 Modules - groups Components logically
6 Services - helps to share common logic across the project cmd - ng g service User
7 Dependency injection - help to inject the service instance across constructor.
```
What is AOT (Ahead-Of-Time) Compilation? What are its advantages?
``` 
The Angular compiler takes in the TS code, compiles it, and then produces some JS code browser executable code.

If you do a prod build with Ahead of Time (AoT) compilation, the ngc does its part before the bundles are built,
means it compiled the templates at the time of build. 
      ng build --aot
      ng serve --aot

**Advantages of AOT compilation:**

  Fast Rendering: The browser loads the executable code and renders it immediately as the application is compiled before running inside the browser.
  Fewer Ajax Requests: The compiler sends the external HTML and CSS files along with the application, eliminating AJAX requests for those source files.
  Minimizing Errors: Easy to detect and handle errors during the building phase.
  Better Security: Before an application runs inside the browser, the AOT compiler adds HTML and templates into the JS files, 
  so there are no extra HTML files to be read, 
  thus providing better security for the application.
  
In dev mode we use Just-in-Time compilation: the templates are not precompiled, 
the ngc compiler is included into the bundles, 
and it compiles the templates after the browser loaded your bundles
      ng build
      ng serve
```
**tsc vs ngc**
```
tsc is a TypeScript compiler, 
which takes in the TypeScript code, compiles it, and produces some JavaScript code, browser executable code.

ngc is an Angular-specific compiler. 
It doesn't turn the TypeScript code into JavaScript. 
It does a "finishing touch" to make your app bundles ready for rendering by the browser.
we can say it complies the templates.
```

Please explain the digest cycle in Angular?
```
The process of monitoring the watchlist in order to track changes in the value of the watch variable is termed the digest cycle in Angular.
The previous and present versions of the scope model values are compared in each digest cycle.
Although the digest cycle process gets triggered implicitly, it is possible to start it manually by using the $apply() function.
```
Explain Authentication and Authorization.
```
Authentication: The user login credentials are passed to an authenticate API (on the server). 
On the server side validation of the credentials happens and a JSON Web Token (JWT) is returned. 
JWT is a JSON object that has some information or attributes about the current user.  
Once the JWT is given to the client, the client or the user will be identified with that JWT.

Authorization: After logging in successfully, the authenticated or genuine user does not have access to everything. The user is not authorized to access someone else’s data,  he/she is authorized to access some data. 
```
What Is the Purpose of an Async Pipe?
```
The async pipe subscribes to an Observable or Promise and returns the latest value it has emitted. 
When a new value is emitted, the async pipe marks the component to be checked for changes. 
When the component gets destroyed, the async pipe unsubscribes automatically to avoid potential memory leaks.

<code>observable|async</code>

```

Differentiate between ng-Class and ng-Style.
```
In ng-Class, loading of CSS class is possible; whereas, in ng-Style we can set the CSS style.
```

Explain the Importance of HttpClient.
```
HttpClient is a simplified package of Angular applications to called Http API. 
It provides: 
Observable APIs, 
Error handling mechanisms, 
Testability,
Request and response interception, 
Typed request and response objects.
```
	
What is SPA in Angular?
```
SPA is stands for Single page application, and in this application where the main UI gets loaded once and the needed UI loaded on demand.
We can have multiple type of layouts and in that layouts 
We have many UI blocks like header, footer, left Menu , banner etc this UI is loaded once and we can say the body part is can be loaded on demand
```

How do we can implement SPA in Angular?
```
To implement SPA in Angular we need to user angular routings.
```

What exactly routing is?
```
Is s simple collection of url and the name of component to load after the url get called.
The main goal of routing is to define navigation in angular application.
<router-outlet></router-outlet>
[routerLink]=“{{}}”
Route.navigate([‘/url’])
```

Explain lazy loading ?
```
lazy loading means on demand loading, Loading only the necessary Html, css, and javascript files so that we can have better performance.
```

How to implement  lazy loading?
```
We need to do 2 things very 1st is to divide our projects in to modules and the 2nd one is in the routing we need to use loadChildren to load the module.
```

Defines Services 
```
Services helps to share common logic across the project.
```

Dependency injection?
```
Dependency injection is an application design pattern where rather than creating an object instance within the component, angular inject it via constructor or by provider attribute.
```

What is benefit of using Dependency injection?
```
It helps us to decouple class dependancies. So when you add new dependencies you don’t need to change everywhere.
```

Difference in ng serve and ng build ?
```
Ng serve builds application in memory in RAM where ng build builds application into hard dis	k. 
So whenever your doing development ng serve is good but for production then we need to use ng build
Ng build actually create a folder list inside your project folder and add final compile code and all the binaries in to folder  
```
Explain —prod in ng build ?
```
**—prod** flag create a build with compress your JS files, removes comments, make your application ready for production.
```

What are the adv and disadvantages of angular?
```
Adv
Typescript support
CLI support
DI
Routing

Disadvantage
Complexity
And should have knowledge of RxJS
Bundle size is big some time when it comes to big project although we can compress it 
```

Change detection in angular?
```
Is mechanism which care about view rendering id data changes, it being trigger when some event happens in the application like keyup, click or an ajax, set interval and set timeout
```

ngZone - 
```
is library which utilize angular in order to track the events. And when it happens it tells angular that the changes has happened
```


What is Angular Material?
```
It is a UI component library. Angular Material helps in creating attractive, consistent, 
and fully functional web pages as well as web applications. 
```

What is RxJS
```
Reactive extensions for Javascript, is a library which implement concept of reactive programming in application
```
reactive programming - 
```
which deals with async data streams.
```

Advantage of reactive programming
```
reactive programming provide lots of operator which make our work easy.
Helps in callback problems.
It make async and complex threading very easy.
```
Disadvantage of reactive programming
```
Debugging the code with observable is difficult.
```

RxJS stream?
```
1 stream is a sequence of data element made available over time.
2 Stream can emits a value, error and completion signal.
```

What should we know before learn RxJs
```
We should must have basic knowledge of javascript and angular
```

What are the most outstanding feature of RxJS
```
Observer - is an object with next(), error() and complete() methods, which are called when we need to interact with observables eg click, mouse  events, Http request,
Observables - observable as an interface to handle a variety of common asynchronous operations. 
Subscription - the role comes in to the picture when observable is created.
Operator - is pure functions that take observables as input and output is also an observable
Subject - Subject is an observable  that can multicast. i.e talks to many observers. 
Suppose we have a button  with an events listener.  
The function attached to the event using addEventlistener is called every time when user clicks on the button. 
Similar functionality goes to Subject too.
```

What id the diff in observables and promise 
```
observables are lazy need to subscribe in order to execute it but promise execute immediately.
observables can be cancel but we can’t cancel promise.
observables can be sync and async but promise is always sync 
observables can emit multiple values but promise only emit single value.
```

What is Subject in RxJS? What kind of subject do you know?
```
Subject is an observable  that can multicast. I.e talks to many observers. 
Suppose we have a button  with an events listener.  
The function attached to the event using addEventlistener is called every time when user clicks on the button. 
Similar functionality goes to Subject too.
```

Observables are unicast, Subjects are multicast.

Memory leaks an dhow to prevent it.
```
1st We have to kill every subscription
2nd we have to use sync pipe as much as we can bcoz it cares about unscription 
And the last is application optimiaztion
Run time optimiaztion, performance optimiaztion, bundle size optimiaztion
So here AOT comes in picture where application compiled during the build time rather than the runtime which means that app doesn’t know to include the compiler into the bundle which automatically decrease the bundle size in the end. In angular 9 is enabled by default 
Then you can also use lazy loading and load some part on demand and also differentiation loading increase the performance
Also you should not call many function inside templates instead use pure pipes which helps to increase the performance
```

Operator - 
```
Operator is pure functions that take observables as input and output is also an observable

Creation Operators
of() - is a creational operator that allows you to create an RxJS Observable from a sequence of values
from() - Most often the from operator is used to convert an array to an observable,
interval() - It emits a sequence of ascending integers, with a constant interval of time provided to it.
throwError() - simply throw the error

Join Creation Operators
forkJoin()  is an operator that takes any number of input observables which can be passed either as an array or a dictionary of input observables.
‘forkJoin’ waits for each HTTP request to complete and group’s all the observables returned by each HTTP call into a single observable array

Transformation Operators
concatMap
mergeMap
switchMap
map

Filtering Operators
debounceTime
distinctUntilChanged
first
skip
take

Error Handling Operators
catchError
retry
retryWhen

Utility Operators
toArray emit the array containing all emissions.

Conditional and Boolean Operators
findIndex
```

Which Is the Latest Version of Angular? What Are the New Features in It?

Meta-Reducers in NgRx









