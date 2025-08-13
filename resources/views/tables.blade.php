<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Quản lý bàn Billiards</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-6 min-h-screen">

    <h1 class="text-3xl font-bold mb-6 text-center">🎱 Quản lý Bàn Billiards</h1>

    <div class="grid grid-cols-4 gap-4">
        @for($i = 1; $i <= 12; $i++)
            <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center transition hover:scale-105">
            <h2 class="text-lg font-semibold mb-2">Bàn {{ $i }}</h2>
            <p class="text-gray-500 mb-2">Chưa sử dụng</p>
            <button
                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded w-full">
                Bắt đầu
            </button>
    </div>
    @endfor
    </div>

</body>

</html>