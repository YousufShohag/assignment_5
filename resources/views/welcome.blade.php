<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-gray-100 min-h-screen">
        <!-- Navigation -->
        <nav class="bg-blue-500 p-4 text-white">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/"><h1 class="text-2xl font-semibold">Yousuf Shohag</h1></a>
                <div class="space-x-4">
                    <a href="{{url('projects')}}" class="hover:underline">Projects</a>
                    <a href="{{url('workexperiences')}}" class="hover:underline">Work Experinces</a>
                </div>
            </div>
        </nav>

        <!-- About Section -->
        <section id="about" class="container mx-auto py-8">
            <div class="text-center">
                <h2 class="text-3xl font-semibold mb-4">Welcome! </h2>
            </div>

            <div class="text-left pt-5">
                <h3 class="text-4xl font-semibold mb-4 uppercase"> {{ $profile['name'] }}</h3>
                <h6 class="text-black-600 pb-2">{{ $profile['short_description'] }}</h6>
                <p class="text-gray-600 pb-2"><b>Website: </b>{{ $profile['website'] }}</p>
                <p class="text-gray-600 pb-2"><b>Phone: </b>{{ $profile['phone'] }}</p>
                <p class="text-gray-600 pb-2"><b>City: </b>{{ $profile['city'] }}</p>
                <p class="text-gray-600 pb-2"><b>Designation:</b> {{implode(' & ', $profile['designations']) }}</p>
                {{-- <p class="text-gray-600 pb-2"><b>github link: </b><a href="https://github.com/YousufShohag">{{
                        $profile['github'] }}</a></p> --}}
                       <a href="https://www.facebook.com/iusuf.shohag/"><button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #1877f2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-4 w-4"
                          fill="currentColor"
                          viewBox="0 0 24 24">
                          <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                      </button></a>

                      <!-- Github -->
                        <a href="https://github.com/YousufShohag"><button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #333">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                        </button></a>

                        <!-- Linkedin -->
                        <a href="https://www.linkedin.com/"><button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #0077b5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg>
                        </button></a>



            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="bg-white py-8">
            <div class="container mx-auto">
                <h2 class="text-3xl text-center font-semibold mb-6">Projects</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project items go here -->
                    <div class="bg-gray-200 rounded p-6">
                        <h3 class="text-xl font-semibold mb-2"><b>Project Name:</b> Banking App</h3>
                        <p class="text-gray-600">This is the Simple Banking App using WEB and CLI</p>
                    </div></a>

                    <div class="bg-gray-200 rounded p-6">
                        <h3 class="text-xl font-semibold mb-2"><b>Project Name:</b> Banking App CLI</h3>
                        <p class="text-gray-600">This is the Simple Banking App using CLI</p>
                    </div></a>

                    <div class="bg-gray-200 rounded p-6">
                        <h3 class="text-xl font-semibold mb-2"><b>Project Name:</b> CLI Design</h3>
                        <p class="text-gray-600">This is the Simple CLI</p>
                    </div></a>

                    <!-- Add more project items as needed -->
                </div>

            </div>
            <div class="container mx-auto">
                <p class="text-right font-semibold mb-6 text-gray-600"><a href="{{url('projects')}}">More >></a></p>
            </div>

        </section>


        <!-- Work Experience Section -->
        <section id="projects" class="bg-white py-8">
            <div class="container mx-auto">
                <h2 class="text-3xl text-center font-semibold mb-6">Work Experience</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project items go here -->
                    <div class="bg-gray-200 rounded p-6">
                        <h3 class="text-xl font-semibold mb-2"><b>Work Name: </b>Imperial </h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet...........</p>
                    </div>

                    <div class="bg-gray-200 rounded p-6">
                        <h3 class="text-xl font-semibold mb-2"><b>Work Name: </b>Bank of USA</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet...........</p>
                    </div>

                    <div class="bg-gray-200 rounded p-6">
                        <h3 class="text-xl font-semibold mb-2"><b>Work Name: </b>ASA Regional</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet...........</p>

                    </div>

                    <!-- Add more project items as needed -->
                </div>
            </div>
            <div class="container mx-auto">
                <p class="text-right font-semibold mb-6 text-gray-600"><a href="{{url('workexperiences')}}">More >></a>
                </p>
            </div>
        </section>
    </div>

    <div class="container mx-auto">
        <p class="text-center font-semibold mb-6 text-gray-600">All Rights Reserved by Yousuf Shohag (Using Taliwind
            CSS)</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>

</html>
