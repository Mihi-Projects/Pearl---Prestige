<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recreated Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Additional custom styles */
    .h-98 {
      height: 24.5rem; /* Custom height class */
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Include Header -->
  <?php include '../Components/header.php'; ?>

  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-screen" style="background-image: url('../Assets/Images/bg1.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto flex flex-col justify-center items-center h-full text-center text-white">
      <h2 class="text-4xl md:text-6xl font-bold mb-4">Summer Collection</h2>
      <p class="text-lg md:text-2xl mb-8">
        Discover the latest trends and express your unique style with our curated collection.
      </p>
      <a href="#" class="bg-white text-black px-6 py-3 rounded-md font-semibold shadow-lg hover:bg-gray-200">
        Shop Now
      </a>
    </div>
  </section>

    <!-- Home Section -->
    <div class="home section px-8 py-16 bg-white">
      <h1 class="text-4xl font-bold mb-6 text-center">Welcome to Our Page</h1>
      <p class="text-lg text-gray-600 text-center max-w-3xl mx-auto">
        Explore our fantastic offerings, beautiful visuals, and responsive design, built with Tailwind CSS for a modern and cohesive experience.
      </p>
    </div>
  </div>

  <!-- Include Footer -->
  <?php include '../Components/footer.php'; ?>
</body>
</html>
