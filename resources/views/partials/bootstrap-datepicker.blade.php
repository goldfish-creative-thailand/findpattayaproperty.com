<script src="{{ asset('datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
$('.input-group.date').datepicker({
    maxViewMode: 2,
    daysOfWeekDisabled: "0,6",
    autoclose: true,
    todayHighlight: true,
    beforeShowDay: function (date) {
        if (date.getMonth() == (new Date()).getMonth()) {
            switch (date.getDate()) {
                case 4:
                return {
                    tooltip: 'Example tooltip',
                    classes: 'active',
                };
                case 8:
                return false;
                case 12:
                return "green";
            }
        }
    },
    beforeShowMonth: function (date) {
        // if (date.getMonth() == 8) {
        //     return false;
        // }
    },
    beforeShowYear: function (date) {
        // if (date.getFullYear() == 2007) {
        //     return false;
        // }
    },
    datesDisabled: [
        '03/06/2018',
        '03/21/2018',
    ],
});
</script>
