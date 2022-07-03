<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-300">
    <div  class="flex flex-col items-center align-top justify-center text-center w-screen h-screen">
        <div class="border shadow-lg bg-red-400 m-10">
            <h1>
                Halaman Mahasiswa
            </h1>
            <p>klik <a href="campus">"Kampus"</a>untuk ke halaman kampus</p>
            <p>klik <a href="formpendaftaran">"Daftar"</a>untuk ke halaman pendaftaran</p>
        </div>
        <div class="">
            <table>
                <thead>
                    <tr>
                        <th class="border border-black">Nama</th>
                        <th class="border border-black">Jenis Kelamin</th>
                        <th class="border border-black">No Telpon</th>
                        <th class="border border-black">E-mail</th>
                        <th class="border border-black">Tempat Lahir</th>
                        <th class="border border-black">Nim</th>
                        <th class="border border-black">Alamat</th>
                        <th class="border border-black">Tanggal lahir</th>
                        <th class="border border-black">Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswa as $item)
                    <tr>
                        <td class="border border-black">{{$item->nama}}</td>
                        <td class="border border-black">{{$item->jenis_kelamin}}</td>
                        <td class="border border-black">{{$item->no_telpon}}</td>
                        <td class="border border-black">{{$item->email}}</td>
                        <td class="border border-black">{{$item->tempat_lahir}}</td>
                        <td class="border border-black">{{$item->nim}}</td>
                        <td class="border border-black">{{$item->alamat}}</td>
                        <td class="border border-black">{{$item->tanggal_lahir}}</td>
                        <td class="border border-black">
                            <a href="mahasiswa/edit/{{$item->id}}">Edit</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td
                            colspan="12" class="border border-black">
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>