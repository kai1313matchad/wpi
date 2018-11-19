(function($) 
{
    "use strict"; // Start of use strict

    // We can attach the `fileselect` event to all file inputs on the page
		$(document).on('change', ':file', function() 
		{
			var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		});
	// We can watch for our custom `fileselect` event like this
		$(document).ready( function() 
		{
			$(':file').on('fileselect', function(event, numFiles, label) 
			{
				var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' files selected' : label;
				if( input.length ) 
				{
					input.val(log);
				} 
				else 
				{
					if( log ) alert(log);
				}
			});
		});         

	// button for modal
	$(document).on("click",'.tombol',function(e)
    {
    	var id = $(this).data('id');
    	var job = $(this).data('job');
    	var nama = $(this).data('nama');
    	var stsnikah = $(this).data('stsnikah');
    	if(stsnikah == '0')
    	{
    		stsnikah = 'Single';
    	}
    	else
    	{
    		stsnikah = 'Menikah';
    	}
    	var umur = $(this).data('umur');
    	var gender = $(this).data('gender');
    	if(gender == '0')
    	{
    		gender = 'Pria';
    	}
    	else
    	{
    		gender = 'Wanita';
    	}
    	var instansi = $(this).data('instansi');
    	var jurusan = $(this).data('jurusan');
    	var alamat = $(this).data('alamat');
    	var notlp = $(this).data('notlp');
    	var email = $(this).data('email');
    	var pend = $(this).data('pend');
    	var thnmasuk = $(this).data('thnmasuk');
    	var thnlulus = $(this).data('thnlulus');
    	var perusahaan = $(this).data('perusahaan');
    	var thnmskkrj = $(this).data('thnmskkrj');
    	var thnkeluar = $(this).data('thnkeluar');
    	var alasan = $(this).data('alasan');
    	var path = $(this).data('path');
    	var baseurl = $(this).data('baseurl');

    	$(".id").val(id);
    	$(".job").text(job);
    	$(".nm-apply").text(nama);
    	$(".stsnikah").text(stsnikah);
    	$(".umur").text(umur);
    	$(".gender").text(gender);
    	$(".instansi").text(instansi);
    	$(".jurusan").text(jurusan);
    	$(".alamat").text(alamat);
    	$(".notlp").text(notlp);
    	$(".email").text(email);
    	$(".pend").text(pend);
    	$(".thnmasuk").text(thnmasuk);
    	$(".thnlulus").text(thnlulus);
    	$(".perusahaan").text(perusahaan);
    	$(".thnmskkrj").text(thnmskkrj);
    	$(".thnkeluar").text(thnkeluar);
    	$(".alasan").text(alasan);
    	$(".path").text(path);

    });

    // Instantiate the Bootstrap carousel
	$('.multi-item-carousel').carousel({
	  interval: false
	});

	// for every slide in carousel, copy the next slide's item in the slide.
	// Do the same for the next, next item.
	$('.multi-item-carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  if (next.next().length>0) {
	    next.next().children(':first-child').clone().appendTo($(this));
	  } else {
	  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});

	$(function () {
			$('#datetimepicker1').datetimepicker({
				//format: 'DD/MM/YYYY'
				format: 'YYYY-MM-DD'
			});			
		});
	$(function () {
			$('#datetimepicker2').datetimepicker({
				//format: 'DD/MM/YYYY'
				format: 'YYYY-MM-DD'
			});			
		});
		
	tinymce.init({
		selector: "textarea",
		theme: "modern",
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker toc",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern codesample"
		],
		external_plugins: {
			//"moxiemanager": "/moxiemanager-php/plugin.js"
		},
		content_css: "css/development.css",
		add_unload_trigger: false,

		toolbar: "insertfile undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table codesample",

		image_advtab: true,
		image_caption: true,

		style_formats: [
			{title: 'Bold text', format: 'h1'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		],

		template_replace_values : {
			username : "Jack Black"
		},

		template_preview_replace_values : {
			username : "Preview user name"
		},

		link_class_list: [
			{title: 'Example 1', value: 'example1'},
			{title: 'Example 2', value: 'example2'}
		],

		image_class_list: [
			{title: 'Example 1', value: 'example1'},
			{title: 'Example 2', value: 'example2'}
		],

		templates: [
			{title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
			{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
		],

		setup: function(ed) {
			/*ed.on(
				'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
				'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
				'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
				console.log(e.type, e);
			});*/
		},

		spellchecker_callback: function(method, data, success) {
			if (method == "spellcheck") {
				var words = data.match(this.getWordCharPattern());
				var suggestions = {};

				for (var i = 0; i < words.length; i++) {
					suggestions[words[i]] = ["First", "second"];
				}

				success({words: suggestions, dictionary: true});
			}

			if (method == "addToDictionary") {
				success();
			}
		}
	});

	if (!window.console) {
		window.console = {
			log: function() {
				tinymce.$('<div></div>').text(tinymce.grep(arguments).join(' ')).appendTo(document.body);
			}
		};
	}


})(jQuery); // End of use strict
