<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
        
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6">Grade Calculator</h1>

    <form method="post" class="mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="test1">Test 1 Score:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="test1" id="test1" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="test2">Test 2 Score:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="test2" id="test2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="test3">Test 3 Score:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="test3" id="test3" required>
        </div>

        <div class="text-center">
            <input type="submit" value="Calculate" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $test1 = $_POST["test1"];
        $test2 = $_POST["test2"];
        $test3 = $_POST["test3"];

        $average = ($test1 + $test2 + $test3) / 3;

        $grade = '';

        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "<p class='mt-4 text-xl '>Average Score: $average</p>";
        echo "<p class='mt-2  text-xl'>Grade: $grade</p>";
    }
    ?>
</div>

</body>
</html>
