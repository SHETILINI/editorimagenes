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
        .history-list{
            max-height: 250px;
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
                 menuBarPosition: 'bottom'
             },
             cssMaxWidth: 700,
             cssMaxHeight: 500,
             usageStatistics: false
         });
         window.onresize = function() {
             imageEditor.ui.resizeEditor();
         }
/*          let editor = document.body.querySelector('.tui-image-editor-align-wrap');
         editor.style.maxWidth = "700px";
         editor.style.maxHeight = "500px"; */
         let bug = document.body.querySelector('.tui-image-editor-main-container');
         bug.style.maxHeight = "500px";
         
         document.body.querySelector('.tui-image-editor-header-logo').innerHTML="";

        </script>
</body>
</html>
