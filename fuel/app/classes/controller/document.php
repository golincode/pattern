<?php

class Controller_Document extends Controller_Template
{

	public static $chapters = array(
		'preface' => array(
			'title'		=> 'Preface',
			'body'		=> 'preface',
			'sections'	=> array(
				'what-is-pattern' => array(
					'title'		=> 'What is Pattern?',
					'body'		=> 'what-is-pattern',
				),
				'how-to-use-pattern' => array(
					'title'		=> 'How to use Pattern',
					'body'		=> 'how-to-use-pattern',
				),
				'creating-documents' => array(
					'title'		=> 'Creating Documents',
					'body'		=> 'creating-documents',
				),
				'project-process' => array(
					'title'		=> 'Project Process',
					'body'		=> 'project-process',
				),
			),
		),
		'objectives-scope' => array(
			'title'		=> 'Chapter I – Objectives &amp; Scope',
			'body'		=> 'objectives-scope',
			'sections'	=> array(
				'purpose' => array(
					'title'		=> 'Purpose',
					'body'		=> 'purpose',
				),
				'objectives' => array(
					'title'		=> 'Objectives',
					'body'		=> 'objectives',
				),
				'life-cycle' => array(
					'title'		=> 'Life Cycle',
					'body'		=> 'life-cycle',
				),
				'supplied' => array(
					'title'		=> 'Supplied',
					'body'		=> 'supplied',
				),
				'deliverables' => array(
					'title'		=> 'Deliverables',
					'body'		=> 'deliverables',
				),
				'people' => array(
					'title'		=> 'People',
					'body'		=> 'people',
				),
			),
		),
		'functional-specification' => array(
			'title'		=> 'Chapter II – Functional Specification',
			'body'		=> 'functional-specification',
			'sections'	=> array(
				'web' => array(
					'title'		=> 'Web development',
					'body'		=> 'web',
				),
				'apps' => array(
					'title'		=> 'App development',
					'body'		=> 'apps',
				),
			),
		),
		'ux-design' => array(
			'title'		=> 'Chapter III – UX &amp; Design',
			'body'		=> 'ux-design',
			'sections'	=> array(
				'use-cases-stories' => array(
					'title'		=> 'Use Cases &amp; User Stories',
					'body'		=> 'use-cases-stories',
				),
				'creative-brief' => array(
					'title'		=> 'Creative Brief',
					'body'		=> 'creative-brief',
				),
				'design-process' => array(
					'title'		=> 'Design Process',
					'body'		=> 'design-process',
				),
				'typefaces' => array(
					'title'		=> 'Typefaces',
					'body'		=> 'typefaces',
				),
				'provided-assets' => array(
					'title'		=> 'Provided Assets',
					'body'		=> 'provided-assets',
				),
				'brand-guidelines-copy-style' => array(
					'title'		=> 'Brand Guidelines and Copy Style',
					'body'		=> 'brand-guidelines-copy-style',
				),
			),
		),
		'technical-specification' => array(
			'title'		=> 'Chapter IV – Technical Specification',
			'body'		=> 'technical-specification',
			'sections'	=> array(
				'server' => array(
					'title'		=> 'Server',
					'body'		=> 'server',
				),
				'client-browser-devices' => array(
					'title'		=> 'Client Browser &amp; Devices',
					'body'		=> 'client-browser-devices',
				),
				'application' => array(
					'title'		=> 'Application',
					'body'		=> 'application',
				),
				'third-party' => array(
					'title'		=> 'Third Party Services',
					'body'		=> 'third-party',
				),
				'domains-dns' => array(
					'title'		=> 'Domains &amp; DNS',
					'body'		=> 'domains-dns',
				),
				'accessibility' => array(
					'title'		=> 'Accessibility',
					'body'		=> 'accessibility',
				),
				'backups' => array(
					'title'		=> 'Backups',
					'body'		=> 'backups',
				),
				'analytics' => array(
					'title'		=> 'Analytics',
					'body'		=> 'analytics',
				),
				'suppliers' => array(
					'title'		=> 'Recommended Suppliers',
					'body'		=> 'suppliers',
				),
				'code-repo' => array(
					'title'		=> 'Code Repository',
					'body'		=> 'code-repo',
				),
				'bug-reporting' => array(
					'title'		=> 'Bug Reporting',
					'body'		=> 'bug-reporting',
				),
				'version-control' => array(
					'title'		=> 'Version Control',
					'body'		=> 'version-control',
				),
				'environments' => array(
					'title'		=> 'Environments',
					'body'		=> 'environments',
				),
				'logs' => array(
					'title'		=> 'Logs',
					'body'		=> 'logs',
				),
				'software' => array(
					'title'		=> 'Software &amp; Versions',
					'body'		=> 'software',
				),
				'frameworks' => array(
					'title'		=> 'Frameworks &amp; Libraries',
					'body'		=> 'frameworks',
				),
				'standards' => array(
					'title'		=> 'Coding Standards',
					'body'		=> 'standards',
				),
			),
		),
		'quality-assurance' => array(
			'title'		=> 'Chapter V – Software Quality Assurance',
			'body'		=> 'quality-assurance',
			'sections'	=> array(
				'user-acceptance-testing' => array(
					'title'		=> 'User Acceptance Testing',
					'body'		=> 'user-acceptance-testing',
				),
				'unit-testing' => array(
					'title'		=> 'Unit Testing',
					'body'		=> 'unit-testing',
				),
				'security-testing' => array(
					'title'		=> 'Security Testing',
					'body'		=> 'security-testing',
				),
				'change-control' => array(
					'title'		=> 'Change Control',
					'body'		=> 'change-control',
				),
			),
		),
		'go-live' => array(
			'title'		=> 'Chapter VI – Go Live',
			'body'		=> 'go-live',
			'sections'	=> array(
				'analytics' => array(
					'title'		=> 'Analytics',
					'body'		=> 'analytics',
				),
				'server' => array(
					'title'		=> 'Server',
					'body'		=> 'server',
				),
				'ssl-certificates' => array(
					'title'		=> 'SSL Certificates',
					'body'		=> 'ssl-certificates',
				),
				'dns' => array(
					'title'		=> 'DNS',
					'body'		=> 'dns',
				),
				'sprint' => array(
					'title'		=> 'Sprint',
					'body'		=> 'sprint',
				),
				'review' => array(
					'title'		=> 'Review',
					'body'		=> 'review',
				),
			),
		),
		'maintenance' => array(
			'title'		=> 'Chapter VII – Maintenance',
			'body'		=> 'maintenance',
			'sections'	=> array(
				'server' => array(
					'title'		=> 'Server',
					'body'		=> 'server',
				),
				'backups' => array(
					'title'		=> 'Backups',
					'body'		=> 'backups',
				),
				'log-checking' => array(
					'title'		=> 'Log Checking',
					'body'		=> 'log-checking',
				),
				'version-checking' => array(
					'title'		=> 'Software Version Checking',
					'body'		=> 'version-checking',
				),
				'application' => array(
					'title'		=> 'Application',
					'body'		=> 'application',
				),
				'third-party-services' => array(
					'title'		=> 'Third Party Services',
					'body'		=> 'third-party-services',
				),
			),
		),
		'legal' => array(
			'title'		=> 'Chapter VIII – Legal',
			'body'		=> 'legal',
			'sections'	=> array(
				'statement-of-work' => array(
					'title'		=> 'Statement of Work',
					'body'		=> 'statement-of-work',
				),
				'contract-for-services' => array(
					'title'		=> 'Contract for Services',
					'body'		=> 'contract-for-services',
				),
			),
		),
		'analysis' => array(
			'title'		=> 'Chapter IX – Analysis',
			'body'		=> 'analysis',
			'sections'	=> array(
				'evaluation' => array(
					'title'		=> 'Internal Evaluation',
					'body'		=> 'evaluation',
				),
				'client-feedback' => array(
					'title'		=> 'Client Feedback',
					'body'		=> 'client-feedback',
				),
			),
		),
		'authorised-systems' => array(
			'title'		=> 'Chapter X – Authorised Web Systems',
			'body'		=> 'authorised-systems',
			'sections'	=> array(
				'apis' => array(
					'title'		=> 'APIs',
					'body'		=> 'apis',
				),
				'libraries' => array(
					'title'		=> 'Libraries',
					'body'		=> 'libraries',
				),
				'frameworks' => array(
					'title'		=> 'Frameworks',
					'body'		=> 'frameworks',
				),
				'cms' => array(
					'title'		=> 'CMS',
					'body'		=> 'cms',
				),
				'platforms' => array(
					'title'		=> 'Platforms &amp; Applications',
					'body'		=> 'platforms',
				),
				'registration' => array(
					'title'		=> 'Registering a system',
					'body'		=> 'registration',
				),
			),
		),
	);

