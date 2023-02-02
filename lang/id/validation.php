<?php

return [
    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai banyak versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted'        => ':attribute harus diterima.',
    'accepted_if'     => ':attribute harus diterima ketika :other adalah :value.',
    'active_url'      => ':attribute bukan URL yang valid.',
    'after'           => ':attribute harus berisi tanggal setelah :date.',
    'after_or_equal'  => ':attribute harus berisi tanggal setelah atau sama dengan :date.',
    'alpha'           => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'      => ':attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num'       => ':attribute hanya boleh berisi huruf dan angka.',
    'array'           => ':attribute harus berisi sebuah array.',
    'ascii'           => ':attribute hanya boleh berisi sebuah alfanumerik karakter dan simbol.',
    'before'          => ':attribute harus berisi tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berisi tanggal sebelum atau sama dengan :date.',
    'between'         => [
        'numeric' => ':attribute harus bernilai antara :min sampai :max.',
        'file'    => ':attribute harus berukuran antara :min sampai :max kilobita.',
        'string'  => ':attribute harus berisi antara :min sampai :max karakter.',
        'array'   => ':attribute harus memiliki :min sampai :max anggota.',
    ],
    'boolean'           => ':attribute harus bernilai true atau false',
    'confirmed'         => 'Konfirmasi :attribute tidak cocok.',
    'date'              => ':attribute bukan tanggal yang valid.',
    'date_equals'       => ':attribute harus berisi tanggal yang sama dengan :date.',
    'date_format'       => ':attribute tidak cocok dengan format :format.',
    'declined'          => ':attribute harus ditolak.',
    'declined_if'       => ':attribute harus ditolak ketika :other adalah :value.',
    'different'         => ':attribute dan :other harus berbeda.',
    'digits'            => ':attribute harus terdiri dari :digits angka.',
    'digits_between'    => ':attribute harus terdiri dari :min sampai :max angka.',
    'dimensions'        => ':attribute tidak memiliki dimensi gambar yang valid.',
    'distinct'          => ':attribute memiliki nilai yang duplikat.',
    'doesnt_end_with'   => ':attribute tidak boleh diakhiri dengan salah satu dari yang berikut: :values.',
    'doesnt_start_with' => ':attribute tidak boleh dimulai dengan salah satu dari yang berikut: :values.',
    'email'             => ':attribute harus berupa alamat email yang valid.',
    'ends_with'         => ':attribute harus diakhiri salah satu dari berikut: :values',
    'enum'              => ':attribute yang dipilih tidak valid.',
    'exists'            => ':attribute yang dipilih tidak valid.',
    'file'              => ':attribute harus berupa sebuah berkas.',
    'filled'            => ':attribute harus memiliki nilai.',
    'gt'                => [
        'array'   => ':attribute harus memiliki lebih dari :value anggota.',
        'file'    => ':attribute harus berukuran lebih besar dari :value kilobita.',
        'string'  => ':attribute harus berisi lebih besar dari :value karakter.',
        'numeric' => ':attribute harus bernilai lebih besar dari :value.',
    ],
    'gte' => [
        'array'   => ':attribute harus terdiri dari :value anggota atau lebih.',
        'file'    => ':attribute harus berukuran lebih besar dari atau sama dengan :value kilobita.',
        'numeric' => ':attribute harus bernilai lebih besar dari atau sama dengan :value.',
        'string'  => ':attribute harus berisi lebih besar dari atau sama dengan :value karakter.',
    ],
    'image'    => ':attribute harus berupa gambar.',
    'in'       => ':attribute yang dipilih tidak valid.',
    'in_array' => ':attribute tidak ada di dalam :other.',
    'integer'  => ':attribute harus berupa bilangan bulat.',
    'ip'       => ':attribute harus berupa alamat IP yang valid.',
    'ipv4'     => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'     => ':attribute harus berupa alamat IPv6 yang valid.',
    'json'     => ':attribute harus berupa JSON string yang valid.',
    'lt'       => [
        'array'   => ':attribute harus memiliki kurang dari :value anggota.',
        'file'    => ':attribute harus berukuran kurang dari :value kilobita.',
        'numeric' => ':attribute harus bernilai kurang dari :value.',
        'string'  => ':attribute harus berisi kurang dari :value karakter.',
    ],
    'lte' => [
        'array'   => ':attribute harus tidak lebih dari :value anggota.',
        'file'    => ':attribute harus berukuran kurang dari atau sama dengan :value kilobita.',
        'numeric' => ':attribute harus bernilai kurang dari atau sama dengan :value.',
        'string'  => ':attribute harus berisi kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => ':attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array'   => ':attribute maksimal terdiri dari :max anggota.',
        'file'    => ':attribute maksimal berukuran :max kilobita.',
        'numeric' => ':attribute maskimal bernilai :max.',
        'string'  => ':attribute maskimal berisi :max karakter.',
    ],
    'max_digits' => ':attribute tidak boleh lebih dari :max digit.',
    'mimes'      => ':attribute harus berupa berkas berjenis: :values.',
    'mimetypes'  => ':attribute harus berupa berkas berjenis: :values.',
    'min'        => [
        'array'   => ':attribute minimal terdiri dari :min anggota.',
        'file'    => ':attribute minimal berukuran :min kilobita.',
        'numeric' => ':attribute minimal bernilai :min.',
        'string'  => ':attribute minimal berisi :min karakter.',
    ],
    'min_digits'  => ':attribute harus memiliki setidaknya :min digit.',
    'multiple_of' => ':attribute harus merupakan kelipatan dari :value.',
    'not_in'      => ':attribute yang dipilih tidak valid.',
    'not_regex'   => 'Format :attribute tidak valid.',
    'numeric'     => ':attribute harus berupa angka.',
    'password' => [
        'letters'       => ':attribute harus berisi setidaknya satu huruf.',
        'mixed'         => ':attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers'       => ':attribute harus berisi setidaknya satu angka.',
        'symbols'       => ':attribute harus berisi setidaknya satu simbol.',
        'uncompromised' => 'Yang diberikan :attribute telah muncul dalam kebocoran data. Harap pilih :atribut yang berbeda.',
    ],
    'present'              => ':attribute wajib ada.',
    'prohibited'           => 'Kolom :attribute dilarang.',
    'prohibited_if'        => 'Kolom :attribute dilarang jika :other adalah :value.',
    'prohibited_unless'    => 'Kolom :attribute dilarang kecuali :other ada di :values.',
    'prohibits'            => 'Kolom :attribute tidak boleh :other ada.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => ':attribute wajib diisi.',
    'required_array_keys'  => 'Kolom :attribute harus berisi input untuk: :values.',
    'required_if'          => ':attribute wajib diisi bila :other adalah :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless'      => ':attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => ':attribute wajib diisi bila terdapat :values.',
    'required_with_all'    => ':attribute wajib diisi bila terdapat :values.',
    'required_without'     => ':attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => ':attribute wajib diisi bila sama sekali tidak terdapat :values.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':attribute harus berukuran :size.',
        'file'    => ':attribute harus berukuran :size kilobyte.',
        'string'  => ':attribute harus berukuran :size karakter.',
        'array'   => ':attribute harus mengandung :size anggota.',
    ],
    'starts_with' => ':attribute harus diawali salah satu dari berikut: :values',
    'string'      => ':attribute harus berupa string.',
    'timezone'    => ':attribute harus berisi zona waktu yang valid.',
    'unique'      => ':attribute sudah ada sebelumnya.',
    'uploaded'    => ':attribute gagal diunggah.',
    'uppercase'   => ':attribute harus huruf besar.',
    'url'         => 'Format :attribute tidak valid.',
    'ulid'        => ':attribute harus merupakan ULID yang valid.',
    'uuid'        => ':attribute harus merupakan UUID yang valid.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi untuk atribut sesuai keinginan dengan menggunakan 
    | konvensi "attribute.rule" dalam penamaan barisnya. Hal ini mempercepat dalam menentukan
    | baris bahasa kustom yang spesifik untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar 'placeholder' atribut dengan sesuatu yang
    | lebih mudah dimengerti oleh pembaca seperti "Alamat email" daripada "email" saja.
    | Hal ini membantu kita dalam membuat pesan menjadi lebih ekspresif.
    |
    */

    'attributes' => [
        'name'=>'Nama',
        'business_name'=>'Nama Bisnis',
        'email'=> 'Email',
        'phone'=> 'Nomor HP',
        'business_phone'=> 'Nomor Telepon Bisnis',
        'hpEmail'=>'Kolom ini',
        'password'=>'Kata Sandi',
        'current_password'=>'Kata Sandi saat ini',
        'new_password'=>'Kata Sandi Baru',
        'password_confirmation'=>'Konfirmasi Kata Sandi',
        'confirm_password'=>'Konfirmasi Kata Sandi',
    ],
];