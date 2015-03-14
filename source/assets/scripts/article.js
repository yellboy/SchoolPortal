$(function () {

	var model = {
		categoryId: 0,
		categoryName: '',
		searchByName: '',
		searchByAuthor: ''
	};

	var $jsTree = $('#jstree-holder')
		.jstree({
			"core" : {
				"animation" : 0,
				"check_callback" : true,
				"themes" : { "stripes" : true },
				'data' : {
					'url' : function (node) {
						return node.id === '#' ? '/assets/plugins/vakata-jstree/demo/basic/root.json' : '/static/3.0.9/assets/ajax_demo_children.json';
					},
					'data' : function (node) {
						return { 'id' : node.id };
					}
				}
			},
			"types" : {
				"#" : { "max_children" : 1, "max_depth" : 6, "valid_children" : ["root"] },
				"root" : { "icon" : "/assets/styles/img/tree_icon.png", "valid_children" : ["default"] },
				"default" : { "valid_children" : ["default","file"] },
				"file" : { "icon" : "glyphicon glyphicon-file", "valid_children" : [] }
			},
			"plugins" : [ "dnd", "search", "state", "types", "wholerow" ],
		});

	$('#jstree-holder').on('changed.jstree', function (e, data) {
		if (data.selected.length > 0) {
			model.categoryId = data.selected[0];
			model.categoryName = data.instance.get_node(data.selected[0]).text;

			if (model.categoryId == 1){
				$('.article-list').hide();
				$('.article-details').hide();
				return;
			}

			$('span.category-name').html(model.categoryName);

			//if (model.categoryId == 2) {
			//	$('span.section-title').html('Vesti');
			//}
			//else {
			//	$('span.section-title').html('Clanci');
			//}

			// MM4MM reload article list - ajax, probably use handlebars, send model to server
			// set category name, hide editor
			$('.article-list').show();
			$('.article-details').hide();
		}
	});

	$('body').on('click', '.add-article', function (e) {
		$('.article-details').show();
		// init new
	});

	$('body').on('click', '.edit-article', function (e) {
		$('.article-details').show();
		// load article data
	});

	$('body').on('click', '.delete-article', function (e) {
		// confirm popup, isDelete true ajax call async
		$('.article-details').hide();
		$(e.currentTarget).parents('tr').remove();
	});

	CKEDITOR.replace('ck-holder', {
		language: 'sr'
	});
});