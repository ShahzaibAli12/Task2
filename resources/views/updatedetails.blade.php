<html>
   
   <head>
      <title>Record Edit</title>
      @include('layouts.header')
   </head>
   
   <body>
      <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'name' 
                     value = '<?php echo$users[0]->name; ?>'/>
               </td>
        
               <td>Email</td>
               <td>
                  <input type = 'email' name = 'email' 
                     value = '<?php echo$users[0]->email; ?>'/>
               </td>
              
               <td>Message</td>
               <td>
                  <input type = 'text' name = 'message' 
                     value = '<?php echo$users[0]->message; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update student" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>