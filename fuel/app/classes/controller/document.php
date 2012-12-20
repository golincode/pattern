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
	}
}
