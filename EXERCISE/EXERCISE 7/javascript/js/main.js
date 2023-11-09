function validateInput() {
  //Declare variables and Assign values
  var number1 = document.getElementById("nbr1").value;
  var number2 = document.getElementById("nbr2").value;
  var message1 = document.getElementById("messageNbr1");
  var message2 = document.getElementById("messageNbr2");
  var message3 = document.getElementById("messageNbr3");

  if (number1 == "" && number2 == "") {
    //Display error for input 1
    message1.innerHTML = "Number 1 cannot be empty!";
    //Display error for input 2
    message2.innerHTML = "Number 2 cannot be empty!";
  } else if (number1 == "") {
    //Display error for input 1
    message1.innerHTML = "Number 1 cannot be empty!";
    //Display the value entered in input 2
    let display2 = "Number 2 = " + number2;
    message2.innerHTML = display2;
  } else if (number2 == "") {
    //Display error for input 2
    message2.innerHTML = "Number 2 cannot be empty!";
    //Display the value entered in input 1
    let display1 = "Number 1 = " + number1;
    message1.innerHTML = display1;
  } else {
    //Display the value entered in input 2
    let display1 = "Number 1 = " + number1;
    message1.innerHTML = display1;
    //Display the value entered in input 2
    let display2 = "Number 2 = " + number2;
    message2.innerHTML = display2;
    //Display the sum of input 1 and input 2
    let theSum = Number(number1) + Number(number2);
    let display3 = "Number 1 + Number 2 = " + theSum;
    message3.innerHTML = display3;
  }
}
