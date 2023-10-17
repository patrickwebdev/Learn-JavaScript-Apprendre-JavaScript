<!DOCTYPE html>
<html lang="en-CA">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="Author" content="Patrick Saint-Louis" />
    <title>JS demonstration 2</title>
</head>

<body>
    <script type="text/javascript">
        /*
        //-------------------------------------------
        EXERCISE 1
        //-------------------------------------------
        Fix the error included in the following JavaScript expressions 
        to make them work correctly.

        Single line comment
        var title = 'Madam'

        //Variable
        time_in_hour = 8  hour_rate = 300 
        //Calculation
        total = time_in_hour * hour_rate 

        //Output : Fixing problem is the 'most important' skills.
        mention = 'Fixing problem is the 'most important' skills.'
        document.write("<p>"+ mention + "</p>")

        @tax_rate = 0.09975 + 0.05 
        document.write('Tax = ' , @tax_rate)

        //String Concatenation 
        firstname = 'Montreal'
        lastname = 'Quebec'
        fullname = firstname . ' ' . lastname
        document.write("Full Name: " + fullname + "<br/>") 

        //Output : My Number "One"
        title = "My Number "One""
        document.write("<p>"+ title + "</p>")
        */

        //Single line comment
        var title = 'Madam'

        //Variable
        time_in_hour = 8  ; hour_rate = 300  //add ; or each expression in a single row 
        //Calculation
        total = time_in_hour * hour_rate 

        //Output : Fixing problem is the 'most important' skills.
        mention = "Fixing problem is the 'most important' skills." //main double quotes
        document.write("<p>"+ mention + "</p>")

        tax_rate = 0.09975 + 0.05 //remove @ in variable name 
        document.write('Tax = ' , tax_rate)

        //String Concatenation 
        firstname = 'Montreal'
        lastname = 'Quebec'
        fullname = firstname + ' ' + lastname //replace . by +
        document.write("Full Name: " + fullname + "<br/>") 

        //Output : My Number "One"
        title = "My Number \"One\"" //backslash before each " inside main ""
        document.write("<p>"+ title + "</p>")

         /*
        //-------------------------------------------
        EXERCISE 2
        //-------------------------------------------
        Display the value and the type of the following 
        JavaScript variables a, b, c, d, and e after each assignment below 
        to see their evolution. 
        */
        a = "JavaScript"
        document.write('a ="JavaScript", datatype: ', typeof a, "<br/>")
        b = a
        document.write('b = a, datatype: ', typeof b, "<br/>")
        c = ' Brendan Eich '
        document.write("c = ' Brendan Eich ', datatype: ", typeof c, "<br/>")
        d = c[2]
        document.write('d = c[2], datatype: ', typeof d, "<br/>")
        e = 10
        document.write('e = 10, datatype: ', typeof e, "<br/>")
        b = c + b
        document.write('b = c + b, datatype: ', typeof b, "<br/>")
        d = d * 509
        document.write('d = d * 509, datatype: ', typeof d, "<br/>")
        e *= 509
        document.write('e *= 509, datatype: ', typeof e, "<br/>")
    </script>

</body>

</html>
