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
  <title>Trident Residencies</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="../src/output.css" rel="stylesheet">
  <title>Trident Residencies Pvt Ltd | Luxury Apartments & Villas in Sri Lanka</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Discover premium living with Trident Residencies Pvt Ltd, offering luxurious apartments and modern villas in prime locations across Sri Lanka. Experience elegance, comfort, and top-tier amenities for a dream home or investment.">
    <meta name="keywords" content="Trident Residencies, luxury apartments Sri Lanka, modern villas Sri Lanka, real estate Sri Lanka, premium residences, apartment for sale Sri Lanka, Sri Lanka real estate investment, Trident Residencies Pvt Ltd, high-end living, property developers Sri Lanka">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Trident Residencies Pvt Ltd">
    
    <!-- Open Graph (OG) for Social Media -->
    <meta property="og:title" content="Trident Residencies Pvt Ltd | Luxury Apartments & Villas in Sri Lanka">
    <meta property="og:description" content="Discover premium living with Trident Residencies Pvt Ltd, offering luxurious apartments and modern villas in prime locations across Sri Lanka. Experience elegance, comfort, and top-tier amenities for a dream home or investment.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.tridentresidencies.com">
    <meta property="og:image" content="https://www.tridentresidencies.com/preview.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
    <link rel="shortcut icon" href="favicon.png">

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0KS6CJWZ06"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0KS6CJWZ06');
</script>
<body class="bg-[#F5F1E5]">







<div id="navbar" class="fixed z-10 w-full bg-transparent transition-all duration-300 ease-in-out">
  <!-- Navbar Content -->
  <div class="container mx-auto px-4 py-3 flex items-center justify-between">
    <!-- Logo Section -->
    <a href="https://wa.me/94710777666" class="flex items-center">
      <img src="lm.png" alt="Logo" class="w-[200px] h-[50px] object-contain z-10" />
    </a>

    <!-- Navigation Links -->
    <nav class="hidden md:flex space-x-6">
      <a href="#section2" class="text-[#674636] hover:underline font-medium">About Us</a>
      <a href="#section3" class="text-[#674636] hover:underline font-medium">Completed Projects</a>
      <a href="#section4" class="text-[#674636] hover:underline font-medium">Upcoming Projects</a>
      <a href="#section5" class="text-[#674636] hover:underline font-medium">Pantry Designs</a>
      <a href="#section6" class="text-[#674636] hover:underline font-medium">Contact Us</a>
    </nav>

     <!-- Wrapped Menu Component in a Div -->
  <div class="menu-component">
    <!-- Menu Button -->
    <button id="menuButton" class="relative flex items-center text-[#674636] hover:text-[#000000] font-bold mt-2 ml-4 px-4 py-2  border-2 border-transparent bg-white transition-all duration-300 ease-in-out rounded-lg">
    <i class="fas fa-bars mr-1"></i> MENU
    <span class="absolute inset-0 border-2 border-[#674636] rounded-md animate-border"></span>
</button>

<style>
  @keyframes borderAnimation {
    0% {
      clip-path: inset(0 100% 100% 0);
    }
    25% {
      clip-path: inset(0 0 100% 0);
    }
    50% {
      clip-path: inset(0 0 0 100%);
    }
    75% {
      clip-path: inset(100% 0 0 0);
    }
    100% {
      clip-path: inset(0 100% 100% 0);
    }
  }

  .animate-border {
    animation: borderAnimation 2s linear infinite;
  }
