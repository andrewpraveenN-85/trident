<?php
include 'db_connect.php'; 

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
  <link href="../src/output.css" rel="stylesheet">
</head>

<body class="bg-gray-50">







<header class="bg-white shadow "></header>

  <div class=" bg-white mx-auto px-4 py-3 flex items-center justify-arround fixed z-10 w-full">


 <!-- Left Section: Hotline and Social Media -->
  
<a href="https://wa.me/94710777666"class="bg-white flex flex-col sm:flex-row items-center space-y-2 w-full sm:space-y-0 sm:space-x-4">
  <span class="text-red-500 font-semibold text-sm uppercase">Contact: +94 71 426 6679</span>
  </a>
  


 <!-- Right Section: Navigation Menu -->
 <nav class="flex space-x-6 hidden md:flex w-full">
        <a href="#section2" class="text-[#2D2E74] hover:underline font-medium">About Us</a>
        <a href="#section3" class="text-[#2D2E74] hover:underline font-medium">Completed Projects</a>
        <a href="#section4" class="text-[#2D2E74] hover:underline font-medium">Upcoming Projects</a>
        <a href="#section5" class="text-[#2D2E74] hover:underline font-medium">Pantry Designs</a>
        <a href="#section6" class="text-[#2D2E74] hover:underline font-medium">Contact Us</a>
      </nav>
      <style>
    html {
      scroll-behavior: smooth;
    }

<!-- Keyframes and Animation Styles -->
<style>
  /* Keyframes for fade and slide-in animation */
  @keyframes fadeInSlide {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Apply animation with delay to each link */
  .fade-slide {
    animation: fadeInSlide 0.6s ease-out forwards;
    opacity: 0; /* Ensure items are hidden before animation starts */
  }

  .fade-slide:nth-child(1) { animation-delay: 0.1s; }
  .fade-slide:nth-child(2) { animation-delay: 0.2s; }
  .fade-slide:nth-child(3) { animation-delay: 0.3s; }
  .fade-slide:nth-child(4) { animation-delay: 0.4s; }
</style>

<!-- JavaScript to Trigger Animation (Optional) -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".fade-slide");
    links.forEach(link => {
      // Apply animation class when the page loads or when the menu becomes visible
      link.classList.add("fade-slide");
    });
  });
