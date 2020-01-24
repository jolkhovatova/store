<?php


class IndexController extends Controller
{

    public function indexAction(Request $request)
    {
        $args = array(
            'number' => 1234,
            'name' => 'Make',
        );

        return $this->render('index', $args);
    }

    public function contactAction(Request $request)
    {
        $flashMessage = $request->get('flash'); // $_GET['flash'];
        $form = new ContactForm($request);

        if($request->isPost()){
            if($form->isValid()){
                $flashMessage = 'Success';

                Router::redirect('/index.php?route=index/contact&flash=' . $flashMessage);
            }

            $flashMessage = 'Error';
        }

        $args = array(
            'form' => $form,
            'flashMessage' => $flashMessage,
        );

return $this->render('contact', $args);
    }


}