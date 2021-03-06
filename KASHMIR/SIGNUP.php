
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>SIGN UP PAGE</title>
    <link href="tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS_Kashmir.js"></script>

</head>
<body style="  background-image: url('./ajk_img/img1 (7).jpg'); /* Full height */height: 100%;background-position: center;background-repeat: no-repeat;
  background-size: cover;" >

<!--HEADER-->
<header class="text-gray-600 body-font" style="background-color: aliceblue">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="./HOME.html" target="_self" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl" >KASHMIR</span>
        </a>
<!--        NAVBAR-->
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" >
            <a href="./HOME.html" target="_self" class="mr-5 hover:text-black">Home</a>
            <a href="./About.html" target="_self" class="mr-5 hover:text-black">About</a>
            <a href="./customer.php"  target="_self" class="mr-5 hover:text-black">Service</a>
            <a href="./Contact.html"  target="_self" class="mr-5 hover:text-black">Contact</a>
        </nav>
<!--     SIGN IN   BUTTON-->
        <a href="./LOGIN.php"  target=""><button class="inline-flex items-center bg-green-200 border-0 py-2 px-6 mx-2 focus:outline-none hover:bg-green-400 rounded text-base mt-4 md:mt-0">Go to back</button></a>
    </div>
</header>
<form action="PHPSIGNUP.php" method="post">
<section  class="text-gray-800 body-font">
    <div  class="container px-5 py-10 mx-auto flex flex-wrap items-center">

        <div  class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:m-auto w-full mt-10 md:mt-0" >
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign up</h2>
            <!--            name-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600" >Full Name</label>
                <input required type="text" id="full-name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!--            phone-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Phone </label>
                <input required type="tel" id="phone" name="phone" pattern="[0-9]{11}" placeholder="eg. 03XXXXXXXXX" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!--            CNIC-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">CNIC </label>
                <input required type="number" id="CNIC" name="CNIC" pattern="[0-9]{13}" placeholder="enter cnic without dashes" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!--            email-->
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input required type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" >
            </div>
            <!--            designation-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600" >Designation </label>
                <select  id="designation" name="designation" class="w-full bg-white rounded border border-gray-300
                focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3
                leading-8 transition-colors duration-200 ease-in-out" onchange="if (this.value=='CUSTOMER'){this.form['security'].style.visibility='hidden'}else {this.form['security'].style.visibility='visible'};">
                    <option value="CUSTOMER">CUSTOMER</option>
                    <option value="MANAGER">MANAGER</option>
                    <option value="CHEF">CHEF</option>
                    <option value="CASHIER">CASHIER</option>
                    <option value="WAITER">WAITER</option>
                </select>
            </div>
            <!--            password-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Password </label>
                <input placeholder="Enter Password" pattern="[0-9]{4}" type="password" id="Password" name="Password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!--            secuirity-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600"></label>
                <input placeholder="Enter Faculty Security "  pattern="[a-zA-Z0-9!@#\$%\^\&*_=+-]{4}" style="visibility:hidden;" type="password" id="security" name="security" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!--            submit-->
            <button name="signup" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="SIGNUP()">sign up</button>

        </div>
    </div>
</section>
</form>

<!--footer-->
<hr>
<footer class="text-gray-600 body-font ">

    <div class="bg-gray-100">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">KASHMIR</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">?? 2022 ATIQUE AHMAD ???
                <a href="https://twitter.com/AtiqueAhmadCh" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@AtiqueAhmadCh</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500" href="https://web.facebook.com/AtiqueCh987/">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500" href="https://twitter.com/AtiqueAhmadCh">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>

        <a class="ml-3 text-gray-500" href="https://t.co/UNREqxqXOQ">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
        </div>
    </div>
</footer>
</body>
</html>