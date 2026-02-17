<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0"/>
    <title> Lorem Ipsum Generator | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>
<body>
    @include('common.header')
    <div id="loading">Loading...</div>
    <main>
        <h2 class="view-title">
            Lorem Ipsum Generator
        </h2>

        <select id="selectType" name="selectType">
            <option value="default" selected>--Select an Option--</option>
            <option value="para">Paragraph</option>
            <option value="line">Sentence</option>
        </select>
        <input id='inputBox' type="number" value="{{ $size }}" min='0' max='100000' onkeypress="">
        <input id='hiddenInput' type="hidden" value="" min='0' max='100000' onkeypress="">
        <button id='btn' type="submit">Fetch</button>
        <p>Output:</p>
        <p id='output'></p>
        <button id="copy">Copy</button>
    </main>
    @include('common.footer')
    <script src="/scripts/withJs.js"></script>
</body>
</html>
