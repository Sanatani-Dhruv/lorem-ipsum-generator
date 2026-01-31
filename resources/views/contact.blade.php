<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0"/>
    <title> Lorem Ipsum Generator | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>
<body>
    @include('common.header')
    <main>
        <h2 class="view-title">
            Lorem Ipsum Generator
        </h2>
        <div class="contact-links">
            <span class="contact-link">
                <a class="contact-link" href="https://github.com/Sanatani-Dhruv" target="_blank">
                    <img src="/images/github-mark-white.svg" alt="">
                    <span>Visit Github Repo</span>
                </a>
            </span>
            <span class="contact-link">
                <a class="contact-link" href="https://www.linkedin.com/in/dhruv-solanki-36342a358/" target="_blank">
                    <img src="/images/linkedin.svg" alt="">
                    <span>Visit LinkedIn</span>
                </a>
            </span>
        </div>
    </main>
    @include('common.footer')
</body>
</html>
