<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6">Temperature Converter</h1>

    <form method="post">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="temperature">Temperature:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="temperature" id="temperature" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Convert to:</label>
            <input type="radio" name="conversion" value="c_to_f" class="mr-2" required> <span class="text-sm">Fahrenheit</span>
            <input type="radio" name="conversion" value="f_to_c" class="mr-2" required> <span class="text-sm">Celsius</span>
        </div>

        <div class="text-center">
            <input type="submit" value="Convert" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];

        if ($conversion == "c_to_f") {
            $converted_temperature = ($temperature * 9/5) + 32;
            echo "<p class='mt-4'>$temperature&deg;C is $converted_temperature&deg;F</p>";
        } elseif ($conversion == "f_to_c") {
            $converted_temperature = ($temperature - 32) * 5/9;
            echo "<p class='mt-4'>$temperature&deg;F is $converted_temperature&deg;C</p>";
        }
    }
    ?>
</div>

</body>
</html>

