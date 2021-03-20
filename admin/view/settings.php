<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Ayarlar
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action="" method="post" class="form label">
            <ul>
                <li>
                    <label for="title">Site Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[title]" value="<?= setting('title') ?>">
                    </div>
                </li>
                <li>
                    <label for="title">Site Decription</label>
                    <div class="form-content">
                        <input type="text" name="settings[decsription]" value="<?= setting('decsription') ?>">
                    </div>
                </li>
                <li>
                    <label for="title">Site Keywords</label>
                    <div class="form-content">
                        <input type="text" name="settings[keywords]" value="<?= setting('keywords') ?>">
                    </div>
                </li>
                <li>
                    <label for="title">Site Teması </label>
                    <div class="form-content">
                        <select name="settings[theme]">
                            <option value="">-Tema Seç-</option>
                            <?php foreach ($themes as $theme): ?>
                                <option <?= setting('theme ') == $theme ? 'selected' : null ?>
                                        value="<?= $theme ?>"><?= $theme ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </li>
            </ul>
            <h1>Bakım Modu Ayarları</h1>
            <ul>
                <li>
                    <label for="title">Bakım Modu</label>
                    <div class="form-content">
                        <select name="settings[maintenance_mode]">
                            <option <?= setting('maintenance_mode') == 1 ? 'selected' : null ?> value="2">Hayır</option>
                            <option <?= setting('meintenance_mode') == 2 ? 'selected' : null ?> value="1">Evet</option>
                        </select>
                    </div>
                </li>
                <li>
                    <label >Bakım Modu Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[meintenance_mode_title]" value="<?= setting('meintenance_mode_title') ?>">
                    </div>
                </li>
                <li>
                    <label >Bakım Modu Açıklama</label>
                    <div class="form-content">
                        <textarea name="settings[meintenance_mode_description]"cols="30" rows="5"><?= setting('meintenance_mode_description') ?></textarea>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="submit">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit">Save Changes</button>
                </li>
            </ul>
        </form>
    </div>

<?php require admin_view('static/footer') ?>