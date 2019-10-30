(function ( $ ) {
    "use strict";
    $.fn.fixedHeader = function ( height ) {
		
        var $old_table = this;
		
		// Apply only once
        if ($old_table.attr('fixedHeader') == 'fixedHeader') {
            return;
        }

		// Make sure the table has a stantard structure (thead, tbody)
        $old_table.children('tbody').children().unwrap();
        $old_table.children('tr:has(th)').wrapAll('<thead>');
        $old_table.children('tr:has(td)').wrapAll('<tbody>');

        var $wrapper_div = $("<div id='wrapper_body'/>");
        $wrapper_div.css('overflow', 'scroll');

        $wrapper_div.width( $old_table.width() + 30 );
        $old_table.wrap($wrapper_div);

        $old_table.find('caption').remove();

        // Save original width
        $old_table.attr("original-width", $old_table.width());
        $old_table.find('thead tr th').each(function () {
            $(this).attr("original-width", $(this).width() );
        });

        $old_table.find('tbody tr:eq(0) td').each(function () {
            $(this).attr("original-width", $(this).width());
        });

        // Clone the original table
        var $new_table = $old_table.clone();

        if ( $old_table.attr('id') ) {
            $new_table.attr('id', $old_table.attr('id') + '_fixed');
        }

		// Remove header from the original table
        $old_table.find('thead tr').remove();
		
        // Remove body from the new table
        $new_table.find('tbody tr').remove();

        $old_table.parent().parent().prepend($new_table);
        $new_table.wrap("<div id='wrapper_head'/>");

        // Use the original width on the new table
        $new_table.width($new_table.attr('original-width'));


        $new_table.find('thead tr th').each(function () {
            var original_width = $(this).attr("original-width");
            //var original_height = $(this).attr("original-height");
            $(this).width(original_width);
            //$(this).height(original_height);
            $(this).css('min-width', original_width + 'px');
        });

        $old_table.width( $old_table.attr('original-width'));
        $old_table.find('tbody tr:eq(0) td').each(function () {
            $(this).width($(this).attr("original-width"));
        });

        $old_table.attr('fixedHeader', 'fixedHeader');
        

        var $wrapper_box = $("<div id='wrapper_box'/>").css('height', height);
        
        $("#wrapper_head").wrap($wrapper_box);
        $("#wrapper_box").append($("#wrapper_body"));

        var wrapper_body_height = height - $('#wrapper_head').height();
        $("#wrapper_body").css('height', wrapper_body_height);
    }
})( jQuery );


