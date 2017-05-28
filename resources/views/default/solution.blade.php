@extends('layout.layout')

@section('content')

<div class="inner cover">
    @if (url()->current() == url('solution/Q002'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah laptop anda mengeluarkan suara 'beep' berulang terus menerus saat dinyalakan, tetapi akan berjalan normal ketika anda menekan salah satu tombol keyboard ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4><p class="text-left">Kemungkinan besar itu terjadi karena ada tombol terjebak pada keyboard. Dalam hal ini Anda harus mengganti keyboard.</p></h4>
    @elseif (url()->current() == url('solution/Q003') || url()->current() == url('solution/Q009'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        @if (url()->current() == url('solution/Q003'))
            <h4><p class="text-left">Apakah laptop anda seperti menyala, tetapi layar hanya menunjukkan gambar yang sangat samar ?</p></h4>
        @else
            <h4><p class="text-left">Apakah setelah beberapa menit menyala, layar laptop anda tiba2 gelap, tetapi laptop masih berfungsi dengan benar ?</p></h4>
        @endif
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4><p class="text-left">Kemungkinan besar itu baik inverter layar atau lampu layar backlight (CCFL) rusak. Keduanya jika rusak sangat mirip dan menyebabkan cahaya layar redup.
        <br><br> Untuk trobuleshoot jenis kegagalan secara efektif, Anda memerlukan beberapa suku cadang: baik inverter kerja baru atau lampu backlight yang dikenal masih baik.</p></h4>
    @elseif (url()->current() == url('solution/Q004'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah laptop anda seperti menyala, tetapi layar tidak menunjukkan apapun ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4>
            <ol class="text-left">
                <li>Masalah mungkin disebabkan karena kegagalan memori. Modul memori gagal dan laptop tidak menyala karena itu. Dalam hal ini Anda dapat mencoba reseting modul memori untuk memastikan kontak yang baik dengan slot. Anda dapat mencoba melepas modul memori satu per satu dan menguji laptop dengan hanya satu modul memori yang terpasang. Anda dapat mencoba mengganti modul memori dengan modul baru.</li>
                <br><br>
                <li>Jika reseting / mengganti modul memori tidak membantu, coba lepas hard drive, DVD drive, modem, kartu wireless, keyboard, dll. Dengan kata lain, bongkar laptop dan hanya terpasang peralatan minimal dan uji lagi. Jika laptop masih tidak menyala, kemungkinan besar kegagalan motherboard atau prosesor.</li>
            </ol>
        </h4>
    @elseif (url()->current() == url('solution/Q005'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah laptop anda tidak menyala sama sekali, dan layar tidak menunjukkan apapun ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4>
            <ol class="text-left">
                <li>AC adaptor gagal dan baterai habis sepenuhnya. Pertama-tama, uji AC adaptor. Jika memang mati, ganti adaptor.</li>
                <br><br>
                <li>DC jack terlepas dari motherboard (atau DC jack rusak) dan laptop tidak memperoleh daya listrik dari adaptor AC. Dalam hal ini jack DC harus diganti.</li>
                <br><br>
                <li>Motherboard Laptop rusak. Jika itu terjadi, kemungkinan besar laptop tidak layak diperbaiki.</li>
            </ol>
        </h4>
    @elseif (url()->current() == url('solution/Q006'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah selang beberapa detik setelah laptop menyala, laptop melakukan restart dengan sendiri nya, terus seperti ini sampai anda melakukan hard shutdown ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4>
            <ol class="text-left">
                <li>Kemungkinan besar hal itu terjadi karena beberapa jenis kegagalan motherboard. Anda dapat mencoba reseating / mengganti memori seperti yang saya jelaskan di masalah</li>
                <br><br>
                <li>Jika tidak membantu, berarti  kerusakan motherboard. Dalam kebanyakan kasus, sangat sulit mengganti motherboard, lebih baik membeli laptop baru.</li>
            </ol>
        </h4>
    @elseif (url()->current() == url('solution/Q007'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah laptop anda mengeluarkan suara aneh seperti suara bising / berderak saat menyala ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4><p class="text-left">Dalam kebanyakan kasus kebisingan ini berasal dari kipas pendingin atau hard drive laptop. Jika laptop membuat kebisingan ketika kipas pendingin mulai berjalan, kemungkinan besar rusak. Pasang kembali kipas pendingin.
        <br><br>Jika laptop membuat suara bahkan ketika kipas tidak berputar, mungkin itu berasal dari hard drive. Back up semua data pribadi dari hard drive sesegera mungkin, kerusakan total dapat terjadi setiap saat. Pasang kembali hard drive.</p></h4>
    @elseif (url()->current() == url('solution/Q008'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah setelah beberapa menit menyala, laptop anda tiba2 hang / mati dengan sendirinya dan terasa panas dibagian bawah laptop ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4><p class="text-left">Kemungkinan besar ini adalah masalah panas processor. Hal ini terjadi karena modul pendingin tersumbat dengan debu dan laptop tidak bisa “bernafas” dengan benar. Laptop dimatikan atau macet karena prosesor (CPU) terlalu panas. Bersihkan kipas pendingin dan heatsink untuk memperbaiki masalah.</p></h4>
    @elseif (url()->current() == url('solution/Q0010'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah setelah menyala, layar laptop anda memiliki gambar yang buruk / kacau ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4>
            <ol class="text-left">
                <li>Uji laptop Anda dengan output gambar pada monitor eksternal. Jika Anda melihat masalah yang sama pada layar eksternal, kemungkinan besar ini adalah kegagalan kartu grafis.</li>
                <br><br>
                <li>Jika masalah hanya muncul di layar laptop, dapat dikaitkan dengan salah satu dari berikut: koneksi yang buruk antara kabel video dan motherboard atau layar LCD atau kabel video gagal atau layar LCD gagal.</li>
            </ol>
        </h4>
    @elseif (url()->current() == url('solution/Q0011'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah beberapa keyboard laptop anda tidak berfungsi sama sekali ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4><p class="text-left">Kemungkinan besar beberapa tombol keyboard gagal. Keyboard laptop tidak dapat diperbaiki. Jika beberapa tombol berhenti bekerja, Anda harus mengganti keyboard.</p></h4>
    @elseif (url()->current() == url('solution/Q0012'))
        <h5><p class="text-left" style="color: #34b0fc;">Pertanyaan :</p></h5>
        <h4><p class="text-left">Apakah anda pernah menumpahkan minuman / cairan ke laptop anda ?</p></h4>
        <hr>

        <h5><p class="text-left" style="color: #34b0fc;">Kemungkinan Penyebab dan Solusi Cara Memperbaikinya :</p></h5>
        <h4><p class="text-left">Tumpahan cairan yang sangat berbahaya dan tak terduga. Jika itu terjadi, matikan laptop, keluarkan baterai dan jangan menggunakannya sampai semua bagian internal diperiksa dari kerusakan cair.</p></h4>
    @endif
        <hr>
        <p class="lead">
          <a href="/diagnosa/Q001" class="btn btn-lg btn-default">Mulai Pertanyaan Lagi ?</a> <!-- Pergi Diag Page -->
          <a href="/about" class="btn btn-lg btn-default">About Us</a> <!-- Pergi ke About Page -->
        </p>
</div>

@endsection
