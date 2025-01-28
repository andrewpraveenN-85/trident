<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Upcoming Projects</title>
    <link href="../src/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Apply Lora font globally */
        body {
            font-family: 'Lora', serif;
        }

        /* Hide modal initially */
        #modal {
            display: none;
        }
    </style>
</head>
<body class="bg-[#F5F1E5]">
    <!-- Main Section -->
    <section class="container mx-auto p-4 sm:p-6 text-center">
        <!-- Heading -->
        <h1 class="text-3xl sm:text-4xl font-bold text-[#674636] mb-4">UPCOMING PROJECTS</h1>
        <p class="text-sm sm:text-lg text-gray-700 mb-8">
            We’re excited to share what’s next at Trident Residencies! Our upcoming projects are thoughtfully designed 
            to bring modern living and comfort together, creating homes you’ll love.
        </p>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <!-- Card Template -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 transform hover:scale-105">
                <img src="up1.webp" alt="Project Image" class="w-full h-40 sm:h-60 object-cover">
                <div class="bg-[#674636] text-white text-center py-4">
                    <p class="font-bold text-lg">Project Name</p>
                    <p class="text-sm">Project Address</p>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 transform hover:scale-105">
                <img src="up2.webp" alt="Project Image" class="w-full h-40 sm:h-60 object-cover">
                <div class="bg-[#674636] text-white text-center py-4">
                    <p class="font-bold text-lg">Project Name</p>
                    <p class="text-sm">Project Address</p>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 transform hover:scale-105">
                <img src="up1.webp" alt="Project Image" class="w-full h-40 sm:h-60 object-cover">
                <div class="bg-[#674636] text-white text-center py-4">
                    <p class="font-bold text-lg">Project Name</p>
                    <p class="text-sm">Project Address</p>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 transform hover:scale-105">
                <img src="up2.webp" alt="Project Image" class="w-full h-40 sm:h-60 object-cover">
                <div class="bg-[#674636] text-white text-center py-4">
                    <p class="font-bold text-lg">Project Name</p>
                    <p class="text-sm">Project Address</p>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 transform hover:scale-105">
                <img src="up1.webp" alt="Project Image" class="w-full h-40 sm:h-60 object-cover">
                <div class="bg-[#674636] text-white text-center py-4">
                    <p class="font-bold text-lg">Project Name</p>
                    <p class="text-sm">Project Address</p>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 transform hover:scale-105">
                <img src="up2.webp" alt="Project Image" class="w-full h-40 sm:h-60 object-cover">
                <div class="bg-[#674636] text-white text-center py-4">
                    <p class="font-bold text-lg">Project Name</p>
                    <p class="text-sm">Project Address</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center px-4">
            <div class="bg-white rounded-lg shadow-lg w-full sm:w-2/3 lg:w-1/2 flex flex-col sm:flex-row overflow-hidden">
                <!-- Left Image Section -->
                <div class="w-full sm:w-1/2">
                    <img src="uploadbox.webp" alt="Project View" class="w-full h-48 sm:h-full object-cover">
                </div>

                <!-- Right Form Section -->
                <div class="w-full sm:w-1/2 bg-gray-50 p-6 sm:p-8 relative">
                    <!-- Close Button -->
                    <button class="absolute top-4 right-4 text-gray-500 text-2xl sm:text-3xl font-bold hover:text-gray-700" onclick="closeModal()">
                        &times;
                    </button>

                    <!-- Form Heading -->
                    <h1 class="text-xl sm:text-2xl font-bold text-[#674636] mb-4 sm:mb-6">Add a New Upcoming Project</h1>

                    <!-- Form -->
                    <form action="/upload" method="POST" enctype="multipart/form-data" class="space-y-4 sm:space-y-6">
                        <input 
                            type="text" 
                            name="project_name" 
                            placeholder="Project Name" 
                            class="w-full border border-indigo-300 rounded-lg p-3 sm:p-4 focus:ring focus:ring-indigo-200"
                        >
                        <input 
                            type="text" 
                            name="location" 
                            placeholder="Location" 
                            class="w-full border border-indigo-300 rounded-lg p-3 sm:p-4 focus:ring focus:ring-indigo-200"
                        >
                        <input 
                            type="text" 
                            name="land_size" 
                            placeholder="Land Size" 
                            class="w-full border border-indigo-300 rounded-lg p-3 sm:p-4 focus:ring focus:ring-indigo-200"
                        >

                        <!-- Styled File Upload -->
                        <label class="block w-full bg-gray-100 border border-gray-300 rounded-lg py-4 px-6 text-gray-500 cursor-pointer hover:bg-gray-200 transition">
                            <span class="flex justify-between items-center">
                                Upload Images
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 sm:h-6 w-5 sm:w-6 text-[#674636]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                            </span>
                            <input 
                                type="file" 
                                name="project_image" 
                                accept="image/*" 
                                class="hidden"
                            >
                        </label>

                        <div class="mt-4 sm:mt-6">
                            <button 
                                type="submit" 
                                class="w-full bg-[#674636] text-white py-3 sm:py-4 rounded-lg hover:bg-[#674636] transition"
                            >
                                Add Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script>
        function openModal() {
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>
</html>
