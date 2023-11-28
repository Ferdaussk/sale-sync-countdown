
jQuery(function ($) {
    // Add datepicker to the custom date input field
    $('#_sscdn_custom_discount_date').datepicker({
        dateFormat: 'yy-mm-dd', // Customize the date format as needed
        changeMonth: true,
        changeYear: true,
    });

    // Add timepicker to the custom time input field
    $('.timepicker').timepicker({
        timeFormat: 'hh:mm TT', // Customize the time format as needed
        showButtonPanel: true,
        controlType: 'select',
        oneLine: true,
    });
});