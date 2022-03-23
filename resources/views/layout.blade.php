<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tui-image-editor/3.10.0/tui-image-editor.min.css" integrity="sha512-WEhPru82cOhEAThEMrYXgrHXc0eR69oZF0vGzXwhNf2hSbNc/q4/fb9qeDexgrIyBU6TKfhXC/DKwxYHx5CmLA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('titulo')</title>
    <style>
        .tui-image-editor-container {
            height: 100%;
            width: 100%;
        }

        .tui-image-editor-container .tui-image-editor-menu {
            display: table-header-group;
        }

        .history-list {
            height: 400px;
            max-height: 400px;
        }

        .tui-image-editor-container .tui-image-editor-controls-buttons,
        .tui-image-editor-container .tui-image-editor-header-buttons {
            float: none;
        }

        .tui-image-editor-help-menu .left {
            height: fit-content;
            width: fit-content;
        }
    </style>
</head>

<body>
    @include('partials.nav')
    @yield('contenido')
    <div id="tui-image-editor-container"></div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.0/fabric.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.code-snippet/v1.5.0/tui-code-snippet.min.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
    <script src="https://uicdn.toast.com/tui-image-editor/latest/tui-image-editor.js"></script>
    <!-- <script type="text/javascript" src="./js/theme/white-theme.js"></script>
        <script type="text/javascript" src="./js/theme/black-theme.js"></script> -->
    <script>
        // Image editor
        var imageEditor = new tui.ImageEditor('#tui-image-editor-container', {
            includeUI: {
                loadImage: {
                    path: 'img/sampleImage2.png',
                    name: 'SampleImage'
                },
                //  theme: blackTheme, // or whiteTheme
                initMenu: 'filter',
                menuBarPosition: 'right'
            },
            cssMaxWidth: 550,
            cssMaxHeight: 450,
            usageStatistics: false
        });
        window.onresize = function() {
            imageEditor.ui.resizeEditor();
        }

        let bug = document.body.querySelector('.tui-image-editor-main-container');
        bug.style.maxHeight = "500px";

        let logo = document.body.querySelector('.tui-image-editor-header-logo');
        logo.hidden = true;
        /* let logo = document.body.querySelector('.tui-image-editor-controls-logo');
        logo.hidden=true; */
        /* let undo = document.body.querySelector('.tie-btn-undo tui-image-editor-item help'); */
        let editor_menu = document.body.querySelector('.tui-image-editor-menu');
        let undo = document.createElement('li');
        undo.tooltipContent = "Undo";
        undo.className = "tie-btn-undo tui-image-editor-item help";
        undo.innerHTML = '<svg class="svg_ic-menu"><use xlink:href="#ic-undo" class="normal use-default"></use><use xlink:href="#ic-undo" class="disabled use-default"></use><use xlink:href="#ic-undo" class="hover use-default"></use></svg>';
        let left_menu = document.body.querySelector('.tui-image-editor-help-menu left');
        let menu = document.createElement('ul');

        editor_menu.append(undo);
    </script>
</body>

</html>