<?php

namespace App;

class MenuHelper
{

    private $items;

    public function setupItems($items)
    {
        $this->items = $items;
    }

    public function render_order_list()
    {
        return $this->htmlFromArray($this->createItemArray(), true);
    }

    private function createItemArray()
    {
        $result = array();
        foreach ($this->items as $item) {
            if ($item->parent_id == 0) {
                $newItem = array();
                $newItem['name'] = $item->name;
                $newItem['children'] = $this->itemWithChildren($item);
                $newItem['parent_id'] = $item->parent_id;
                $newItem['id'] = $item->id;
                array_push($result, $newItem);
            }
        }
        return $result;
    }

    private function childrenOf($item)
    {
        $result = array();
        foreach ($this->items as $i) {
            if ($i->parent_id == $item->id) {
                $result[] = $i;
            }
        }
        return $result;
    }

    private function itemWithChildren($item)
    {
        $result = array();
        $children = $this->childrenOf($item);
        foreach ($children as $child) {
            $newItem = array();
            $newItem['name'] = $child->name;
            $newItem['children'] = $this->itemWithChildren($child);
            $newItem['id'] = $child->id;
            $newItem['parent_id'] = $child->parent_id;
            array_push($result, $newItem);
        }
        return $result;
    }

    private function htmlFromArray($hierarchicalArray)
    {
        $html = '';
        foreach ($hierarchicalArray as $item) {
            $edit = url('admin/menu-edit', $item['id']);
            $delete = url('admin/menu-destroy', $item['id']);
            $_token = csrf_field();
            $html .= "<ul class='list-group'>";
            $html .= "<li class='list-group-item text-grey-600'><i class='fa fa-level-up ml-2'></i>" . $item['name'] . "<a href='" . $edit . "' class='edit btn btn-success' title='ویرایش'><i class='fa fa-pencil'></i></a><a href='javascript:void(0)' class='btn bg-pink' onclick=\"$(this).find('form').submit();\" title='حذف'> <form action=" . $delete . " method='POST' class='hidden'>" . $_token . "</form> <i class='fa fa-trash-o'></i></a></li>";
            if (count($item['children']) > 0) {
                $html .= $this->htmlFromArray($item['children']);
            }
            $html .= "</ul>";
        }
        return $html;
    }
}