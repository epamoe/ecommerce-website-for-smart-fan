/**
 * Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

/* exported initSample */

if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
	CKEDITOR.tools.enableHtml5Elements( document );

// The trick to keep the editor in the sample quite small
// unless user specified own height.
CKEDITOR.config.height = 150;
CKEDITOR.config.width = 'auto';

var initSample = ( function() {
	var wysiwygareaAvailable = isWysiwygareaAvailable(),
		isBBCodeBuiltIn = !!CKEDITOR.plugins.get( 'bbcode' );

	return function() {
		var editorElement = CKEDITOR.document.getById( 'editor' );
		var editorElementt = CKEDITOR.document.getById( 'editor2' );
		var editorElement3 = CKEDITOR.document.getById( 'editor3' );
		var editorElement4 = CKEDITOR.document.getById( 'editor4' );
		var editorElement5 = CKEDITOR.document.getById( 'editor5' );
		// var editorElement6 = CKEDITOR.document.getById( 'editor6' );	

		// :(((
		if ( isBBCodeBuiltIn ) {
			editorElement.setHtml(
				'Hello world!\n\n' +
				'I\'m an instance of [url=https://ckeditor.com]CKEditor[/url].'
			);

			editorElementt.setHtml(
				'Hello world!\n\n' +
				'I\'m an instance of [url=https://ckeditor.com]CKEditor[/url].'
			);
		}

		// Depending on the wysiwygarea plugin availability initialize classic or inline editor.
		if ( wysiwygareaAvailable ) {
			var details = CKEDITOR.replace( 'editor', {extraPlugins: 'notification'} );
			details.on( 'required', function( evt ) {
				details.showNotification( 'La description ne doit pas vide!', 'warning' );
				evt.cancel();
			} );
			CKEDITOR.replace( 'editor2' );
			CKEDITOR.replace( 'editor3' );
			CKEDITOR.replace( 'editor4' );
			CKEDITOR.replace( 'editor5' );
		} else {
			editorElement.setAttribute( 'contenteditable', 'true' );
			editorElementt.setAttribute( 'contenteditable', 'true' );
			editorElement3.setAttribute( 'contenteditable', 'true' );
			editorElement4.setAttribute( 'contenteditable', 'true' );
			editorElement5.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'editor' );
			CKEDITOR.inline( 'editor2' );
			CKEDITOR.inline( 'editor3' );
			CKEDITOR.inline( 'editor4' );
			CKEDITOR.inline( 'editor5' );

			// TODO we can consider displaying some info box that
			// without wysiwygarea the classic editor may not work.
		}
	};

	function isWysiwygareaAvailable() {
		// If in development mode, then the wysiwygarea must be available.
		// Split REV into two strings so builder does not replace it :D.
		if ( CKEDITOR.revision == ( '%RE' + 'V%' ) ) {
			return true;
		}

		return !!CKEDITOR.plugins.get( 'wysiwygarea' );
	}
})();

