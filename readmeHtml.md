**What does a doctype do?**
```
    Doctype stands for Document Type Declaration. It informs the web browser about the type and version of HTML used in building the web document.
```

**What kind of things must you be wary of when designing or developing for multilingual sites?**
```
Be wary of layout or overflow issues in the design. 
It's best to avoid designing where the amount of text would make or break a design. 
Character counts come into play with things like headlines, labels, and buttons. 
They are less of an issue with free-flowing text such as body text or comments.
```
**What are data- attributes good for?**
```
The data-* attribute commom use is to embed custom attributes on all HTML elements.
Also allow us to store extra information on standard.
```
**Consider HTML5 as an open web platform. What are the building blocks of HTML5?**
```
semantic text markup
form elements
video and audio
javascript API
canvas and SVG
geolocation API
```

**Describe the difference between a cookie, sessionStorage and localStorage.**
```
<ul>
<li>Capacity: 4KB</li>
<li>Accessible from: Any window</li>
<li>Expiration: Manually set</li>
<li>Storage location: Browser and server</li>
<li>Sent with requests: Yes</li>
<li>Blockable by users: Yes</li>
<li>Editable by users: Yes</li>
</ul>
<h3 class="card-body-title txt-150 fs-lg md:fs-xl f-alt">Local storage</h3>
<p>Local storage stores a larger amount of data on the client's computer in a key-value pair format and has no expiration date. Data is never transferred to the server and is accessible via JavaScript and HTML5.</p>
<ul>
<li>Capacity: 10MB</li>
<li>Accessible from: Any window</li>
<li>Expiration: Never</li>
<li>Storage location: Browser only</li>
<li>Sent with requests: No</li>
<li>Blockable by users: Yes</li>
<li>Editable by users: Yes</li>
</ul>
<h3 class="card-body-title txt-150 fs-lg md:fs-xl f-alt">Session storage</h3>
<p>Session storage stores a larger amount of data on the client's computer only for the current session, expiring the data on tab close. Data is never transferred to the server and is accessible client-side from the same tab.</p>
<ul>
<li>Capacity: 5MB</li>
<li>Accessible from: Same tab</li>
<li>Expiration: On tab close</li>
<li>Storage location: Browser only</li>
<li>Sent with requests: No</li>
<li>Blockable by users: Yes</li>
<li>Editable by users: Yes</li>
</ul>   
```   

**Describe the difference between <script>, <script async> and <script defer>.**
**Why is it generally a good idea to position CSS <link>s between <head></head> and JS <script>s just before </body>? Do you know any exceptions?**
**What is progressive rendering?**
**Why you would use a srcset attribute in an image tag? Explain the process the browser uses when evaluating the content of this attribute.**
**Have you used different HTML templating languages before?**
**What is the difference between canvas and svg?**
**What are empty elements in HTML ?**
