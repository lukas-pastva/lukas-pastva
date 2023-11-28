<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lukas Pastva's CV</title>
    <!-- Add some CSS for styling -->
    <style>
        body { font-family: Arial, sans-serif; }
        .section { margin-bottom: 20px; }
        .section-title { font-size: 1.2em; font-weight: bold; margin-top: 10px; }
        ul { list-style-type: none; }
        li { margin-bottom: 5px; }
    </style>
</head>
<body>
    <?php
    // Load YAML file
    $yaml_data = yaml_parse_file('/src/cv.yaml');

    if ($yaml_data && isset($yaml_data['lukas-pastva'])) {
        $cv = $yaml_data['lukas-pastva'];

        echo "<h1>Lukas Pastva's CV</h1>";

        // Display born date and location
        echo "<div class='section'>";
        echo "<div class='section-title'>Personal Information</div>";
        echo "Born Date: " . htmlspecialchars($cv['bornDate']) . "<br>";
        echo "Location: " . htmlspecialchars($cv['location']);
        echo "</div>";

        // Display Tech Stack
        echo "<div class='section'>";
        echo "<div class='section-title'>Tech Stack</div>";
        foreach ($cv['techStack'] as $category => $items) {
            echo "<strong>" . htmlspecialchars($category) . ":</strong>";
            echo "<ul>";
            foreach ($items as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
            echo "</ul>";
        }
        echo "</div>";

        // Add more sections as needed
        // ...

    } else {
        echo "<p>Failed to load CV data.</p>";
    }
    ?>
</body>
</html>
