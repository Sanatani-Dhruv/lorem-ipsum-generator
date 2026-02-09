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
                API Usage
            </h2>

            <h4>
                API Endpoints
            </h4>
            <section>
                <br>
                <code style="font-weight: 600;">GET {{ url()->current() }}/para</code>
                <p>-> Receive a JSON Object with Paragraph of Dummy Text with 10-11 Sentences.</p>
            </section>
            <section>
                <br>
                <code style="font-weight: 600;">GET {{ url()->current() }}/line</code>
                <p>-> Receive a JSON Object with a Sentence of Dummy Text with 10-11 Words.</p>
            </section>
            <section>
                <br>
                <code style="font-weight: 600;">GET {{ url()->current() }}/para/&lt;Number&gt;</code>
                <p>-> Receive a JSON Object with Paragraph of Dummy Text with &lt;Number-Number+1&gt; Sentences.</p>
            </section>
            <section>
                <br>
                <code style="font-weight: 600;">GET {{ url()->current() }}/line/&lt;Number&gt;</code>
                <p>-> Receive a JSON Object with a Sentence of Dummy Text with &lt;Number-Number+1&gt; Words.</p>
            </section>
        </main>
        @include('common.footer')
    </body>
</html>
