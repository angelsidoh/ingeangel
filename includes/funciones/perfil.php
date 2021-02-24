<div class="contenedor-cuenta">
    <div class="contenedor-perfil">
        <div class="imagen">
            <div class="foto">

                <!-- <img src="img/terceros/avatar.JPG" alt="avatar"> -->
                <?php if ($foto == '') {
                ?><img src="img/terceros/avatar.JPG" alt="avatar"><?php
                                                                        } else { ?>
                    <img src="<?php echo $foto; ?>" alt="Hay foto en BD">
                <?php
                                                                        } ?>
                <div class="edit-fotox">
                    <div class="upload">
                        <i class="fas fa-user-edit"></i>
                        <input type="file" id="foto1file" name="foto1file">

                    </div>


                    <!-- <a type="file" id="foto1file" name="foto1file" href="#"><i class="fas fa-user-edit"></i></a> -->
                </div>
                <div class="progrss">
                    <div class="progressbarr">
                        <progress id="progressBar" value="0" max="100"></progress>

                        <div class="text-progrss">
                            <p id="loaded_n_total"></p>
                            <h3 id="status"></h3>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="text-img">
            <h1><?php
                echo $usuario; ?></h1>
        </div>
    </div>
</div>