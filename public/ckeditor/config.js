/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [

		{ name: 'basicstyles', groups: [ 'basicstyles' ] },
		{ name: 'styles' },		
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'editing',     groups: [ 'find', 'selection' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'document', 'doctools' ] },
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	
	 config.extraPlugins = 'wordcount,notification,font';
	 config.wordcount = {
    	// Whether or not you want to show the Char Count
    	showCharCount: true,
    	showWordCount : false,
    	showParagraphs : false,
	};

	// Set the most common block elements.
	config.fullPage = false;
	config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre';
	config.FormatOutput = false;

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	config.filebrowserUploadMethod = 'form';
	config.height='350px';

	// 
};
