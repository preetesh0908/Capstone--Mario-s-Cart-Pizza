<html>
   <head>
   <body>
      <form name="calculator">
         <table>
            <tr>
               <td colspan="4">
                  <input type="text" name="display" id="display" disabled>
               </td>
            </tr>
            <tr>
               <td><input type="button" name="one" value="1" onclick="calculator.display.value += '1'"></td>
               <td><input type="button" name="three" value="3" onclick="calculator.display.value += '3'"></td>
               <td><input type="button" class="operator" name="minus" value="-" onclick="calculator.display.value += '-'"></td>
            </tr>
            <tr>
               <td><input type="button" name="five" value="5" onclick="calculator.display.value += '5'"></td>
	       <td><input type="button" name= "seven" value="7" onclick="calculator.display.value += '7'"></td>
               <td><input type="button" class="operator" name="times" value="*" onclick="calculator.display.value += '*'"></td>
            </tr>
            <tr>
               <td><input type="button" name="nine" value="9" onclick="calculator.display.value += '9'"></td>
               <td><input type="button" id="clear" name="clear" value="clr" onclick="calculator.display.value = ''"></td>
               <td><input type="button" name="doit" value="=" onclick="calculator.display.value = eval(calculator.display.value)"></td>
            </tr>

         </table>
      </form>
   </body>
   </head>
</html>