</style>


    <!-- Full-Screen Menu -->
    <div id="menuOverlay" class="fixed inset-0 bg-white bg-opacity-95 hidden z-50 flex items-center justify-center">
      <!-- Close Button -->
      <button id="closeMenu" class="absolute top-5 right-5 text-gray-600 text-2xl hover:text-gray-800">
        &times;
      </button>
      <!-- Menu Items -->
      <ul class="text-center space-y-6 text-2xl text-[#674636] font-semibold">
        <li class="fade-slide"><a href="index.php" class="hover:underline">Home</a></li>
        <li class="fade-slide"><a href="Complet2.php" class="hover:underline">Completed Projects</a></li>
        <li class="fade-slide"><a href="upload.php" class="hover:underline">Upcoming Projects</a></li>
        <li class="fade-slide"><a href="pp.MP4" class="hover:underline">Demo Reel</a></li>
        <li class="fade-slide"><a href="contact.php" class="hover:underline">Contact Us</a></li>
        
      </ul>
    </div>
  </div>
  <script>
  // Open Menu
  document.getElementById("menuButton").addEventListener("click", function () {
    const overlay = document.getElementById("menuOverlay");
    overlay.classList.remove("hidden");
    setTimeout(() => overlay.classList.add("flex"), 0); // Add flex after removing hidden
  });

  // Close Menu
  document.getElementById("closeMenu").addEventListener("click", function () {
    closeMenu();
  });

  // Function to Close Menu
  function closeMenu() {
    const overlay = document.getElementById("menuOverlay");
    overlay.classList.add("hidden");
    overlay.classList.remove("flex");
  }

  // Scroll to Section & Close Menu
  document.querySelector('a[href="#section6"]').addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default link behavior
    closeMenu(); // Close the menu
    
    // Smooth Scroll to Contact Us Section
    document.querySelector("#section6").scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
  });

</script>


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
  </div>
</div>

<!-- JavaScript for Scroll Behavior -->
<script>
  const navbar = document.getElementById("navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.remove("bg-transparent");
      navbar.classList.add("bg-white", "shadow-lg");
      navbar.querySelectorAll("a").forEach(link => link.classList.replace("text-white", "text-[#674636]"));
    } else {
      navbar.classList.remove("bg-white", "shadow-lg");
      navbar.classList.add("bg-transparent");
      navbar.querySelectorAll("a").forEach(link => link.classList.replace("text-[#674636]", "text-white"));
    }
  });
</script>

















<div class="relative w-full h-screen overflow-hidden -mb-36 -mt-2">
  <!-- Background Scroll Container -->
  <div id="backgroundScroll" class="flex w-[300%] h-5/6 transition-transform duration-500">
    <!-- Slide 1 -->
    <div class="relative w-1/3 h-full bg-cover bg-center" style="background-image: url('l2.webp');">
      <div class="absolute inset-0 flex items-end justify-center p-4">
        <div class="text-center">
          <h1 class="text-white text-4xl font-bold animate-slideIn">....</h1>
          <p class="text-white text-sm mt-2 animate-slideIn">Architecture</p>
        </div>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="relative w-1/3 h-full bg-cover bg-center" style="background-image: url('y3.webp');">
      <div class="absolute inset-0 flex items-end justify-center p-4">
        <div class="text-center">
          <h1 class="text-white text-4xl font-bold animate-slideIn">....</h1>
          <p class="text-white text-sm mt-2 animate-slideIn">Property Development</p>
        </div>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="relative w-1/3 h-full bg-cover bg-center" style="background-image: url('56.jpeg.jpg');">
      <div class="absolute inset-0 flex items-end justify-center p-4">
        <div class="text-center">
          <h1 class="text-white text-4xl font-bold animate-slideIn">....</h1>
          <p class="text-white text-sm mt-2 animate-slideIn">Interior</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Left Arrow -->
  <button id="leftArrow" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-transparent text-white p-3">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </button>

  <!-- Right Arrow -->
  <button id="rightArrow" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-transparent text-white p-3">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </button>
</div>

<style>
  @keyframes slideIn {
    from {
      transform: translateY(100%);
    }
    to {
      transform: translateY(0);
    }
  }

  .animate-slideIn {
    animation: slideIn 1s ease-in-out;
  }
</style>

<script>
  let currentIndex = 0;
  const slides = document.querySelectorAll('#backgroundScroll > div');
  const totalSlides = slides.length;

  function updateSlidePosition() {
    const scrollContainer = document.getElementById('backgroundScroll');
    scrollContainer.style.transform = `translateX(-${currentIndex * 100 / totalSlides}%)`;
  }

  function showNextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlidePosition();
  }

  function showPreviousSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSlidePosition();
  }

  document.getElementById('rightArrow').addEventListener('click', showNextSlide);
  document.getElementById('leftArrow').addEventListener('click', showPreviousSlide);

  // Auto-scroll every 5 seconds
  setInterval(showNextSlide, 5000);
