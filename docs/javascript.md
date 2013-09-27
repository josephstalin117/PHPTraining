JavaScript学习 
============================================

## JavaScript快速入门

JavaScript is the scripting language of the Web.  

All modern HTML pages are using JavaScript to add functionality,validate input, communicate with web servers, and much more.  

JavaScript is easy to learn. You will enjoy it.  

JavaScript is the world's most popular programming language. It is the language for HTML and the web, for servers, PCs, laptops, tablets, smart phones, and more.  

JavaScript is a Scripting Language  
A scripting language is a lightweight programming language.   

JavaScript is programming code that can be inserted into HTML pages.  

JavaScript inserted into HTML pages, can be executed by all modern web browsers.  

#### What You Will Learn

* JavaScript: Writing Into HTML Output  

`document.write("This is a heading");`  

* JavaScript: Reacting to Events  

`<button type="button" onclick="alert('Welcome!')">Click Me!</button>`  

* JavaScript: Changing HTML Content  

`x=document.getElementById("demo")  //Find the element`    
`x.innerHTML="Hello JavaScript";    //Change the content`   

* JavaScript: Changing HTML Styles  

`x=document.getElementById("demo")  //Find the element`   
`x.style.color="#ff0000";           //Change the style`  

* JavaScript: Validate Input  

`if isNaN(x) {alert("Not Numeric")};`  

#### JavaScript How To

JavaScripts in HTML must be inserted between and tags.  

JavaScripts can be put in the and in the section of an HTML page.  

* **The Tag**

To insert a JavaScript into an HTML page, use the `` tag.  
 
The and tells where the JavaScript starts and ends.  

The lines between the and contain the JavaScript:   

`alert("My First JavaScript");`  

Old examples may have type="text/javascript" in the tag. This is no longer required. JavaScript is the default scripting language in all modern browsers and in HTML5.  

* **JavaScript Functions and Events**

The JavaScript statements, in the example above, are executed while the page loads.  

More often, we want to execute code when an event occurs, like when the user clicks a button.  

If we put JavaScript code inside a function, we can call that function when an event occurs.  

* **JavaScript Output**

To access an HTML element from JavaScript, you can use the document.getElementById(id) method.  

Use the "id" attribute to identify the HTML element:  

`My First Paragraph`  

`document.getElementById("demo").innerHTML="My First JavaScript";`  

* *Semicolon ;*

Semicolon separates JavaScript statements.  

Normally you add a semicolon at the end of each executable statement.  

Using semicolons also makes it possible to write many statements on one line.    

* *JavaScript Code Blocks*  

JavaScript statements can be grouped together in blocks.  

Blocks start with a left curly bracket, and end with a right curly bracket.  

The purpose of a block is to make the sequence of statements execute together.  

A good example of statements grouped together in blocks, are JavaScript functions.   

This example will run a function that will manipulate two HTML elements:  

		function myFunction(){  

			document.getElementById("demo").innerHTML="Hello Dolly";  
			document.getElementById("myDIV").innerHTML="How are you?";  

		}  

* *JavaScript is case sensitive.*

Watch your capitalization(大写) closely when you write JavaScript statements:  

A function `getElementById` is not the same as `getElementbyID`.    
A variable named `myVariable` is not the same as `MyVariable`.    

* *Using Comments to Prevent Execution*

In the following example the comment is used to prevent the execution of one of the codelines (can be suitable for debugging):  

`//document.getElementById("myH1").innerHTML="Welcome to my Homepage";`  
`document.getElementById("myP").innerHTML="This is my first paragraph.";`  

#### JavaScript Variables

JavaScript variables are "containers" for storing information:  

`var x=5;`  
`var y=6;`  
`var z=x+y;`  

`document.write(x + "");`  
`document.write(y + "");`  
`document.write(z + "");`  

* *JavaScript Variables*

As with algebra(代数), JavaScript variables can be used to hold values (x=5) or expressions (z=x+y).  

Variable can have short names (like x and y) or more descriptive names (age, sum, totalvolume).  

