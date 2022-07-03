<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="relative overflow-hidden mb-8">
        <div class="rounded-t-lg overflow-hidden border-t border-1 border-r border-gray-400 px-3 py-10 bg-gray-200 flex justify-center">
            <div class="w-full max-w-sm border-indigo-500">
                <form class="bg-gray-300 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="/mahasiswa/update/{{$mahasiswa->id}}">
                @csrf
                @method('put')
                <p class="text-center">Halaman Update Mahasiswa {{$mahasiswa->nama}}</p>
                    <div class="flex flex-col items-start align-top justify-start text-left mb-6 mt-4">
                        <input class="border border-indigo-300 px-2 rounded-lg shadow-sm" type="text" name="nama" placeholder="Nama Anda" value="{{$mahasiswa->nama}}"/>
                    </div>
                    <div class="flex flex-col items-start align-top justify-start text-left mb-6">
                    <div class="flex flex-col items-start align-top justify-start text-left mb-6 mt-4">
                        <input class="border border-indigo-300 px-2 rounded-lg shadow-sm" type="text" name="nim" placeholder="Nim anda"value="{{$mahasiswa->nim}}"/>
                    </div>
                    <div class="flex flex-col items-start align-top justify-start text-left mb-6">
                        <input class="border border-indigo-300 px-2 rounded-lg shadow-sm" type="text" name="tempat_lahir"value="{{$mahasiswa->tempat_lahir}}"placeholder="Tempat Lahir"/>
                    </div>
                    <div class="flex flex-col items-start align-top justify-start text-left mb-6">
                        <label class="block text-sm font-medium text-indigo-700" for="tanggal_lahir">Tanggal Lahir: </label>
                        <input class="border border-indigo-300 px-2 rounded-lg shadow-sm" type="date" name="tanggal_lahir"value="{{$mahasiswa->tanggal_lahir}}"/>
                    </div>
                    <div class="flex flex-col items-start align-top justify-start text-left mb-2,5">
                        <label class="block text-sm font-medium text-indigo-700" for="jenis_kelamin">Jenis Kelamin: </label>
                        <div class="mb-2">
                            <input type="radio" id="perempuan" value="P"name="jenis_kelamin"{{$mahasiswa->jenis_kelamin == 'P'? 'checked':''}}/>
                            <label for="perempuan">Perempuan</label>
                            <input type="radio" id="lakilaki" value="L"name="jenis_kelamin" {{$mahasiswa->jenis_kelamin == 'L'? 'checked':''}}/>
                            <label for="laki_laki">Laki-Laki</label>
                        </div>
                    </div>
                    <div class="flex flex-col items-start align-top justify-start text-left mb-6">
                        <input class="border border-indigo-300 px-2 rounded-lg shadow-sm"type="email" name="email" value="{{$mahasiswa->email}}"placeholder="E-mail Anda">
                    </div>
                    <div class="appearance-none flex flex-col items-start align-top justify-start text-left mb-6">
                        <input class="border border-indigo-300 px-2 rounded-lg shadow-sm" type="number" name="nomor_telpon"value="{{$mahasiswa->no_telpon}}" placeholder="Nomor Telpon"/>
                    </div>
                    <div class="mb-6">
                        <textarea name="alamat" id="alamat" rows="5" class="block p-2,5 text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 w-full" placeholder="Alamat Anda">
                            {{$mahasiswa->alamat}}
                        </textarea>
                    </div>
                    <div class="mb-6">
                        <input class="mb-6 block p-2,5 text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 w-full" type="number"value="{{$mahasiswa->kode_pos}}" placeholder="Kode Pos" name="kode_pos"/>
                    </div>
                    <div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white 
                            font-bold py-2 px-4 border border-blue-700 rounded">
                        Update
                    </button>
                    <button type="reset" class="bg-gray-500 hover:bg-blue-700 text-white 
                            font-bold py-2 px-4 border border-blue-700 rounded">
                        Reset
                    </button>
                    <a  href="/mahasiswa" class="bg-gray-500 hover:bg-blue-700 text-white 
                            font-bold py-2 px-4 border border-blue-700 rounded">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>