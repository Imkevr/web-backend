<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   {{-- bootstrap css CDN  --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   {{-- bootstrap js CDN  --}}
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <title>To Dowies</title>
</head>
<body>

    <div class="container">
         <div class="col-md-offset-2 col-md-8">
            <div class="row">
                <h1>To Dowies List</h1>
            </div>

            <div class="row">
                <form action="{{ route('tasks.store') }}" method="POST">
                {{ csrf_field()}}
                    <div class="col-md-9">
                        <input type="text" name="newTaskName" class="form-control">
                         
                    </div>

                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary btn-block" value="Add Task">   
                    </div>
                </form>
            </div>
         </div>
    </div>
    
</body>
</html>