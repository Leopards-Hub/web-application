<?php
// require_once '../views/HomeView.php';
class homecontroller{

    public function index(){
        require_once 'views/HomeView.php';
    }
    public function book(){
        echo `<script>
        const book =document.getElementById('btn-book');
        book.addEventListener('click',()=>{
            location.href("<?php URL_ROOT.URL_SUBFLODER;?>/controllers/booktablecontroller")
        })
    </script>`;
    }
}
// Update the instantiation line

?>
