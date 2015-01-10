<?php
$config = array
(
	'contact' => array
	(
		array
		(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|xss_clean|is_unique[users.email]|trim|valid_email'
		),
		array
		(
			'field' => 'full_name',
			'label' => 'Full_name',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'topic',
			'label' => 'Topic',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'message',
			'label' => 'Message',
			'rules' => 'required|xss_clean|trim'
		)
	),
	'user/create' => array
	(
		array
		(
			'field' => '',
			'label' => '',
			'rules' => ''
		)
	),
  	'user/update' => array
	(
		array
		(
			'field' => '',
			'label' => '',
			'rules' => ''
		)
	),
  	'applicant/create' => array
	(
		array
		(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|xss_clean|is_unique[users.email]|trim|valid_email'
		),
		array
		(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'full_name',
			'label' => 'Full Name',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'current_position_title',
			'label' => 'Current Position Title',
			'rules' => 'required|xss_clean|trim'
		)
	),
  	'applicant/update' => array
	(
		array
		(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|xss_clean|trim|valid_email'
		),
		array
		(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'full_name',
			'label' => 'Full Name',
			'rules' => 'required|xss_clean|trim'
		)
	),
  	'employer/create' => array
	(
		array
		(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|xss_clean|is_unique[users.email]|trim|valid_email'
		),
		array
		(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'full_name',
			'label' => 'Full Name',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'organization_name',
			'label' => 'Organization Name',
			'rules' => 'required|xss_clean|trim'
		)
	),
  	'employer/update' => array
	(
		array
		(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|xss_clean|trim|valid_email'
		),
		array
		(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'full_name',
			'label' => 'Full Name',
			'rules' => 'required|xss_clean|trim'
		),
		array
		(
			'field' => 'organization_name',
			'label' => 'Organization Name',
			'rules' => 'required|xss_clean|trim'
		)
	),
	'workhistory/update' => array
	(
		array
		(
			'field' => 'position',
			'label' => 'Position',
			'rules' => ''
		)
	),
  	'subscriber/create' => array
	(
		array
		(
			'field' => '',
			'label' => '',
			'rules' => ''
		)
	),
  	'subscriber/update' => array
	(
		array
		(
			'field' => '',
			'label' => '',
			'rules' => ''
		)
	),
	'internship/create' => array
	(
		array
		(
			'field' => 'name',
			'label' => 'Name',
			'rules' => ''
		)
	),
  	'internship/update' => array
	(
		array
		(
			'field' => 'name',
			'label' => 'Name',
			'rules' => ''
		)
	),
  	'resume/update' => array
	(
		array
		(
			'field' => 'headline',
			'label' => 'Headline',
			'rules' => ''
		)
	),
	'additionalinformation/update' => array
	(
		array
		(
			'field' => 'information',
			'label' => 'Information',
			'rules' => ''
		)
	),
	'education/update' => array
	(
		array
		(
			'field' => 'degree',
			'label' => 'Degree',
			'rules' => ''
		)
	),
  	'auth/login' => array
    (
      array
      (
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email|xss_clean|trim'
      ),
      array
      (
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|xss_clean|trim'
      )
    ),
    'auth/forgotPassword' => array
    (
      array
      (
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email|xss_clean|trim'
      )
    )
);