</script>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Keyframes for fade and slide-in animation */
    @keyframes fadeInSlide {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    /* Apply animation with delay to each item */
    .fade-slide {
      animation: fadeInSlide 0.6s ease-out forwards;
    }
    .fade-slide:nth-child(1) { animation-delay: 0.1s; }
    .fade-slide:nth-child(2) { animation-delay: 0.2s; }
    .fade-slide:nth-child(3) { animation-delay: 0.3s; }
    .fade-slide:nth-child(4) { animation-delay: 0.4s; }
    .fade-slide:nth-child(5) { animation-delay: 0.5s; }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Wrapped Menu Component in a Div -->
  <div class="menu-component">
    <!-- Menu Button -->
    <button id="menuButton" class="flex items-center text-[#ED1C24] hover:text-[#000000] font-medium mt-2 ml-4">
      <i class="fas fa-bars mr-1"></i> MENU
    </button>

    <!-- Full-Screen Menu -->
    <div id="menuOverlay" class="fixed inset-0 bg-white bg-opacity-95 hidden z-50 flex items-center justify-center">
      <!-- Close Button -->
      <button id="closeMenu" class="absolute top-5 right-5 text-gray-600 text-2xl hover:text-gray-800">
        &times;
      </button>
      <!-- Menu Items -->
      <ul class="text-center space-y-6 text-2xl text-[#2D2E74] font-semibold">
        <li class="fade-slide"><a href="index.php" class="hover:underline">Home</a></li>
        <li class="fade-slide"><a href="Complet2.php" class="hover:underline">Completed Projects</a></li>
        <li class="fade-slide"><a href="upload.php" class="hover:underline">Upcoming Projects</a></li>
        <li class="fade-slide"><a href="pantry.html" class="hover:underline">Pantry Designs</a></li>
        
      </ul>
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    document.getElementById("menuButton").addEventListener("click", function () {
      const overlay = document.getElementById("menuOverlay");
      overlay.classList.remove("hidden");
      setTimeout(() => overlay.classList.add("flex"), 0); // Add flex for alignment after removing hidden
    });

    document.getElementById("closeMenu").addEventListener("click", function () {
      const overlay = document.getElementById("menuOverlay");
      overlay.classList.add("hidden");
      overlay.classList.remove("flex");
    });
  </script>
</body>










    </nav>
  </div>

















   <!-- Outer Container -->
   <div class="flex flex-col items-center bg-white h-screen">
    <!-- Auto-Sliding Section -->
    <div class="relative w-full h-full overflow-hidden">
      <!-- Carousel -->
      <div id="sectionCarousel" class="flex transition-transform duration-700">
        <!-- Section 1 -->
        <div class="flex flex-col items-center justify-center w-full h-screen flex-shrink-0 bg-white text-white">
          <img src="LOGO.webp" alt="Center Image" class="w-screen h-96 mb-4 object-contain" />
          
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
        <div  class=" flex-col items-center justify-center w-full  h-screen flex flex-shrink-0 bg-white text-white ">
          <div class="relative flex items-start justify-start w-full h-screen bg-white text-white">
            <!-- Background Image -->
            <img src="3526t.webp" alt="Background Image" class="hidden md:flex absolute inset-0 w-full h-full object-cover z-0 filter brightness-75 contrast-80" />
            
            <!-- Text Content -->
            <div class="relative z-10 flex flex-col items-start justify-center mt-60 text-left p-8 lg:p-16">
              <h1 class="text-6xl font-bold text-blue-900 mb-2">TRIDENT</h1>
              <h2 class="text-5xl font-semibold text-gray-700 mb-6">Residencies Pvt Ltd</h2>
              <div class="border-t border-gray-400 w-60 my-4"></div>
              <button class="px-6 py-2 text-3xl font-semibold text-white bg-blue-900 rounded-full hover:bg-blue-800 transition duration-300 mb-6">
                Call Us
              </button>
              <p class="text-3xl font-semibold text-gray-800">
                077-3219679 / 071-4266679
              </p>
            </div>
          </div>
        </div>
        

        <!-- Section 3 -->
        <div class="relative items-center justify-center w-full h-screen  flex-shrink-0 bg-black text-white flex">
          <!-- Background Image with Opacity -->
          <div class="absolute inset-0 bg-cover bg-center opacity-70" style="background-image: url('page3s1.webp');"></div>
        
          <!-- Content -->
          <div class="relative flex items-center justify-between max-w-7xl w-full px-6">
            <!-- Left Section: Images -->
            <div class="flex hidden md:flex space-x-6">
              <!-- Image 1 -->
              <div class="border-8 border-[#D8FEA6] p-0">
                <img src="l1.webp" alt="Luxury House" class="object-cover" style="width: 350px; height: 350px;" />
              </div>
              <!-- Image 2 -->
              <div class="border-8 border-[#D8FEA6] p-0">
                <img src="l2.webp" alt="Luxury Interior" class="object-cover" style="width: 350px; height: 350px;" />
              </div>
              <!-- Image 3 -->
              <div class="border-8 border-[#D8FEA6] p-0">
                <img src="l3.webp" alt="Luxury Kitchen" class="object-cover" style="width: 350px; height: 350px;" />
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
          <img src="LOGO.webp" alt="Center Image" class="w-screen h-96 mb-4 object-contain" />
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
  




  <section id="trident-residencies" class="min-h-screen bg-white flex flex-col items-center justify-center px-4 md:px-6 py-8 md:py-16">
  <div class="flex flex-col lg:flex-row items-center lg:space-x-12 max-w-7xl w-full">
    
    <!-- Left Image with Text Overlay -->
    <div class="relative w-full lg:w-1/2">
      <img
        src="7788.webp"
        alt="Building"
        class="rounded-lg object-cover w-full h-auto"
      >
    </div>

    <!-- Right Text Section -->
    <div class="mt-8 md:mt-12 lg:mt-0 lg:w-1/2">
      <h1 class="text-2xl md:text-3xl lg:text-4xl font-serif font-bold mb-6 text-black text-center lg:text-left" style="font-family: 'Lora', serif;">
        Welcome to Trident Residencies Pvt Ltd
      </h1>
      <p class="text-black text-base md:text-lg font-serif leading-6 md:leading-7 mb-4 text-center lg:text-left" style="font-family: 'Lora', serif;">
        Welcome to <strong>Trident Residencies</strong>, where your dream home becomes reality. Founded in 2017 by visionary entrepreneur Mr. Shan B, we craft homes that blend modern design with natural harmony.
      </p>
      <p class="text-black text-base md:text-lg font-serif leading-6 md:leading-7 mb-4 text-center lg:text-left" style="font-family: 'Lora', serif;">
        Guided by our promise, <strong>"Your Vision, Our Design,"</strong> we create spaces that redefine modern living with exceptional quality and thoughtful innovation.
      </p>
      <p class="text-black text-base md:text-lg font-serif leading-6 md:leading-7 text-center lg:text-left" style="font-family: 'Lora', serif;">
        Discover a home that’s more than a place to live—it’s a reflection of your aspirations. <strong>Trident Residencies: Where dreams come home.</strong>
      </p>
    </div>

  </div>
</section>

<style>
  html {
  scroll-behavior: smooth;
}

</style>

  </div>


  <section id="section2" class="bg-cover bg-center text-white h-[90vh] px-4 py-8 md:py-12" style="background-image: url('vision.webp');">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <div class="max-w-4xl mx-auto text-center p-4 md:p-8" style="font-family: 'Lora', serif;">
      <!-- Title -->
      <h1 class="text-3xl md:text-6xl font-bold uppercase mb-6 md:mb-8">
        Our Vision & Mission
      </h1>
      
      <!-- Our Vision Section -->
      <div class="mb-8">
        <h2 class="text-2xl md:text-4xl font-semibold mb-4">
          Our Vision
        </h2>
        <p class="text-base md:text-2xl leading-relaxed">
          To create homes that inspire, combining modern design, natural harmony, and lasting quality.
        </p>
      </div>
      
      <!-- White Line -->
      <div class="mb-8 mt-6">
        <img src="line.webp" alt="divider line" class="mx-auto w-1/2 h-1">
      </div>
      
      <!-- Our Mission Section -->
      <div>
        <h2 class="text-2xl md:text-4xl font-semibold mb-4 mt-6">
          Our Mission
        </h2>
        <p class="text-base md:text-2xl leading-relaxed mb-4">
          We bring your dream home to life with thoughtful design,
        </p>
        <p class="text-base md:text-2xl leading-relaxed">
           unmatched quality, and a touch of elegance. At Trident Residencies, we don’t just build houses—we create spaces where life feels complete.
        </p>
      </div>
    </div>
  </section>
  




  
  <section id="section3" class="mt-8 w-full">
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
            if (is_array($images) && !empty($images)) {
              $first_image = $images[0];
              $image_path = "completes/" . htmlspecialchars(basename($first_image));
          } else {
              $image_path = "/trident/public/default-image.webp"; 
          }

            if($count >= 4){
              break;
            }
    ?>
    <!-- Flip Box -->
    <div class="relative group w-full h-full bg-gray-200 overflow-hidden">
          <!-- Front Image -->
          <div
            class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('<?php echo $image_path; ?>');"
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

      <section id="section4"class="flex flex-col items-center justify-start md:pt-24 bg-white">
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
            src="page3s11.webp"
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
            src="page3s2.webp"
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




      



      <section id="section5">
    <div class="p-14 border border-white rounded-lg max-w-7xl mx-auto h-screen">
  <!-- Container -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Left Side: Text Section -->
    <div class="flex flex-col justify-center">
      <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-brown-700 text-[#674636]"style="font-family: 'Lora', serif;">PANTRY DESIGNS</h2>
      <p class="text-lg md:text-xl italic bold text-brown-600 mt-2 text-black"style="font-family: 'Lora', serif;">Discover Your Dream Pantry</p>
      <p class="text-brown-500 text-sm md:text-base lg:text-lg mt-4 text-[#674636]"style="font-family: 'Lora', serif;">
        Transform your kitchen with our stunning pantry designs that blend functionality and style.
        Whether you’re looking for a modern, rustic, or classic touch, we have the perfect solutions for you.
      </p>
      <button 
        id="pantryButtons" 
        class="px-6 py-3 w-48 mt-10 bg-brown-700 text-white rounded-3xl shadow-lg hover:bg-[#674636] animate-bounce transition duration-300"
        onclick="navigateToPantry()">
        Pantry Design
      </button>
    </div>

    <!-- Right Side: Image Grid -->
    <div class="grid grid-cols-2 grid-rows-2 gap-4">
      <!-- Large Image -->
      <img
        src="p17.webp"
        alt="Pantry Design 1"
        class="col-span-2 row-span-1 w-[800px] h-[300px] rounded-lg shadow-md"
      />
      <!-- Smaller Images -->
      <img
        src="p13.webp"
        alt="Pantry Design 2"
        class="rounded-lg shadow-md"
      />
      <img
        src="p14.webp"
        alt="Pantry Design 3"
        class="rounded-lg shadow-md"
      />
    </div>
  </div>
</div>

  </section>



    









      <!-- video part -->
      <div class="flex justify-center items-center bg-white py-0">
  <div class="max-w-4xl w-full">
    <video 
      id="dynamicVideo" 
      controls 
      class="w-full h-auto mt-24 rounded-lg shadow-lg transition-transform duration-500"
    >
      <source src="vb1.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
    
    
    
  </div>
</div>

<script>
  const video = document.getElementById('dynamicVideo');

  // Change video playing mode dynamically
  video.addEventListener('play', () => {
    video.style.filter = "grayscale(0%)"; // Normal mode when playing
    video.style.transform = "scale(1.1)"; // Add a slight zoom-in effect
    video.volume = 0.5; // Set a medium volume level
  });

  video.addEventListener('pause', () => {
    video.style.filter = "grayscale(100%)"; // Grayscale effect when paused
    video.style.transform = "scale(1)"; // Reset zoom
  });

  // Redirect to Pantry Design HTML file
  function navigateToPantry() {
    window.location.href = "./pantry.html"; // Ensure the correct relative path
  }
</script>

<style>
  /* Custom Tailwind CSS Brown Color */
  .bg-brown-700 {
    background-color: #8B4513;
  }
  .hover\:bg-brown-800:hover {
    background-color: #5A3210;
  }
</style>














<!-- Logo part -->
      <div class="w-full flex flex-col justify-center items-center montserrat space-y-6 bg-white py-20">
  <!-- Title -->
  <p class="text-4xl font-bold text-indigo-900 mb-10"style="font-family: 'Lora', serif;">Our Suppliers</p>

  <!-- Logo Grid -->
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-6 w-full px-8 md:px-32">
    <!-- Logo 1 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.1.webp" alt="Client Logo 1" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 2 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.2.webp" alt="Client Logo 2" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 3 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.3.webp" alt="Client Logo 3" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 4 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.4.webp" alt="Client Logo 4" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 5 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.5.webp" alt="Client Logo 5" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 6 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.34.webp" alt="Client Logo 6" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 7 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.7.webp" alt="Client Logo 7" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 8 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.8.webp" alt="Client Logo 8" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 9 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.9.webp" alt="Client Logo 9" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 10 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.10.webp" alt="Client Logo 10" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 11 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.11.webp" alt="Client Logo 11" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 12 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.12.webp" alt="Client Logo 12" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 13 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.13.webp" alt="Client Logo 13" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 14 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.14.webp" alt="Client Logo 14" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 15 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.15.webp" alt="Client Logo 15" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 16 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.16.webp" alt="Client Logo 16" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 17 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.17.webp" alt="Client Logo 17" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 18 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.18.webp" alt="Client Logo 18" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 19 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.19.webp" alt="Client Logo 19" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 20 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.20.webp" alt="Client Logo 20" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 21 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.21.webp" alt="Client Logo 21" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 22 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.22.webp" alt="Client Logo 22" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 23 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.23.webp" alt="Client Logo 23" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 24 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.24.webp" alt="Client Logo 24" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 14 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.14.webp" alt="Client Logo 14" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 15 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="2.98.webp" alt="Client Logo 15" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 16 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="3.2.webp" alt="Client Logo 16" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 17 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="3.3.webp" alt="Client Logo 17" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 18 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="3.4.webp" alt="Client Logo 18" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 19 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="3.5.webp" alt="Client Logo 19" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 20 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="3.6.webp" alt="Client Logo 20" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 21 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="2.3.webp" alt="Client Logo 21" class="h-16 w-auto object-contain">
    </div>
    
    
  </div>
</div>


<section id="section6">

<footer class="bg-white py-10 text-gray-700">
  <div class="container mx-auto px-6">
    <!-- Top Section: Contact Information -->
    <div class="flex flex-col md:flex-row justify-between items-center space-y-8 md:space-y-0">
      <!-- Left Column: Address and Email -->
      <div class="text-center md:text-left">
        <p class="font-semibold text-lg text-gray-800">Get in Touch</p>
        <p class="text-sm text-gray-700">
          Trident Residencies (Pvt) Ltd.<br>
          149, Galle Road, Dehiwala.<br>
          <a href="mailto:trident@assiduaint.com" class="text-blue-600 hover:text-blue-800">
            trident@assiduaint.com
          </a>
        </p>
      </div>

      <!-- Middle Column: Contact Numbers -->
      <div class="text-center">
        <p class="font-semibold text-lg text-gray-800">Contact Us</p>
        <div class="flex flex-col space-y-3 text-sm">
          <a href="https://wa.me/94710777666" class="flex items-center justify-center space-x-2 hover:text-green-500">
            <i class="fab fa-whatsapp text-green-600 fa-lg"></i>
            <span>+94 71 426 6679 - Mr. Prabu (Director)</span>
          </a>
          <a href="https://wa.me/94710777667" class="flex items-center justify-center space-x-2 hover:text-green-500">
            <i class="fab fa-whatsapp text-green-600 fa-lg"></i>
            <span>+94 77 321 9679 - Mr. Pathum (Project Engineer)</span>
          </a>
        </div>
      </div>

      <!-- Right Column: Social Media Links -->
      <div class="text-center md:text-right">
        <p class="font-semibold text-lg text-gray-800">Follow Us</p>
        <div class="flex justify-center md:justify-end space-x-4">
          <a href="#" class="hover:text-blue-600">
            <i class="fab fa-facebook text-blue-600 fa-lg"></i>
          </a>
          <a href="#" class="hover:text-sky-500">
            <i class="fab fa-twitter text-sky-500 fa-lg"></i>
          </a>
          <a href="#" class="hover:text-pink-500">
            <i class="fab fa-instagram text-pink-500 fa-lg"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Bottom Section: Legal Links -->
    <div class="mt-8 border-t border-gray-300 pt-6 flex flex-col md:flex-row justify-between items-center text-sm">
      <p class="text-gray-500">© 2025 CloudJay Software. All rights reserved.</p>
      <div class="flex space-x-6">
        <a href="#" class="text-gray-600 hover:text-gray-800">Terms of Services</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>
</section>


      
    

      
      
      
      




</body>
</html>
