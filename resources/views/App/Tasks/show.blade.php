

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    


   
    <style>
        /* Style for the form container */
        .form-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Style for form labels */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        /* Style for input fields */
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style for image */
        img {
            display: block;
            margin-bottom: 10px;
        }

        /* Style for file input */
        input[type="file"] {
            margin-bottom: 10px;
        }

        /* Style for submit button */
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Style for submit button on hover */
        button[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>

</head>
<body>
    
       
            
      
    <x-tenant-app-layout>
        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
             
                    <div class="p-6 text-gray-900">
                  

                        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                            
                         {{ $task->title }}
            
                        </h2>

                        <br>
                      
    
                        <form action="{{ route('task.update', $task->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="mt-4">
                                <x-input-label for="task_id" :value="__('Enter Task')" /><br>
                                <select class="block mt-1 w-full" id="task_id" name="task_id">
                                    <option value="">Select Task</option>

                                    <option value="{{ $task->id }}">{{ $task->title }}</option>

                                </select>
                            </div>

                            <div class="col-sm-4">
                                <h3>Before</h3>
                                <div>
                                    <label for="current_photo">Current Photo:</label>
                                    <img src="{{ asset('storage/' . $task->photo) }}" alt="Current Photo"
                                        width="200">
                                </div>

                                <!-- Upload New Photo -->
                                <div>
                                    <label for="new_photo">Upload New Photo:</label>
                                    <input type="file" id="new_photo" name="new_photo1">
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit">Update Task</button>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <h3>Column 2</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                            </div>

                            <div class="col-sm-4">
                                <h3>After</h3>
                                <div>
                                    <label for="current_photo">Current Photo:</label>
                                    <img src="{{ asset('storage/' . $task->photo) }}" alt="Current Photo"
                                        width="200">
                                </div>

                                <!-- Upload New Photo -->
                                <div>
                                    <label for="new_photo">Upload New Photo:</label>
                                    <input type="file" id="new_photo" name="new_photo2">
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit">Update Task</button>
                                </div>
                            </div>
                        </form>
                        
    
                    </div>
                </div>
            </div>
        </div>

   

   



    </x-tenant-app-layout>
   
</body>
</html>







