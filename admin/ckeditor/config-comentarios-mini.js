/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
config.language = 'es';
config.uiColor = '#efefde';
config.skin = 'kama';
config.enterMode = CKEDITOR.ENTER_BR;
config.colorButton_colors = '4A5A73,c54747,00773d,555555';
config.height        = '150px';
config.width        = '580px';
config.toolbar_Full = [
['Styles','Format','Font','FontSize'],
['TextColor','BGColor'],
['Bold','Italic','Underline'],
['Link','Unlink'],
['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
['Source'],
['Image','Flash'],['Table']
];
};