* Variable names must begin with a letter
* Variable names can also begin with $ and _ (but we will not use it)
* Variable names are case sensitive (y and Y are different variables)

#### JavaScript Data Types

JavaScript variables can also hold other types of data, like text values (person="John Doe").  

In JavaScript a text like "John Doe" is called a string.  

There are many types of JavaScript variables, but for now, just think of numbers and strings.  

When you assign a text value to a variable, put double or single quotes around the value.  

When you assign a numeric value to a variable, do not put quotes around the value. If you put quotes around a numeric value, it will be treated as text.  

		var pi=3.14;  
		var person="John Doe";  
		var answer='Yes I am!';  

#### Declaring (Creating) JavaScript Variables

Creating a variable in JavaScript is most often referred to as "declaring" a variable.  

You declare JavaScript variables with the var keyword:  

		function myFunction(){  
			var carname="Volvo";  
			document.getElementById("demo").innerHTML=carname;  
		}  

#### JavaScript Has Dynamic Types  

JavaScript has dynamic types. This means that the same variable can be used as different types:  

`var x;               // Now x is undefined`  
`var x = 5;           // Now x is a Number`  
`var x = "John";      // Now x is a String`  

* *JavaScript Booleans* 

Booleans can only have two values: true or false.  

`var x=true;`  
`var y=false;`  

Booleans are often used in conditional testing.   

* *JavaScript Arrays*

The following code creates an Array called cars:  

		var cars=new Array();`  
		cars[0]="Saab";`  
		cars[1]="Volvo";`  
		cars[2]="BMW";`  

		for (i=0;i<cars.length;i++){
			document.write(cars[i]+"<br/>");  
		}  

or (condensed array):  

`var cars=new Array("Saab","Volvo","BMW");`  

`or (literal array):`  

`var cars=["Saab","Volvo","BMW"];`  

Array indexes are zero-based, which means the first item is [0], second is [1], and so on.  

* *JavaScript Objects*

An object is delimited by curly braces. Inside the braces the object's properties are defined as name and value pairs (name : value). The properties are separated by commas:

`var person={firstname:"John", lastname:"Doe", id:5566};`  

`document.write(person.lastname + "");`  
`document.write(person["lastname"] + "");`  

The object (person) in the example above has 3 properties: firstname, lastname, and id.  

Spaces and line breaks are not important. Your declaration can span multiple lines:  

		var person={  
			firstname : "John",  
			lastname  : "Doe",  
			id        :  5566  
		};  

You can address the object properties in two ways:  

`name=person.lastname;`  
`name=person["lastname"];`  

* *Declaring Variables as Objects*

When a variable is decared, with the keyword "new", the variable is declared as an object:  

		var name = new String;  
		var x =    new Number;  
		var y =    new Boolean;  

#### JavaScript Objects

Almost everything in JavaScript can be an Object: Strings, Functions, Arrays, Dates....  

Objects are just data, with properties and methods.  

* *Properties and Methods*

Properties are values associated with objects.  

Methods are actions that objects can perform.  

* *Objects in JavaScript:*

In JavaScript, objects are data (variables), with properties and methods.  

You create a JavaScript String object when you declare a string variable like this:  

`var txt = new String("Hello World");`  

**Object** "Hello World"  
**Property** txt.length  
**Method** txt.indexOf("World")  

The string object above has a length property of 11, and the indexOf("World") method will return 6.  

* *Creating JavaScript Objects*

Almost "everything" in JavaScript can be objects. Strings, Dates, Arrays, Functions....  

You can also create your own objects.  

This example creates an object called "person", and adds four properties to it:  

		var person=new Object();  
		person.firstname="John";  
		person.lastname="Doe";  
		person.age=50;  
		person.eyecolor="blue";   
		document.write(person.firstname + " is " + person.age + " years old.");  


There are many different ways to create new JavaScript objects, and you can also add new properties and methods to already existing objects.  

* *Accessing Object Properties*

The syntax for accessing the property of an object is:  

`objectName.propertyName`  

This example uses the length property of the String object to find the length of a string:  

`var message="Hello World!";`  
`var x=message.length;`  

* *Accessing Object Methods*

