<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit your Theme</title>
    <?php
    // At the top of theme.php, before any HTML
    // Check if the 'theme_name' GET parameter is set
    if (isset($_GET['theme_name'])) {
        $editing_theme_name = $_GET['theme_name'];
        // Retrieve the theme details from the cookie
        $themes = isset($_COOKIE['themes']) ? unserialize($_COOKIE['themes']) : [];
        foreach ($themes as $theme) {
            if ($theme['name'] === $editing_theme_name) {
                $current_theme = $theme;
                break;
            }
        }
    }
    ?>
</head>
<body>
    <form method="POST" action="index.php">
        <p>Name of your theme: <input type="text" name="theme_name" class="text-profile" value="<?= htmlspecialchars($current_theme['name'] ?? '') ?>" required></p>
        <p>Color of your background: <input type="color" name="background_color" class="text-profile" value="<?= htmlspecialchars($current_theme['background_color'] ?? '') ?>" required></p>
        <p>Color of heading 1: <input type="color" name="heading1_color" class="text-profile" value="<?= htmlspecialchars($current_theme['heading1_color'] ?? '') ?>" required></p>
        <p>Alignment of heading 1: 
            <select name="heading1_alignment" class="text-profile" required>
                <option value="" disabled selected hidden>-- Choose the Alignment --</option>
                <option value="left">Left</option>
                <option value="center">Center</option>
                <option value="right">Right</option>
                <option value="justify">Justify</option>
            </select> 
        </p>
        <p>Color of paragraph: <input type="color" name="paragraph_color" class="text-profile" value="<?= htmlspecialchars($current_theme['paragraph_color'] ?? '') ?>" required></p>
        <p>Font size of paragraph: <input type="number" name="paragraph_font_size" class="text-profile" value="<?= htmlspecialchars($current_theme['paragraph_font_size'] ?? '') ?>"required> px</p>
		<input type="submit" name="submit" value="Save">
    </form>
</body>
</html>
