<?php
/**
* 
*/
class Pixnet
{
	public function getUserArticles($option)
	{
		$user_id = $option[‘user_id’];
		$article_id = $option[‘article_id’];

		if (!empty($user_id) && !empty($article_id)) {
			$user = User::getUser($user_id);
			if (empty($user)) {
				throw new AlertException("查無此帳號!", '/');
			}

			$blog = $user->blog;
			if (empty($blog)) {
				throw new AlertException("帳號尚未有部落格!", '/');
			}

			$article = $blog->getArticle($article_id);
			if (!empty($article)) {
				throw new AlertException("此帳號無此文章!", '/');
			}
			
			return $article;
		}
	}
}