</script>
  













  <section id="section2" class="min-h-screen bg-[#F5F1E5] flex flex-col items-center justify-center px-4 md:px-6 py-8 md:py-4">
  <div class="flex flex-col lg:flex-row items-center lg:space-x-12 max-w-7xl w-full">
    
    <!-- Left Image with Text Overlay -->
    <div class="relative w-full lg:w-1/2">
      <img
        src="lm3.png"
        alt="Building"
        class="rounded-lg object-cover w-[550px] h-auto"
      >
    </div>

    <!-- Right Text Section -->
    <div class="mt-8 md:mt-12 lg:mt-0 lg:w-1/2">
      <h1 class="text-2xl md:text-3xl lg:text-4xl font-sun-serif font-bold mb-6 text-[#674636] text-center lg:text-left"  style="font-family: 'Helvtica',sun-serif;">
        Welcome to Trident Residencies Pvt Ltd
      </h1>
      <p class="text-[#674636] text-base md:text-[16px] font-serif leading-6 md:leading-7 mb-4 text-center lg:text-left" style="font-family: 'Lora', serif;">
        Welcome to <strong>Trident Residencies</strong>, where your dream home becomes reality. Founded in 2017 by visionary entrepreneur Mr. Shan B, we craft homes that blend modern design with natural harmony.
      </p>
      <p class="text-[#674636] text-base md:text-[16px] font-serif leading-6 md:leading-7 mb-4 text-center lg:text-left" style="font-family: 'Lora', serif;">
        Guided by our promise, <strong>"Your Vision, Our Design,"</strong> we create spaces that redefine modern living with exceptional quality and thoughtful innovation.
      </p>
      <p class="text-[#674636] text-base md:text-[16px] font-serif leading-6 md:leading-7 text-center lg:text-left" style="font-family: 'Lora', serif;">
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


  <section class="bg-cover bg-center bg-[#F5F1E5] text-[#674636] h-[60vh] px-4 py-0 md:py-0">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <div class="max-w-4xl mx-auto text-center p-4 md:p-2" style="font-family: 'Lora', serif;">
      <!-- Title -->
      
      
      <!-- Our Vision Section -->
      <div class="mb-2">
        <h2 class="text-2xl md:text-xl font-semibold mb-4 mt-4">
          Our Vision
        </h2>
        <p class="text-base md:text-[16px] leading-relaxed">
          To create homes that inspire, combining modern design, natural harmony, and lasting quality.
        </p>
      </div>
      
      <!-- White Line -->
      <div class="mb-8 mt-6">
        <img src="line.webp" alt="divider line" class="mx-auto w-1/2 h-1">
      </div>
      
      <!-- Our Mission Section -->
      <div>
        <h2 class="text-2xl md:text-xl font-semibold mb-4 mt-6">
          Our Mission
        </h2>
        <p class="text-base md:text-[16px] leading-relaxed mb-4">
          We bring your dream home to life with thoughtful design,
        </p>
        <p class="text-base md:text-[16px] leading-relaxed">
           unmatched quality, and a touch of elegance. At Trident Residencies, we don’t just build houses—we create spaces where life feels complete.
        </p>
      </div>
    </div>
  </section>
  




  
  <section id="section3" class="mt-8 w-full">
  <h1
          class="text-4xl md:text-5xl font-bold text-center text-[#674636] mb-8 "
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
            style="background-color: #674636;"
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
    
      <a href="Complet2.php" class="inline-block px-6 py-2 border-2 border-[#674636] text-[#674636] text-lg font-semibold rounded-full text-center hover:bg-[#674636] hover:text-white transition duration-300">
        See More
      </a>
    
  </div>
