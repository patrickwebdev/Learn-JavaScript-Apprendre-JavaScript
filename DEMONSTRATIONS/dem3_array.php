<!DOCTYPE html>
<html lang="en">

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
        ---------------------------------------------------------------
        1-Unidimensional Numbered Index Array
        ---------------------------------------------------------------
        */   
        
        //Different ways to declare, but same results 
        myFirstArray = new Array()
        mySecondArray = []
        myThirdArray = []

        //Different ways to assign values, but same result
        myFirstArray [0]="Element 1 Index 0"
        myFirstArray[1] ="Element 2 Index 1"

        mySecondArray =["Element 2 Index 1","Element 2 Index 1"]

        myThirdArray.push("Element 2 Index 0")
        myThirdArray.push("Element 2 Index 1")

        myFourthArray = Array("Element 2 Index 1","Element 2 Index 1")

        //Access an individual element using its index
        document.write(myFirstArray[0]+"<br/>")
        document.write(myFirstArray[1]+"<br/>")

        document.write(mySecondArray[0]+"<br/>")
        document.write(mySecondArray[1]+"<br/>")

        document.write(myThirdArray[0]+"<br/>")
        document.write(myThirdArray[1]+"<br/>")

        document.write(myFourthArray[0]+"<br/>")
        document.write(myFourthArray[1]+"<br/>")

        //Access all elements using a loop
        countArrElem = myFirstArray.length
        for (i = 0 ; i < countArrElem ; i++){
            document.write(myFirstArray[i]+"<br/>")
            document.write(mySecondArray[i]+"<br/>")
            document.write(myThirdArray[i]+"<br/>")
            document.write(myFourthArray[i]+"<br/>")
        }

        /* QUESTION 1-
        Is it possible to include data from different datatypes in a single array in JavaScript?
        */  

        /*
        ---------------------------------------------------------------
        2-Multidimensional Numbered Index Array
        ---------------------------------------------------------------
        */ 

        //Declare and Assign values
        my1stArray = Array(
                        Array("Element 1 Indexes 0 and 0","Element 2 Indexes 0 and 1"),
                        Array("Element 3 Indexes 1 and 0","Element 4 Indexes 1 and 1"),
                        Array("Element 5 Indexes 2 and 0","Element 6 Indexes 2 and 1")
                    )

        my2ndArray = [
                    ["Element 1 Indexes 0 and 0","Element 2 Indexes 0 and 1"],
                    ["Element 3 Indexes 1 and 0","Element 4 Indexes 1 and 1"],
                    ["Element 5 Indexes 2 and 0","Element 6 Indexes 2 and 1"]
                ]

        //Access an individual element using its index
        document.write(my1stArray[0][0]+"<br/>")
        document.write(my1stArray[2][1]+"<br/>")

        document.write(my2ndArray[0][0]+"<br/>")
        document.write(my2ndArray[2][1]+"<br/>")

        //Access all elements using a nested loop
        countArrRows = 3
        countArrColumns = 2
        for (i = 0 ; i < countArrRows ; i++){
            for (j = 0 ; j < countArrColumns ; j++){
                document.write(my1stArray[i][j]+"<br/>")
            }
        }

        countArrRows = 3
        countArrColumns = 2
        for (i = 0 ; i < countArrRows ; i++){
            for (j = 0 ; j < countArrColumns ; j++){
                document.write(my2ndArray[i][j]+"<br/>")
            }
        }


