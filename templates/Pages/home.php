<header class="poke-nav">
    <div class="poke-item-1">
        <h1>Pokédex</h1>
    </div>
    <div class="poke-item-2">
        <div class="poke-card">
            <img src="<?= $this->Url->build('/img/pokeball.png') ?>" alt="">
            1
        </div>
        <div class="poke-card">
            <div class="poke-icon-vus"></div>
            335
        </div>
    </div>
    <div class="poke-item-3">By Number</div>
</header>
<div class="poke-content">
    <div class="poke-section">
        <div class="poke-visuel">
            <img src="<?= $this->Url->build('/img/yanis.png') ?>" alt="">
        </div>
        <div class="poke-list">
            <table class="table">
                <tbody>
                    <tr href="<?= $this->Url->build('/detail') ?>">
                        <th scope="row"><img src="<?= $this->Url->build('/img/yanis.png') ?>" alt="img"></th>
                        <td class="poke-numero">No. 001</td>
                        <td class="poke-nom">Le Dénis</td>
                        <?php $attrape = 1; ?>
                        <td><?php if($attrape == 1) { ?>
                            <img src="<?= $this->Url->build('/img/pokeball.png') ?>" alt="">
                        <?php } 
                        else { ?>
                            <div class="poke-icon-vus"></div>
                        <?php } ?></td>
                        </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>