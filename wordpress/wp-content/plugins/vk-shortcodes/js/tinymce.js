jQuery(document).ready(function($) {

	// shoutout to WordPress Explorer - http://www.wpexplorer.com/wordpress-tinymce-tweaks/

	// rich editor visual shortcodes button
	(function() {
		tinymce.PluginManager.add('visualshortcodes', function( editor, url ) {
			editor.addButton('visualshortcodes', {
				text: 'Visual Shortcodes',
				icon: 'vks-icon',
				type: 'menubutton',
				menu: [

	/*-----------------------------------------------------------------------------------*/
	/*
	/*	Columns
	/*
	/*-----------------------------------------------------------------------------------*/				
	{
		text: 'Column',
			onclick: function() {
				editor.windowManager.open( {
					title: 'Insert Column',
					body: [
						{
							type: 'listbox',
							name: 'column_size',
							label: 'Column Size',
							'values': [
								{text: '1/2', value: 'one_half'},
								{text: '1/3', value: 'one_third'},
								{text: '2/3', value: 'two_third'},
								{text: '1/4', value: 'one_fourth'},
								{text: '3/4', value: 'three_fourth'}
							]
						},
						{
							type: 'checkbox',
							name: 'column_last',
							label: 'Is this the last column in the row?',
						}
					],
					onsubmit: function( e ) {

						var last = String(e.data.column_last);

						console.log('last = ' + last);

						// last column
						if( last === 'true' ) {

							editor.insertContent( '[visual_' + e.data.column_size + '_last]column content goes here[/visual_' + e.data.column_size + '_last]');

						// all other columns
						} else {

							editor.insertContent( '[visual_' + e.data.column_size + ']column content goes here[/visual_' + e.data.column_size + ']');

						}

					}
				});
			}
	},

	/*-----------------------------------------------------------------------------------*/
	/*
	/*	Buttons
	/*
	/*-----------------------------------------------------------------------------------*/		
	{
		text: 'Button',
			onclick: function() {
				editor.windowManager.open( {
					title: 'Insert Button',
					body: [
						{
							type: 'textbox',
							name: 'button_text',
							label: 'Button Text',
							value: '',
						},
						{
							type: 'textbox',
							name: 'button_url',
							label: 'Button URL',
							value: 'http://',
						},
						{
							type: 'listbox',
							name: 'button_style',
							label: 'Button Color',
							'values': [
								{text: 'Default', value: 'default'},
								{text: 'Grey', value: 'grey'},
								{text: 'Green', value: 'green'},
								{text: 'Light Blue', value: 'light-blue'},
								{text: 'Blue', value: 'blue'},
								{text: 'Red', value: 'red'},
								{text: 'Orange', value: 'orange'},
								{text: 'Purple', value: 'purple'},
								{text: 'Black', value: 'black'},
								{text: 'White', value: 'white'}
							]
						},
						{
							type: 'listbox',
							name: 'button_size',
							label: 'Button Size',
							'values': [
								{text: 'Medium', value: 'medium'},
								{text: 'Small', value: 'small'},
								{text: 'Large', value: 'large'}
							]
						},
						{
							type: 'checkbox',
							name: 'button_target',
							label: 'Open link in new window?',
						}
					],
					onsubmit: function( e ) {

						// target blank
						if( String(e.data.button_target) === 'true' ) {

							editor.insertContent( '[visual_button url="' + e.data.button_url + '" style="' + e.data.button_style + '" size="' + e.data.button_size + '" target="_blank"]' + e.data.button_text + '[/visual_button]');

						// target
						} else {

							editor.insertContent( '[visual_button url="' + e.data.button_url + '" style="' + e.data.button_style + '" size="' + e.data.button_size + '" target="_self"]' + e.data.button_text + '[/visual_button]');

						}

					}
				});
			}										
	},

	/*-----------------------------------------------------------------------------------*/
	/*
	/*	Alerts
	/*
	/*-----------------------------------------------------------------------------------*/		
	{
		text: 'Alert',
			onclick: function() {
				editor.windowManager.open( {
					title: 'Insert Alert',
					body: [
						{
							type: 'listbox',
							name: 'alert_style',
							label: 'Alert Style',
							'values': [
								{text: 'White', value: 'white'},
								{text: 'Grey', value: 'grey'},
								{text: 'Green', value: 'green'},
								{text: 'Yellow', value: 'yellow'},
								{text: 'Red', value: 'red'}
							]
						},
					],
					onsubmit: function( e ) {

						editor.insertContent( '[visual_alert style="' + e.data.alert_style + '"]content for the alert goes here[/visual_alert]');

					}
				});
			}	
	},

	/*-----------------------------------------------------------------------------------*/
	/*
	/*	Toggle
	/*
	/*-----------------------------------------------------------------------------------*/	
	{
		text: 'Toggle',
			onclick: function() {
				editor.windowManager.open( {
					title: 'Insert Toggle',
					body: [
						{
							type: 'textbox',
							name: 'toggle_title',
							label: 'Toggle Title',
							value: '',
						},
						{
							type: 'listbox',
							name: 'toggle_state',
							label: 'Toggle State',
							'values': [
								{text: 'Open', value: 'open'},
								{text: 'Closed', value: 'closed'}
							]
						},
					],
					onsubmit: function( e ) {

						editor.insertContent( '[visual_toggle title="' + e.data.toggle_title + '" state="' + e.data.toggle_state + '"]content for the toggle goes here[/visual_toggle]');

					}
				});
			}	
	},

	/*-----------------------------------------------------------------------------------*/
	/*
	/*	Tabs
	/*
	/*-----------------------------------------------------------------------------------*/	
	{
		text: 'Tabs',
			onclick: function() {
				editor.windowManager.open( {
					title: 'Insert Tabs',
					body: [
						{
							type: 'listbox',
							name: 'tab_number',
							label: 'Number of Tabs',
							'values': [
								{text: '1', value: '1'},
								{text: '2', value: '2'},
								{text: '3', value: '3'},
								{text: '4', value: '4'},
								{text: '5', value: '5'},
								{text: '6', value: '6'}
							]
						},
					],
					onsubmit: function( e ) {

						tabs = String(e.data.tab_number);

						// open tabs
						editor.insertContent( '[visual_tabs]' );

							// 1
							if( tabs === '1' ) {

								editor.insertContent( '[visual_tab title="Title 1"]Tab 1 content goes here[/visual_tab]');

							// 2
							} else if( tabs === '2' ) {

								editor.insertContent( '[visual_tab title="Title 1"]Tab 1 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 2"]Tab 2 content goes here[/visual_tab]');

							// 3
							} else if( tabs === '3' ) {

								editor.insertContent( '[visual_tab title="Title 1"]Tab 1 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 2"]Tab 2 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 3"]Tab 3 content goes here[/visual_tab]');

							// 4
							} else if( tabs === '4' ) {

								editor.insertContent( '[visual_tab title="Title 1"]Tab 1 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 2"]Tab 2 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 3"]Tab 3 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 4"]Tab 4 content goes here[/visual_tab]');

							// 5
							} else if( tabs === '5' ) {

								editor.insertContent( '[visual_tab title="Title 1"]Tab 1 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 2"]Tab 2 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 3"]Tab 3 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 4"]Tab 4 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 5"]Tab 5 content goes here[/visual_tab]');

							// 6
							} else if( tabs === '6' ) {

								editor.insertContent( '[visual_tab title="Title 1"]Tab 1 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 2"]Tab 2 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 3"]Tab 3 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 4"]Tab 4 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 5"]Tab 5 content goes here[/visual_tab]');
								editor.insertContent( '[visual_tab title="Title 6"]Tab 6 content goes here[/visual_tab]');

							}

						// close tabs
						editor.insertContent( '[/visual_tabs]' );

					}

				});
			}
	},

	/*-----------------------------------------------------------------------------------*/
	/*
	/*	Code
	/*
	/*-----------------------------------------------------------------------------------*/	
	{
		text: 'Code',
	        onclick: function() {

	            editor.insertContent('[code]Your code goes here[/code]');

	        }
	}




				]
			});
		});
	})();

});