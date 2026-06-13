@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-8 px-4">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">Users</h1>
            <a href="{{ route('sumin.users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Create User</a>
        </div>

        @if (session('success'))
            <div class="mb-4 text-sm text-green-600">{{ session('success') }}</div>
        @endif

        <div class="bg-white shadow rounded overflow-hidden rounded-3xl">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created
                            at</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->getKey() }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                @if ($user->role === 'superadmin')
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 border border-blue-100">Super
                                        Admin</span>
                                @elseif($user->role === 'admin')
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700 border border-emerald-100">Admin</span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-slate-50 text-slate-700 border border-slate-100">User</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->created_at }}</td>
                            <td class="px-6 py-4 text-sm text-right">
                                <a href="{{ route('sumin.users.show', $user) }}"
                                    class="text-blue-600 hover:underline mr-3">View</a>
                                <a href="{{ route('sumin.users.edit', $user) }}"
                                    class="text-indigo-600 hover:underline mr-3">Edit</a>
                                <form action="{{ route('sumin.users.destroy', $user) }}" method="POST" class="inline-block"
                                    onsubmit="return confirm('Delete user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
@endsection
