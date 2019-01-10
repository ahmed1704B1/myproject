<!DOCTYPE html>
<html>
    <head>
        <title>marksheet calculation</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
    <form method="post" action="Form_2.php" name="marksheet" id="marksheet"
    action="show_marksheet.php">
    <table border="1">
      <tr>
        <td colspan="2">
        <h3>
        <center>Enter student details</center>
         </h3>
         </td>
      </tr>
       <tr>
         <td>Student name</td>
         <td>
            <input name="name" type="text" placeholder =" enter student name" required
            >
           </input>
           </td>
         </tr>
         <tr>
          <td>Student roll no.</td>
          <td><input name="rollno" type="text" placeholder="enter roll no." required></input></td>
         </tr>
         <tr>
           <td>English marks</td>
           <td><input name="english" type="text" placeholder="enter marks" required></input></td>
         </tr>
         <tr>
           <td>pak Studies</td>
            <td> <input type="text" placeholder="enter marks" required></input></td>
          </tr>
          
            <input type="text"></input>
           </td>
          </tr>

           <tr>
             <td>Computer science</td>
             <td><input type="text" placeholder="enter marks" required></input></td></tr>
           <tr>
             <td>Maths marks</td>
             <td><input type="text" placeholder="enter marks"</td>
           </tr>

           <tr>
             <td>Chemsitry</td>
             <td><input type="text" placeholder="enter marks" required></input></td></tr>
             <tr>
             <td>sindi</td>
             <td><input type="text" placeholder="enter marks" required></input></td></tr>
             <tr>
             


           <tr>
            <td colspan="2">
            <center>
             <input type="submit" name="btn1" value="Print Marksheet">
             </input>
             </center>
             </td>
            </tr>
    
    </table>
    </form>
        
    </body>
</html>