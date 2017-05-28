@extends('layout.layout')

@section('content')

<div class="inner cover">
    <!-- Q001 Ada di else -->
    @if (url()->current() == url('/diagnosa/Q0021') || url()->current() == url('/diagnosa/Q0022'))
        <!-- Jika Tidak dan Ya ( Q001 ) -->
        <p class="lead">Apakah laptop anda mengeluarkan suara 'beep' berulang terus menerus saat dinyalakan, tetapi akan berjalan normal ketika anda menekan salah satu tombol keyboard ?</p> <!-- Q002 -->
        <p class="lead">
            <a href="/solution/Q002" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q002 -->
            @if (url()->current() == url('/diagnosa/Q0021'))
                <a href="/diagnosa/Q007" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q007, Jika Q001 'Ya', Jika 'Tidak' ke Q003 -->
            @else
                <a href="/diagnosa/Q003" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q007, Jika Q001 'Ya', Jika 'Tidak' ke Q003 -->
            @endif
        </p>
    @elseif (url()->current() == url('/diagnosa/Q003'))
        <!-- Jika Tidak ( Q001 ), Dan Tidak ( Q002 ) -->
        <p class="lead">Apakah laptop anda seperti menyala, tetapi layar hanya menunjukkan gambar yang sangat samar ?</p> <!-- Q003 -->
        <p class="lead">
            <a href="/solution/Q003" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q003 -->
            <a href="/diagnosa/Q004" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q004 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q004'))
        <!-- Jika Tidak ( Q003 ) -->
        <p class="lead">Apakah laptop anda seperti menyala, tetapi layar tidak menunjukkan apapun ?</p> <!-- Q004 -->
        <p class="lead">
            <a href="/solution/Q004" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q004 -->
            <a href="/diagnosa/Q005" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q005 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q005'))
        <!-- Jika Tidak ( Q004 ) -->
        <p class="lead">Apakah laptop anda tidak menyala sama sekali, dan layar tidak menunjukkan apapun ?</p> <!-- Q005 -->
        <p class="lead">
            <a href="/solution/Q005" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q005 -->
            <a href="/diagnosa/Q006" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q006 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q006'))
        <!-- Jika Tidak ( Q005 ) -->
        <p class="lead">Apakah selang beberapa detik setelah laptop menyala, laptop melakukan restart dengan sendiri nya, terus seperti ini sampai anda melakukan hard shutdown ?</p> <!-- Q006 -->
        <p class="lead">
            <a href="/solution/Q006" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q006 -->
            <a href="/diagnosa/Q001" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q001 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q007'))
        <!-- Jika Ya ( Q001 ), Dan Tidak ( Q002 ) -->
        <p class="lead">Apakah laptop anda mengeluarkan suara aneh seperti suara bising / berderak saat menyala ?</p> <!-- Q007 -->
        <p class="lead">
            <a href="/solution/Q007" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q007 -->
            <a href="/diagnosa/Q008" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q008 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q008'))
        <!-- Jika Tidak ( Q007 ) -->
        <p class="lead">Apakah setelah beberapa menit menyala, laptop anda tiba2 hang / mati dengan sendirinya dan terasa panas dibagian bawah laptop ?</p> <!-- Q008 -->
        <p class="lead">
            <a href="/solution/Q008" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q008 -->
            <a href="/diagnosa/Q009" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q009 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q009'))
        <!-- Jika Tidak ( Q008 ) -->
        <p class="lead">Apakah setelah beberapa menit menyala, layar laptop anda tiba2 gelap, tetapi laptop masih berfungsi dengan benar ?</p> <!-- Q009 -->
        <p class="lead">
            <a href="/solution/Q009" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q009 -->
            <a href="/diagnosa/Q0010" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q0010 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q0010'))
        <!-- Jika Tidak ( Q009 ) -->
        <p class="lead">Apakah setelah menyala, layar laptop anda memiliki gambar yang buruk / kacau ?</p> <!-- Q0010 -->
        <p class="lead">
            <a href="/solution/Q0010" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q0010 -->
            <a href="/diagnosa/Q0011" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q0011 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q0011'))
        <!-- Jika Tidak ( Q0010 ) -->
        <p class="lead">Apakah beberapa keyboard laptop anda tidak berfungsi sama sekali ?</p> <!-- Q0011 -->
        <p class="lead">
            <a href="/solution/Q0011" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q0011 -->
            <a href="/diagnosa/Q0012" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q0012 -->
        </p>
    @elseif (url()->current() == url('/diagnosa/Q0012'))
        <!-- Jika Tidak ( Q0011 ) -->
        <p class="lead">Apakah anda pernah menumpahkan minuman / cairan ke laptop anda ?</p> <!-- Q0012 -->
        <p class="lead">
            <a href="/solution/Q0012" class="btn btn-lg btn-default">Ya</a> <!-- Pergi ke Solusi Q0012 -->
            <a href="/diagnosa/R" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke R -->
        </p>
    @elseif (url()->current() == url('/diagnosa/R'))
        <!-- Jika Tidak ( Q0012 ) -->
        <p class="lead">Untuk saat ini kerusakan laptop anda masih belum dapat kami tangani, kami mohon maaf sebesar-besarnya</p> <!-- R -->
        <p class="lead">
            <a href="/diagnosa/Q001" class="btn btn-lg btn-default">Mulai Pertanyaan Dari Awal ?</a> <!-- Pergi Diag Page -->
            <a href="/about" class="btn btn-lg btn-default">About Us</a> <!-- Pergi ke About Page -->
        </p>
    @else
        <p class="lead">Apakah laptop anda bisa menyala ?</p> <!-- Q001 -->
        <p class="lead">
            @if (url()->previous() == url('/diagnosa/Q006'))
                <a href="/diagnosa/Q007" class="btn btn-lg btn-default">Ya</a><!-- Jika dari Q006, Pergi ke Q007, Jika Tidak, Pergi ke Q002 -->
            @else
                <a href="/diagnosa/Q0021" class="btn btn-lg btn-default">Ya</a> <!-- Jika dari Q006, Pergi ke Q007, Jika Tidak, Pergi ke Q002 -->
            @endif
            <a href="/diagnosa/Q0022" class="btn btn-lg btn-default">Tidak</a> <!-- Pergi ke Q002 -->
        </p>
    @endif
</div>

@endsection
