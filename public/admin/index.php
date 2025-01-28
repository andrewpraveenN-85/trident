<?php
session_start();
if(!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'){
    header("Location: login.php");
    exit();
}

include '../db_connect.php'; 

$sql = "SELECT project_name, locations, images FROM complete_projects";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trident</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="../../src/output.css" rel="stylesheet">
</head>

<body class="bg-gray-50">














   <!-- Outer Container -->
   <div class="flex flex-col items-center bg-white h-screen">
   <a
  href="logout.php"
  class="fixed top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-md shadow-lg hover:bg-red-600 transition duration-300 z-50"
>
  Logout
</a>
    

  
  




  
  <section class="mt-8 w-full">
  <h1
          class="text-4xl md:text-5xl font-bold text-center text-indigo-900 mb-8 "
          style="font-family: 'Lora', serif; font-weight: 700;"
        >
          COMPLETED PROJECTS
        </h1>
  <!-- Grid Layout -->
  <div class="grid md:grid-cols-3 grid-cols-2 gap-0 w-full h-[400px]  object-cover filter brightness-75 contrast-80 ">
  <?php
  $count = 0;
    if ($result->num_rows >0) {
      while ($row = $result->fetch_assoc()) {
        $count++;
        error_log("Project: " . $row['project_name'] . ", Image: " . $row['images']);
            // Extracting data from each row
            $projectName = $row['project_name'];
            $location = $row['locations'];
            $images = json_decode($row['images'], true);
            $image = $images[0];

            if($count >= 4){
              break;
            }
    ?>
    <!-- Flip Box -->
    <div class="relative group w-full h-full bg-gray-200 overflow-hidden">
          <!-- Front Image -->
          <div
            class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('<?php echo htmlspecialchars($image); ?>');"
          ></div>
          <!-- Back Panel -->
          <div
            class="absolute inset-0 text-white flex flex-col items-center justify-center px-4 text-center transition-transform duration-500 translate-y-full group-hover:translate-y-0"
            style="background-color: #2D2E70;"
          >
            <h2 class="text-xl font-bold"><?php echo htmlspecialchars($projectName); ?></h2>
            <p class="text-sm mt-2"><?php echo htmlspecialchars($location); ?></p>
          </div>
        </div>
    <?php
        }
    } else {
        echo "<p class='text-center text-gray-500'>No projects available.</p>";
    }
    $conn->close(); 
    ?>

  </div>
  <div class="flex items-center justify-center mt-4 h-16 w-auto">
    
      <a href="Complet2.php" class="inline-block px-6 py-2 border-2 border-blue-900 text-blue-900 text-lg font-semibold rounded-full text-center hover:bg-blue-900 hover:text-white transition duration-300">
        See More
      </a>
    
  </div>
</section>








    
      <!-- Include Lora Font from Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">

      <section class="flex flex-col items-center justify-start md:pt-24 bg-white">
        <!-- Upcoming Projects Title -->
        <h1
          class="text-4xl md:text-5xl font-bold text-indigo-900 mb-8 text-center"
          style="font-family: 'Lora', serif; font-weight: 700;  "
        >
          UPCOMING PROJECTS
        </h1>
      
        <!-- Content Section -->
        <div class="flex flex-row  justify-start w-full">


          
          <!-- Left Image -->
          <div
          class="w-full h-60 overflow-hidden shadow-lg relative object-cover filter brightness-75 md:w-4/6 md:h-96 hidden md:inline contrast-80"
          style="
            border-radius: 0; /* Reset radius for mobile */
            border-top-right-radius: 50px; /* Apply for larger screens */
            border-bottom-right-radius: 50px; /* Apply for larger screens */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
          "
          >
          <img
            src="../page3s11.webp"
            alt="Project 1"
            class="w-full h-full object-cover"
            style="
              border-radius: 0; /* Reset radius for mobile */
              border-top-right-radius: 50px; /* Apply for larger screens */
              border-bottom-right-radius: 50px; /* Apply for larger screens */
            "
          />
          </div>

        
      
          <!-- Text Content -->
          <div class="md:w-2/3 w-full px-1 items-center text-center md:mt-32 md:ml-36">
            <p
              class="font-bold text-3xl text-gray-900 mb-4"
              style="font-family: 'Lora', serif;"
            >
              If you can dream it, <br> we can build it.
            </p>
            <p class="text-gray-700 leading-relaxed text-center text-lg " style="font-family: 'Lora', serif;">
              We adopt a uniquely personalized perspective to each project to deliver stunning spaces of optimal function.
              Renowned for our architectural understanding and masterful craftsmanship, our portfolio of residential
              projects...
            </p>
            <button>
              <div class="flex items-center justify-center mt-4 h-16 w-auto" style="font-family: 'Lora', serif;">
                <a href="upload.php" class="inline-block px-6 py-2 bg-black text-white text-lg font-semibold rounded-full text-center hover:bg-gray-800 transition duration-300">
                  View More
                </a>
              </div>
              
            </button>
          </div>
      
          <!-- Right Image -->
          
        
          <div class="w-full md:flex flex-col justify-end items-end md:inline hidden mt-48">
          <div
          class="w-96 h-96 overflow-hidden shadow-lg relative object-cover filter brightness-75 contrast-80"
          style="
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
          "
          >
          <img
            src="../page3s2.webp"
            alt="Project 2"
            class="w-full h-full object-cover"
            style="
              border-top-left-radius: 50px;
              border-bottom-left-radius: 50px;
            "
          />
          </div>
          </div>
        </div>  
        
      </section>
























      



      
    

      
      
      
      




</body>
</html>
