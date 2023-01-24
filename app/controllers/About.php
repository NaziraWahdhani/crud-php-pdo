<?php

    class About{
        public function index($nama = 'Nazira', $pekerjaan = 'Murid')
        {
            echo "Halo, nama saya $nama, saya seorang $pekerjaan";
        }
        public function page()
        {
            echo 'About/page';
        }
    }