You can call a method with the following syntax:  

`objectName.methodName()`  

This example uses the toUpperCase() method of the String object, to convert a text to uppercase:

		var message="Hello world!";  
		var x=message.toUpperCase();

The value of x, after execution of the code above will be:    

#### JavaScript Functions

		function myFunction(){  
			alert("Hello World!");  
		}  

When you call a function, you can pass along some values to it, these values are called arguments or parameters.  

These arguments can be used inside the function.  

You can send as many arguments as you like, separated by commas `,`  

		function myFunction(name,job){  
			alert("Welcome " + name + ", the " + job);  
		}  

* *Functions With a Return Value*

Sometimes you want your function to return a value back to where the call was made.  

This is possible by using the return statement.  

When using the return statement, the function will stop executing, and return the specified value.  

		function myFunction(){  
			var x=5;  
			return x;  
		}  

Note: It is not the entire JavaScript that will stop executing, only the function. JavaScript will continue executing code, where the function-call was made from.  

The function-call will be replaced with the return value:

		var myVar=myFunction();  

The variable myVar holds the value 5, which is what the function "myFunction()" returns.  

You can also use the return value without storing it as a variable:  

		document.getElementById("demo").innerHTML=myFunction();  

The innerHTML of the "demo" element will be 5, which is what the function "myFunction()" returns.  

You can make a return value based on arguments passed into the function:  

		function myFunction(a,b){  
			return a*b;  
		}  

		document.getElementById("demo").innerHTML=myFunction(4,3);  

#### JavaScript Operators

`=` is used to assign values.  

`+` is used to add values.  

The assignment operator `=` is used to assign values to JavaScript variables.  

The arithmetic operator `+` is used to add values together.  

#### JavaScript If...Else Statements

* *Conditional Statements*  

Very often when you write code, you want to perform different actions for different decisions. You can use conditional statements in your code to do this.  

In JavaScript we have the following conditional statements:  

