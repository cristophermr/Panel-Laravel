const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix
    /* CSS */
    .sass('resources/assets/sass/main.scss', 'public/css/oneui.css')
    .sass('resources/assets/sass/oneui/themes/amethyst.scss', 'public/css/themes/')
    .sass('resources/assets/sass/oneui/themes/city.scss', 'public/css/themes/')
    .sass('resources/assets/sass/oneui/themes/flat.scss', 'public/css/themes/')
    .sass('resources/assets/sass/oneui/themes/modern.scss', 'public/css/themes/')
    .sass('resources/assets/sass/oneui/themes/smooth.scss', 'public/css/themes/')
    .styles('resources/assets/plugin/general/bootstrap-colorpicker/css/bootstrap-colorpicker.css','public/css/color.css')

    /* JS */
    .js('resources/assets/js/laravel/app.js', 'public/js/laravel.app.js')
    .js('resources/assets/js/oneui/app.js', 'public/js/oneui.app.js')
    .scripts('resources/assets/plugin/general/bootstrap-colorpicker/bootstrap-colorpicker.js', 'public/js/color.app.js')
     .scripts(
    [
        'resources/assets/plugins/general/jquery/dist/jquery.js',
        'resources/assets/plugins/general/popper.js/dist/umd/popper.js',
        'resources/assets/plugins/general/bootstrap/dist/js/bootstrap.min.js',
        'resources/assets/plugins/general/js-cookie/src/js.cookie.js',
        'resources/assets/plugins/general/moment/min/moment.min.js',
        'resources/assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js',
        'resources/assets/plugins/general/sticky-js/dist/sticky.min.js',
        'resources/assets/plugins/general/wnumb/wNumb.js',
        'resources/assets/plugins/general/jquery-form/dist/jquery.form.min.js',
        'resources/assets/plugins/general/block-ui/jquery.blockUI.js',
        'resources/assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'resources/assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js',
        'resources/assets/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js',
        'resources/assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
        'resources/assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js',
        'resources/assets/plugins/general/bootstrap-daterangepicker/daterangepicker.js',
        'resources/assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js',
        'resources/assets/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js',
        'resources/assets/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js',
        'resources/assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js',
        'resources/assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js',
        'resources/assets/plugins/general/select2/dist/js/select2.full.js',
        'resources/assets/plugins/general/ion-rangeslider/js/ion.rangeSlider.js',
        'resources/assets/plugins/general/typeahead.js/dist/typeahead.bundle.js',
        'resources/assets/plugins/general/handlebars/dist/handlebars.js',
        'resources/assets/plugins/general/inputmask/dist/jquery.inputmask.bundle.js',
        'resources/assets/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js',
        'resources/assets/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js',
        'resources/assets/plugins/general/nouislider/distribute/nouislider.js',
        'resources/assets/plugins/general/owl.carousel/dist/owl.carousel.js',
        'resources/assets/plugins/general/autosize/dist/autosize.js',
        'resources/assets/plugins/general/clipboard/dist/clipboard.min.js',
        'resources/assets/plugins/general/dropzone/dist/dropzone.js',
        'resources/assets/plugins/general/js/global/integration/plugins/dropzone.init.js',
        'resources/assets/plugins/general/quill/dist/quill.js',
        'resources/assets/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js',
        'resources/assets/plugins/general/@yaireo/tagify/dist/tagify.min.js',
        'resources/assets/plugins/general/summernote/dist/summernote.js',
        'resources/assets/plugins/general/markdown/lib/markdown.js',
        'resources/assets/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js',
        'resources/assets/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js',
        'resources/assets/plugins/general/bootstrap-notify/bootstrap-notify.min.js',
        'resources/assets/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js',
        'resources/assets/plugins/general/jquery-validation/dist/jquery.validate.js',
        'resources/assets/plugins/general/jquery-validation/dist/additional-methods.js',
        'resources/assets/plugins/general/js/global/integration/plugins/jquery-validation.init.js',
        'resources/assets/plugins/general/toastr/build/toastr.min.js',
        'resources/assets/plugins/general/dual-listbox/dist/dual-listbox.js"',
        'resources/assets/plugins/general/raphael/raphael.js',
        'resources/assets/plugins/general/morris.js/morris.js',
        'resources/assets/plugins/general/chart.js/dist/Chart.bundle.js',
        'resources/assets/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',
        'resources/assets/plugins/general/plugins/jquery-idletimer/idle-timer.min.js',
        'resources/assets/plugins/general/waypoints/lib/jquery.waypoints.js',
        'resources/assets/plugins/general/counterup/jquery.counterup.js',
        'resources/assets/plugins/general/es6-promise-polyfill/promise.min.js',
        'resources/assets/plugins/general/sweetalert2/dist/sweetalert2.min.js',
        'resources/assets/plugins/general/js/global/integration/plugins/sweetalert2.init.js',
        'resources/assets/plugins/general/jquery.repeater/src/lib.js',
        'resources/assets/plugins/general/jquery.repeater/src/jquery.input.js',
        'resources/assets/plugins/general/jquery.repeater/src/repeater.js',
        'resources/assets/plugins/general/dompurify/dist/purify.js',
        'resources/assets/js/scripts.bundle.js',
        'resources/assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.js',
        'resources/assets/plugins/custom/@fullcalendar/core/main.js',
        'resources/assets/plugins/custom/@fullcalendar/daygrid/main.js',
        'resources/assets/plugins/custom/@fullcalendar/google-calendar/main.js',
        'resources/assets/plugins/custom/@fullcalendar/interaction/main.js',
        'resources/assets/plugins/custom/@fullcalendar/list/main.js',
        'resources/assets/plugins/custom/@fullcalendar/timegrid/main.js',
        'resources/assets/plugins/custom/gmaps/gmaps.js',
        'resources/assets/plugins/custom/flot/dist/es5/jquery.flot.js',
        'resources/assets/plugins/custom/flot/source/jquery.flot.resize.js',
        'resources/assets/plugins/custom/flot/source/jquery.flot.categories.js',
        'resources/assets/plugins/custom/flot/source/jquery.flot.pie.js',
        'resources/assets/plugins/custom/flot/source/jquery.flot.stack.js',
        'resources/assets/plugins/custom/flot/source/jquery.flot.crosshair.js',
        'resources/assets/plugins/custom/flot/source/jquery.flot.axislabels.js',
        'resources/assets/plugins/custom/datatables.net/js/jquery.dataTables.js',
        'resources/assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js',
        'resources/assets/plugins/custom/js/global/integration/plugins/datatables.init.js',
        'resources/assets/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js',
        'resources/assets/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js',
        'resources/assets/plugins/custom/jszip/dist/jszip.min.js',
        'resources/assets/plugins/custom/pdfmake/build/pdfmake.min.js',
        'resources/assets/plugins/custom/pdfmake/build/pdfmake.min.js',
        'resources/assets/plugins/custom/pdfmake/build/vfs_fonts.js',
        'resources/assets/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js',
        'resources/assets/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js',
        'resources/assets/plugins/custom/datatables.net-buttons/js/buttons.colVis.js',
        'resources/assets/plugins/custom/datatables.net-buttons/js/buttons.flash.js',
        'resources/assets/plugins/custom/datatables.net-buttons/js/buttons.html5.js',
        'resources/aassets/plugins/custom/datatables.net-buttons/js/buttons.print.js',
        'resources/assets/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js',
        'resources/assets/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js',
        'resources/assets/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
        'resources/assets/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js',
        'resources/assets/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js',
        'resources/assets/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
        'resources/assets/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js',
        'resources/assets/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js',
        'resources/assets/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js',
        'resources/assets/plugins/custom/datatables.net-select/js/dataTables.select.min.js',
        'resources/assets/plugins/custom/jstree/dist/jstree.js',
        'resources/assets/plugins/custom/jqvmap/dist/jquery.vmap.js',
        'resources/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js',
        'resources/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js',
        'resources/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js',
        'resources/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js',
        'resources/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js',
        'resources/assets/plugins/custom/uppy/dist/uppy.min.js',
        'resources/assets/js/pages/custom/login/login-general.js',
        'resources/assets/js/pages/crud/datatables/basic/basic.js',

    ], 'public/js/app.js'
)
    .styles
    (
        [
            'resources/assets/css/pages/login/login-6.css',
            'resources/assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css',
            'assets/plugins/general/tether/dist/css/tether.css',
            'resources/assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
            'resources/assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css',
            'resources/assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css',
            'resources/assets/plugins/general/bootstrap-daterangepicker/daterangepicker.css',
            'resources/assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css',
            'resources/assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css',
            'resources/assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css',
            'resources/assets/plugins/general/select2/dist/css/select2.css',
            'resources/assets/plugins/general/ion-rangeslider/css/ion.rangeSlider.css',
            'resources/assets/plugins/general/nouislider/distribute/nouislider.css',
            'resources/assets/plugins/general/owl.carousel/dist/assets/owl.carousel.css',
            'resources/assets/plugins/general/owl.carousel/dist/assets/owl.theme.default.css',
            'resources/assets/plugins/general/dropzone/dist/dropzone.css',
            'resources/assets/plugins/general/quill/dist/quill.snow.css',
            'resources/assets/plugins/general/@yaireo/tagify/dist/tagify.css',
            'resources/assets/plugins/general/summernote/dist/summernote.css',
            'resources/assets/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css',
            'resources/assets/plugins/general/animate.css/animate.css',
            'resources/assets/plugins/general/toastr/build/toastr.css',
            'resources/assets/plugins/general/dual-listbox/dist/dual-listbox.css',
            'resources/assets/plugins/general/morris.js/morris.css',
            'resources/assets/plugins/general/sweetalert2/dist/sweetalert2.css',
            'resources/assets/plugins/general/socicon/css/socicon.css',
            'resources/assets/plugins/general/plugins/line-awesome/css/line-awesome.css',
            'resources/assets/plugins/general/plugins/flaticon/flaticon.css',
            'resources/assets/plugins/general/plugins/flaticon2/flaticon.css',
            'resources/assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css',
            'resources/assets/css/style.bundle.css',
            'resources/assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.css',
            'resources/assets/plugins/custom/@fullcalendar/core/main.css',
            'resources/assets/plugins/custom/@fullcalendar/daygrid/main.css',
            'resources/assets/plugins/custom/@fullcalendar/list/main.css',
            'resources/assets/plugins/custom/@fullcalendar/timegrid/main.css',
            'resources/assets/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css',
            'resources/assets/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css',
            'resources/assets/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css',
            'resources/assets/plugins/custom/jstree/dist/themes/default/style.css',
            'resources/assets/plugins/custom/jqvmap/dist/jqvmap.css',
            'resources/assets/plugins/custom/uppy/dist/uppy.min.css',
            'resources/assets/css/skins/header/base/light.css',
            'resources/assets/css/skins/header/menu/light.css',
            'resources/assets/css/skins/brand/dark.css',
            'resources/assets/css/skins/aside/dark.css',
        ], 'public/css/app.css'
    )
    .sourceMaps()
    .version()

    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });
