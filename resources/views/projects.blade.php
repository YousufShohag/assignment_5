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
        <h2 class="text-3xl font-semibold mb-4">{{$projectsHeader['title']}} </h2>
        <h5 class="font-semibold mb-4">{{$projectsHeader['description']}}  </h5>
        <p class="text-gray-600">{{$projectsHeader['short_description']}}</p>
    </div>
</section>

        <div class="container mx-auto py-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portfolio items go here -->
                @foreach ($projects as $project)
                <a href="{{route('projectDetails' , $project['id'])}}"><div class="bg-white rounded shadow p-6">
                    <p class="text-lg font-semibold mb-2"><b>Project Name: </b>{{$project['project_name']}}</p>
                    <p class="text-lg font-semibold mb-2"><b></b>{{$project['description']}}</p>
                    <p class="text-lg font-semibold mb-2"><b>Start Date: </b>{{$project['project_date']}}</p>
                    <p class="text-lg font-semibold mb-2"><b>Client: </b>{{$project['client']}}</p>
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
