# Create temporary directory
$tempDir = "temp_gentelella"
New-Item -ItemType Directory -Force -Path $tempDir

# Download Gentelella template
$url = "https://github.com/puikinsh/gentelella/archive/refs/heads/master.zip"
$output = "$tempDir\gentelella.zip"
Invoke-WebRequest -Uri $url -OutFile $output

# Extract the zip file
Expand-Archive -Path $output -DestinationPath $tempDir -Force

# Create necessary directories if they don't exist
$directories = @(
    "public/assets/js",
    "public/assets/css",
    "public/assets/images"
)

foreach ($dir in $directories) {
    if (-not (Test-Path $dir)) {
        New-Item -ItemType Directory -Force -Path $dir
    }
}

# Copy JavaScript files
$jsFiles = @(
    "jquery.min.js",
    "bootstrap.bundle.min.js",
    "fastclick.js",
    "nprogress.js",
    "Chart.min.js",
    "gauge.min.js",
    "bootstrap-progressbar.min.js",
    "icheck.min.js",
    "skycons.js",
    "jquery.flot.js",
    "jquery.flot.pie.js",
    "jquery.flot.time.js",
    "jquery.flot.stack.js",
    "jquery.flot.resize.js",
    "jquery.flot.orderBars.js",
    "jquery.flot.spline.min.js",
    "curvedLines.js",
    "date.js",
    "jquery.vmap.js",
    "jquery.vmap.world.js",
    "jquery.vmap.sampledata.js",
    "moment.min.js",
    "daterangepicker.js",
    "custom.min.js"
)

foreach ($file in $jsFiles) {
    Copy-Item "$tempDir/gentelella-master/vendors/js/$file" -Destination "public/assets/js/" -Force
}

# Copy CSS files
$cssFiles = @(
    "bootstrap.min.css",
    "font-awesome.min.css",
    "nprogress.css",
    "green.css",
    "bootstrap-progressbar-3.3.4.min.css",
    "jqvmap.min.css",
    "daterangepicker.css",
    "custom.min.css"
)

foreach ($file in $cssFiles) {
    Copy-Item "$tempDir/gentelella-master/vendors/css/$file" -Destination "public/assets/css/" -Force
}

# Copy images
$imageFiles = @(
    "favicon.ico",
    "logo.jpg",
    "img.jpg"
)

foreach ($file in $imageFiles) {
    Copy-Item "$tempDir/gentelella-master/vendors/images/$file" -Destination "public/assets/images/" -Force
}

# Clean up
Remove-Item -Path $tempDir -Recurse -Force

Write-Host "Assets have been set up successfully!"
