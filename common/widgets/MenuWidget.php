<?php
/**
 * Created by PhpStorm.
 * User: mrdos
 * Date: 03.03.2017
 * Time: 17:50
 */

namespace common\widgets;


use frontend\models\Category;
use yii\base\Widget;
use yii\caching\DbDependency;

class MenuWidget extends Widget
{
    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;

    public function init()
    {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        $menu = \Yii::$app->cache->get('menu');
        if ($menu) return $menu;

        $this->data = Category::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);


        $dependecy_cache = new DbDependency([
            'sql' => 'select max(name) from category',
        ]);
        \Yii::$app->cache->set('menu', $this->menuHtml, 30, $dependecy_cache);

        return $this->menuHtml;
    }

    protected function getTree()
    {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;

            } else {
                $this->data[$node['parent_id']]['children'][$node['id']] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree)
    {
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category);
        }
        return $str;
    }

    protected function catToTemplate($category)
    {
        ob_start();
        include __DIR__ . '/menu/' . $this->tpl;
        return ob_get_clean();
    }

}