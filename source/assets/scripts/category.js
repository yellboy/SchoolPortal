
function demo_create() {
	var ref = $('#jstree-holder').jstree(true),
		sel = ref.get_selected();
	if(!sel.length) { return false; }
	sel = sel[0];
	sel = ref.create_node(sel);
	if(sel) {
		ref.edit(sel);
	}
};
function demo_rename() {
	var ref = $('#jstree-holder').jstree(true),
		sel = ref.get_selected();
	if(!sel.length) { return false; }
	sel = sel[0];
	ref.edit(sel);
};
function demo_delete() {
	var ref = $('#jstree-holder').jstree(true),
		sel = ref.get_selected();
	if(!sel.length) { return false; }
	ref.delete_node(sel);
};

$(function() {
		var to = false;
		$('#demo_q').keyup(function () {
			if(to) { clearTimeout(to); }
			to = setTimeout(function () {
				var v = $('#demo_q').val();
				$('#jstree-holder').jstree(true).search(v);
			}, 250);
		});

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
				"plugins" : [ "contextmenu", "dnd", "search", "state", "types", "wholerow" ],
				"contextmenu": {
			        "items": function ($node) {
			        	var tree = $("#jstree-holder").jstree(true);
			            return {
			                "Create": {
			                    "label": "Додај подкатегорију",
			                    "action": function (obj) {
			                        $node = tree.create_node($node);
                    				tree.edit($node);
			                    }
			                },
			                "Rename": {
			                    "label": "Промени назив",
			                    "action": function (obj) {
			                    	demo_rename();
			                    }
			                },
			                "Delete": {
			                    "label": "Обриши категорију",
			                    "action": function (obj) {
			                        demo_delete();
			                    }
			                }
			            };
			        }
    			}
			});
});

