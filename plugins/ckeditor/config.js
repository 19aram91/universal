/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'ru';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = 'plugins/Filemanager/index.html';
    config.filebrowserImageBrowseUrl = 'plugins/Filemanager/index.html?type=Images&currentFolder=/Image/';
    config.filebrowserFlashBrowseUrl = 'plugins/Filemanager/index.html?type=Flash&currentFolder=/Flash/';
    config.filebrowserUploadUrl = 'plugins/Filemanager/connectors/php/filemanager.php?mode=add&type=Files&currentFolder=/File/';
    config.filebrowserImageUploadUrl = 'plugins/Filemanager/connectors/php/filemanager.php?mode=add&type=Images&currentFolder=/Image/';
    config.filebrowserFlashUploadUrl = 'plugins/Filemanager/connectors/php/filemanager.php?mode=add&type=Flash&currentFolder=/Flash/';
};
