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

`document.write("<h1>This is a heading</h1>");`  

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

JavaScripts in HTML must be inserted between `<script>` and `</script>` tags.  

JavaScripts can be put in the `<body>` and in the `<head>` section of an HTML page.  

* **The `<script>`Tag**

To insert a JavaScript into an HTML page, use the `<script>` tag.  
 
The `<script>` and `</script>` tells where the JavaScript starts and ends.  

The lines between the `<script>` and `</script>` contain the JavaScript:   

`<script>`  
`alert("My First JavaScript");`  
`</script>`   

Old examples may have type="text/javascript" in the `<script>` tag. This is no longer required. JavaScript is the default scripting language in all modern browsers and in HTML5.  

* **JavaScript Functions and Events**

The JavaScript statements, in the example above, are executed while the page loads.  

More often, we want to execute code when an event occurs, like when the user clicks a button.  

If we put JavaScript code inside a function, we can call that function when an event occurs.  

* **JavaScript Output**

To access an HTML element from JavaScript, you can use the document.getElementById(id) method.  

Use the "id" attribute to identify the HTML element:  

`<p id="demo">My First Paragraph</p>`  

`<script>`  
`document.getElementById("demo").innerHTML="My First JavaScript";`  
`</script>`  

* *Semicolon `;`*

Semicolon separates JavaScript statements.  

Normally you add a semicolon at the end of each executable statement.  

Using semicolons also makes it possible to write many statements on one line.    

* *JavaScript Code Blocks*  

JavaScript statements can be grouped together in blocks.  

Blocks start with a left curly bracket, and end with a right curly bracket.  

The purpose of a block is to make the sequence of statements execute together.  

A good example of statements grouped together in blocks, are JavaScript functions.   

This example will run a function that will manipulate two HTML elements:  

`function myFunction(){`  

`document.getElementById("demo").innerHTML="Hello Dolly";`  
`document.getElementById("myDIV").innerHTML="How are you?";`  

`}`  

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

`document.write(x + "<br>");`  
`document.write(y + "<br>");`  
`document.write(z + "<br>");`  

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

`var pi=3.14;`  
`var person="John Doe";`  
`var answer='Yes I am!';`  

#### Declaring (Creating) JavaScript Variables

Creating a variable in JavaScript is most often referred to as "declaring" a variable.  

You declare JavaScript variables with the var keyword:  

`function myFunction(){`  
`var carname="Volvo";`  
`document.getElementById("demo").innerHTML=carname;`  
`}`  

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

`var cars=new Array();`  
`cars[0]="Saab";`  
`cars[1]="Volvo";`  
`cars[2]="BMW";`  

`for (i=0;i<cars.length;i++){`  
`document.write(cars[i] + "<br>");`  
`}`  

or (condensed array):  

`var cars=new Array("Saab","Volvo","BMW");`  

`or (literal array):`  

`var cars=["Saab","Volvo","BMW"];`  

Array indexes are zero-based, which means the first item is [0], second is [1], and so on.  

* *JavaScript Objects*

An object is delimited by curly braces. Inside the braces the object's properties are defined as name and value pairs (name : value). The properties are separated by commas:

`var person={firstname:"John", lastname:"Doe", id:5566};`  

`document.write(person.lastname + "<br>");`  
`document.write(person["lastname"] + "<br>");`  

The object (person) in the example above has 3 properties: firstname, lastname, and id.  

Spaces and line breaks are not important. Your declaration can span multiple lines:  

`var person={`  
`firstname : "John",`  
`lastname  : "Doe",`  
`id        :  5566`  
`};`  

You can address the object properties in two ways:  

`name=person.lastname;`  
`name=person["lastname"];`  

* *Declaring Variables as Objects*

When a variable is decared, with the keyword "new", the variable is declared as an object:  

`var name = new String;`  
`var x =    new Number;`  
`var y =    new Boolean;`  

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

`var person=new Object();`  
`person.firstname="John";`  
`person.lastname="Doe";`  
`person.age=50;`  
`person.eyecolor="blue"; `  
`document.write(person.firstname + " is " + person.age + " years old.");`  


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

`var message="Hello world!";`  
`var x=message.toUpperCase();`

The value of x, after execution of the code above will be:    

#### JavaScript Functions

`function myFunction(){`  
`alert("Hello World!");`  
`}`  

When you call a function, you can pass along some values to it, these values are called arguments or parameters.  

These arguments can be used inside the function.  

You can send as many arguments as you like, separated by commas `,`  

`function myFunction(name,job){`  
`alert("Welcome " + name + ", the " + job);`  
`}`  

* *Functions With a Return Value*

Sometimes you want your function to return a value back to where the call was made.  

This is possible by using the return statement.  

When using the return statement, the function will stop executing, and return the specified value.  

`function myFunction(){`  
`var x=5;`  
`return x;`  
`}`  

Note: It is not the entire JavaScript that will stop executing, only the function. JavaScript will continue executing code, where the function-call was made from.  

The function-call will be replaced with the return value:

`var myVar=myFunction();`  

The variable myVar holds the value 5, which is what the function "myFunction()" returns.  

You can also use the return value without storing it as a variable:  

`document.getElementById("demo").innerHTML=myFunction();`  

The innerHTML of the "demo" element will be 5, which is what the function "myFunction()" returns.  

You can make a return value based on arguments passed into the function:  

`function myFunction(a,b){`  
`return a*b;`  
`}`  

`document.getElementById("demo").innerHTML=myFunction(4,3);`  

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

`if (condition){`  
`code to be executed if condition is true`  
`}`  

`function myFunction(){`    
`var x="";`  
`var time=new Date().getHours();`    
`if (time<20){`  
  `x="Good day";`  
`}else{`  
  `x="Good evening";`  
`}`  
`document.getElementById("demo").innerHTML=x;`  
`}`  
 
#### The For Loop

The for loop is often the tool you will use when you want to create a loop.  

The for loop has the following syntax:  

`for (statement 1; statement 2; statement 3){`    
  `the code block to be executed`  
  `}`  

* Statement 1 is executed before the loop (the code block) starts.
* Statement 2 defines the condition for running the loop (the code block).
* Statement 3 is executed each time after the loop (the code block) has been executed.

Example:  

`<p>Click the button to loop through a block of code five times.</p>`  
`<button onclick="myFunction()">Try it</button>`  
`<p id="demo"></p>`  

`function myFunction(){`  
`var x="";`  
`for (var i=0; i<5; i++){`  
`x=x + "The number is " + i + "<br>";`  
`}`  
`document.getElementById("demo").innerHTML=x;`  
`}`  

## jQuery与OOP
## jQuery动画
## jQuery的DOM操作
## jQuery插件系统
## jQuery事件
## jQuery-UI插件
## AJAX动态交互
## Chrome/Webkit前端调试器