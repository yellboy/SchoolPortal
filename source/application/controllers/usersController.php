		if (IsAdministrator()) 
		{
			$data['users'] = $this::loadUsers();
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['id'] = $session_data['id'];
			$this->load->view('layouts/usersLayout', $data);
		}
