<?php


class BookModel
{

    public function find($id)
    {
        $books = $this->findAll();
        foreach ($books as $book){
            if($book['id'] == $id){
                return $book;

            }
        }


        throw new Exception('Book not found');
    }

    public function findAll()
    {
        return array(
            array(
                'id' => 1,
                'title' => 'Dracula',
                'author' => 'Stoker',
                'price' => 666,
            ),

            array(
                'id' => 2,
                'title' => 'Dream cather',
                'author' => 'King',
                'price' => 737,
            ),

            array(
                'id' => 3,
                'title' => 'Dracula',
                'author' => 'Stoker',
                'price' => 777,
            ),
        );
    }
}