<html>
   <head>
      <title>View Records</title>
      @include('layouts.header')

      <style>


      </style>
   </head>
   
   <body>
            

      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
  
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
        
            <td>{{ $user->email }}</td>
           
            <td>{{ $user->message }}</td>
            <td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
            <td><a href="delete/{{ $user->id }}" onclick='return confirm("Are you sure")'>Delete</a></td>

           
         </tr>
         @endforeach
   
  </tbody>
</table>
   </body>
</html>