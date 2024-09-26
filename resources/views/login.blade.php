

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link href="./css/output.css" rel="stylesheet">

</head>

<body>
    <div class="h-svh w-svw flex flex-col items-center  place-content-center place-items-center align-middle bg-amber-600">
         @if($errors->any())
         <div class="bg-red-600 p-3 rounded ">
            <ul>
            @foreach($errors->all() as $error) <li> {{ $error}}</li> @endforeach
            </ul>
         </div>
         @endif
         @if(session("error"))
         <div class="bg-red-600 p-3 rounded ">
         {{session("error")}}    
         </div>
         @endif

         @if(session("done"))
         <div class="bg-green-600 rounded p-2">
           {{session("done")}}    
        </div>
         @endif
    
    <div class=" justify-center flex w-[400px] bg-white px-2  py-5 rounded-lg  ">
        <form class="flex flex-col gap-3 " action="{{ url("/login") }}" method="post">
            @csrf

            <input class=" bg-gray-300 h-12 w-full rounded-xl pl-2 "  
            placeholder="Enter your new email" name="email" type="text">
        
        <input class="h-12 bg-gray-300 w-full rounded-xl pl-2 "  placeholder="Enter your password" type="text" name="password">
        <input class="h-12 w-full  bg-blue-600 rounded-xl pl-2 "   type="submit">
        </form>
        </div>

    </div>
    
</body>
</html>