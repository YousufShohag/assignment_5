<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Your portfolio content goes here -->
    <div class="bg-gray-100 min-h-screen">
        <nav class="bg-blue-500 p-4 text-white">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{url('/')}}"><h1 class="text-2xl font-semibold">Yousuf Shohag</h1></a>
                <div class="space-x-4">
                    <a href="{{url('/')}}" class="hover:underline">Home</a>
                    <a href="{{url('projects')}}" class="hover:underline">Projects</a>
                    <a href="{{url('workexperiences')}}" class="hover:underline">Work Experinces</a>
                </div>
            </div>
        </nav>

 <!-- Header Section -->
 <section id="about" class="container mx-auto py-8">
    <div class="text-left">
        <h2 class="text-3xl font-semibold mb-4">{{$workexperienesHeader['title']}}</h2>
        <p class="font-semibold mb-4">{{$workexperienesHeader['description']}}</p>
        <p class="text-gray-600">{{$workexperienesHeader['short_description']}}</p>
    </div>
</section>

        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portfolio items go here -->
                @foreach ($workexperiences as $workexperience)
                <a href="{{route('workexperiencedetail' , $workexperience['id'])}}"><div class="bg-white rounded shadow p-6">
                    <p class="text-lg font-semibold "><b>Work Number:</b> 0{{$workexperience['id']}}</p>
                    <p class="text-lg font-semibold "><b>Work Name: </b>{{$workexperience['workName']}}</p>
                    <p class="text-lg font-semibold "><b>Start Date: </b>{{$workexperience['workDate']}}</p>
                    <p class="text-lg font-semibold "><b>Description: </b>{{$workexperience['workDescription']}}</p>
                </div></a>
                @endforeach
            </div>
        </div>
    </div>


    <div class="container mx-auto">
        <p class="text-center font-semibold mb-6 text-gray-600">All Rights Reserved by Yousuf Shohag (Using Taliwind
            CSS)</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>

</html>
