<?php ?>
<form class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label for="aligned-name">Nama</label>
            <input name="nama" type="text" id="aligned-name" placeholder="" />
            <!-- <span class="pure-form-message-inline">This is a required field.</span> -->
        </div>
        <div class="pure-control-group">
            <label for="tempat_lahir">Tempat tanggal lahir</label>
            <input name="tempat_lahir" type="text" id="tempat_lahir" placeholder="Tempat" /> <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="YYYY/MM/DD" />
            <!-- <span class="pure-form-message-inline">This is a required field.</span> -->
        </div>
        <div class="pure-control-group">
            <label for="aligned-email">No. HP</label>
            <input name="nohp" type="text" id="aligned-email" placeholder="+62" />
        </div>
        <div class="pure-control-group">
            <label for="pendamping">Pendamping</label>
            <select id="select_pendamping" name="pendamping" onchange="pendampingUpdate()">
                <option value="ibu">Ibu</option>
                <option value="ayah">Ayah</option>
                <option value="wali" selected>Wali</option>
            </select>
        </div>
        <div class="pure-control-group">
            <label for="nama_pendamping">Nama <span class="pendamping">Wali</span></label>
            <input name="nama_pendamping" type="text" id="nama_pendamping" placeholder="..." />
        </div>
        <div class="pure-control-group">
            <label for="kerja_pendamping">Pekerjaan <span class="pendamping">Wali</span></label>
            <input name="kerja_pendamping" type="text" id="kerja_pendamping" placeholder="..." />
        </div>
        <div class="pure-control-group">
            <label for="pendidikan_pendamping">Pendidikan <span class="pendamping">Wali</span></label>
            <input name="pendidikan_pendamping" type="text" id="pendidikan_pendamping" placeholder="..." />
        </div>
        <div class="pure-control-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" placeholder="..." ></textarea>
        </div>
        <div class="pure-control-group">
            <label for="aligned-password">Password</label>
            <input type="password" id="aligned-password" placeholder="" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-password">Konfirmasi Password</label>
            <input type="password" id="konfirmasi-password" placeholder="" />
        </div>
        <div class="pure-controls">
            <label for="aligned-cb" class="pure-checkbox">
                <input type="checkbox" id="aligned-cb" /> Dengan ini saya sebagai orang tua/wali murid berjanji akan menaati 
                <a target="_blank" href="<?php echo url; ?>/terms">
                    peraturan Bimbel Cabaca "Kak Lela"
                </a>
            </label>
            <button type="submit" class="pure-button pure-button-primary">Daftar</button>
        </div>
    </fieldset>
</form>
<script type="text/javascript">
    function pendampingUpdate() {
        var p = document.getElementsByClassName('pendamping');
        var s = document.getElementById('select_pendamping');
        var t = s.selectedOptions[0].innerText;
        (new Array(...p)).forEach(e => e.innerText = t);
    }
</script>