//Another example
        //Grades for 3 exam (column) for 4 students (rows)
        /*
                     midterm    project    final
        student 1    75         86         100
        student 2    95         66         70
        student 3    85         86         90
        student 4    88         56         60
        */
        grades=[[75,86,100],[95,66,70],[85,86,90],[88,56,60]]

        //Display an individual element
        document.write(grades[0][2]+"<br/>")

        /* 
        Index of all elements
        row column
        [0][0]
        [0][1]
        [0][2]

        [1][0]
        [1][1]
        [1][2]

        [2][0]
        [2][1]
        [2][2]

        [3][0]
        [3][1]
        [3][2]
            */

        //Display all the elements using a nested loop 
        for (i=0; i<=3;i++){
            for(j=0; j<=2; j++){
                document.write(grades[i][j]+"  ")
            }
            document.write("<br/>")
        }


        /* QUESTION 2-
        Is it possible to include arrays that do not contain the same number of elements 
        in a multidimentional array in JavaScript?
        */ 


        /*
        ---------------------------------------------------------------
        3-Object and properties (like Associative Arrays that doesn't exist in JS) 
        ---------------------------------------------------------------
        */ 
        //Declare and Assign values
        programmingLanguages = {
            "web": "HTML, CSS, PHP",
            "system": "C++, C, Python",
            "cli": "Dos, Bash, PowerShell",
            "database": "SQL, PLSQL, bBase"
        }

        //Access an individual element using its index
        document.write(programmingLanguages['web']+"<br/>")
        document.write(programmingLanguages.cli+"<br/>")

        //Access all elements using a loop
        for (associativeText in programmingLanguages)
            document.write(associativeText + 
                        " Programming Languages: " 
                        + programmingLanguages[associativeText] + "<br>")


        /* QUESTION 3-
        Is it possible to access each individual value associated with an associative key 
        when using an abject and property as an associative array?

        For example, is it possible to access only CSS below? 
        programmingLanguages = {"web": "HTML, CSS, PHP"}
        */

        //Object values as objects to create a like multidimensional associative array 
        //Declare and Assign values
        data = {
            "lang": {
                "web": "HTML, CSS, PHP",
                "system": "C++, C, Python",
                "cli": "Dos, Bash, PowerShell",
                "database": "SQL, PLSQL, bBase"
            },
            "os": {
                "windows": "win10, win11"
            }
        }

        document.write(data.lang.database+"<br/>")

         /*
        ---------------------------------------------------------------
        4-Methods that can be used to manipulate Arrays
        ---------------------------------------------------------------
        */ 
        array1=[1,3,5]
        array2=[2,4,6]
        array3=[1,5,2,6]

        //.length
        document.write(array1.length+"<br/>")
        
        //.indexof()
        document.write(array1.indexOf(5)+"<br/>")

        //.concat()
        array4=array1.concat(array2)
        document.write(array4+"<br/>")
        
        array5=array3.concat(3,4)
        document.write(array5+"<br/>")

        //.forEach    
        array1.forEach(value)

        function value(element, index, array)
        {
           document.write("Index " + index + " = " + element + "<br>")
        }

        //.join() : convert to string
        array7=['tu','es', 1, 'heros']
        document.write(array7.join(' ')+"<br/>")

        //sort()
        array8 =['x','j','a']
        array9 =[3,1,9]

        document.write(array8.sort()+"<br/>")  //ascending
        document.write(array9.sort()+"<br/>")  //ascending

        document.write(array8.sort().reverse()+"<br/>") //descending
        document.write(array9.sort().reverse()+"<br/>") //descending

        //.split()
        aString='Hello Montreal Quebec'

        stringToArray = aString.split(' ')

        document.write(stringToArray+"<br/>")
        document.write(stringToArray[0]+"<br/>")
        document.write(stringToArray[1]+"<br/>")
        document.write(stringToArray[1]+"<br/>")
        

        /* QUESTION 4-
        What built-in method allows you to convert a string to an array        
        */

        /*
        ---------------------------------------------------------------
        5-How to know you have an array 
        ---------------------------------------------------------------
        */

        //typeof() built-in function
        anArray=[0,1,2,3,4]
        document.write(typeof(anArray)+"<br/>") 

        //Array.isArray
        if (Array.isArray(anArray))
            document.write("I'm an ARRAY<br/>") 

        //instanceof Array
        if (anArray instanceof Array)
            document.write("I'm an ARRAY<br/>")


        /*-EXTRA - An additional operator with*/
        movie_name = "Sonic The Hedgedog"
        with (movie_name)
        {
            //Just write "length" works instead of writing "movie_name.lenght"
            document.write(movie_name + "contains " + length + " characters<br>")
            emptyCharacters=0

            for (i=0; i<length; i++){
                if (movie_name[i]==" ")
                    emptyCharacters++
            }
            document.write("Including " + emptyCharacters + " empty characters<br>")
        }

    </script>
</body>

</html>
