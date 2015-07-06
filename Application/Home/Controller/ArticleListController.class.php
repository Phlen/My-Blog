<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\CategoryModel;
use Home\Model\ArticleModel;
class ArticleListController extends Controller {

  function Index() {
    $this->redirect('index/index');
  }

  function articleList($id,$page = 1, $page_size = 2) {
    /*sidebar -->*/
    $cateModel = new CategoryModel();
    $category = $cateModel->getTree();
    /*dump($category);*/
    $this->assign("navigation" , $category);
    $articleModel = new ArticleModel();
    $lastArticle = $articleModel->getArticle();
    $this->assign('lastArticle',$lastArticle);
    /*end sidebar*/

    /*title-->*/
    $categoryTitle = $cateModel->getCategoryTitleById($id);
/*    dump($categoryTitle);*/
    $this->assign("title" , $categoryTitle);
    /*end title*/
    /*articleList-->*/
    $listModel = new ArticleModel();
    $articleList = $listModel->getArticleListByCid($id , $page , $page_size);
    $total_count = $articleModel->getTotalByCid($id);
   /* dump($articleList);*/
    $pageMeta = array(
      'page' => $page,
      'page_size' => $page_size,
      'page_count' => ceil($total_count / $page_size),
      'total_count' => $total_count,
    );

    $this->assign('articleList', $articleList);
    $this->assign('page', $pageMeta);

    $this->display();
  }

  /*function getList($page = 1, $page_size = 10) {
    $articleModel = new ArticleModel();
    $list = $articleModel->getList($page, $page_size);

    $total_count = $articleModel->getTotal();

    $pageMeta = array(
      'page' => $page,
      'page_size' => $page_size,
      'page_count' => ceil($total_count / $page_size),
      'total_count' => $total_count,
    );

    $this->assign('articles', $list);
    $this->assign('page', $pageMeta);

    $this->display('articleList');
  }*/
  function test() {
    $cateModel = new CategoryModel();
    $category = $cateModel->getTree();
    dump($category);
  }
}