* if statement - use this statement to execute some code only if a specified condition is true
* if...else statement - use this statement to execute some code if the condition is true and another code if the condition is false
* if...else if....else statement - use this statement to select one of many blocks of code to be executed
* switch statement - use this statement to select one of many blocks of code to be executed


		if (condition){  
			code to be executed if condition is true  
		}  


		function myFunction(){  
			var x="";  
			for (var i=0; i";  
		}  
		document.getElementById("demo").innerHTML=x;  

#### JavaScript HTML DOM

With the HTML DOM, JavaScript can access all the elements of an HTML document.  

* *The HTML DOM (Document Object Model)*

When a web page is loaded, the browser creates a Document Object Model of the page.  

The HTML DOM model is constructed as a tree of Objects:  

![images](img/pic_htmltree.gif)

With a programmable object model, JavaScript gets all the power it needs to create dynamic HTML:  

* JavaScript can change all the HTML elements in the page
* JavaScript can change all the HTML attributes in the page
* JavaScript can change all the CSS styles in the page
* JavaScript can react to all the events in the page

* *Finding HTML Elements*

Often, with JavaScript, you want to manipulate HTML elements.  

To do so, you have to find the elements first. There are a couple of ways to do this:  

* Finding HTML elements by id
* Finding HTML elements by tag name
* Finding HTML elements by class name

* *Finding HTML Elements by Id*

The easiest way to find HTML elements in the DOM, is by using the element id.  

This example finds the element with id="intro":  

		var x=document.getElementById("intro");  

If the element is found, the method will return the element as an object (in x).  

If the element is not found, x will contain null.  

* *Finding HTML Elements by Tag Name*

This example finds the element with id="main", and then finds all  elements inside "main":  

		var x=document.getElementById("main");  
		var y=x.getElementsByTagName("p");  
		document.write('First paragraph inside "main" is ' + y[0].innerHTML);  

* *Changing HTML Content*

The easiest way to modify the content of an HTML element is by using the innerHTML property.  

To change the content of an HTML element, use this syntax:  

		document.getElementById(id).innerHTML=new HTML  

This example changes the content of a element:  


		document.getElementById("p1").innerHTML="New text!";  
		var element=document.getElementById("header");  
		element.innerHTML="New Header";  

Example explained:

* The HTML document above contains an element with id="header"-
* We use the HTML DOM to get the element with id="header"  
* A JavaScript changes the content (innerHTML) of that element  

* *Changing an HTML Attribute*

To change the attribute of an HTML element, use this syntax:  

		document.getElementById(id).attribute=new value  

This example changes the src attribute of an `<img>` element:   

		document.getElementById("image").src="landscape.jpg";  

Example explained:

* The HTML document above contains an <img> element with id="image"
* We use the HTML DOM to get the element with id="image"
* A JavaScript changes the src attribute of that element from "smiley.gif" to "landscape.jpg"

#### JavaScript HTML DOM - Changing CSS

The HTML DOM allows JavaScript to change the style of HTML elements.  

To change the style of an HTML element, use this syntax:

		<p id="p2">Hello World!</p>
		<script>   
			document.getElementById("p2").style.color="blue";  
		</script>  

#### JavaScript HTML DOM Events

* *Reacting to Events*

A JavaScript can be executed when an event occurs, like when a user clicks on an HTML element.  

To execute code when a user clicks on an element, add JavaScript code to an HTML event attribute:  

		onclick=JavaScript

Examples of HTML events:

* When a user clicks the mouse
* When a web page has loaded
* When an image has been loaded
* When the mouse moves over an element
* When an input field is changed
* When an HTML form is submitted
* When a user strokes a key

		<script>
			function changetext(id){
				id.innerHTML="Ooops!";
		}
		</script>
		<h1 onclick="changetext(this)">Click on this text!</h1>

* *The onchange Event*

The onchange event are often used in combination with validation of input fields.  

Below is an example of how to use the onchange. The upperCase() function will be called when a user changes the content of an input field.  

		<script>
			function myFunction(){
				var x=document.getElementById("fname");
				x.value=x.value.toUpperCase();
			}
		</script>

		Enter your name: <input type="text" id="fname" onchange="myFunction()">

* *The onmouseover and onmouseout Events*

The onmouseover and onmouseout events can be used to trigger a function when the user mouses over, or out of, an HTML element.  

		<div onmouseover="mOver(this)" onmouseout="mOut(this)" style="background-color:#D94A38;width:120px;height:20px;padding:40px;">Mouse Over Me</div>

		<script>
			function mOver(obj){
				obj.innerHTML="Thank You"
			}

			function mOut(obj){
				obj.innerHTML="Mouse Over Me"
			}
		</script>  

* *The onmousedown, onmouseup and onclick Events*

The **onmousedown**, **onmouseup**, and **onclick** events are all parts of a mouse-click. First when a mouse-button is clicked, the onmousedown event is triggered, then, when the mouse-button is released, the onmouseup event is triggered, finally, when the mouse-click is completed, the onclick event is triggered.  

		<div onmousedown="mDown(this)" onmouseup="mUp(this)" style="background-color:#D94A38;width:90px;height:20px;padding:40px;">Click Me</div>

		<script>
			function mDown(obj){
				obj.style.backgroundColor="#1ec5e5";
				obj.innerHTML="Release Me"
			}

			function mUp(obj){
				obj.style.backgroundColor="#D94A38";
				obj.innerHTML="Thank You"
			}
		</script>

#### JavaScript HTML DOM Elements (Nodes)

* *Creating New HTML Elements*

To add a new element to the HTML DOM, you must create the element (element node) first, and then append it to an existing element.  

		<script>
			var para=document.createElement("p");
			var node=document.createTextNode("This is new.");
			para.appendChild(node);

			var element=document.getElementById("div1");
			element.appendChild(para);
		</script>

Example Explained   

This code creates a new `<p>` element:  

		var para=document.createElement("p");

To add text to the `<p>` element, you must create a text node first. This code creates a text node:  

		var node=document.createTextNode("This is a new paragraph.");

Then you must append the text node to the `<p>` element:  

		para.appendChild(node);

Finally you must append the new element to an existing element.  

This code finds an existing element:  

		var element=document.getElementById("div1");

This code appends the new element to the existing element:  

		element.appendChild(para);

* *Removing Existing HTML Elements*

To remove an HTML element, you must know the parent of the element:  

		<div id="div1">
			<p id="p1">This is a paragraph.</p>
			<p id="p2">This is another paragraph.</p>
		</div>
		<script>
			var parent=document.getElementById("div1");
			var child=document.getElementById("p1");
			parent.removeChild(child);
		</script>

Example Explained 

This HTML document contains a `<div>` element with two child nodes (two `<p>` elements):

		<div id="div1">
			<p id="p1">This is a paragraph.</p>
			<p id="p2">This is another paragraph.</p>
		</div>

Find the element with id="div1":

		var parent=document.getElementById("div1");

Find the `<p>` element with id="p1":

		var child=document.getElementById("p1");

Remove the child from the parent:

		parent.removeChild(child);

#### JavaScript Objects

"Everything" in JavaScript is an Object.  

In addition, JavaScript allows you to define your own objects.  

* *Everything is an Object*  

In JavaScript almost everything is an object. Even primitive datatypes (exept null and undefined) can be treated as objects.  

* Booleans can be objects or primitive data treated as objects
* Numbers can be objects or primitive data treated as objects
* Strings are also objects or primitive data treated as objects
* Dates are always objects
* Maths and Regular Expressions are always objects
* Arrays are always objects
* Even functions are always objects

* *JavaScript Objects*

An object is just a special kind of data, with properties and methods.   

* *Accessing Object Properties*  

Properties are the values associated with an object.  

The syntax for accessing the property of an object is:  

		objectName.propertyName

This example uses the length property of the String object to find the length of a string:  

		var message="Hello World!";
		var x=message.length;

* *Accessing Objects Methods*

Methods are the actions that can be performed on objects.  

You can call a method with the following syntax:  

		objectName.methodName()

This example uses the toUpperCase() method of the String object, to convert a text to uppercase:  

		var message="Hello world!";
		var x=message.toUpperCase();

* *Creating JavaScript Objects*

With JavaScript you can define and create your own objects.  

There are 2 different ways to create a new object:  

1. Define and create a direct instance of an object.  
2. Use a function to define an object, then create new object instances.  

* *Creating a Direct Instance*

The following example creates a new instance of an object, and adds four properties to it:  

		person=new Object();
		person.firstname="John";
		person.lastname="Doe";
		person.age=50;
		person.eyecolor="blue";

Alternative syntax (using object literals):  

		person={firstname:"John",lastname:"Doe",age:50,eyecolor:"blue"};

* *Using an Object Constructor*

The following example uses a function to construct the object:  

		function person(firstname,lastname,age,eyecolor){
			this.firstname=firstname;
			this.lastname=lastname;
			this.age=age;
			this.eyecolor=eyecolor;
		}

The reason for all the "this" stuff is that you're going to have more than one person at a time (which person you're dealing with must be clear). That's what "this" is: the instance of the object at hand.  


