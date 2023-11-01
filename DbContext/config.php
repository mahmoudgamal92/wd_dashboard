<?php
$filePath = ".env";
function loadEnv($filePath) {
    // Check if the .env file exists
    if (file_exists($filePath)) {
        // Load the .env file into an array
        $envFile = file_get_contents($filePath);
        $envLines = explode("\n", $envFile);
        $envVariables = [];

        foreach ($envLines as $line) {
            $line = trim($line);
            if ($line && strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);
                $envVariables[$key] = $value;
            }
        }

        // Set the environment variables
        foreach ($envVariables as $key => $value) {
            putenv("$key=$value");
        }
    } else {
        // You can handle the case where the .env file is not found
        // For example, you can log an error or display a message
        echo "The .env file does not exist.";
    }
}
?>
