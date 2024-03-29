<?php
namespace magic;

class Browser{
    private array $data;

    public function __construct(){
        $json = file_get_contents($GLOBALS['PHP_DIR']."data/cards.json") ;
        $this->data = (array) json_decode($json) ;
    }

    public function generateCards(): void{
        foreach ( $this->data as $img ){
            $name = $img->name;
            $image = $img->image_uris->normal
            ?>
            <div class="carte">
                <img src=' <?= $image?>'/>
                <div class="name-carte">
                    <?= $name ?>
                </div>
            </div>
            <?php   
        }

    }

}