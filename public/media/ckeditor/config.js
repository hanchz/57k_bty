/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
        config.filebrowserUploadUrl="/admin.php/upload/ckeditorUpload";
    config.language = 'zh-cn';
    config.height = 800;
    config.toolbar = 'Basic';

    config.toolbar_Basic = [

        ['Source','-','Save','NewPage','Preview','-','Templates'],

        ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],

        ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],

        ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],

        '/',

        ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],

        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],

        ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],

        ['Link','Unlink','Anchor'],

        ['Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],

        '/',

        ['Styles','Format','Font','FontSize'],

        ['TextColor','BGColor']

    ];
};
