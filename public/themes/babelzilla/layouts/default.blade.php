<!DOCTYPE html>
<html>
<head>
    <title>{{ Theme::get('title') . ' - BabelZilla' }}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{{ Theme::get('keywords') }}">
    <meta name="description" content="{{ Theme::get('description') }}">
    {{ Theme::asset()->styles() }}
    {{ Theme::asset()->scripts() }}
</head>
<body>
<div id="container">
    <div id="content">
        {{ Theme::partial('header') }}
        <div class="row">
            <div class="large-12 columns">
                {{ Theme::content() }}
            </div>
        </div>
    </div>
</div>

{{ Theme::partial('footer') }}

{{ Theme::asset()->container('footer')->scripts() }}
</body>
</body>
</html>