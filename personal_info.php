<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>

    <!--  Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white rounded  mt-20 text-xl  p-6 shadow-lg ">
        <?php
        
        $name = "Rezoanul Hasan .";
        $age = 25 ;
        $country = "Bogar, Bangladesh .";
        $introduction = "Hello! My name is Rezoanul Hasan. I completed my graduation on BSc in CSE from Pundra University Science of Technology in Bogra Bangladesh. I like programming, in the programming field I mostly like web development because web development is dynamic and rapidly offers countless opportunities for creativity and innovation.";

        
        echo "<h1 class='text-2xl text-center font-bold mb-5'>Personal Information</h1>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Country:</strong> $country</p>";
        echo "<p class='mt-5'><strong>Introduction:</strong> $introduction</p>";
        ?>
    </div>
</body>

</html>
