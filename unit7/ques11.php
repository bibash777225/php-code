<!-- Create a class BlogPost with private properties $title, $content, $createdAt. Use DateTime to set
$createdAt to the current date in the constructor. Add a method daysSinceCreated() to calculate how many
days ago it was created. Test with an object -->
<?php
class BlogPost {
    private $title;
    private $content;
    private $createdAt;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = new DateTime();
    }

    public function daysSinceCreated() {
        $today = new DateTime();
        $diff = $today->diff($this->createdAt);
        return $diff->days;
    }
}

$post = new BlogPost("PHP OOP", "Learning PHP OOP");
echo "Days ago: " . $post->daysSinceCreated();
?>
