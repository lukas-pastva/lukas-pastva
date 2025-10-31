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
            /* Color system */
            --bg1: #6db9ef;
            --bg2: #7de2d1;
            --surface: rgba(255, 255, 255, 0.85);
            --surface-2: rgba(255, 255, 255, 0.65);
            --text: #0f172a;
            --muted: #475569;
            --border: rgba(15, 23, 42, 0.12);
            --ring: #60a5fa;
            --primary: #2563eb;
            --primary-contrast: #ffffff;

            /* Layout + radii */
            --radius: 14px;
            --shadow-s: 0 2px 10px rgba(15, 23, 42, 0.08);
            --shadow-l: 0 10px 30px rgba(15, 23, 42, 0.14);

            /* Typography scale */
            --fs-1: clamp(0.875rem, 0.85rem + 0.25vw, 1rem);
            --fs-2: clamp(1rem, 0.9rem + 0.6vw, 1.25rem);
            --fs-3: clamp(1.25rem, 1.1rem + 1.2vw, 1.75rem);
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --bg1: #0b1220;
                --bg2: #0f1a2e;
                --surface: rgba(2, 6, 23, 0.65);
                --surface-2: rgba(2, 6, 23, 0.5);
                --text: #e5e7eb;
                --muted: #94a3b8;
                --border: rgba(148, 163, 184, 0.18);
                --ring: #60a5fa;
                --primary: #60a5fa;
                --primary-contrast: #0b1220;
                --shadow-s: 0 2px 10px rgba(0, 0, 0, 0.35);
                --shadow-l: 0 24px 48px rgba(0, 0, 0, 0.45);
            }
        }

        /* Base reset */
        *, *::before, *::after { box-sizing: border-box; }
        html { color-scheme: light dark; }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: var(--text);
            background: radial-gradient(1200px 800px at 0% 0%, color-mix(in srgb, var(--bg2) 45%, transparent), transparent 60%),
                        radial-gradient(1200px 800px at 100% 100%, color-mix(in srgb, var(--bg1) 45%, transparent), transparent 60%),
                        linear-gradient(45deg, var(--bg1), var(--bg2));
            background-size: 400% 400%;
            animation: gradientBG 18s ease infinite;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        @media (prefers-reduced-motion: reduce) {
            body { animation: none; }
        }

        .container {
            background-color: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 24px;
            margin: 32px auto;
            width: min(92%, 960px);
            box-shadow: var(--shadow-l);
            backdrop-filter: saturate(140%) blur(8px);
        }
        @supports not ((backdrop-filter: blur(8px))) {
            .container { background-color: var(--surface-2); }
        }

        .header {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: end;
            gap: 16px;
            margin-bottom: 12px;
        }
        .title {
            margin: 0;
            font-size: var(--fs-3);
            line-height: 1.2;
            letter-spacing: -0.01em;
        }
        .subtitle {
            color: var(--muted);
            margin-top: 6px;
            font-size: var(--fs-1);
        }

        a { color: var(--primary); text-decoration: underline; text-underline-offset: 2px; }
        a:hover { text-decoration-thickness: 2px; }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(180deg, color-mix(in srgb, var(--primary) 92%, white), var(--primary));
            color: var(--primary-contrast);
            text-decoration: none;
            padding: 10px 14px;
            border-radius: 12px;
            font-weight: 600;
            border: 1px solid color-mix(in srgb, var(--primary) 68%, black);
            box-shadow: 0 6px 14px color-mix(in srgb, var(--primary) 35%, transparent);
            transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.2s ease;
            white-space: nowrap;
        }
        .btn:hover { transform: translateY(-1px); box-shadow: 0 12px 24px color-mix(in srgb, var(--primary) 38%, transparent); }
        .btn:active { transform: translateY(0); }
        .btn:focus-visible { outline: none; box-shadow: 0 0 0 3px color-mix(in srgb, var(--ring) 55%, transparent), 0 6px 14px color-mix(in srgb, var(--primary) 35%, transparent); }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 16px 0 10px;
        }

        /* Lists: cleaner, modern bullets + nested structure */
        ul { list-style: none; padding-left: 0; margin: 0; }
        li {
            position: relative;
            margin: 6px 0;
            padding-left: 18px;
        }
        li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.78em;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: radial-gradient(60% 60% at 35% 35%, var(--primary) 0%, var(--primary) 60%, color-mix(in srgb, var(--primary) 30%, transparent) 100%);
            box-shadow: 0 0 0 2px color-mix(in srgb, var(--primary) 15%, transparent);
        }
        /* Nested lists get a subtle connector */
        li > ul {
            margin: 8px 0 6px;
            padding-left: 14px;
            border-left: 1px dashed var(--border);
        }

        /* Keys rendered in <strong> act as mini-headings */
        li > strong {
            display: block;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 4px;
            font-size: var(--fs-2);
        }

        /* Selection + focus treatment */
        ::selection { background: color-mix(in srgb, var(--primary) 25%, transparent); }
        :focus-visible { outline: 3px solid color-mix(in srgb, var(--ring) 55%, transparent); outline-offset: 2px; border-radius: 6px; }

        /* Responsive tweaks */
        @media (max-width: 640px) {
            .container { padding: 18px; }
            .header { grid-template-columns: 1fr; align-items: start; }
            .btn { width: fit-content; }
        }

        /* Print-friendly styles */
        @media print {
            body { background: #ffffff !important; animation: none !important; }
            .container { box-shadow: none; border: none; padding: 0; width: 100%; background: #ffffff; }
            .btn { display: none; }
            .divider { background: #000; }
            a { color: #000; text-decoration: none; }
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    // Load YAML file
    $yaml_data = yaml_parse_file('cv.yaml');

    function is_list($arr) {
        if (!is_array($arr)) {
            return false;
        }
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            if (!array_key_exists($i, $arr)) {
                return false;
            }
        }
        return true;
    }

    function displayData($data) {
        if (is_array($data)) {
            echo "<ul>";
            if (is_list($data)) {
                // YAML sequence (list) — render values without numeric keys
                foreach ($data as $item) {
                    echo "<li>";
                    if (is_array($item)) {
                        displayData($item);
                    } else {
                        echo htmlspecialchars($item);
                    }
                    echo "</li>";
                }
            } else {
                // YAML mapping — render key: value
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
