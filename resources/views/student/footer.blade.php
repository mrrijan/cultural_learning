
</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{url('/theme/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('/theme/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE -->
<script src="{{url('/theme/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{url('/theme/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/theme/dist/js/pages/dashboard3.js')}}"></script>

<script src="{{url('/theme/dist/js/script.js')}}"></script>

<script src="{{url('/theme/plugins/toastr/toastr.min.js')}}"></script>

{{--<script>--}}
{{--    @if(Session::has('messages'))--}}
{{--    @if(Session::get('messages')['type'] == "save" || Session::get('messages')['type'] == "update" || Session::get('messages')['type'] == "delete" )--}}
{{--    console.log("reached here in toastr");--}}
{{--    toastr.success('{{Session::get('messages')['message']}}');--}}
{{--    @elseif(Session::get('messages')['type'] == "error")--}}
{{--    toastr.error('{{Session::get('messages')['message']}}');--}}
{{--    @endif--}}
{{--    {{Session::forget('messages')}}--}}

{{--    @endif--}}
{{--</script>--}}
{{--<script>--}}
{{--    $(function(){--}}
{{--        tinymce.init({ selector:'.editor',theme: "modern",height: 300,--}}
{{--            plugins: [--}}
{{--                "advlist autolink link image lists charmap print preview hr anchor pagebreak",--}}
{{--                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",--}}
{{--                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code", "autoresize"--}}
{{--            ],--}}
{{--            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect ",--}}
{{--            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | fontsizeselect  ",--}}
{{--            image_advtab: true ,--}}
{{--            relative_urls:false,--}}
{{--            remove_script_host:false,--}}
{{--            document_base_url : "{{url('/')}}",--}}
{{--            external_filemanager_path:"{{url('filemanager/')."/"}}",--}}
{{--            filemanager_title:"Responsive Filemanager" ,--}}
{{--            external_plugins: { "filemanager" : "{{url('/filemanager/plugin.min.js')}}"},--}}
{{--            autoresize_overflow_padding: 50,--}}
{{--            paste_data_images: true,--}}
{{--            content_style: '.mce-content-body {padding: 5px !important; font-size: 12pt;} img { max-width:100%; height: auto;}',--}}
{{--        });--}}
{{--    });--}}
{{--    document.addEventListener("DOMContentLoaded", function (){--}}
{{--        var company_id = localStorage.getItem("company_id");--}}

{{--        var main_footer = document.getElementById("main-footer");--}}
{{--        if(company_id)--}}
{{--        {--}}
{{--            main_footer.classList.remove("ml-0");--}}

{{--        }--}}
{{--    });--}}
{{--</script>--}}

<script src="https://unpkg.com/nepali-date-picker@2.0.2/dist/nepaliDatePicker.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.2/dist/nepaliDatePicker.min.css
crossorigin="anonymous" />
</body>
</html>
