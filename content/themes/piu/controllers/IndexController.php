<?php
use PIU\Theme\AbstractController;

namespace PIU\Theme;

/**
 * Index.
 */
final class IndexController extends AbstractController
{
	public function getContext()
	{
		$post_current = $this->getPost();

		return [
			'post' => $post_current
		];
	}

	public function getTemplates()
	{
		return ['pages/index/index.twig'];
	}
}
