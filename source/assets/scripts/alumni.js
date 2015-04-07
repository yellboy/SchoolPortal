$(function(){
	
	SPV.AlumnusModule = {
		_model: {
			id: null,
			firstName: '',
			lastName: '',
			city: '',
			state: '',
			email: '',
			year: 0,
			grade: 0,
		},
		_lokalnaPromeljiva: null,
		initialize: function (options) 
		{
			this.initalizeEvents();
		},
		initalizeEvents: function()
		{
			var self = this;
			$('body').on('click', '.add-alumni', function (e) 
			{
				self.addAlumni();
			});
		},
		addAlumni: function (id) {
			var self = this;
			
			console.log("Start");
			
			self._model.firstName = $('.firstName').val();
			self._model.lastName = $('.lastName').val();
			self._model.city = $('.city').val();
			self._model.state = $('.state').val();
			self._model.email = $('.email').val();
			self._model.year = $('.year').val();
			self._model.grade = $('.grade').val();			
				
			if(self._model.firstName != '' && self._model.lastName != '' && self._model.city != '' && self._model.state != '' && self._model.email != '' && self._model.year != 0 && self._model.grade != 0)
			{
				console.log("Execute");
				
				$.ajax({
					type: 'POST',
					url: '/AddToAlumniController/DodajAlumni',
					data: {firstName: self._model.firstName, lastName: self._model.lastName, city: self._model.city, state: self._model.state, email: self._model.email,year: self._model.year,grade: self._model.grade },
					dataType: 'json'
				});
			}
			else
			{
				console.log("Bad Input");
			}
				
			console.log("End");
		}
	}			
			
	SPV.AlumnusModule.initialize();
});