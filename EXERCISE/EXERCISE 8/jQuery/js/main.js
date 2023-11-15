function validateInput() {
  //Declare variables and Assign values
  var number1 = $("#nbr1").val();
  var number2 = $("#nbr2").val();
  var message1 = "Number 1 cannot be empty!";
  var message2 = "Number 2 cannot be empty!";
  var message3 = "";

  if (number1 == "" && number2 == "") {
    //Display error for input 1
    $("#messageNbr1").html(message1);
    //Display error for input 2
    $("#messageNbr2").html(message2);
    //Display nothing for input 3
    $("#messageNbr3").html(message3);
  } else if (number1 == "") {
    //Display error for input 1
    $("#messageNbr1").html(message1);
    //Display the value entered in input 2
    let display2 = "Number 2 = " + number2;
    $("#messageNbr2").html(display2);
    //Display nothing for input 3
    $("#messageNbr3").html(message3);
  } else if (number2 == "") {
    //Display error for input 2
    $("#messageNbr2").html(message2);
    //Display the value entered in input 1
    let display1 = "Number 1 = " + number1;
    $("#messageNbr1").html(display1);
    //Display nothing for input 3
    $("#messageNbr3").html(message3);
  } else {
    //Display the value entered in input 2
    let display1 = "Number 1 = " + number1;
    $("#messageNbr1").html(display1);
    //Display the value entered in input 2
    let display2 = "Number 2 = " + number2;
    $("#messageNbr2").html(display2);
    //Display the sum of input 1 and input 2
    let theSum = Number(number1) + Number(number2);
    let display3 = "Number 1 + Number 2 = " + theSum;
    $("#messageNbr3").html(display3);
  }
}


