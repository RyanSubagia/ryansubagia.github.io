<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <style>
        <?php
        // Deklarasi tema default
        $default_theme = [
            'background_color' => '#FFFFFF',
            'heading1_color' => '#000000',
            'heading1_alignment' => 'left',
            'paragraph_color' => '#000000',
            'paragraph_font_size' => 16
        ];

        // Inisialisasi array tema
        $themes = isset($_COOKIE['themes']) ? unserialize($_COOKIE['themes']) : [];

        // Proses data POST jika ada
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil data POST
            $theme_name = $_POST['theme_name'] ?? '';

            // Jika nama tema tidak kosong
            if ($theme_name !== '') {
                // Cek apakah tema sudah ada
                $theme_exists = false;
                foreach ($themes as $index => $theme) {
                    if ($theme['name'] === $theme_name) {
                        // Update tema yang sudah ada
                        $themes[$index] = [
                            'name' => $theme_name,
                            'background_color' => $_POST['background_color'] ?? '#FFFFFF',
                            'heading1_color' => $_POST['heading1_color'] ?? '#000000',
                            'heading1_alignment' => $_POST['heading1_alignment'] ?? 'left',
                            'paragraph_color' => $_POST['paragraph_color'] ?? '#000000',
                            'paragraph_font_size' => $_POST['paragraph_font_size'] ?? 16,
                        ];
                        $theme_exists = true;
                        break;
                    }
                }
                if (!$theme_exists) {
                    // Buat array baru dari data POST
                    $newTheme = [
                        'name' => $theme_name,
                        'background_color' => $_POST['background_color'] ?? '#FFFFFF',
                        'heading1_color' => $_POST['heading1_color'] ?? '#000000',
                        'heading1_alignment' => $_POST['heading1_alignment'] ?? 'left',
                        'paragraph_color' => $_POST['paragraph_color'] ?? '#000000',
                        'paragraph_font_size' => $_POST['paragraph_font_size'] ?? 16,
                    ];
                    // Tambahkan tema baru ke array tema
                    $themes[] = $newTheme;
                }
            }
        }

        // Pilih tema yang dipilih pengguna, atau tema default jika tidak ada tema yang dipilih
        $selected_theme_name = $_POST['theme_select'] ?? null;
        $selected_theme = $default_theme;

        if ($selected_theme_name) {
            // Cari tema yang dipilih oleh pengguna
            foreach ($themes as $theme) {
                if ($theme['name'] === $selected_theme_name) {
                    $selected_theme = $theme;
                    break;
                }
            }
        }
        
        // Simpan array tema ke cookie
        setcookie('themes', serialize($themes), time() + 60, '/'); // Cookie bertahan selama 30 hari

        // Terapkan tema ke dalam CSS
        echo "body { background-color: {$selected_theme['background_color']}; }";
        echo "h1 { color: {$selected_theme['heading1_color']}; text-align: {$selected_theme['heading1_alignment']}; }";
        echo "p { color: {$selected_theme['paragraph_color']}; font-size: {$selected_theme['paragraph_font_size']}px; }";
        ?>
    </style>
</head>

<body>
    <form method="POST" action="">
        <label for="theme_select">Pilih Tema:</label>
        <select id="theme_select" name="theme_select">
            <option value="" disabled selected hidden>-- Pilih Tema --</option>
            <?php foreach ($themes as $theme) : ?>
                <option value="<?= htmlspecialchars($theme['name']) ?>"><?= htmlspecialchars($theme['name']) ?></option>
            <?php endforeach; ?>
        </select>
        <a href="theme.php">Add Theme</a>
        <br>
        <br>
        <button type="submit">Pilih Tema</button>
    </form>
    <form action="theme.php" method="get">
    <br>
        <input type="hidden" name="theme_name" value="<?= htmlspecialchars($selected_theme['name']) ?>">
        <button type="submit">Edit Current Theme</button>
    </form>


    <hr>
    <h1>Heading 1</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mi lobortis, volutpat nunc et, iaculis risus.</p>
    <p>Curabitur ac dapibus lacus. Donec bibendum consequat tellus quis laoreet. Integer pretium justo ut diam hendrerit tempor.</p>
</body>

</html>