* *Creating JavaScript Object Instances*

Once you have a object constructor, you can create new instances of the object, like this:  

		var myFather=new person("John","Doe",50,"blue");
		var myMother=new person("Sally","Rally",48,"green");

* *Adding Properties to JavaScript Objects*  

You can add new properties to an existing object by simply giving it a value.  

Assume that the person object already exists - you can then give it new properties named firstname, lastname, age, and eyecolor as follows:  

		person.firstname="John";
		person.lastname="Doe";
		person.age=30;
		person.eyecolor="blue";

		x=person.firstname;

* *Adding Methods to JavaScript Objects*

Methods are just functions attached to objects.  

Defining methods to an object is done inside the constructor function:  

		function person(firstname,lastname,age,eyecolor){
			this.firstname=firstname;
			this.lastname=lastname;
			this.age=age;
			this.eyecolor=eyecolor;

			this.changeName=changeName;
			
			function changeName(name){
				this.lastname=name;
			}
		}

		myMother=new person("Sally","Rally",48,"green");
		myMother.changeName("Doe");
		document.write(myMother.lastname);

* *JavaScript Classes*

JavaScript is an object oriented language, but JavaScript does not use classes.  

In JavaScript you don’t define classes and create objects from these classes (as in most other object oriented languages).  

JavaScript is prototype based, not class based.  

