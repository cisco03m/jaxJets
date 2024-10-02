( function( api ) {

	// Extends our custom "fse-sports-arena" section.
	api.sectionConstructor['fse-sports-arena'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );