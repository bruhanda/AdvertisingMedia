<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Pages extends Controller_Backend {

    protected $title = 'Pages';

    public function before()
    {
        parent::before();
        $this->template->title=$this->title;
    }

    public function action_index()
    {
        $count = ORM::factory('Page')->count_all();
        $pagination = new Pagination(array('total_items' => $count));
        $pages = ORM::factory('Page')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
        $this->template->contents[] = View::factory('backend/pages/list.view', array('pages' => $pages));
        $this->template->contents[] = $pagination;

    }

    public function action_create()
    {
        if (isset($_POST['submit'])) {
            $page = ORM::factory('Page');
            $page->name = $this->request->post('name');
            $page->title = $this->request->post('title');
            $page->content = $this->request->post('content');
            $page->description = $this->request->post('description');
            $page->keywords = $this->request->post('keywords');
            $page->weight = $this->request->post('weight');
            $page->save();
            $page->slug = Inflector::slug($page->name);
            ;
            $page->save();
            $this->redirect('/admin/pages/edit/' . $page->id);
        }
        $this->template->title='Create page';
        $this->template->contents[] = View::factory('backend/pages/form.view', array('title' => 'Создать страницу'));
    }

    public function action_edit()
    {
        $page = ORM::factory('Page')->where('id', '=', $this->request->param('id'))->find();
        if (isset($_POST['submit'])) {
            $page->name = $this->request->post('name');
            $page->title = $this->request->post('title');
            $page->content = $this->request->post('content');
            $page->description = $this->request->post('description');
            $page->keywords = $this->request->post('keywords');
            $page->weight = $this->request->post('weight');
            $page->slug = Inflector::slug($page->name);
            ;
            $page->save();
        }
        $this->template->contents[] = View::factory('backend/pages/form.view', array('title' => 'Редактировать страницу', 'page' => $page));

    }

    public function action_remove()
    {
        $page = ORM::factory('Page')->where('id', '=', $this->request->param('id'))->find();
        $page->delete();
        $this->redirect('/admin/pages');

    }

}

// End Controller_Admin_Materials_Pages
