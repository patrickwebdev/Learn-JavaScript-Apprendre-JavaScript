//User-defined function
//Called by index.html when each time the form is submitted (onsubmit="user_input()")
function user_input() {
  //Collect data from the form
  fName = document.getElementById("i1").value;
  lName = document.getElementById("i2").value;
  bYear = document.getElementById("i3").value;

  //Create a session storage to save data
  var cache = window.sessionStorage;
  cache.clear();
  cache.setItem("name1", fName);
  cache.setItem("name2", lName);
  cache.setItem("year", bYear);

  //Open a new page and close the current one
  window.open("page2.html");
  window.close("index.html");
}

//User-defined function
//Called by page.html
function page_output() {
  //Declare variable
  msg1 = "First Name, Last Name, and Birth Year cannot be empty.";

  //Retrieve the data saved in the current session storage
  var cache = window.sessionStorage;
  var fName = cache.getItem("name1");
  var lName = cache.getItem("name2");
  var bYear = cache.getItem("year");

  //Compare the data retrived to display appropriate outputs
  if (fName === "" || lName === "" || bYear === "") {
    document.getElementById("msg").innerHTML = msg1;
  } else {
    object1 = new Identity(fName, lName, Number(bYear));
    object1.profile("msg");
  }
}

//User-defined class
//called by the user-defined function page_output()
function Identity(fn, ln, by) {
  //Properties
  this.fname = fn;
  this.lname = ln;
  this.byear = by;
  this.age = null;

  //Method
  this.setAge = function () {
    var objectdate = new Date();
    var currentYear = objectdate.getFullYear();
    this.age = currentYear - this.byear;
  };

  //Method
  this.getAge = function () {
    this.setAge();
    return this.age;
  };

  //Method
  this.profile = function (id) {
    var output = "First Name: " + this.fname;
    output += ", Last Name: " + this.lname;
    output += ", Age: " + this.getAge();
    document.getElementById("msg").innerHTML = output;
  };
}
