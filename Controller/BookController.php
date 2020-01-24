<?php


class BookController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('index');
    }


}