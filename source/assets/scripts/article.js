$(function() {

	var $jsTree = $('#jstree_demo')
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

		//define on selected callback

	CKEDITOR.replace('ck-holder', {
   		language: 'sr'
	});
});