	public static $quotes = array(
		array(
			'quote'		=> 'If you’re good at something, never do it for free.',
			'author'	=> 'The Joker',
		),
		array(
			'quote'		=> 'Creativity takes courage.',
			'author'	=> 'Henri Matisse',
		),
		array(
			'quote'		=> 'Stay hungry, stay foolish.',
			'author'	=> 'Steve Jobs',
		),
		array(
			'quote'		=> 'Insanity is doing the same thing over and over again and expecting different results.',
			'author'	=> 'Albert Einstein',
		),
		array(
			'quote'		=> 'Design is a process, not a product.',
			'author'	=> 'Christoper Simmons',
		),
	);

	private static $ips = array(
		'199.4.27.122', // London
		'199.4.18.2', // San Francisco
	);

	public function before()
	{
		parent::before();

		if ( ! in_array(Input::ip(), self::$ips) && Fuel::$env === Fuel::PRODUCTION)
		{
			throw new HttpNotFoundException;
		}
	}

	public function action_toc()
	{
		$toc = View::forge('toc');

		$toc->chapters = self::$chapters;

		$this->template->body = $toc;
	}

	public function action_chapter($chapter_id)
	{
		if ( ! in_array($chapter_id, array_keys(self::$chapters)))
		{
			throw new HttpNotFoundException;
		}

		$chapter = View::forge('chapter');

		$chapter->title = self::$chapters[$chapter_id]['title'];
		$chapter->body = View::forge('chapters/'.self::$chapters[$chapter_id]['body']);
		$chapter->sections = array();

		foreach (self::$chapters[$chapter_id]['sections'] as $section_id => $section)
		{
			$chapter->sections[$section_id]['title'] = $section['title'];
			$chapter->sections[$section_id]['body'] = View::forge('chapters/'.self::$chapters[$chapter_id]['body'].'/'.$section['body']);
		}

		$chapter->quote = self::$quotes[array_rand(self::$quotes)];

		$this->template->body = $chapter;
	}

	public function action_404()
	{
		$error = View::forge('404');

		$this->template->body = $error;

		return $this->template;
	}
}
