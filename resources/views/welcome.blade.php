<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Fast-loading Laravel app using S3 and CloudFront for static asset delivery." />
  <meta name="robots" content="index, follow" />

  <title>Fast Laravel CDN App</title>

  <!-- Preload CSS -->
  <link rel="preload" href="https://d2eaqeywqif5m.cloudfront.net/css/app.css" as="style" onload="this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://d2eaqeywqif5m.cloudfront.net/css/app.css"></noscript>

  <!-- Preload JS -->
  <link rel="preload" href="https://d2eaqeywqif5m.cloudfront.net/js/app.js" as="script">
</head>
<body>
  <h1>Hello CDN-powered Laravel App</h1>

  <!-- Defer JS -->
  <script src="https://d2eaqeywqif5m.cloudfront.net/js/app.js" defer></script>
</body>
</html>

