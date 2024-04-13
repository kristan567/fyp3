 <!DOCTYPE html>
 <html>

 <head>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
     <link href="js/scripts.js" rel="stylesheet" />
     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>






     <style>
         table {
             font-family: arial, sans-serif;
             border-collapse: collapse;
             width: 100%;
         }

         td,
         th {
             border: 1px solid #dddddd;
             text-align: left;
             padding: 8px;
         }

         tr:nth-child(even) {
             background-color: #dddddd;
         }
     </style>
 </head>

 <body>

     <div class="py-12">

         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

             <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                 <div class="p-6 text-gray-900">


                     <h2 class="text-center">Category</h2>



                     <div class="addcat">

                         @role('Project Manager')
                             <button class="btn float-right" type="button" data-toggle="modal" data-target="#createcat"
                                 style="background-color: #1F2937; color:white;">
                                 Add Category
                             </button>
                         @endrole


                         {{-- body of the modal --}}
                         @include('App.Category.createcat')
                     </div>





                     @role('worker')
                         <table class="table table-bordered">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Name</th>
                                     <th>Description</th>
                                     {{-- <th>view</th> --}}
                                     {{-- <th>Edit</th>
                                     <th>delete</th> --}}
                                 </tr>
                             </thead>
                             <tbody>


                                 @if ($project->tasks)
                                     @foreach ($project->categories as $category)
                                         <tr>
                                             <td>{{ $category->id }}</td>
                                             <td>{{ $category->title }}</td>
                                             <td>{{ $category->description }}</td>

                                             {{-- <td>
                                <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>
                                </form>
                            </td> --}}
                                             {{-- <td>
                                                 <form action="{{ route('category.destroy', $category->id) }}"
                                                     method="POST">

                                                     <a class="btn btn-primary" data-toggle="modal" style="color: white;"
                                                         data-target="#editcat">Edit</a>
                                                     @include('App.Category.editcat')


                                                 </form>
                                             </td>
                                             <td>
                                                 <form action="{{ route('category.destroy', $category->id) }}"
                                                     method="POST">



                                                     @csrf
                                                     @method('DELETE')
                                                     <button type="submit" class="btn btn-danger">Delete</button>
                                                 </form>

                                             </td> --}}
                                         </tr>
                                     @endforeach
                                 @else
                                     <tr>
                                         <td colspan="3">No categories found</td>
                                     </tr>
                                 @endif

                                 {{-- @foreach ($project->categories as $category)
                <li>{{ $category->name }} - {{ $category->description }}</li>
                @endforeach --}}

                                 {{-- 
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                </tr>
             
                 @endforeach --}}






                             </tbody>
                         </table>
                     @endrole

                     @role('Project Manager')


                         <table class="table table-bordered">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Name</th>
                                     <th>Description</th>
                                     {{-- <th>view</th> --}}
                                     <th>Edit</th>
                                     <th>delete</th>
                                 </tr>
                             </thead>
                             <tbody>


                                 @if ($project->tasks)
                                     @foreach ($project->categories as $category)
                                         <tr>
                                             <td>{{ $category->id }}</td>
                                             <td>{{ $category->title }}</td>
                                             <td>{{ $category->description }}</td>

                                             {{-- <td>
                               <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                               <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>
                               </form>
                           </td> --}}
                                             <td>
                                                 <form action="{{ route('category.destroy', $category->id) }}"
                                                     method="POST">

                                                     <a class="btn btn-primary" data-toggle="modal" style="color: white;"
                                                         data-target="#editcat">Edit</a>
                                                     @include('App.Category.editcat')


                                                 </form>
                                             </td>
                                             <td>
                                                 <form action="{{ route('category.destroy', $category->id) }}"
                                                     method="POST">



                                                     @csrf
                                                     @method('DELETE')
                                                     <button type="submit" onclick="return confirm('Are you sure you want to delete to this category?')" class="btn btn-danger">Delete</button>
                                                 </form>

                                             </td>
                                         </tr>
                                     @endforeach
                                 @else
                                     <tr>
                                         <td colspan="3">No categories found</td>
                                     </tr>
                                 @endif

                                 {{-- @foreach ($project->categories as $category)
               <li>{{ $category->name }} - {{ $category->description }}</li>
               @endforeach --}}

                                 {{-- 
               @foreach ($categories as $category)
               <tr>
                   <td>{{ $category->id }}</td>
                   <td>{{ $category->title }}</td>
                   <td>{{ $category->description }}</td>
               </tr>
            
                @endforeach --}}






                             </tbody>
                         </table>
                     @endrole

                 </div>
             </div>
         </div>
     </div>










     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
     </script>
     <script src="js/scripts.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
     <script src="assets/demo/chart-area-demo.js"></script>
     <script src="assets/demo/chart-bar-demo.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
         crossorigin="anonymous"></script>
     <script src="js/datatables-simple-demo.js"></script>


 </body>

 </html>
