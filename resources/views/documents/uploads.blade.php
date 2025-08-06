<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto p-4 mt-10">

    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session()->get('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session()->get('error') }}
        </div>
    @endif

    <h1 class="text-3xl font-bold mb-4">Documents</h1>
        <br>
        <a href="{{ route('all.post') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Dashboard</a>
        <br>
        <br><br>
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="mb-8">
        @csrf
        <input type="file" name="document" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        <br><button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
    </form>
    <table class="w-full table-auto border-collapse border border-gray-400">
        <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-400 px-4 py-2">Name</th>
            <th class="border border-gray-400 px-4 py-2">Short Name</th>
            <th class="border border-gray-400 px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($documents as $document)
            <tr>
                <td class="border border-gray-400 px-4 py-2">{{ $document->name }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $document->shortname }}</td>
                <td class="border border-gray-400 px-4 py-2 flex space-x-2">
                    <a href="{{ route('downloadByShortName', $document->shortname) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Download</a>
                    <a href="{{ route('documents.edit', $document->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                    <form action="{{ route('documents.destroy', $document->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if (session()->has('success'))
        <p class="text-green-500 mt-4">{{ session('success') }}</p>
    @endif
</div>
</body>
</html>

