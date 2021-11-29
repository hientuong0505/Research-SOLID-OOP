<?php
    class Post
    {
        public $title;
        protected $author;
        private $content;
        
        public function __construct($title, $content, $author)
        {
            $this->title = $title;
            $this->content = $content;
            $this->author = $author;
        }
        public function getContent()
        {
            return $this->content;
        }
        public function show()
        {
            echo "Bài viết có tiêu đề {$this->title} và nội dung {$this->content}.Tác giả {$this->author}";
        }
    }
    class PostChild extends Post
    {
        public function getAuthor()
        {
            return $this->author;
        }

    }
    $postChild = new PostChild('Tiêu đề 1', 'Nội dung 1', 'Tác giả 1');
    $postChild->show();
    echo $postChild->getAuthor();
    echo $postChild->getContent();
?>