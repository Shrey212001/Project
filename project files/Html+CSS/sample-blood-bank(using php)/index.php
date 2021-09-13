<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BLOOD BANK</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Blood_drop.svg" height="50px" width="50px"/>
      <span class="ml-3 text-xl">BLOOD BANK</span>
    </a>
     <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
     
    </nav> 
    <div><a href="login.php"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">LogIn
      <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg> -->
    </button></a></div>
  </div>
</header>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Blood Bank
        <br class="hidden lg:inline-block">
      </h1>
      <p class="mb-8 leading-relaxed">This is the blood bank. Please select if you are a hospital or receiver.</p>
      <div class="flex justify-center">
        <a href="form1.php"><button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Hospital</button></a>
       <a href="form.php"> <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Receiver</button></a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" height="200px" width="200px" alt="hero" src="https://upload.wikimedia.org/wikipedia/commons/6/65/Blood_drop.svg">
    </div>
  </div>
</section>
</body>
</html>