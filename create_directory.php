<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $folderName = $_POST['folderName'];
    $directoryPath = '../' . $folderName;

    if (!file_exists($directoryPath)) {
        if (mkdir($directoryPath)) {
            // Create subdirectories based on user selection
            $subdirectories = ['img', 'css', 'js', 'scripts'];
            foreach ($subdirectories as $subdir) {
                if (isset($_POST[$subdir]) && $_POST[$subdir] === 'on') {
                    mkdir($directoryPath . '/' . $subdir);
                }
            }

            // Create files based on user selection
            $fileExtensions = ['php', 'html'];
            foreach ($fileExtensions as $extension) {
                $radioValue = 'createIndexFile';
                if (isset($_POST[$radioValue]) && $_POST[$radioValue] === $extension) {
                    $fileName = 'index.' . $extension;
                    file_put_contents($directoryPath . '/' . $fileName, '');
                }
            }

            echo 'New directory and subdirectories created successfully!';
        } else {
            echo 'Failed to create directory.';
        }
    } else {
        echo 'Directory already exists.';
    }
}
?>