</section>








    
      <!-- Include Lora Font from Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">

      <section id="section4"class="flex flex-col items-center justify-start md:pt-24 bg-[#F5F1E5]">
        <!-- Upcoming Projects Title -->
        <h1
          class="text-4xl md:text-5xl font-bold text-[#674636] mb-8 text-center"
          style="font-family: 'Lora', serif; font-weight: 700;  "
        >
          UPCOMING PROJECTS
        </h1>
      
        <!-- Content Section -->
        <div class="flex flex-row  justify-start w-full">


          
          <!-- Left Image -->
          <div
          class="w-full h-60 overflow-hidden shadow-lg relative object-cover filter brightness-75 md:w-4/6 md:h-96  hidden md:inline contrast-80"
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
          <div class="md:w-2/3 w-full px-1 items-center text-center md:mt-32 md:ml-44">
            
            <p class="text-gray-700 leading-relaxed text-center text-[16px] " style="font-family: 'Lora', serif;">
              We adopt a uniquely personalized perspective to each project to deliver stunning spaces of optimal function.
              Renowned for our architectural understanding and masterful craftsmanship, our portfolio of residential
              projects...
            </p>
            <button>
              <div class="flex items-center justify-center mt-4 h-16 w-auto" style="font-family: 'Lora', serif;">
                <a href="upload.php" class="inline-block px-6 py-2 bg-[#674636] text-white text-lg font-semibold rounded-full text-center hover:bg-black  transition duration-300">
                  See More
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
    <div class="p-14  rounded-lg max-w-7xl mx-auto h-screen">
  <!-- Container -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Left Side: Text Section -->
    <div class="flex flex-col justify-center">
      <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-brown-700 text-[#674636]"style="font-family: 'Lora', serif;">PANTRY DESIGNS</h2>
      <p class="text-lg md:text-xl italic bold text-brown-600 mt-2 text-black"style="font-family: 'Lora', serif;">Discover Your Dream Pantry</p>
      <p class="text-brown-500 text-sm md:text-sm lg:text-lg mt-4 text-[#674636]"style="font-family: 'Lora', serif;">
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

      <div class="flex justify-center items-center bg-[#F5F1E5] py-0">
  <div class="max-w-4xl w-full">
    <video 
      id="dynamicVideo" 
      controls 
      class="w-full h-auto mt-24 rounded-lg shadow-lg transition-transform duration-500"
    >
      <source src="pp.MP4" type="video/mp4" />
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
      <div class="w-full flex flex-col justify-center items-center montserrat space-y-6 bg-[#F5F1E5] py-20">
  <!-- Title -->
  <p class="text-4xl font-bold text-[#674636] mb-10"style="font-family: 'Lora', serif;">Our Suppliers</p>

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
    
    <!-- Logo 10 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.10.webp" alt="Client Logo 10" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 11 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.11.webp" alt="Client Logo 11" class="h-16 w-auto object-contain">
    </div>
    
    <!-- Logo 13 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.13.webp" alt="Client Logo 13" class="h-16 w-auto object-contain">
    </div>
   
    <!-- Logo 15 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.14.webp" alt="Client Logo 15" class="h-16 w-auto object-contain">
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
    
    <!-- Logo 24 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.24.webp" alt="Client Logo 24" class="h-16 w-auto object-contain">
    </div>
    <!-- Logo 20 -->
    <div class="flex items-center justify-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img src="1.19.webp" alt="Client Logo 20" class="h-16 w-auto object-contain">
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
   
    
  </div>
</div>






<!-- Contact Us Section -->
<section id="section6" class="bg-[#F5F1E5] text-gray-800 py-12">
  <div class="container mx-auto px-6 md:px-36">
    <div class="flex flex-col md:flex-row items-stretch gap-12 text-center md:text-left">
      
      <!-- Left Side (Contact Details) -->
      <div class="flex-1 space-y-6 flex flex-col justify-center">
        <h2 class="text-2xl font-bold text-[#674636]">Contact Us</h2>
        <p class="text-sm text-gray-700">
          We’re here to help! Feel free to contact us via WhatsApp, email, or visit our office.
        </p>

        <!-- Address -->
        <div class="flex items-start justify-center md:justify-start space-x-3">
          <i class="fas fa-map-marker-alt text-[#AA7753] text-2xl"></i>
          <p class="text-sm">
            <strong class="text-[#674636]">Address:</strong> 149, Galle Road, Dehiwala.
          </p>
        </div>

        <!-- Email & Hotline -->
        <div class="flex items-start justify-center md:justify-start space-x-3">
          <i class="fas fa-envelope text-[#AA7753] text-2xl"></i>
          <p class="text-sm">
            <strong class="text-[#674636]">Email:</strong>
            <a href="mailto:trident@assiduaint.com" class="text-[#674636] hover:text-[#AA7753]">trident@assiduaint.com</a>
            <br>
            <strong class="text-[#674636]">Hot Line:</strong>
            <a class="text-[#674636] hover:text-[#AA7753]">+94 11 273 5100</a>
          </p>
        </div>

        <!-- WhatsApp Contacts -->
        <h3 class="text-lg font-bold text-[#674636] mt-4">WhatsApp Contacts</h3>
        <div class="space-y-3">
          <a href="https://wa.me/94710777667" class="flex items-center justify-center md:justify-start space-x-3 hover:text-green-500">
            <i class="fab fa-whatsapp text-green-600 text-2xl"></i>
            <span class="text-sm">+94 77 321 9679 - (Project Manager)</span>
          </a>
          <a href="https://wa.me/94710777666" class="flex items-center justify-center md:justify-start space-x-3 hover:text-green-500">
            <i class="fab fa-whatsapp text-green-600 text-2xl"></i>
            <span class="text-sm">+94 71 426 6679 - (Director)</span>
          </a>
        </div>
      </div>

      <!-- Center Vertical Line -->
      <div class="hidden md:block w-[2px] bg-gray-400 self-stretch"></div>

      <!-- Right Side (Logo) -->
      <div class="flex-1 flex justify-center items-center">
        <img src="94.png" alt="Company Logo" class="w-[400px] h-[400px] object-contain">
      </div>

    </div>
  </div>
</section>


<!-- Footer Section -->
<footer class="bg-[#F5F1E5] text-black py-10">
  <div class="container mx-auto px-6">
    <!-- Footer Columns -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8 text-center md:text-left">
      
      <!-- Main Company -->
      <div class="md:border-l-4 border-[#674636] pl-4 mr-2 md:mr-0 flex flex-col items-center md:items-start">
        <div class="flex items-center mb-2">
          <h3 class="font-semibold text-xl text-[#674636]">SHAN GROUP OF COMPANIES</h3>
        
        </div>
        <p class="text-sm text-gray-700">
          The Metropolis Tower, Office 204/205, 2nd Floor, Business Bay, Dubai, UAE.<br>
          <a href="https://www.shangroup.org" class="text-[#674636] hover:text-[#f4905e] underline">www.shangroup.org</a>
        </p>
      </div>

      <!-- Sub-Company -->
      <div class="ml-4 md:border-l-4 border-gray-300 pl-4 mr-8 md:mr-8">
      <h3 class="font-semibold text-lg text-[#674636] mb-2">Shan Global Technical Services LLC.</h3>
        <p class="text-sm">
          Dubai, UAE.<br>
          <a href="https://www.shandxb.com" class="text-[#674636] hover:text-[#f4905e]">www.shandxb.com</a><br>
          Phone: +971 4580 5678
        </p>
      </div>

      <!-- New Company -->
      <div>
        <h3 class="font-semibold text-lg text-[#674636] mb-2">Shan Global Employment Services LLC.</h3>
        <p class="text-sm">
          Dubai, UAE.<br>
          <a href="https://www.shandxb.com" class="text-[#674636] hover:text-[#f4905e]">www.shandxb.com</a><br>
          Phone: +971 4580 5678
        </p>
      </div>

      <!-- Shan Global Technical Services -->
      <div>
      <h3 class="font-semibold text-lg text-[#674636] mb-2">Assidua International (Pvt) Ltd.</h3>
        <p class="text-sm">
          149, Galle Road, Dehiwala.<br>
          <a href="mailto:office@assiduaint.com" class="text-[#674636] hover:text-[#f4905e]">office@assiduaint.com</a><br>
          Phone: 0112-735098 / 070 615 2999
        </p>
      </div>

      <!-- Assidua International -->
      <div>
      <h3 class="font-semibold text-lg text-[#674636] mb-2">Trident Residencies (Pvt) Ltd.</h3>
        <p class="text-sm text-gray-600">
          149, Galle Road, Dehiwala.<br>
          <a href="mailto:trident@assiduaint.com" class="text-[#674636] hover:text-[#f4905e] underline">trident@assiduaint.com</a><br>
          Phone: +94 71 426 6679
        </p>
      </div>
    </div>

    <!-- Divider -->
    <div class="my-10 border-t border-gray-300"></div>

    <!-- Bottom Section -->
    <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left">
      <p class="text-sm">&copy; 2025 Cloud-Jay Software. All rights reserved.</p>
      <div class="flex space-x-6 mt-4 md:mt-0">
        <a href="#" class="text-gray-600 hover:text-gray-800">Terms of Services</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>


      
    

      
      
      
      




</body>
</html>
