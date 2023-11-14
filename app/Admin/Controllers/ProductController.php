<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('price', __('Price'));
       // $grid->column('image', __('Image'));
       $grid->column('image')->image();
        $grid->column('description', __('Description'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('quantity', __('Quantity'));
        $show->field('price', __('Price'));
        $show->field('image', __('Image'));
        $show->field('description', __('Description'));
        $show->field('category_id', __('Category id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('name', __('Name'));
        $form->number('quantity', __('Quantity'));
        $form->decimal('price', __('Price'));
        $form->image('image', __('Image'));
        $form->textarea('description', __('Description'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
