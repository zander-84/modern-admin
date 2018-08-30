<?php

namespace zander84\modernadmin\assets;
use yii\web\AssetBundle;

class CodeEditorCodemirrorAsset extends AssetBundle
{
    public $sourcePath = '@modern-assets';

    public $css = [
        'app-assets/fonts/feather/line-awesome.min.css',
        'app-assets/css/vendors.min.css',
        'app-assets/vendors/css/editors/codemirror.css',
        'app-assets/vendors/css/editors/theme/monokai.css',
        'app-assets/vendors/css/editors/theme/night.css',
        'app-assets/vendors/css/editors/addon/fold/foldgutter.css',
        'app-assets/vendors/css/editors/addon/dialog/dialog.css',
        'app-assets/vendors/css/editors/theme/3024-day.css',
        'app-assets/css/app.min.css',
        'app-assets/css/core/menu/menu-types/vertical-menu-modern.css',
        'app-assets/css/core/colors/palette-gradient.min.css',
        
    ];

    public $js = [
        'app-assets/vendors/js/vendors.min.js',
        'app-assets/vendors/js/editors/codemirror/lib/codemirror.js',
        'app-assets/vendors/js/editors/codemirror/mode/xml/xml.js',
        'app-assets/vendors/js/editors/codemirror/mode/javascript/javascript.js',
        'app-assets/vendors/js/editors/codemirror/mode/css/css.js',
        'app-assets/vendors/js/editors/codemirror/mode/htmlmixed/htmlmixed.js',
        'app-assets/vendors/js/editors/codemirror/mode/markdown/markdown.js',
        'app-assets/vendors/js/editors/codemirror/mode/meta.js',
        'app-assets/vendors/js/editors/codemirror/addon/search/searchcursor.js',
        'app-assets/vendors/js/editors/codemirror/addon/search/search.js',
        'app-assets/vendors/js/editors/codemirror/addon/dialog/dialog.js',
        'app-assets/vendors/js/editors/codemirror/addon/display/rulers.js',
        'app-assets/vendors/js/editors/codemirror/addon/edit/matchbrackets.js',
        'app-assets/vendors/js/editors/codemirror/addon/edit/closebrackets.js',
        'app-assets/vendors/js/editors/codemirror/addon/comment/comment.js',
        'app-assets/vendors/js/editors/codemirror/addon/wrap/hardwrap.js',
        'app-assets/vendors/js/editors/codemirror/addon/fold/foldcode.js',
        'app-assets/vendors/js/editors/codemirror/addon/fold/foldgutter.js',
        'app-assets/vendors/js/editors/codemirror/addon/fold/brace-fold.js',
        'app-assets/vendors/js/editors/codemirror/addon/fold/xml-fold.js',
        'app-assets/vendors/js/editors/codemirror/addon/fold/markdown-fold.js',
        'app-assets/vendors/js/editors/codemirror/addon/fold/comment-fold.js',
        'app-assets/vendors/js/editors/codemirror/addon/mode/loadmode.js',
        'app-assets/vendors/js/editors/codemirror/addon/mode/simple.js',
        'app-assets/vendors/js/editors/codemirror/addon/scroll/annotatescrollbar.js',
        'app-assets/vendors/js/editors/codemirror/addon/search/matchesonscrollbar.js',
        'app-assets/vendors/js/editors/codemirror/addon/search/searchcursor.js',
        'app-assets/vendors/js/editors/codemirror/addon/search/match-highlighter.js',
        'app-assets/vendors/js/editors/codemirror/addon/selection/mark-selection.js',
        'app-assets/vendors/js/editors/codemirror/addon/selection/active-line.js',
        'app-assets/vendors/js/editors/codemirror/addon/edit/matchbrackets.js',
        'app-assets/vendors/js/editors/codemirror/keymap/sublime.js',
        'app-assets/js/core/app-menu.min.js',
        'app-assets/js/core/app.min.js',
        'app-assets/js/scripts/customizer.min.js',
        'app-assets/js/scripts/editors/editor-codemirror.min.js',
        
    ];
}