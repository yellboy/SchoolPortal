$(function () {

	SPV.ArticlesModule = {
		_model: {
			categoryId: 0,
			categoryName: '',
			searchByName: '',
			searchByAuthor: ''
		},
		_articlesTemplate: null,
		_$jsTree: null,
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
		},
		loadArticleList: function (categoryId) {
			var self = this;
			$.ajax({
				type: 'POST',
				url: '/ArticleEditController/LoadArticleListForGrid',
				dataType: 'json',
				data: { categoryId: categoryId },
				success: function (data) {
					$('.articles-list-holder').html(self._articlesTemplate({ rows: data }));
					$('.article-list').show();
					$('.article-details').hide();
				}
			});
		}
	};

	SPV.ArticlesModule.initialize();

});