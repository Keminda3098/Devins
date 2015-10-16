
$(document).ready(function() {

	$('#demoTabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#demoTabs a:first').tab('show');

	$('#cp3').colorpicker({format: 'hex'});
	$('#cp3').colorpicker().on('changeColor', function(ev){
		$('input[name=text_color]').val(ev.color.toHex());
		var activeObject = canvas.getActiveObject(),
            activeGroup = canvas.getActiveGroup();

        if (activeObject || activeGroup) {
          (activeObject || activeGroup).setFill(ev.color.toHex());
          canvas.renderAll();
        }
        canvas.freeDrawingColor = ev.color.toHex();
    });

    $('#drawing_color_picker').colorpicker({format: 'hex'});
    $('#drawing_color_picker').colorpicker().on('changeColor', function(ev){
		$('input[name=drawing_color]').val(ev.color.toHex());
		var activeObject = canvas.getActiveObject(),
            activeGroup = canvas.getActiveGroup();

        if (activeObject || activeGroup) {
          (activeObject || activeGroup).setFill(ev.color.toHex());
          canvas.renderAll();
        }
    });

    $('#drawing_button').click(function(){
    	canvas.isDrawingMode = !canvas.isDrawingMode;
    	var css_class = $('#drawing_button').attr('class');
    	if(css_class == 'btn btn-small')
    	{
    		var drawingColor = $('input[name=text_color]').val();
    		$('#drawing_width_span').show();
    		canvas.freeDrawingColor = drawingColor;
  			canvas.freeDrawingLineWidth = parseInt(3, 10) || 1;
    	}
    	else
    	{
    		$('#drawing_width_span').hide();
    	}
    	
    });

    $("#drawing_width").mask("9");

    var drawingLineWidthEl = document.getElementById('drawing_width');
    drawingLineWidthEl.onchange = function() {
    	canvas.freeDrawingLineWidth = parseInt(drawingLineWidthEl.value, 10) || 1; // disallow 0, NaN, etc.
  	};
  	canvas.freeDrawingLineWidth = parseInt(drawingLineWidthEl.value, 10) || 1;

});