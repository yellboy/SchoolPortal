$(function () {

	SPV.ArticlesModule = {
		_model: {
			id: null,
			categoryId: 0,
			categoryName: '',
			searchByName: '',
			searchByAuthor: '',
		},
		_articlesTemplate: null,
		_$jsTree: null,
		_savedId: null,
		initialize: function (options) {
			this._$jsTree = $('#jstree-holder').jstree({
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
				"plugins": ["state", "types", "wholerow"],
			});

			this._articlesTemplate = Handlebars.compile($('#articles-list-template').html());
			this._filesTemplate = Handlebars.compile($('#files-list-template').html());
			this.initalizeEvents();
		},
		initalizeEvents: function(){
			var self = this;
			self._$jsTree.on('changed.jstree', function (e, data) {
				if (data.selected.length > 0) {
					self._model.categoryId = data.selected[0];
					self._model.categoryName = data.instance.get_node(data.selected[0]).text;

					if (self._model.categoryId == 1) {
						$('.article-list').hide();
						$('.article-details').hide();
						return;
					}

					$('span.category-name').html(self._model.categoryName);
					if (self._model.categoryId == 2) $('span.section-title').html(ST.News);
					else $('span.section-title').html(ST.Articles);

					self.loadArticleList(self._model.categoryId);
					self.loadCategoryFiles(self._model.categoryId);
				}
			});

			$('body').on('click', '.add-article', function (e) {
				self.openArticle();
			});

			$('body').on('click', '.edit-article', function (e) {
				var id = $(e.currentTarget).parents('tr').attr('data-id');
				self.openArticle(id);
			});

			$('body').on('click', '.delete-article', function (e) {
				self._savedId = $(e.currentTarget).parents('tr').attr('data-id');
				$('#confirm_modal').modal('show');
				$('.article-details').hide();
			});

			$('#confirm_modal').on('click', '.yes-button', function (e) {
				var $tr = $('.article-list tr[data-id=' + self._savedId + ']');
				$tr.remove();

				$.ajax({
					type: 'POST',
					url: '/ArticleEditController/DeleteArticle',
					dataType: 'json',
					data: { id: self._savedId },
				});
			});

			$('body').on('click', '.save-article', function (e) {
				self.saveArticle();
			});

			$('body').on('click', '.cancel', function (e) {
				self.loadArticleList(self._model.categoryId);
			});

			$('body').on('change', 'input.searchByTitle', function (e) {
				self.loadArticleList(self._model.categoryId);
			});

			$('body').on('change', 'input.searchByAuthor', function (e) {
				self.loadArticleList(self._model.categoryId);
			});

			CKEDITOR.replace('ck-holder', {
				language: 'sr'
			});
			CKEDITOR.config.extraPlugins = "base64image";
		},
		_getCKEditor: function () {
			return CKEDITOR.instances['ck-holder'];
		},
		loadArticleList: function (categoryId) {
			var self = this;
			self._model.searchByName = $('input.searchByTitle').val();
			self._model.searchByAuthor = $('input.searchByAuthor').val();
			$.ajax({
				type: 'POST',
				url: '/ArticleEditController/LoadArticleListForGrid',
				dataType: 'json',
				data: { categoryId: categoryId, searchByAuthor: self._model.searchByAuthor, searchByName: self._model.searchByName },
				success: function (data) {
					$('.articles-list-holder').html(self._articlesTemplate({ rows: data }));
					$('.article-list').show();
					$('.article-details').hide();
					self.updateViewInCaseOfAdminRights(categoryId);
				}
			});
		},
		openArticle: function (id) {
			id = id || null;
			var self = this;

			$('.article-list').hide();

			if (id) {
				$.ajax({
					type: 'POST',
					url: '/ArticleEditController/LoadArticle',
					dataType: 'json',
					data: { id: id },
					success: function (data) {
						var obj = data[0];
						self._model.id = obj.Id;
						$('.article-details').show();
						$('.article-details .article-title').val(obj.Title);
						self._getCKEditor().setData(obj.Content);
					}
				});
			}
			else {
				$('.article-details .article-title').val("");
				self._getCKEditor().setData('');
				self._model.id = null;
				$('.article-details').show();
			}
		},
		saveArticle: function () {
			var self = this;

			self._model.title = $('.article-details .article-title').val();
			self._model.content = self._getCKEditor().getData();
			self._model.id = self._model.id || -1;

			if (!self._model.title || self._model.title.trim() == "") {
				return toastr.warning(ST.ErrorTitle);
			}
			if (!self._model.content || self._model.content.trim() == "") {
				return toastr.warning(ST.ErrorContent);
			}

			$.ajax({
				type: 'POST',
				url: '/ArticleEditController/SaveArticle',
				dataType: 'json',
				data: { categoryId: self._model.categoryId, id: self._model.id, title: self._model.title, content: self._model.content },
				success: function (data) {
					toastr.success(ST.SaveSuccess);
					self.loadArticleList(self._model.categoryId);
				}
			});
		},
		loadCategoryFiles: function (categoryId) {
			$('.article-files').show();
		},
		updateViewInCaseOfAdminRights: function (categoryId) {
			if (SPV.userCourses instanceof Array) {
				if (SPV.userCourses.indexOf(categoryId) > -1) {
					$('button').hide();
				}
				else {
					$('button').show();
				}

			}

		}
	};

	SPV.ArticlesModule.initialize();

});