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
    <title>Lukas Pastva — CV</title>
    <style>
        :root {
            --bg1: #6db9ef;
            --bg2: #7de2d1;
            --surface: rgba(255, 255, 255, 0.9);
            --text: #0f172a;
            --muted: #475569;
            --primary: #2563eb;
            --primary-contrast: #ffffff;
            --shadow: 0 10px 30px rgba(15, 23, 42, 0.12);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
            color: var(--text);
            background: linear-gradient(45deg, var(--bg1), var(--bg2));
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            background-color: var(--surface);
            border-radius: 14px;
            padding: 24px;
            margin: 32px auto;
            width: min(92%, 960px);
            box-shadow: var(--shadow);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 16px;
        }
        .title {
            margin: 0;
            font-size: clamp(1.4rem, 2.4vw + 1rem, 2rem);
            line-height: 1.2;
        }
        .subtitle { color: var(--muted); margin-top: 4px; font-size: 0.95rem; }
        .btn {
            display: inline-block;
            background: var(--primary);
            color: var(--primary-contrast);
            text-decoration: none;
            padding: 10px 14px;
            border-radius: 10px;
            font-weight: 600;
            box-shadow: 0 6px 14px rgba(37, 99, 235, 0.25);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            white-space: nowrap;
        }
        .btn:hover { transform: translateY(-1px); box-shadow: 0 10px 20px rgba(37, 99, 235, 0.28); }
        .btn:active { transform: translateY(0); }
        .divider { height: 1px; background: #e2e8f0; margin: 16px 0 8px; }
        ul { list-style: disc; padding-left: 24px; }
        li { margin: 4px 0; }
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
                    displayData($value);
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
        $profile = $yaml_data['lukas-pastva'];
        $name = isset($profile['name']) ? $profile['name'] : "Lukas Pastva";
        $title = isset($profile['title']) ? $profile['title'] : "Curriculum Vitae";
        $cv_url = isset($profile['cv']) ? $profile['cv'] : '#';

        echo '<div class="header">';
        echo '  <div>';
        echo '    <h1 class="title">' . htmlspecialchars($name) . '</h1>';
        echo '    <div class="subtitle">' . htmlspecialchars($title) . '</div>';
        echo '  </div>';
        if (file_exists('lukas-pastva.pdf')) {
            echo '  <a class="btn" href="/lukas-pastva.pdf" download>Download PDF</a>';
        } else if ($cv_url !== '#') {
            echo '  <a class="btn" href="' . htmlspecialchars($cv_url) . '" target="_blank" rel="noopener">View CV</a>';
        }
        echo '</div>';
        echo '<div class="divider"></div>';

        displayData($profile);
    } else {
        echo "<p>Failed to load CV data.</p>";
    }
    ?>
    </div>
</body>
</html>
