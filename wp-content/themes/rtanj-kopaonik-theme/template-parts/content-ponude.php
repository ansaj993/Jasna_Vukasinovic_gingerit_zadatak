<div class="offers">
    <?php
        $cena = get_field('cena');
        $broj_dana_nocenja = get_field('broj_dana_nocenja');

        if(!empty($cena)){ ?>
            <p><i class="fa-solid fa-wallet"></i><?php echo $cena;?></p>
        <?php }

        if(!empty($broj_dana_nocenja)){ ?>
            <p><i class="fa-solid fa-calendar-days"></i><?php echo $broj_dana_nocenja;?></p>
        <?php }?>
</div>
    