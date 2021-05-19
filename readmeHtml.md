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
<table class="primary-col"><thead><tr><th></th>
<th>Cookies</th>
<th>Local storage</th>
<th>Session storage</th>
</tr>
</thead>
<tbody>
<tr>
<td>Capacity</td>
<td>4KB</td>
<td>10MB</td>
<td>5MB</td>
</tr>
<tr>
<td>Accessible from</td>
<td>Any window</td>
<td>Any window</td>
<td>Same tab</td>
</tr>
<tr>
<td>Expiration</td>
<td>Manually set</td>
<td>Never</td>
<td>On tab close</td>
</tr>
<tr>
<td>Storage location</td>
<td>Browser and server</td>
<td>Browser only</td>
<td>Browser only</td>
</tr>
<tr>
<td>Sent with requests</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
</tr>
<tr>
<td>Blockable by users</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
</tr>
<tr>
<td>Editable by users</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
</tr>
</tbody>
</table>

**Describe the difference between <script>, <script async> and <script defer>.**
    
<table>
<thead>
<tr>
<th></th>
<th>Order</th>
<th><code>DOMContentLoaded</code></th>
</tr>
</thead>
<tbody>
<tr>
<td><code>only script </code></td>
<td><em>Document order</em>. Their document order doesn’t matter – which loads first runs first</td>
<td>If there’s a bulky script at the top of the page, it blocks the page content to get load</td>
</tr>    
<tr>
<td><code>async</code></td>
<td><em>Load-first order</em>. Their document order doesn’t matter – which loads first runs first</td>
<td>Irrelevant. May load and execute while the document has not yet been fully downloaded. That happens if scripts are small or cached, and the document is long enough.</td>
</tr>
<tr>
<td><code>defer</code></td>
<td><em>Document order</em> (as they go in the document).</td>
<td>Execute after the document is loaded and parsed (they wait if needed), right before <code>DOMContentLoaded</code>.</td>
</tr>
</tbody>
</table>
    
**Why is it generally a good idea to position CSS <link>s between <head></head> and JS <script>s just before </body>? Do you know any exceptions?**
**What is progressive rendering?**
**Why you would use a srcset attribute in an image tag? Explain the process the browser uses when evaluating the content of this attribute.**
**Have you used different HTML templating languages before?**
**What is the difference between canvas and svg?**
**What are empty elements in HTML ?**
