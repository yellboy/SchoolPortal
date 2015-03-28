$(function () {

	//#region Search

	var to = false;
	$('#demo_q').keyup(function () {
		if (to) { clearTimeout(to); }
		to = setTimeout(function () {
			var v = $('#demo_q').val();
			$('#jstree-holder').jstree(true).search(v);
		}, 250);
	});

	//#endregion Search

	SPV.CategoryModelManager = {
		_$jsTree: null,
		intialize: function () {
			var self = this;
			self.intializeEvents();

			$('#jstree-holder').jstree({
				"core": {
					"animation": 0,
					"check_callback": true,
					"themes": { "stripes": true },
					'data': SPV.categories
				},
				"types": {
					"#": { "max_children": 1, "max_depth": 8, "valid_children": ["root"] },
					"root": { "icon": "/assets/styles/img/tree_icon.png", "valid_children": ["default"] },
					"default": { "valid_children": ["default", "file"] },
					"file": { "icon": "glyphicon glyphicon-file", "valid_children": [] }
				},
				"plugins": ["contextmenu", "dnd", "search", "state", "types", "wholerow"],
				"contextmenu": {
					"items": function ($node) {
						return {
							"Create": {
								"label": "Додај подкатегорију",
								"action": function (obj) {
									$node = self._$jsTree.create_node($node);
									self._$jsTree.edit($node);
								}
							},
							"Rename": {
								"label": "Промени назив",
								"action": function (obj) {
									self.prepareCategoryEdit();
								}
							},
							"Delete": {
								"label": "Обриши категорију",
								"action": function (obj) {
									self.deleteCategory();
								}
							}
						};
					}
				}
			});
			
			self._$jsTree = $("#jstree-holder").jstree(true);

		},
		intializeEvents: function () {
			var self = this;

			$("#jstree-holder").bind("create_node.jstree", function (e, data) {
				self.saveCategory(data);
			});

			$("#jstree-holder").bind("rename_node.jstree", function (event, data) {
				self.renameCategory(data);
			});

			$("#jstree-holder").bind("move_node.jstree", function (event, data) {

				var parents = data.node.parents.reverse();
				parents = parents.slice(1);
				var hierarchy = parents.join('.') + '.';
				var level = parents.length;

				$.ajax({
					type: 'POST',
					url: '/CategoryController/UpdateCategory',
					dataType: 'json',
					data: { id: data.node.id, parentId: data.parent, position: data.position, level: level, hierarchy: hierarchy }
				});
			});

			$('.rename-category').on('click', function (e) {
				self.prepareCategoryEdit();
			});
			$('.delete-category').on('click', function (e) {
				self.deleteCategory();
			});
			$('.create-category').on('click', function (e) {
				self.createNode();
			});
		},
		deleteCategory: function () {
			var self = this;

			var sel = self._$jsTree.get_selected();
			if (!sel.length) { return false; }
			self._$jsTree.delete_node(sel);

			$.ajax({
				type: 'POST',
				url: '/CategoryController/DeleteCategory',
				dataType: 'json',
				data: { ids: sel }
			});
		},
		prepareCategoryEdit: function () {
			var self = this;
			var sel = self._$jsTree.get_selected();
			if (!sel.length) { return false; }
			sel = sel[0];
			self._$jsTree.edit(sel);
		},
		renameCategory: function (data) {
			$.ajax({
				type: 'POST',
				url: '/CategoryController/RenameCategory',
				dataType: 'json',
				data: { id: data.node.id, title: data.text }
			});
		},
		saveCategory: function (data) {
			var self = this;
			var parents = data.node.parents.reverse();
			parents = parents.slice(1);
			var hierarchy = parents.join('.') + '.';
			var level = parents.length;

			$.ajax({
				type: 'POST',
				url: '/CategoryController/SaveCategory',
				dataType: 'json',
				data: { id: data.node.id, title: data.node.text, parentId: data.node.parent, position: data.position, level: level, hierarchy: hierarchy },
				success: function (result) {
					var sel = self._$jsTree.get_selected();
					self._$jsTree.set_id(data.node, result);
				}
			});
		},
		createNode: function () {
			var self = this;
			var sel = self._$jsTree.get_selected();
			if (!sel.length) { return false; }
			sel = sel[0];
			sel = self._$jsTree.create_node(sel);
			if (sel) {
				self._$jsTree.edit(sel);
			}
		}
	};

	SPV.CategoryModelManager.intialize();

});

