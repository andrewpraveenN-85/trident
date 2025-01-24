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
    <!-- Auto-Sliding Section -->
    <div class="relative w-full h-full overflow-hidden">
      <!-- Carousel -->
      <div id="sectionCarousel" class="flex transition-transform duration-700">
        <!-- Section 1 -->
        <div class="flex flex-col items-center justify-center w-full h-screen flex-shrink-0 bg-white text-white">
          <img src="../LOGO.webp" alt="Center Image" class="w-screen h-96 mb-4 object-contain" />
          <!-- Fixed Logout Button -->


          
                <!-- Arrow Down -->
                <div id="scroll-button" class="mt-8">
                  <a href="#trident-residencies">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-6 h-6 text-gray-700 animate-bounce"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </a>
                </div>
        </div>
        
        
        <!-- Section 2 -->
        <div class=" flex-col items-center justify-center w-full  h-screen flex flex-shrink-0 bg-white text-white ">
          <div class="relative flex items-start justify-start w-full h-screen bg-white text-white">
            <!-- Background Image -->
            <img src="../3526t.webp" alt="Background Image" class="hidden md:flex absolute inset-0 w-full h-full object-cover z-0 filter brightness-75 contrast-80" />
            
            <!-- Text Content -->
            <div class="relative z-10 flex flex-col items-start justify-center mt-60 text-left p-8 lg:p-16">
              <h1 class="text-6xl font-bold text-blue-900 mb-2">TRIDENT</h1>
              <h2 class="text-5xl font-semibold text-gray-700 mb-6">Residencies Pvt Ltd</h2>
              <div class="border-t border-gray-400 w-60 my-4"></div>
              <button class="px-6 py-2 text-3xl font-semibold text-white bg-blue-900 rounded-full hover:bg-blue-800 transition duration-300 mb-6">
                Call Us
              </button>
              <p class="text-3xl font-semibold text-gray-800">
                077 - 3002345 / 011 - 2243432
              </p>
            </div>
            

          </div>
        </div>
        

        <!-- Section 3 -->
        <div class="relative items-center justify-center w-full h-screen  flex-shrink-0 bg-black text-white flex">
          <!-- Background Image with Opacity -->
          <div class="absolute inset-0 bg-cover bg-center opacity-70" style="background-image: url('../page3s1.webp');"></div>
        
          <!-- Content -->
          <div class="relative flex items-center justify-between max-w-7xl w-full px-6">
            <!-- Left Section: Images -->
            <div class="flex hidden md:flex space-x-6">
              <!-- Image 1 -->
              <div class="border-8 border-[#D8FEA6] p-0">
                <img src="../l1.webp" alt="Luxury House" class="object-cover" style="width: 350px; height: 350px;" />
              </div>
              <!-- Image 2 -->
              <div class="border-8 border-[#D8FEA6] p-0">
                <img src="../l2.webp" alt="Luxury Interior" class="object-cover" style="width: 350px; height: 350px;" />
              </div>
              <!-- Image 3 -->
              <div class="border-8 border-[#D8FEA6] p-0">
                <img src="../l3.webp" alt="Luxury Kitchen" class="object-cover" style="width: 350px; height: 350px;" />
              </div>
            </div>
        
            <!-- Right Section: Text -->
            <div class="ml-12 text-[#D8FEA6] text-left">
              <h1 class="text-6xl font-bold mb-6">LUXURY DESIGNS...</h1>
              <p class="text-2xl leading-relaxed">Extraordinary Style With Extraordinary Locations</p>
            </div>
          </div>
        </div>
        
        
        
        <!-- Section 4 (Duplicate for seamless loop) -->
        <div class="flex flex-col items-center justify-center w-full h-screen flex-shrink-0 bg-white text-white">
          <img src="../LOGO.webp" alt="Center Image" class="w-screen h-96 mb-4 object-contain" />
          <!-- Arrow Down -->
          <div id="scroll-button" class="mt-8">
            <a href="#trident-residencies">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-6 h-6 text-gray-700 animate-bounce"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19 9l-7 7-7-7"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript for Auto-Scrolling -->
  <script>
    const sectionCarousel = document.getElementById('sectionCarousel');
    const slides = sectionCarousel.children.length - 1; // Total slides minus the duplicate for looping
    let index = 0;

    function autoSlideSections() {
      index++;
      sectionCarousel.style.transition = "transform 0.7s ease";
      sectionCarousel.style.transform = `translateX(-${index * 100}%)`;

      // Reset to the first slide for seamless looping
      if (index >= slides) {
        setTimeout(() => {
          sectionCarousel.style.transition = "none"; // Disable animation for reset
          sectionCarousel.style.transform = `translateX(0)`;
          index = 0;
        }, 700); // Match the transition duration (0.7s)
      }
    }

    // Auto-slide every 3 seconds
    setInterval(autoSlideSections, 3000);
  </script>




  </div>





 

<style>
  html {
  scroll-behavior: smooth;
}

</style>

  </div>


  
  




  
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
