<div id="home-container" class="container">
	<div class="row">
	 	<?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
            foreach ($data->result_array() as $i) :
                $id=$i['id'];
                $judul=$i['key'];
                $isi=$i['value'];
        ?>
        <div class="col-md-8 col-md-offset-2">
            <h2><?php echo $judul;?></h2><hr/>
            <?php echo limit_words($isi,100);?><br>
            <a href="<?php echo base_url().'berita/berita_detail/'.$id;?>" class="btn btn-primary"> Selengkapnya ></a>
        </div>
        <?php endforeach;?>
	</div>
</div>