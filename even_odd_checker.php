<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6">Even or Odd Checker</h1>

    <form method="post" class="mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="number">Enter a Number:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="number" id="number" required>
        </div>

        <div class="text-center">
            <input type="submit" value="Check" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if ($number % 2 == 0) {
            $result = "Even";
        } else {
            $result = "Odd";
        }

        echo "<p class='mt-4 text-xl'>The number $number is $result.</p>";
    }
    ?>
</div>

</body>
</html>
