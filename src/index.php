<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WXGJCPSE7N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WXGJCPSE7N');
</script>

    <meta charset="UTF-8">
    <title>Lukas Pastva's CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #6db9ef, #7de2d1);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin: 30px auto;
            width: 80%;
            max-width: 800px;
        }
        .section { margin-bottom: 20px; }
        .section-title { font-size: 1.4em; font-weight: bold; margin-top: 10px; }
        ul { list-style-type: none; padding-left: 20px; }
        li { margin-bottom: 5px; }
    </style>
</head>
<body>
    <div class="container">
    <?php
    // Load YAML file
    $yaml_data = yaml_parse_file('cv.yaml');

    function displayData($data) {
        if (is_array($data)) {
            echo "<ul>";
            foreach ($data as $key => $value) {
                echo "<li>";
                if (is_array($value)) {
                    echo "<strong>" . htmlspecialchars($key) . ":</strong>";
                    displayData($value); // Recursive call
                } else {
                    echo htmlspecialchars($key) . ": " . htmlspecialchars($value);
                }
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo htmlspecialchars($data);
        }
    }

    if ($yaml_data && isset($yaml_data['lukas-pastva'])) {
        echo "<h1>Lukas Pastva's CV</h1>";
        displayData($yaml_data['lukas-pastva']);
    } else {
        echo "<p>Failed to load CV data.</p>";
    }
    ?>
    </div>
</body>
</html>
