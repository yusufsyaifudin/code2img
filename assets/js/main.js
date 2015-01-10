var editor = ace.edit("editor");
editor.setTheme("ace/theme/ambiance");
editor.getSession().setMode("ace/mode/abap");

$('#theme').change('change', function() {
	var theme = $(this).val();
	editor.setTheme("ace/theme/" + theme);
});

$('#language').change('change', function() {
	var lang = $(this).val();
	editor.getSession().setMode("ace/mode/" + lang);
});


editor.setOption("highlightActiveLine", false);
editor.setOptions({maxLines: Infinity});

$('#line_number').on('keyup change', function() {
	var line_number = $(this).val();
	line_number = parseInt(line_number);
	if (isNaN(line_number) || line_number === 0) {
		editor.setOption("firstLineNumber", 1);
	} else {
		editor.setOption("firstLineNumber", line_number);
	}
});



$('#convertToImg').click(function(e)
{
	e.preventDefault();

	// scroll to result
	$('html, body').animate({
        scrollTop: $("#result").offset().top
    }, 2000);

	render2img();
});

function render2img()
{
	html2canvas(document.getElementById("editor"), {
		onrendered: function(canvas) {
		var image = new Image();
			image.src = canvas.toDataURL("image/png"); // This should be image/png as browsers (only) support it (to biggest compatibilty)
			// Append image (yes, it is a DOM element!) to the DOM and etc here..

			canvas.toBlob(function(blob) {

				var time = new Date().getTime(); // get timestamps
				saveAs(blob, "mycode_" + time + ".png");
			});

			$('#result').empty();
			$('#result').html('<div class="alert alert-success">Here\'s your code in image version. You can right-click and save image.</div>' +
				'<img src="' + image.src + '" alt="code image"><br><br><br><br><br><br>');
			//console.log(image.src);
		}
	});
}