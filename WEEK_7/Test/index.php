<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numEntries = isset($_POST['numEntries']) ? intval($_POST['numEntries']) : 0;
    $entries = [];
    for ($i = 0; $i < $numEntries; $i++) {
        if (isset($_POST["firstName$i"]) && isset($_POST["lastName$i"])) {
            $entries[] = [
                'firstName' => $_POST["firstName$i"],
                'lastName' => $_POST["lastName$i"]
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dynamic List Form</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Pendataan Waifu</h1>
        <form id="listForm" method="post" action="">
            <div class="mb-3">
                <label for="numEntries" class="form-label">Number of Entries:</label>
                <input type="number" class="form-control" id="numEntries" name="numEntries" min="1" max="100">
            </div>
            <button type="button" class="btn btn-primary" onclick="generateList()">Generate List</button>
            <div id="listContainer" class="mt-3"></div>
            <button type="submit" class="btn btn-success mt-3" style="display: none;" id="submitBtn">Submit</button>
        </form>

        <?php
        if (isset($entries)) {
            echo "<h2 class='mt-5'>Submitted Data:</h2>";
            echo "<ul>";
            foreach ($entries as $index => $entry) {
                echo "<li>Entry " . ($index + 1) . ": " . htmlspecialchars($entry['firstName']) . " Sayang " . htmlspecialchars($entry['lastName']) . "</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>