<?php
    $sis     = new Sistema;
    $hm     = new Home;

    $acao       = $sis->getParametros()[1] ?? null;
    $post       = $sis->getPost();
    
    switch ($acao) {
        case 'converter':
            echo '
            <h2>'.TITULO.'</h2>
            <div class="input-group">
                <label for="numeroRomano">Numero romano para real</label>
                <input type="text" name="numeroRomano" id="numeroRomano" class="form-control">
                <button type="submit" class="btn A_converterRomano">converter</button>
            </div>
            <hr>
            <div class="input-group">
                <label for="numeroReal">Numero real para romano</label>
                <input type="text" name="numeroReal" id="numeroReal" class="form-control">
                <button type="submit" class="btn A_converterReal">converter</button>
            </div>';
            break;
        case 'romano':
            #API
            if ($post) {
                $total = $hm->numeroRomano($post['numeroRomano']);
                echo '
                <h2>'.$post['numeroRomano'].' convertido para real é : <span>'.$total.'</span></h2>
                <div class="input-group">
                    <button type="submit" class="btn A_converter">Converter outra vez</button>
                </div>';
            }else {
                require_once("view/erro.php");
            }
            break;
        case 'real':
            #API
            if ($post) {
                $total = $hm->numeroReal($post['numeroReal']);
                echo '
                <h2>'.$post['numeroReal'].' convertido para real é : <span>'.$total.'</span></h2>
                <div class="input-group">
                    <button type="submit" class="btn A_converter">Converter outra vez</button>
                </div>';
            }else {
                require_once("view/erro.php");
            }
            break;
        default:
            require_once("view/home.php");
            break;
    }
