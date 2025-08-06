
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>

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

<h1 class="text-3xl font-bold mb-4 ml-24">Edit Document</h1>

<form action="{{ route('documents.update', $document->id) }}" method="POST" class="max-w-md mx-auto p-4 bg-white shadow-md rounded">
    @csrf
    @method('PUT')
    <label for="name" class="block text-sm font-medium text-gray-700">Document Name:</label>
    <input type="text" name="name" value="{{ $document->name }}" class="block w-full p-2 mt-1 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 mb-4">
    <label for="shortname" class="block text-sm font-medium text-gray-700">Short Name:</label>
    <input type="text" name="shortname" value="{{ $document->shortname }}" class="block w-full p-2 mt-1 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
    <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Changes</button>
</form>
</body>
</html>

