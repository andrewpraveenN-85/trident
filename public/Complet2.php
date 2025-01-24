<?php
include 'db_connect.php';



// Fetch projects from the database
$sql = "SELECT id, project_name, locations, images FROM complete_projects";
$result = $conn->query($sql);

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Upcoming Projects</title>
    <link href="../src/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
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
<body class="bg-white">
   <!-- Back Arrow -->
<div class="flex justify-start p-4">
  <a href="index.php" class="flex items-center text-red-500 hover:text-red-700 text-base sm:text-lg md:text-xl font-medium">
    <i class="fas fa-arrow-left mr-2"></i>
    <span>Back</span>
  </a>
</div>


    <!-- Main Section -->
    <section class="container mx-auto px-4 sm:px-6 py-6 text-center">
        <!-- Heading -->
        <h1 class="text-3xl sm:text-4xl font-bold text-red-800 mb-4">COMPLETED PROJECTS</h1>
        <p class="text-base sm:text-lg text-gray-700 mb-8">
            We’re proud of the homes we’ve built and the dreams we’ve made a reality. Each project reflects our commitment to quality and modern design.
            Explore our completed projects and see how we’ve created spaces for better living.
        </p>

        <!-- Show success alert -->
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            echo '<script>alert("' . $_SESSION['message'] . '");</script>';
            unset($_SESSION['message']);
        }
        ?>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $project_id = $row['id']; 
                    $project_name = htmlspecialchars($row['project_name']);
                    $locations = htmlspecialchars($row['locations']);
                    $images = json_decode($row['images'], true);
                    if (is_array($images) && !empty($images)) {
                        $first_image = $images[0];
                        $image_path = "completes/" . htmlspecialchars(basename($first_image));
                    } else {
                        $image_path = "/trident/public/default-image.webp"; // Placeholder image
                    }
                    ?>
                    <a href="CopltProj3.php?project_id=<?php echo $project_id; ?>" class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 transform hover:scale-105">
                        <div class="shadow-lg">
                            <img src="<?php echo $image_path; ?>" alt="Project Image" class="w-full h-60 object-cover">
                        </div>
                        <div class="bg-red-800 text-white text-center py-4 shadow-lg">
                            <p class="font-bold text-lg "><?php echo $project_name; ?></p>
                            <p class="text-sm"><?php echo $locations; ?></p>
                        </div>
                    </a>
                    <?php
                }
            } else {
                echo "<p class='text-gray-700'>No projects found.</p>";
            }
            ?>
        </div>

        
    </section>

    

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-80 flex items-center justify-center px-4">
        <div class="bg-white rounded-lg shadow-lg w-full sm:w-2/3 lg:w-1/2 flex flex-col sm:flex-row overflow-hidden">
            <!-- Left Image Section -->
            <div class="w-full sm:w-1/2">
                <img src="uploadbox.webp" alt="Project View" class="w-full h-48 sm:h-full object-cover">
            </div>

            <!-- Right Form Section -->
            <div class="w-full sm:w-1/2 bg-gray-50 p-6 sm:p-10 relative">
                <!-- Close Button -->
                <button class="absolute top-4 right-4 text-gray-500 text-2xl sm:text-3xl font-bold hover:text-gray-700" onclick="closeModal()">
                    &times;
                </button>

                <!-- Form Heading -->
                <h1 class="text-2xl sm:text-3xl font-bold text-red-800 mb-6 sm:mb-8">Add a New Complete Project</h1>

                <!-- Form -->
                <form action="Complet2.php" method="POST" enctype="multipart/form-data" class="space-y-4 sm:space-y-6">
                    <input 
                        type="text" 
                        name="project_name" 
                        placeholder="Project Name" 
                        class="w-full border border-red-300 rounded-lg p-3 sm:p-4 focus:ring focus:ring-red-200"
                    >
                    <input 
                        type="text" 
                        name="locations" 
                        placeholder="Location" 
                        class="w-full border border-red-300 rounded-lg p-3 sm:p-4 focus:ring focus:ring-red-200"
                    >
                    <input 
                        type="text" 
                        name="land_size" 
                        placeholder="Land Size" 
                        class="w-full border border-red-300 rounded-lg p-3 sm:p-4 focus:ring focus:ring-red-200"
                    >

                    <!-- Styled File Upload -->
                    <label class="block w-full bg-gray-100 border border-gray-300 rounded-lg py-4 px-6 sm:py-6 sm:px-8 text-gray-500 cursor-pointer hover:bg-gray-200 transition">
                        <span class="flex justify-between items-center">
                            Upload Images
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 sm:h-6 w-5 sm:w-6 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                            </svg>
                        </span>
                        <input 
                            type="file" 
                            name="project_image[]" 
                            accept="image/*" 
                            multiple
                            class="hidden"
                        >
                    </label>

                    <div class="mt-6 sm:mt-8">
                        <button 
                            type="submit" 
                            class="w-full bg-red-800 text-white py-3 sm:py-4 rounded-lg hover:bg-red-900 transition"
                        >
                            Add Project
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
