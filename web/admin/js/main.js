$('.delete').click(function(){
    var rel = $(this).attr("rel");
    swal({
            title: "Are you sure?",
            text: "Your will not be able to recover this project!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false },
        function (isConfirm) {
            if (isConfirm) {
                swal("Deleted!", "This project has been deleted.", "success");
                location.href=rel;
            } else {
                swal("Cancelled", "This project is safe :)", "error");
            }
        });
});
$('.copy-url').on('click', function (e) {
   e.preventDefault();
    var id = $(this).data('id');
    var copyText = document.getElementById("copy_url_"+id);
    copyText.select();
    document.execCommand("Copy");
    alert("Copied the text: " + copyText.value);

});

/*var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('template-template_code'), {
    lineNumbers: true,               // показывать номера строк
    matchBrackets: true,             // подсвечивать парные скобки
    mode: 'htmlmixed', // стиль подсветки
    indentUnit: 4,                    // размер табуляции
    theme:"dracula",
    autoCloseTags:true,
    lineWrapping:true,
    extraKeys: {"Ctrl-Space":"autocomplete"}
});*/


/*window.onload = function() {
    editor = CodeMirror(document.getElementById("code1"), {
        mode: "text/html",
        extraKeys: {"Ctrl-Space": "autocomplete"},
        value: document.documentElement.innerHTML
    });
};*/









