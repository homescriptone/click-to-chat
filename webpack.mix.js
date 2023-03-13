let mix = require("laravel-mix");

mix.copy('resources/js', 'public/vendor/homescriptone/click-to-chat/js')
.copy('resources/img', 'public/vendor/homescriptone/click-to-chat/img')
.copy('resources/css', 'public/vendor/homescriptone/click-to-chat/css');