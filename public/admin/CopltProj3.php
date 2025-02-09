<?php
include '../db_connect.php';
session_start();
if(!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'){
    header("Location: login.php");
    exit();
}
// Fetch the project_id from the URL
$project_id = isset($_GET['project_id']) ? $_GET['project_id'] : null;

if ($project_id) {
    // Fetch project details from the database
    $sql = "SELECT `project_name`, `locations` , `images` FROM complete_projects WHERE id = $project_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
        $project_name = htmlspecialchars($project['project_name']);
        $locations = htmlspecialchars($project['locations']);
        $images = json_decode($project['images'], true);

            // Geocode the location using Nominatim API
            $geocode_url = "https://nominatim.openstreetmap.org/search?format=json&q=" . urlencode($locations);

            // Create a stream context with the User-Agent header
            $options = array(
                'http' => array(
                    'header' => "User-Agent: YourAppName/1.0 (your_email@example.com)\r\n"
                )
            );
            $context = stream_context_create($options);
    
            // Fetch data using the context with custom headers
            $response = file_get_contents($geocode_url, false, $context);
            $data = json_decode($response, true);
    
            if (isset($data[0])) {
                // Extract latitude and longitude from the first result
                $latitude = $data[0]['lat'];
                $longitude = $data[0]['lon'];
            } else {
                $latitude = 6.9271;
                $longitude = 79.8612;
            }
    
        } else {
            echo "Project not found!";
            exit;
        }
    } else {
        echo "No project selected!";
        exit;
    }
    
    $conn->close();
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <!-- Link Tailwind CSS -->
    <link href="../../src/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Add Google Fonts (Lora) -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">

    <!-- Apply Lora Font Globally -->
    <style>
        body {
            font-family: 'Lora', serif;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Main Section -->
    <section class="w-full p-4 sm:p-6">
        <!-- Heading Section -->
        <div class="text-center mt-6 sm:mt-8">
            <h1 
              class="text-3xl sm:text-4xl font-bold text-red-700" 
              style="font-family: 'Lora', serif;"
            >
            COMPLETE PROJECTS
            </h1>
            <p 
              class="text-base sm:text-lg text-red-800 mx-auto mt-4 leading-relaxed w-full sm:w-2/3" 
              style="font-family: 'Lora', serif;"
            >
            We’re proud of the homes we’ve built and the dreams we’ve made a reality. Each project reflects our commitment to quality and modern design.
            Explore our completed projects and see how we’ve created spaces for better living.
            </p>
        </div>

        <!-- Full-Width Image Section -->
        <div class="mt-6 sm:mt-8">
            <div class="relative">
              <img 
                src="<?php echo isset($images[0]) ? htmlspecialchars($images[0]) : ''; ?>"
                alt="Project Banner" 
                class="w-full h-48 sm:h-72 object-cover"
              >
              <!-- Address Overlay -->
              <div 
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50"
              >
                <p class="text-white text-lg sm:text-2xl font-bold px-4 text-center">
                <?php echo $locations; ?>
                </p>
              </div>
            </div>
        </div>
          
        <!-- Grid Section -->
        <div class="w-full mt-6 sm:mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Image Grid -->
                <div class="grid grid-cols-2 gap-4">
                <?php
                    if (!empty($images)) {
                        foreach (array_slice($images, 1) as $image) {
                            echo '<div class="rounded-lg overflow-hidden shadow-md">
                                    <img src="' . htmlspecialchars($image) . '" alt="Project Image" class="w-full h-40 sm:h-60 object-cover">
                                  </div>';
                        }
                    }
                    ?>
                </div>

                <!-- Google Map Section -->
                <div class="rounded-lg overflow-hidden shadow-md">
                    <iframe
                        src="https://www.openstreetmap.org/export/embed.html?bbox=<?php echo ($longitude-0.01); ?>%2C<?php echo ($latitude-0.01); ?>%2C<?php echo ($longitude+0.01); ?>%2C<?php echo ($latitude+0.01); ?>&layer=mapnik&marker=<?php echo $latitude; ?>%2C<?php echo $longitude; ?>"
                        class="w-full h-64 sm:h-full border-0" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