* *JavaScript for...in Loop*

The JavaScript for...in statement loops through the properties of an object.  

Syntax

		for (variable in object){
			code to be executed
  		}

Note: The block of code inside of the for...in loop will be executed once for each property.  

Looping through the properties of an object:  

		function myFunction(){
			var x;
			var txt="";
			var person={fname:"John",lname:"Doe",age:25}; 

			for (x in person){
				txt=txt + person[x];
			}

			document.getElementById("demo").innerHTML=txt;
		}

## jQuery与OOP

#### jQuery Tutorial

jQuery is a JavaScript Library.  

jQuery greatly simplifies JavaScript programming.  

jQuery is easy to learn.  

		<script>
			$(document).ready(function(){
			$("p").click(function(){
				$(this).hide();
			});
			});	
		</script>
		</head>
		<body>
			<p>If you click on me, I will disappear.</p>
			<p>Click me away!</p>
			<p>Click me too!</p>
		</body>

#### What is jQuery?

jQuery is a lightweight, "write less, do more", JavaScript library.  

The purpose of jQuery is to make it much easier to use JavaScript on your website.  

jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.  

jQuery also simplifies a lot of the complicated things from JavaScript, like AJAX calls and DOM manipulation.  

The jQuery library contains the following features:  

* HTML/DOM manipulation
* CSS manipulation
* HTML event methods
* Effects and animations
* AJAX
* Utilities

Tip: In addition, jQuery has plugins for almost any task out there.

#### jQuery Install

* *Downloading jQuery*

There are two versions of jQuery available for downloading:  

* Production version - this is for your live website because it has been minified and compressed
* Development version - this is for testing and development (uncompressed and readable code)

Both versions can be downloaded from jQuery.com.  

The jQuery library is a single JavaScript file, and you reference it with the HTML `<script>` tag (notice that the `<script>` tag should be inside the `<head>` section):  



		<head>
		<script src="jquery-1.10.2.min.js"></script>
		</head>

Tip: Place the downloaded file in the same directory as the pages where you wish to use it.  

#### jQuery Syntax

With jQuery you select (query) HTML elements and perform "actions" on them.    

The jQuery syntax is tailor made for selecting HTML elements and performing some action on the element(s).  

Basic syntax is: `$(selector).action()`  

A $ sign to define/access jQuery
A (selector) to "query (or find)" HTML elements
A jQuery action() to be performed on the element(s)
Examples:

* $(this).hide() - hides the current element.

* $("p").hide() - hides all <p> elements.

* $(".test").hide() - hides all elements with class="test".

* $("#test").hide() - hides the element with id="test".

* *The Document Ready Event*


		$(document).ready(function(){

   			// jQuery methods go here...

		});

Tip: The jQuery team has also created an even shorter method for the document ready event:  

		$(function(){
   			// jQuery methods go here...
		});

#### jQuery Selectors

Use the syntax you prefer. We think that the document ready event is easier to understand when reading the code.  

jQuery selectors are one of the most important parts of the jQuery library.  

* *jQuery Selectors*

jQuery selectors allow you to select and manipulate HTML element(s).  

jQuery selectors are used to "find" (or select) HTML elements based on their id, classes, types, attributes, values of attributes and much more. It's based on the existing CSS Selectors, and in addition, it has some own custom selectors.  

All selectors in jQuery start with the dollar sign and parentheses: $().  

* *The element Selector*  

The jQuery element selector selects elements based on the element name.  

You can select all `<p>` elements on a page like this:  

		$("p")

When a user clicks on a button, all <p> elements will be hidden:  

		$(document).ready(function(){
  			$("button").click(function(){
    			$("p").hide();
  			});
		});

## jQuery动画
## jQuery的DOM操作
## jQuery插件系统
## jQuery事件
## jQuery-UI插件
## AJAX动态交互
## Chrome/Webkit前端调试器